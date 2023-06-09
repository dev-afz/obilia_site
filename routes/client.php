<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Client\JobController;
use App\Http\Controllers\Client\ChatController;
use App\Http\Middleware\SanitizeInputMiddleware;
use App\Http\Controllers\Client\ContractController;
use App\Http\Controllers\Client\DashboardController;
use App\Http\Controllers\Client\InvoiceController;
use App\Http\Controllers\Client\JobApplicationController;
use App\Http\Controllers\Client\Workspace\ChatController as WorkspaceChatController;
use App\Http\Controllers\Client\Workspace\MilestoneController;
use App\Http\Controllers\Client\Workspace\PaymentController;
use App\Http\Controllers\Client\Workspace\WorkspacesController;

Route::controller(DashboardController::class)->middleware(['auth', 'client', 'verified'])->prefix('client')->name('client.')->group(function () {
    Route::get('/', 'index')->name('index');
    Route::get('category', 'category')->name('category');
    Route::get('subcategories', 'subcategories')->name('subcategories');
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
        Route::post('view', 'view')->name('view');
    });

    Route::controller(WorkspacesController::class)->prefix('workspace')->name('workspace.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('show/{slug}', 'show')->name('show');
        Route::get('project-info/{slug}', 'projectInfo')->name('project-info');
        Route::get('payment-and-invoices/{slug}', 'paymentAndInvoices')->name('payment-and-invoices');



        Route::controller(MilestoneController::class)->prefix('milestone')->name('milestone.')->group(function () {
            Route::post('work-action', 'workAction')->name('work-action');
            Route::post('view-work', 'viewWork')->name('view-work');
            Route::post('request-milestone', 'requestMilestone')->name('request-milestone');
            Route::post('action-request', 'actionRequest')->name('action-request');
        });




        Route::controller(WorkspaceChatController::class)->prefix('chat')->name('chat.')->group(function () {
            Route::get('messages', 'messages')->name('messages');
            Route::get('load-message', 'loadMessages')->name('load-messages');
            Route::post('send-message', 'sendMessages')->name('send-messages')
                ->middleware(SanitizeInputMiddleware::class);
        });

        Route::controller(PaymentController::class)->prefix('payment')->name('payment.')->group(function () {
            Route::post('create-order', 'createOrder')->name('create-order');
            Route::post('fetch', 'fetch')->name('fetch');
        });
    });


    Route::controller(InvoiceController::class)->prefix('invoice')->name('invoice.')->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('generate/{id}', 'generate')->name('generate');
    });
});
