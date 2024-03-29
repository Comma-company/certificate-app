<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Http\Controllers\Api\StatusController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\CountryController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\SettingController;
use App\Http\Controllers\Api\SubscriptionController;
use App\Http\Controllers\Api\CustomerController;
use App\Http\Controllers\Api\SiteController;
use App\Http\Controllers\Api\Auth\AuthController;
use App\Http\Controllers\Api\Auth\PasswordResetLinkController;
use App\Http\Controllers\Api\SignatureController;
use App\Http\Controllers\Api\TaxSettingController;
use App\Http\Controllers\Api\CertificateController;
use App\Http\Controllers\Api\PaymentTermController;
use App\Http\Controllers\Api\SiteContactController;
use App\Http\Controllers\Api\BusinessTypeController;
use App\Http\Controllers\Api\FormTemplateController;
use App\Http\Controllers\Api\Auth\RegisterController;
use App\Http\Controllers\Api\CertificateAttachmentController;
use App\Http\Controllers\Api\CertificateImageController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::post('/email/verification-notification', [AuthController::class, 'ResendingVerificationEmail'])->middleware('auth:sanctum');
Route::post('/register', [RegisterController::class, 'store']);
Route::post('/rest-password', [PasswordResetLinkController::class, 'store']);

Route::delete('user/delete', [ProfileController::class, 'destroy']);

Route::post('user-restore/{id}', [AuthController::class, 'restore'])
->middleware(['signed'])
->name('api.restore.user');

Route::get('/business-type', [BusinessTypeController::class, 'index']);
Route::get('/status', [StatusController::class, 'index']);

Route::middleware(['auth:sanctum','verified'])->group(function () {
    Route::post('complete-register', [RegisterController::class, 'completeRegister']);
    Route::post('complete-infos',[RegisterController::class,'completeInfoRegister']);
    Route::get('countries', [CountryController::class, 'index'])->middleware('auth:sanctum');
    Route::get('getTrialDetails',[HomeController::class,'getTrialDetails'])->middleware('auth:sanctum');

    Route::get('payment-terms', [PaymentTermController::class, 'index'])->middleware('auth:sanctum');

    Route::get('search', [HomeController::class, 'search'])->middleware('auth:sanctum');
    // customer routes
    Route::middleware('auth')->group(function () {

    Route::get('customers/get', [CustomerController::class, 'index'])->name('customers.get');
    Route::get('/all-customers-sites',[CustomerController::class,'getAllCustomerSites']);
    Route::get('customers/{id}/customer', [CustomerController::class, 'show'])->name('customers.details');
    Route::get('customers/{id}', [CustomerController::class, 'showAddress'])->name('customers.address');
    Route::post('customers/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('search/postal', [CustomerController::class, 'searchPost']);
    Route::get('multi-search', [CustomerController::class, 'multiSearch']);
    Route::post('site-contact/create', [SiteContactController::class, 'store']);
    Route::put('site-contact/{site_id}/update', [SiteContactController::class, 'update']);

    Route::post('contact/{customer_id}', [ContactController::class, 'store']);
    Route::post('contact/create', [ContactController::class, 'store']);

    // Form Template

    Route::get('forms/templates', [FormTemplateController::class, 'index'])->middleware(['auth:sanctum','user.subscribe'])->name('template');
    Route::post('forms/templates/store', [FormTemplateController::class, 'store'])->middleware(['auth:sanctum','user.subscribe']);
    Route::get('forms/templates/{id}/show', [FormTemplateController::class, 'show'])->middleware(['auth:sanctum','user.subscribe']);
    Route::put('forms/templates/{id}/update', [FormTemplateController::class, 'update'])->middleware(['auth:sanctum','user.subscribe']);
    Route::post('forms/templates/{id}/make-default', [FormTemplateController::class, 'makeDefault'])->middleware(['auth:sanctum','user.subscribe']);
    Route::delete('forms/templates/{id}/delete', [FormTemplateController::class, 'destroy'])->middleware(['auth:sanctum','user.subscribe']);
     //signature
   Route::apiResource('signature', SignatureController::class)->middleware('auth:sanctum');
  });
    //profile
    Route::get('profile', [ProfileController::class, 'index'])->middleware('auth:sanctum');
    Route::get('profile/other-data', [ProfileController::class, 'otherData'])->middleware('auth:sanctum');
    Route::put('profile/update', [ProfileController::class, 'update'])->middleware('auth:sanctum');
    Route::post('profile/update-image', [ProfileController::class, 'updateImage'])->middleware('auth:sanctum');
    Route::post('profile/update-logo', [ProfileController::class, 'updateLogo'])->middleware('auth:sanctum');
    Route::put('profile/update-password', [ProfileController::class, 'updatePassword'])->middleware('auth:sanctum');
    Route::put('profile/change-address', [ProfileController::class, 'updateAddress']);

   
    //settings
    Route::prefix('setting')->group(function () {
        Route::get('tax-setting', [TaxSettingController::class, 'index']);
        Route::put('tax-setting/{id}/change-default', [TaxSettingController::class, 'changeDefault']);
    });
    // subscription
    Route::post('create-customer', [SubscriptionController::class, 'createCustomer']);
    Route::get('/show-plans',[SubscriptionController::class,'showPlans']);
    Route::get('/urlPlans',[SubscriptionController::class,'urlPlans'])->middleware('auth:sanctum');
    Route::get('/show-interval-plans',[SubscriptionController::class,'showIntervalPlans']);
    Route::post('/subscriptions', [SubscriptionController::class,'processSubscription']);
    Route::post('/createToken',[SubscriptionController::class,'createToken']);
    Route::post('/cancel-subscription/{subscriptionId}',[SubscriptionController::class,'cancelSubscription']);
    Route::post('/resume-subscription/{subscriptionId}',[SubscriptionController::class,'resumeSub']);
    Route::post('/cancel/{subscriptionId}',[SubscriptionController::class, 'cancel'])->middleware('auth:sanctum');
    Route::get('/show-user-subscription',[SubscriptionController::class,'showUserSubscription'])->middleware('auth:sanctum');
    Route::post('/subscriptions/{subscriptionId}/change-plan/{newPlanId}', [SubscriptionController::class, 'changeSubscriptionPlan'])->middleware('auth:sanctum');
    //Route::post('/resume/{plan}',[SubscriptionController::class, 'resume']);
   // Route::post('/change-subscription',[SubscriptionController::class, 'changeSubscription']);


    Route::middleware('user.subscribe')->group(function () {
    Route::post('/subscription/change',[SubscriptionController::class, 'changeSubscription']);
    
    });
    Route::prefix('certificates')->group(function () {
    Route::get('/', [CertificateController::class, 'index'])->middleware('auth:sanctum');
        Route::get('complete', [CertificateController::class, 'completeCertificate'])->middleware('auth:sanctum');
        Route::get('uncompleted', [CertificateController::class, 'uncompletedCertificate'])->middleware('auth:sanctum');
        Route::get('count', [CertificateController::class, 'certificateCount'])->middleware('auth:sanctum');
        Route::get('{id}/view', [CertificateController::class, 'view'])->middleware('auth:sanctum');
        Route::get('{id}/pdf', [CertificateController::class, 'getPdfForm'])->middleware('auth:sanctum');


});
    Route::prefix('certificates')->group(function () {
        
        Route::post('create', [CertificateController::class, 'store'])->middleware('auth:sanctum');
        Route::post('{id}/notes/create', [CertificateController::class, 'storeNote'])->middleware('auth:sanctum');
        Route::post('{note_id}/notes/update', [CertificateController::class, 'updateNote'])->middleware('auth:sanctum');
        Route::post('{id}/files/{file_id}/delete', [CertificateController::class, 'deleteFileImage'])->middleware('auth:sanctum'); 
        Route::post('{id}/notes/delete',[CertificateController::class,'deleteNote'])->middleware('auth:sanctum');
        Route::post('{id}/update', [CertificateController::class, 'update'])->middleware('auth:sanctum');
        Route::post('{id}/update-status', [CertificateController::class, 'updateStatus'])->middleware('auth:sanctum');
        Route::post('send-email/{certificate_id}',[CertificateController::class,'sendEmail']);
        //Route::get('form-data/invoice', [FormDataController::class, 'invoice'])->middleware('auth:sanctum');
        Route::get('{id}/get-attachments',[CertificateAttachmentController::class, 'get'])->middleware('auth:sanctum');
        Route::post('create/attachment',[CertificateAttachmentController::class, 'store'])->middleware('auth:sanctum');
        Route::post('delete/{id}/attachment',[CertificateAttachmentController::class, 'destroy'])->middleware('auth:sanctum');
        Route::post('attachment/{id}/update',[CertificateAttachmentController::class,'update'])->middleware('auth:sanctum');
    });
    Route::post('store-image',[CertificateImageController::class,'store'])->middleware('auth:sanctum');
    Route::post('delete-image/{id}',[CertificateImageController::class,'deleteImage'])->middleware('auth:sanctum');
    //sites
    Route::post('/create-sites', [SiteController::class, 'store'])->middleware('auth:sanctum');


});
