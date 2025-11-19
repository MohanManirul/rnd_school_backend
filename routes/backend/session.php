<?php

use App\Http\Controllers\Backend\AcademicModule\SessionController;
use Illuminate\Support\Facades\Route;

Route::controller(SessionController::class)
    ->prefix('/admindashboard')
    ->name('superadmin.') // <- name prefix
    ->middleware(['jwt'])
    ->group(function () {
        Route::get('/', 'dashboard')->name('dashboard');
    });