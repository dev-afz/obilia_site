<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\Site\BasicController;
use App\Http\Controllers\Site\JobController;
use App\Http\Controllers\Site\TalentController;

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

Route::controller(BasicController::class)
    ->group(function () {
        Route::get('test', 'test')->name('test');
        Route::get('/', 'index')->name('index');
        Route::get('/category/{slug}', 'categories')->name('categories');
        Route::get('/subcategories/{slug}', 'subcategories')->name('subcategories');
        Route::get('/about', 'about');
        Route::get('/search', 'search')->name('search');
        Route::get('/contact', 'contact')->name('contact');
        Route::get('/about-us', 'aboutUs')->name('about-us');
        Route::controller(JobController::class)
            ->prefix('jobs')
            ->name('jobs.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::put('/toggle-like', 'toggleLike')->name('toggle-like')
                    ->middleware('auth');
                Route::get('/{job}', 'show')->name('show');
            });
    });
