<?php

use App\Http\Controllers\App\Auth\AuthenticatedSessionController;
use App\Http\Controllers\App\Auth\ConfirmablePasswordController;
use App\Http\Controllers\App\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\App\Auth\EmailVerificationPromptController;
use App\Http\Controllers\App\Auth\NewPasswordController;
use App\Http\Controllers\App\Auth\PasswordController;
use App\Http\Controllers\App\Auth\PasswordResetLinkController;
use App\Http\Controllers\App\Auth\RegisteredUserController;
use App\Http\Controllers\App\Auth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('tenantregister', [RegisteredUserController::class, 'create'])
                ->name('tenantregister');

    Route::post('tenantregister', [RegisteredUserController::class, 'store']);

    Route::get('tenantlogin', [AuthenticatedSessionController::class, 'create'])
                ->name('tenantlogin');

    Route::post('tenantlogin', [AuthenticatedSessionController::class, 'store']);

    Route::get('tenantforgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('tenantpassword.request');

    Route::post('tenantforgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('tenantpassword.email');

    Route::get('tenantreset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('tenantpassword.reset');

    Route::post('tenantreset-password', [NewPasswordController::class, 'store'])
                ->name('tenantpassword.store');
});

Route::middleware('auth')->group(function () {
    Route::get('verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
