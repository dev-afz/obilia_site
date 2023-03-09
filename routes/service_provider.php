<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SanitizeInputMiddleware;
use App\Http\Controllers\ServiceProvider\JobController;
use App\Http\Controllers\ServiceProvider\ChatController;
use App\Http\Controllers\ServiceProvider\ServiceController;
use App\Http\Controllers\ServiceProvider\ContractController;
use App\Http\Controllers\ServiceProvider\DashboardController;
use App\Http\Controllers\ServiceProvider\Workspace\ChatController as WorkspaceChatController;
use App\Http\Controllers\ServiceProvider\Workspace\WorkspacesController;

Route::controller(DashboardController::class)
    ->middleware(['auth', 'service_provider'])
    ->prefix('service-provider')
    ->name('service-provider.')
    ->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('profile', 'profile')->name('profile');
        Route::get('edit-profile', 'editProfile')->name('edit-profile');
        Route::post('update-profile', 'updateProfile')->name('update-profile');
        Route::get('add-business', 'addBusiness')->name('add-business');
        Route::post('store-business', 'storeBusiness')->name('store-business');
        Route::get('edit-business', 'editBusiness')->name('edit-business');
        Route::post('update-business', 'updateBusiness')->name('update-business');
        Route::get('add-bank', 'addBank')->name('add-bank');
        Route::post('store-bank', 'storeBank')->name('store-bank');
        Route::get('edit-bank', 'editBank')->name('edit-bank');
        Route::post('update-bank', 'updateBank')->name('update-bank');

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
                Route::post('store', 'store')->name('store');
                Route::post('view', 'view')->name('view');
            });

        Route::controller(WorkspacesController::class)
            ->prefix('workspace')
            ->name('workspace.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('show/{slug}', 'show')->name('show');
                Route::get('project-info/{slug}', 'projectInfo')->name('project-info');
                Route::get('payment-and-invoices/{slug}', 'paymentAndInvoices')->name('payment-and-invoices');

                Route::get('get-works', 'getWorks')->name('get-works');
                Route::post('add-work', 'addWork')->name('add-work');

                Route::controller(WorkspaceChatController::class)
                    ->prefix('chat')
                    ->name('chat.')
                    ->group(function () {
                        Route::get('messages', 'messages')->name('messages');
                        Route::get('load-message', 'loadMessages')->name('load-messages');
                        Route::post('send-message', 'sendMessages')->name('send-messages')
                            ->middleware(SanitizeInputMiddleware::class);
                    });
            });

        Route::controller(ServiceController::class)
            ->prefix('service')
            ->name('service.')
            ->group(function () {
                Route::get('/', 'index')->name('index');
                Route::get('show/{slug}', 'show')->name('show');
                Route::post('store', 'store')->name('store');
                Route::get('edit/{slug}', 'edit')->name('edit');
                Route::post('update/{slug}', 'update')->name('update');
                Route::get('delete/{slug}', 'delete')->name('delete');
            });
    });
