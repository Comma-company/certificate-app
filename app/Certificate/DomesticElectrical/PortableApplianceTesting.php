<?php

namespace App\Certificate\DomesticElectrical;
use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Output\Output;

class PortableApplianceTesting{
    public static function getPdf($certificate)
    {
        define('_MPDF_TTFONTPATH', asset('admin/fonts/gnu-free-font'));

        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        //   $invoice = new Mpdf(['orientation' => 'L']);
        $invoice =  new Mpdf([
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
        $invoice->shrink_tables_to_fit = 1;
        $invoice->use_kwt = true;
        $data = $certificate;

        // $formData =  $data->data;

        $invoice->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];


        $html = view('dashboard.form.template.domestic_electrical.Portable_Appliance_Testing.index', [
            'data' => $data,
            'formData' => []
        ])->render();

        $invoice->WriteHTML($html);

        $invoice->Output();

        // $fileName = "C$data->id.pdf";
        // $file_path =  public_path("uploads/certificate/" . $fileName);
        // Storage::disk('uploads')->makeDirectory('certificate');
        // if (Storage::disk('uploads')->exists('certificate/' . $fileName)) {
        //     Storage::disk('uploads')->delete('certificate/' . $fileName);
        //     $invoice->Output($file_path, 'F');
        //     return responseJson(true, 'pdf file for certificate', [
        //         'url' => asset('uploads/certificate/' . $fileName)
        //     ]);
        // } else {
        //     $invoice->Output($file_path, 'F');
        //     return responseJson(true, 'pdf file for certificate', [
        //         'url' => asset('uploads/certificate/' . $fileName)
        //     ]);
        // }
        //return $invoice->Output();
    }
}
