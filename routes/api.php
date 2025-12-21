<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\ProfileController;
use App\Http\Controllers\API\TaskController;
use App\Http\Controllers\API\UserController;
use App\Http\Controllers\Backend\ModuleController;
use App\Http\Controllers\Backend\UserModule\DashboardController;

Route::prefix('v1')->group(function () {

    // ecom with vue
    Route::get('/UserLogin/{UserEmail}', [UserController::class, 'UserLogin']);

    // Auth routes
    Route::controller(AuthController::class)->group(function () {
        Route::post('/register', 'register')->name('register');
        Route::post('/login', 'login')->name('login');
        
    });

           
    // Profile routes (Protected)
    Route::middleware('auth:sanctum')
        ->controller(ProfileController::class)
        ->group(function () {
            Route::get('/me', 'me')->name('me');
            Route::post('/logout', 'logout')->name('logout');
            Route::patch('/profile-update', 'profileUpdate')->name('profile.update');
            Route::get('tasks/trashed', [TaskController::class, 'trashed']);
            Route::delete('tasks/{id}/force-delete', [TaskController::class, 'forceDelete']);
            Route::post('tasks/{id}/restore', [TaskController::class, 'restore']);
            // Task Routes for crud
            Route::apiResource('tasks', TaskController::class) ;

            Route::post('task/{id}/restore', [TaskController::class,'restore']) ; 
            Route::delete('task/{id}/force-delete', [TaskController::class,'forceDelete']) ; 
            Route::get('/filter-by-status', [TaskController::class,'taskFilter']) ; 

            

        });

    

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