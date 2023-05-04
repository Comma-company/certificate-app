<?php

use App\Certificate\DomesticElectrical\ElectricalDangerNotification;
use App\Certificate\DomesticElectrical\PortableApplianceTesting;
use App\Certificate\DomesticGas\LandlordHomeownerGasSafetyRecord;
use App\Certificate\DomesticGas\WarningNoticeGas;
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

    $data = Certificate::find(5);

    $form = ElectricalDangerNotification::getPdf($data);

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
