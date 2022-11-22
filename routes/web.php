<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Site\BasicController;
use Illuminate\Support\Facades\Route;

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


Route::controller(AuthController::class)->prefix('auth')->middleware('guest')->group(function () {
    Route::post('login', 'login')->name('login');
    Route::post('register', 'register')->name('register');
});


Route::controller(BasicController::class)
    ->group(function () {
        Route::get('/', 'index');
        Route::get('/about', 'about');
        Route::get('/contact', 'contact');
    });
