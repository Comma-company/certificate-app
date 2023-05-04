<?php
namespace App\Certificate\DomesticElectrical;
use Mpdf\Mpdf;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Output\Output;


class ElectricalDangerNotification{
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

         $formData =  $data->data;

        $invoice->fontdata["fontawesome"] = [
            'R' => "fa-solid-900.tff",
            'I' => "fa-regular-400.ttf",
        ];


        $html = view('dashboard.form.template.domestic_electrical.Electrical_Danger_Notification.index', [
            'data' => $data,
            'formData' =>   $formData
        ])->render();

        $invoice->WriteHTML($html);

        $invoice->Output();

    }
}
