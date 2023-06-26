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

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
Route::get('/sitemap', function () {
    return view('sitemap');
});

// global routes 


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

Route::get('/service', function () {
    return view('Services.service');
});

// industries


Route::get('platforms', function () {
    return view('platforms.platforms');
});
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


// clients


Route::get('/clients', function () {
    return view('clients.clients');
});
Route::get('/cases', function () {
    return view('clients.case');
});


// company details

Route::get('/about', function () {
    return view('compnay.about');
});
Route::get('/team', function () {
    return view('compnay.team');
});
Route::get('/careers', function () {
    return view('compnay.careers');
});
Route::get('/contacts', function () {
    return view('compnay.contacts');
});
Route::get('/blog', function () {
    return view('compnay.blog');
});
Route::get('/insights', function () {
    return view('compnay.insights');
});
Route::get('/blog/news', function () {
    return view('compnay.news');
});


// the route for cache clear
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');

    return "Cache cleared successfully";
 });


//  ProductController testing

Route::get('/test', [controller::class, 'ReturnPage'])->name('returnparoduct');
