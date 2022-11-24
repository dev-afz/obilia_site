<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\JobController;

Route::controller(DashboardController::class)
    ->middleware(['auth', 'client'])
    ->prefix('client')
    ->name('client.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('subcategories', 'subcategories')->name('subcategories');


        Route::controller(JobController::class)
            ->prefix('job')
            ->name('job.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('add', 'add')->name('add');
                Route::post('store', 'store')->name('store');
            });
    });
