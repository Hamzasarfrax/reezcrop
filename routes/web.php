<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/services/enterprise-software-development', function () {
    return view('Services.enterprise-software-development');
});

Route::get('/services/mobile-app-development-services', function () {
    return view('/Services.mobile-app-development-services');
});
Route::get('/services/dedicated-development-team', function () {
    return view('/Services.dedicated-development-team');
});
Route::get('/services/it-consulting-services', function () {
    return view('/Services.it-consulting-services');
});
Route::get('/services/digital-transformation-services', function () {
    return view('/Services.digital-transformation-services');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');

    return "Cache cleared successfully";
 });


//  ProductController

Route::get('/test', [controller::class, 'ReturnPage'])->name('returnparoduct');
