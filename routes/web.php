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
    return view('Services.mobile-app-development-services');
});
Route::get('/services/dedicated-development-team', function () {
    return view('Services.dedicated-development-team');
});
Route::get('/services/it-consulting-services', function () {
    return view('Services.it-consulting-services');
});
Route::get('services/digital-transformation-services', function () {
    return view('Services.digital-transformation-services');
});
Route::get('/services/ui-ux-design-services', function () {
    return view('Services.ui-ux-design-services');
});
Route::get('/services/qa-and-software-testing-services', function () {
    return view('Services.qa-and-software-testing-services');
});
Route::get('/services/dev-ops', function () {
    return view('Services.dev-ops');
});
Route::get('/services/security', function () {
    return view('Services.security');
});
Route::get('/services/web-development-services', function () {
    return view('Services.web-development-services');
});
Route::get('/services/outsourcing-software-development-ukraine-services', function () {
    return view('Services.outsourcing-software-development-ukraine-services');
});

Route::get('/services/custom-software-development', function () {
    return view('Services.custom-software-development');
});

Route::get('/services', function () {
    return view('Services.services');
});

// industries


Route::get('platforms/ecommerce-retail', function () {
    return view('platforms.ecommerce-retail');
});
Route::get('platforms/travel-hospitality-software-development', function () {
    return view('platforms.travel-hospitality-software-development');
});
Route::get('platforms/logistics-and-automotive-software-solutions', function () {
    return view('platforms.logistics-and-automotive-software-solutions');
});
Route::get('platforms/custom-insurance-software-development', function () {
    return view('platforms.custom-insurance-software-development');
});
Route::get('platforms/healthcare-it-solutions', function () {
    return view('platforms.healthcare-it-solutions');
});
Route::get('platforms/construction-software-development', function () {
    return view('platforms.construction-software-development');
});
Route::get('solutions/financial-software-development-services', function () {
    return view('platforms.financial-software-development-services');
});

Route::get('solutions/dental-software-development', function () {
    return view('platforms.dental-software-development');
});

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cache cleared successfully";
 });


//  ProductController

Route::get('/test', [controller::class, 'ReturnPage'])->name('returnparoduct');
