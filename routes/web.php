<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\Site\BasicController;
use App\Http\Controllers\Site\JobController;
use App\Http\Controllers\Site\PaymentController;
use App\Http\Controllers\Site\VerificationController;

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


Route::get('logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::controller(AuthController::class)
    ->name('auth.')
    ->prefix('auth')->middleware('guest')->group(function () {
        Route::post('login', 'login')->name('login');
        Route::post('register', 'register')->name('register');
        Route::controller(OauthController::class)
            ->group(function () {
                Route::get('google', 'redirectToGoogle')->name('google');
                Route::get('google/callback', 'handleGoogleCallback')->name('google.callback');
            });
    });

Route::controller(BasicController::class)->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('test', 'test')->name('test');
    Route::post('wishlist', 'wishlist')->name('wishlist');
    Route::get('plans', 'plans')->name('plans');
    Route::get('how-it-works/{for}', 'howItWorks')->name('how-it-works');
    Route::get('/category/{slug}', 'categories')->name('categories');
    Route::get('/subcategories/{slug}', 'subcategories')->name('subcategories');
    Route::get('/about', 'about');
    Route::get('/search', 'search')->name('search');
    Route::get('/contact', 'contact')->name('contact');
    Route::post('/contact', 'storeContact');
    Route::get('/about', 'aboutUs')->name('about');
    Route::get('provider/{uuid}', 'provider')->name('provider');
    Route::get('provider/{user_uuid}/{service_slug}', 'serviceDetails')->name('service-details');
    Route::controller(JobController::class)
        ->prefix('jobs')
        ->name('jobs.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::put('/toggle-like', 'toggleLike')->name('toggle-like')
                ->middleware('auth');
            Route::get('/{job}', 'show')->name('show');

            Route::post('start-chat', 'startChat')->name('start-chat')
                ->middleware(['auth']);
        });
});
Route::controller(PaymentController::class)
    ->middleware(['auth'])
    ->prefix('payment')->name('payment.')->group(function () {
        Route::post('create-order', 'createOrder')->name('create-order');
        Route::post('fetch-order', 'fetchOrder')->name('fetch-order');
    });
Route::controller(VerificationController::class)

    ->prefix('verification')->name('verification.')->group(function () {
        Route::post('send', 'send')->name('send')->middleware(['throttle:6,1', 'auth']);
        Route::get('verify', 'verify')->name('verify')->middleware(['signed']);
        Route::get('notice', 'notice')->name('notice')->middleware(['auth']);
    });
