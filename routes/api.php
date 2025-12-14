<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\UserModule\DashboardController;

Route::controller(AuthController::class)
    ->prefix('/v1')
    ->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');

    });

  Route::controller(ModuleController::class)->group(function () {
            Route::get('/modules', 'modules')->name('modules');
        });

    Route::controller(ModuleController::class)->group(function () {
        Route::get('/modules', 'modules')->name('modules');
    });

Route::prefix('/admindashboard')
    ->name('superadmin.')
    ->middleware(['jwt'])
    ->group(function () {

        // 🟢 DashboardController routes
        Route::controller(DashboardController::class)->group(function () {
            Route::get('/', 'dashboard')->name('dashboard');
        });

        // 🟢 DashboardController routes
      

        // 🟢 Include additional route files
        require_once base_path('routes/backend/shift.php');
    });