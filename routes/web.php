<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\OauthController;
use App\Http\Controllers\Site\BasicController;

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
        Route::get('/', 'index')->name('index');
        Route::get('/about', 'about');
        Route::get('/contact', 'contact');
    });
