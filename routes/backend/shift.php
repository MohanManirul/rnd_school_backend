<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\AcademicModule\ShiftController;

Route::controller(ShiftController::class)
    ->prefix('/shift')
    ->name('superadmin.') // <- name prefix
    ->middleware(['jwt'])
    ->group(function () {
        Route::get('/', 'index')->name('shift');
    });