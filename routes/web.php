<?php

use Mpdf\Mpdf;
use App\Models\Certificate;
use Mpdf\Config\FontVariables;
use Mpdf\Config\ConfigVariables;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/get-pdf', function () {
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
    $invoice->shrink_tables_to_fit = 1;

    $data = Certificate::find(4);

    $formData =  data_get($data->data, 'gaz_safety_data.0');

    $invoice->fontdata["fontawesome"] = [
        'R' => "fa-solid-900.tff",
        'I' => "fa-regular-400.ttf",
    ];


    $html = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.index', [
        'data' => $data,
        'formData' => $formData
    ])->render();

    $invoice->WriteHTML($html);

    $invoice->AddPage('L');
    $page_2 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page2', [
        'data' => $data,
        'formData' => $formData
    ])->render();
    $invoice->WriteHTML($page_2);

    $invoice->AddPage('L');
    $page_3 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page3', [
        'data' => $data,
        'formData' => $formData
    ])->render();
    $invoice->WriteHTML($page_3);

    $invoice->AddPage('L');
    $page_4 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page4', [
        'data' => $data,
        'formData' => $formData
    ])->render();
    $invoice->WriteHTML($page_4);

    $invoice->AddPage('L');
    $page_5 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page5', [
        'data' => $data,
        'formData' => $formData
    ])->render();
    $invoice->WriteHTML($page_5);
    $invoice->AddPage('L');
    $page_6 = view('dashboard.form.template.domestic_electrical.Domestic_Electrical_installation_Condition_report.page6', [
        'data' => $data,
        'formData' => $formData
    ])->render();

    $invoice->WriteHTML($page_6);
    $fileName = "form_$data->id.pdf";
    $file_path =  public_path("uploads/certificate/" . $fileName);
    $invoice->Output();

    Storage::disk('uploads')->makeDirectory('certificate');
    if (Storage::disk('uploads')->exists('certificate/' . $fileName)) {

        Storage::disk('uploads')->delete('certificate/' . $fileName);
        $invoice->Output($file_path, 'F');
        return responseJson(true, 'pdf file for certificate', [
            'url' => asset('uploads/certificate/' . $fileName)
        ]);
    } else {

        $invoice->Output($file_path, 'F');
        return responseJson(true, 'pdf file for certificate', [
            'url' => asset('uploads/certificate/' . $fileName)
        ]);
    }
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
