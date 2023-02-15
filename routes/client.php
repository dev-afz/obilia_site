<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\JobController;
use App\Http\Controllers\Client\ChatController;
use App\Http\Middleware\SanitizeInputMiddleware;
use App\Http\Controllers\Client\ContractController;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\JobApplicationController;
use App\Http\Controllers\Client\Workspace\ChatController as WorkspaceChatController;
use App\Http\Controllers\Client\Workspace\WorkspacesController;

Route::controller(DashboardController::class)->middleware(['auth', 'client'])->prefix('client')->name('client.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('subcategories', 'subcategories')->name('subcategories');


    Route::controller(JobController::class)->prefix('job')->name('job.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('add', 'add')->name('add');
        Route::get('show/{slog}', 'show')->name('show');
        Route::post('store', 'store')->name('store');


        Route::controller(JobApplicationController::class)->group(function () {
            Route::get('/applications', 'applications')->name('applications');
            Route::post('/application-action', 'applicationAction')->name('application-action');
            Route::post('/invite-candidate', 'inviteCandidate')->name('invite-candidate');
            Route::get('/invited-candidates', 'invitedCandidates')->name('invited-candidates');
            Route::get('/hired-candidates', 'hiredCandidates')->name('hired-candidates');
            Route::get('/suggested-candidates', 'suggestedCandidates')->name('suggested-candidates');
        });
    });


    Route::controller(ChatController::class)->prefix('chat')->name('chat.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('messages', 'messages')->name('messages');
        Route::get('load-message', 'loadMessages')->name('load-messages');
        Route::post('send-message', 'sendMessages')->name('send-messages')
            ->middleware(SanitizeInputMiddleware::class);
    });


    Route::controller(ContractController::class)->prefix('contract')->name('contract.')->group(function () {
        Route::post('action', 'action')->name('action');
    });

    Route::controller(WorkspacesController::class)->prefix('workspace')->name('workspace.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('show/{slug}', 'show')->name('show');
        Route::get('project-info/{slug}', 'projectInfo')->name('project-info');
        Route::get('payment-and-invoices/{slug}', 'paymentAndInvoices')->name('payment-and-invoices');

        Route::controller(WorkspaceChatController::class)->prefix('chat')->name('chat.')->group(function () {
            Route::get('messages', 'messages')->name('messages');
            Route::get('load-message', 'loadMessages')->name('load-messages');
            Route::post('send-message', 'sendMessages')->name('send-messages')
                ->middleware(SanitizeInputMiddleware::class);
        });
    });
});
