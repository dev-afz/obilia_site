<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SanitizeInputMiddleware;
use App\Http\Controllers\ServiceProvider\JobController;
use App\Http\Controllers\ServiceProvider\ChatController;
use App\Http\Controllers\ServiceProvider\ContractController;
use App\Http\Controllers\ServiceProvider\DashboardController;

Route::controller(DashboardController::class)
    ->middleware(['auth', 'service_provider'])
    ->prefix('service-provider')
    ->name('service-provider.')
    ->group(function () {
        Route::get('/', 'index')->name('index');

        Route::controller(JobController::class)
            ->prefix('job')
            ->name('job.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::post('/apply', 'apply')->name('apply');
                Route::get('/liked', 'likedJobs')->name('liked');
            });
        Route::controller(ChatController::class)
            ->prefix('chat')
            ->name('chat.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('messages', 'messages')->name('messages');
                Route::get('load-message', 'loadMessages')->name('load-messages');
                Route::post('send-message', 'sendMessages')->name('send-messages')
                    ->middleware(SanitizeInputMiddleware::class);
            });

        Route::controller(ContractController::class)
            ->prefix('contract')
            ->name('contract.')
            ->group(function () {
                Route::get('action/{message_contract_id}', 'action')->name('action');
            });
    });
