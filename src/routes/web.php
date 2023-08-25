<?php

use Atul4065\Coon\Controllers\Coon\AdminRouteController;
use Atul4065\Coon\Controllers\Coon\CoonAuthController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'admin', 'middleware' => ['web']], function () {
    Route::redirect('/', 'admin/dashboard')->middleware('coon-guest');

    Route::middleware(['guest'])->group(function () {
        Route::post('sign-up', [CoonAuthController::class, 'signUp'])->name('coon-admin-signup');
        Route::post('sign-in', [CoonAuthController::class, 'login'])->name('coon-admin-login');
        Route::view('signup', 'admin.coon.signup')->name('coon-admin-signup-view');
        Route::view('authenticate', 'admin.coon.login')->name('login');
        Route::view('forget-password', 'admin.coon.forget')->name('coon-admin-forget');
        Route::post('forget-password', [CoonAuthController::class, 'forgetPassword'])->name('coon-admin-forget-password');
        Route::get('reset-password/{token}', [CoonAuthController::class, 'showResetPasswordForm'])->name('coon-admin-reset-view');
        Route::post('reset-password', [CoonAuthController::class, 'resetPassword'])->name('coon-admin-reset-password');
    });


    Route::middleware(['auth'])->group(function () {
        Route::get('dashboard', [AdminRouteController::class, 'index'])->name('coon-admin-dashboard');
        Route::get('profile', [AdminRouteController::class, 'profile'])->name('coon-admin-profile');
        Route::get('settings', [AdminRouteController::class, 'settings'])->name('coon-admin-settings');
        Route::get('manage/{id}', [AdminRouteController::class, 'manage'])->name('coon-admin-manage');
        Route::post('logout', [CoonAuthController::class, 'logout'])->name('coon-admin-logout');
        Route::post('modify/{id}', [CoonAuthController::class, 'modify'])->name('coon-admin-modify');
    });
});
