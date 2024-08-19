<?php

use App\Http\Controllers\Ar11Controller;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CheckInvitationController;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\I130Controller;
use App\Http\Controllers\I765Controller;
use App\Http\Controllers\InvitationController;
use App\Http\Controllers\roleController;
use App\Http\Controllers\SubscriptionStripeController;
use App\Http\Controllers\StripeController;
use App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something grea,'translate't!
|
*/

Route::get('/lang/{language}', function ($language) {
    Session::put('language',$language);
    return redirect()->back();
})->name('language');

Route::get('/', function () {
    return redirect()->route('login');
});

Auth::routes();

Route::get('/index', [App\Http\Controllers\IndexController::class, 'index'])->name('index')->middleware('user','fireauth','translate');

// Route::get('/home/customer', [App\Http\Controllers\IndexController::class, 'customer'])->middleware('user','fireauth','translate');

Route::get('/email/verify', [App\Http\Controllers\Auth\ResetController::class, 'verify_email'])->name('verify')->middleware('fireauth','translate');

Route::get('login/{provider}/callback', [App\Http\Controllers\Auth\LoginController::class, 'handleCallback']);

Route::resource('/index/profile', App\Http\Controllers\Auth\ProfileController::class)->middleware('user','fireauth','translate');

Route::resource('/password/reset', App\Http\Controllers\Auth\ResetController::class);

//Roles con Spatie
Route::resource('/roles', roleController::class)->names('roles');
/*-------*/

Route::resource('/users', UsersController::class)->names('users');
Route::resource('/invitation', InvitationController::class)->names('invitation');
Route::get('/check-invitation', [CheckInvitationController::class, 'check']);
Route::post('/check-invitation/email', [CheckInvitationController::class, 'mailChecking'])->name('mail-checking');
Route::post('/register-invitation/newuser', [CheckInvitationController::class, 'register'])->name('newuser-register');
Route::resource('/ar11-form', Ar11Controller::class)->names('ar-11');
Route::get('/download-empty-ar11-form', [FormsController::class, 'downloadEmptyAr11'])->name('download-empty-arr-11');
Route::get('/download-filled-ar11-form/{form_id}', [FormsController::class, 'downloadFilledAr11'])->name('download-filled-arr-11');
Route::resource('/i130-form', I130Controller::class)->names('i130');
Route::get('/download-empty-i130-form', [FormsController::class, 'downloadEmptyI130'])->name('download-empty-i130');
Route::get('/download-filled-i130-form/{form_id}', [FormsController::class, 'downloadFilledI130'])->name('download-filled-i130');
Route::resource('/i765-form', I765Controller::class)->names('i765');
Route::get('/download-empty-i765-form', [FormsController::class, 'downloadEmptyI765'])->name('download-empty-i765');
Route::get('/download-filled-i765-form/{form_id}', [FormsController::class, 'downloadFilledI765'])->name('download-filled-i765');


/*STRIPE*/
Route::get('subscription', [StripeController::class, 'index'])->name('subscription')->middleware('user','fireauth','translate');

Route::post('subscription/create', [SubscriptionStripeController::class, 'createCustomerSubscription'])->name('subscription-create');

Route::post('subscription/update', [SubscriptionStripeController::class, 'updateCustomerSubscription'])->name('subscription-update');

Route::post('subscription/cancel', [SubscriptionStripeController::class, 'cancelCustomerSubscription'])->name('subscription-cancel');

Route::post('subscription/change-card', [SubscriptionStripeController::class, 'changeCardCustomer'])->name('change-card');

Route::get('subscription/list', [SubscriptionStripeController::class, 'listSubscription']);

Route::get('subscription/payment-list', [SubscriptionStripeController::class, 'paymentSubscriptionList']);

Route::get('subscription/info', [SubscriptionStripeController::class, 'getSubscriptionCustomerInfo']);



