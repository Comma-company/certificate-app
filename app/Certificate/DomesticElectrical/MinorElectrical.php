<?php

namespace App\Certificate\DomesticElectrical;

use App\Models\CertificateAttachment;
use App\Models\CertificateImage;
use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Output\Output;

class MinorElectrical
{
    public static function createPdf($certificate)
    {
        define('_MPDF_TTFONTPATH', asset('admin/fonts/gnu-free-font'));

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        //   $invoice = new Mpdf(['orientation' => 'L']);
        $certificate_pdf =  new Mpdf([
            'orientation' => 'L',
            'fontDir' => array_merge($fontDirs, [
                asset('admin/fonts/'),
            ]),
            'fontdata' => $fontData + [
                'FreeSans' => [
                    'R' => "FreeSans.ttf",
                    'I' => "FreeSansOblique.ttf",
                ],
            ],
            'default_font' => 'FreeSans',
            'format' => 'A4'
        ]);
        /* $invoice->AddPage('P'); */
        $certificate_pdf->shrink_tables_to_fit = 1;
        $certificate_pdf->use_kwt = true;
        $cert_attachments = CertificateAttachment::where([
            'certificate_id'=> $certificate->id,
        ])->where('exclude', '!=', 'yes')->get();
        $data = $certificate;


        $formData =  $data->data;

        $certificate_pdf->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];


        $html = view('dashboard.form.template.domestic_electrical.Minor_Electrical.index', [
            'data' => $data,
            'formData' =>   $formData,
            'cert_attachments' =>$cert_attachments
        ])->render();

        $certificate_pdf->WriteHTML($html);

        $certificate_pdf->AddPage('L');
        $page_2 = view('dashboard.form.template.domestic_electrical.Minor_Electrical.note', [
            'data' => $certificate,
            'formData' => $formData
        ])->render();
        $certificate_pdf->WriteHTML($page_2);
        return $certificate_pdf;
    }


    public static function getPdf($certificate)
    {
        $file = Self::createPdf($certificate);
        //dd($file);
        $fileName = "C$certificate->id.pdf";
        $file_path =  public_path("uploads/certificate/" . $fileName);

        Storage::disk('uploads')->makeDirectory('certificate');
        if (Storage::disk('uploads')->exists('certificate/' . $fileName)) {

            Storage::disk('uploads')->delete('certificate/' . $fileName);
            $file->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        } else {

            $file->Output($file_path, 'F');
            return responseJson(true, 'pdf file for certificate', [
                'url' => asset('uploads/certificate/' . $fileName)
            ]);
        }
    }

    public static function stringCode($certificate)
    {
        $file = Self::createPdf($certificate);
        $fileName = "C$certificate->id.pdf";
        return $file->Output($fileName, 's');
    }

    public static function openPdf($certificate)
    {
        $file = Self::createPdf($certificate);
        $fileName = "C$certificate->id.pdf";
        $file->Output($fileName,'I');
    }
}
