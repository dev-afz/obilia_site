<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\SanitizeInputMiddleware;
use App\Http\Controllers\ServiceProvider\JobController;
use App\Http\Controllers\ServiceProvider\ChatController;
use App\Http\Controllers\ServiceProvider\ServiceController;
use App\Http\Controllers\ServiceProvider\ContractController;
use App\Http\Controllers\ServiceProvider\DashboardController;
use App\Http\Controllers\ServiceProvider\JobApplicationController;
use App\Http\Controllers\ServiceProvider\Workspace\WorkspacesController;
use App\Http\Controllers\ServiceProvider\Workspace\ChatController as WorkspaceChatController;

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
        Route::get('category', 'category')->name('category');
        Route::get('subcategories', 'subcategories')->name('subcategories');


        Route::controller(JobController::class)->prefix('job')->name('job.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/apply', 'apply')->name('apply');
            Route::get('/liked', 'likedJobs')->name('liked');

            Route::get('add', 'add')->name('add');
            Route::post('store', 'store')->name('store');
            Route::get('posted', 'postedJobs')->name('posted');
            Route::get('show/{slog}', 'show')->name('show');

            Route::get('invitations', 'invitations')->name('invitations');
            Route::post('invitation-action', 'invitationAction')->name('invitation-action');


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
            Route::post('store', 'store')->name('store');
            Route::post('view', 'view')->name('view');
            Route::post('action', 'action')->name('action');
        });



        Route::controller(WorkspacesController::class)->prefix('workspace')->name('workspace.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('show/{slug}', 'show')->name('show');
            Route::get('project-info/{slug}', 'projectInfo')->name('project-info');
            Route::get('payment-and-invoices/{slug}', 'paymentAndInvoices')->name('payment-and-invoices');

            Route::get('get-works', 'getWorks')->name('get-works');
            Route::post('add-work', 'addWork')->name('add-work');

            Route::post('request-milestone', 'requestMilestone')->name('request-milestone');
            Route::post('action-request', 'actionRequest')->name('action-request');



            Route::controller(WorkspaceChatController::class)->prefix('chat')->name('chat.')->group(function () {
                Route::get('messages', 'messages')->name('messages');
                Route::get('load-message', 'loadMessages')->name('load-messages');
                Route::post('send-message', 'sendMessages')->name('send-messages')
                    ->middleware(SanitizeInputMiddleware::class);
            });
        });



        Route::controller(ServiceController::class)->prefix('service')->name('service.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('show/{slug}', 'show')->name('show');
            Route::post('store', 'store')->name('store');
            Route::get('edit/{slug}', 'edit')->name('edit');
            Route::post('update/{slug}', 'update')->name('update');
            Route::get('delete/{slug}', 'delete')->name('delete');
        });
    });
