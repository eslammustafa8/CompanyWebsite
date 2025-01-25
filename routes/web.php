<?php

use App\Http\Controllers\FeatureController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\TestmonialController; // Added import
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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

/**
 * Front routes
 */
Route::name('front.')->group(function () {
    Route::view('/', 'front.index')->name('index');
    Route::view('/about', 'front.about')->name('about');
    Route::view('/service', 'front.service')->name('service');
    Route::view('/contact', 'front.contact')->name('contact');
});

/**
 * Admin routes
 */
Route::name('admin.')
    ->prefix(LaravelLocalization::setLocale() . '/admin')
    ->middleware(['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'])
    ->group(function () {
        Route::middleware('auth')->group(function () {
            //============================ HOME PAGE ============================
            Route::view('/', 'admin.index')->name('index');

            //=========================== SERVICES ==============================
            Route::controller(ServiceController::class)->group(function () {
                Route::resource('services', ServiceController::class);
            });

            //=========================== FEATURES ==============================
            Route::controller(FeatureController::class)->group(function () {
                Route::resource('feature', FeatureController::class);
            });

            //=========================== SUBSCRIBERS ==============================
            Route::controller(SubscriberController::class)->group(function () {
                Route::resource('subscribers', SubscriberController::class);
            });

            //=========================== MESSAGES ==============================
            Route::controller(MessageController::class)->group(function () {
                Route::resource('messages', MessageController::class);
            });

            //=========================== TESTIMONIALS ==============================
            Route::controller(TestmonialController::class)->group(function () {
                Route::resource('testmonials', TestmonialController::class);
            });
        });
        
        // Authentication routes
        require __DIR__ . '/auth.php';
    });