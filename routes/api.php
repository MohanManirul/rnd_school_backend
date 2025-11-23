<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Backend\Auth\AuthController;
use App\Http\Controllers\Backend\UserModule\DashboardController;

Route::controller(AuthController::class)
    ->prefix('/adminpanel')
    ->name('superadmin.') // <- name prefix
    ->group(function () {
        Route::post('/login-check', 'loginCheck')->name('login.check');
        Route::post('/log-out', 'LogOut')->name('logout');
    });

Route::prefix('/admindashboard')
    ->name('superadmin.')
    ->middleware(['jwt'])
    ->group(function () {

        // 🟢 DashboardController routes
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'dashboard')->name('dashboard');
        });

        
        
        // 🟢 Include additional route files
        require_once base_path('routes/backend/shift.php');
    });