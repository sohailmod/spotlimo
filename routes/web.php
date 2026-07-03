<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Auth::routes();

// Force non-www to www
Route::group(['domain' => 'spotlimo.com'], function () {
    Route::get('{any}', function ($any = '') {
        return redirect()->to('https://www.spotlimo.com/' . $any, 301);
    })->where('any', '.*');
});


// ============================================================
// HOME CONTROLLER ROUTES
// ============================================================
Route::controller(HomeController::class)->group(function () {

    // Core Pages
    Route::get('/', 'index')->name('home');
    Route::get('/contactus', 'contact')->name('contact');
    Route::get('/about-us', 'aboutUs')->name('about');
    Route::get('/faq', 'faqPage')->name('faq');

    // Fleet & Rates
    Route::get('/vehicles', 'vehicleRates')->name('vehicle-rates');
    Route::get('/our-fleet', 'ourFleet')->name('our-fleet');

    // Airport Services
    Route::get('/airport-services', 'airportServices')->name('airport-services');
    Route::get('/ohare-airport', 'ohareAirport')->name('ohare-airport');
    Route::get('/midway-signature', 'midwaySignature')->name('midway-signature');
    Route::get('/milwaukee-airport', 'milwaukeeAirport')->name('milwaukee-airport');
    Route::get('/dupage-airport', 'dupageAirport')->name('dupage-airport');
    Route::get('/chicago-airport', 'chicagoAirport')->name('chicago-airport');
    Route::get('/gary-international', 'garyInternational')->name('gary-international');

    // Executive & Chauffeur Services
    Route::get('/executive-transport', 'executiveTransport')->name('executive-transport');
    Route::get('/chauffeur-services', 'chauffeurServices')->name('chauffeur-services');
    Route::get('/chauffeur-services-corporate', 'chauffeurServicesCorporate')->name('chauffeur-services-corporate');
    Route::get('/chauffeur-services-major', 'chauffeurServicesMajor')->name('chauffeur-services-major');
    Route::get('/chauffeur-services-chicago', 'chauffeurServicesChicago')->name('chauffeur-services-chicago');
    Route::get('/chauffeur-services-midway', 'chauffeurServicesMidway')->name('chauffeur-services-midway');
    Route::get('/chauffeur-services-ohare', 'chauffeurServicesOhare')->name('chauffeur-services-ohare');
    Route::get('/multilingual-chauffeurs-services', 'multilingualChauffeursServices')->name('multilingual-chauffeurs-services');

    // Corporate Services
    Route::get('/corporate-transport', 'corporateTransport')->name('corporate-limo-transport');
    Route::get('/corporate-travel', 'cooperateTravel')->name('corporate-travel');
    Route::redirect('/cooperate-travel', '/corporate-travel', 301);
    Route::get('/corporate-limo-contract', 'corporateLimoContract')->name('corporate-limo-contract');
    Route::get('/meet-greet', 'meetGreet')->name('meet-greet');
    Route::get('/tracking-services', 'trackingServices')->name('tracking-services');
    Route::get('/white-glove', 'whiteGlove')->name('white-glove');

    // Wedding & Special Events
    Route::get('/wedding-transport', 'weddingTransport')->name('wedding-transport');
    Route::get('/wedding-services', 'weddingServices')->name('wedding-services');
    Route::get('/prom-nights', 'promServices')->name('prom-nights');
    Route::get('/holiday-parties', 'holidayServices')->name('holiday-parties');
    Route::get('/independence-day', 'independanceDayServices')->name('independence-day');
    Route::get('/newyear-nights', 'newYearServices')->name('newyear-nights');

    // Hourly Services
    Route::get('/business-trip', 'hourlyBusiness')->name('business-trip');
    Route::get('/family-get-together', 'hourlyFamily')->name('family-get-together');
    Route::get('/sports-event', 'hourlySports')->name('sports-event');
    Route::get('/concerts', 'concerts')->name('concerts');
    Route::get('/conventions', 'hourlyConventions')->name('conventions');

    // Interstate & Specialty
    Route::get('/interstate-transport', 'interstateTransport')->name('interstate-transport');
    Route::get('/sight-seeing', 'sightSeeing')->name('sight-seeing');
    Route::get('/luxury-car', 'luxuryCar')->name('luxury-car');
    Route::get('/amenities', 'amenities')->name('amenities');
    Route::get('/local-attraction', 'localAttraction')->name('local-attraction');

    // Blog
    Route::get('/our-blogs', 'blogs')->name('our-blogs');
    Route::get('/show-blog/{slug}', 'showBlog')->name('show-blog');

    // Location Pages
    Route::get('/limo-service-naperville-il',      'napervillePage')->name('naperville');
    Route::get('/limo-service-oak-brook-il',        'oakBrookPage')->name('oak-brook');
    Route::get('/limo-service-schaumburg-il',       'schaumburgPage')->name('schaumburg');
    Route::get('/limo-service-hinsdale-il',         'hinsdalePage')->name('hinsdale');
    Route::get('/limo-service-elmhurst-il',         'elmhurstPage')->name('elmhurst');
    Route::get('/limo-service-downers-grove-il',    'downersGrovePage')->name('downers-grove');
    Route::get('/limo-service-wheaton-il',          'wheatonPage')->name('wheaton');
    Route::get('/limo-service-lombard-il',          'lombardPage')->name('lombard');
    Route::get('/limo-service-burr-ridge-il',       'burrRidgePage')->name('burr-ridge');
    Route::get('/limo-service-barrington-il',       'barringtonPage')->name('barrington');
    Route::get('/limo-service-bolingbrook-il',      'bolingbrookPage')->name('bolingbrook');
    Route::get('/limo-service-aurora-il',           'auroraPage')->name('aurora');
    Route::get('/limo-service-itasca-il',           'itascaPage')->name('itasca');
    Route::get('/limo-service-roselle-il',          'rosellePage')->name('roselle');
    Route::get('/limo-service-carol-stream-il',     'carolStreamPage')->name('carol-stream');
    Route::get('/limo-service-glen-ellyn-il',       'glenEllynPage')->name('glen-ellyn');
    Route::get('/limo-service-westmont-il',         'westmontPage')->name('westmont');
    Route::get('/limo-service-clarendon-hills-il',  'clarendonHillsPage')->name('clarendon-hills');
    Route::get('/limo-service-lisle-il',            'lislePage')->name('lisle');
    Route::get('/limo-service-willowbrook-il',      'willowbrookPage')->name('willowbrook');
    Route::get('/limo-service-villa-park-il',       'villaParkPage')->name('villa-park');
    Route::get('/limo-service-addison-il',          'addisonPage')->name('addison');

});


// ============================================================
// RESERVATION CONTROLLER ROUTES
// ============================================================
Route::controller(ReservationController::class)->group(function () {
    Route::post('/store-reservations',  'storeReservation')->name('store.reservations');
    Route::post('/calculate-price',     'calculatePrice')->name('calculate.price');
    Route::post('/get-vehicle-detail',  'getVehicleDetail')->name('vehicle.detail');
    Route::get('/confirm-reservations', 'confirmReservations')->name('confirm.reservations');
    Route::get('/payment-confirm',      'confirmPayment')->name('payment.confirm');
    Route::get('/complete-reservations','completeReservations')->name('complete.reservations');
    Route::get('/payment/cancel',       'paymentCancel')->name('payment.cancel');
});


// ============================================================
// MAIL CONTROLLER ROUTES
// ============================================================
Route::controller(MailController::class)->group(function () {
    Route::post('/send-contact-mail', 'sendContactMail')->name('send.contact.mail');
});


require __DIR__.'/admin.php';