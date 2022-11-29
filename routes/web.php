<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\Type_PaymentController;
use App\Http\Controllers\Company_DeviceController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\SliceController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PakageController;
use App\Http\Controllers\LandingController;

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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





Route::middleware('guest')->group(function () {
    Route::get('/admin-login', '\App\Http\Controllers\AdminController@showLogin')->name('admin-login');
    Route::post('/login', '\App\Http\Controllers\AdminController@adminLogin')->name('dashboard_login');
});

//Route::middleware('auth:admin')->group(function () {
    Route::group(['prefix'=>LaravelLocalization::setLocale(),
                  'middleware' => ['auth:admin'],
],function() {
    Route::get('/home', '\App\Http\Controllers\HomeController@index')->name('dashboard-home');
    Route::resources(['admins'=>AdminController::class]);
    Route::resources(['devices'=>DeviceController::class]);
    Route::resources(['packages'=>PakageController::class]);
    Route::resources(['payments'=>Type_PaymentController::class]);
    Route::resources(['slices'=>SliceController::class]);
    Route::resources(['customers'=>CustomerController::class]);
    Route::resources(['company_devices'=>Company_DeviceController::class]);
    Route::resources(['admins'=>AdminController::class]);
    Route::resource('/landing_pages','\App\Http\Controllers\LandingController');
    Route::get('/orders', '\App\Http\Controllers\OrderController@index')->name('orders.index');

});

Route::group(['prefix'=>LaravelLocalization::setLocale(),
],function() {
    Route::get('/contacts', '\App\Http\Controllers\ContactController@store')->name('contacts.store');
    Route::get('add/contacts', '\App\Http\Controllers\ContactController@index')->name('contacts.index');
    Route::get('/','\App\Http\Controllers\LandingController@land');
    Route::get('/create/order', '\App\Http\Controllers\OrderController@create');
    Route::post('/add/order', '\App\Http\Controllers\OrderController@store')->name('orders.store');
    

});



