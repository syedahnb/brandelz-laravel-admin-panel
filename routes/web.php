<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuditLogController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Auth\UserProfileController;
use App\Http\Controllers\Admin\KeywordController;


Route::middleware('splade')->group(function () {
    Route::spladeTable();

    Route::get('/', function () {
        return view('welcome');
    });

    Route::middleware('auth')->group(function () {
        Route::get('/profile', [UserProfileController::class, 'show'])->name('profile.show');
        Route::post('/profile/{user}', [UserProfileController::class, 'updateProfile'])->name('profile.update');
        Route::post('/profile/password-change/{user}', [UserProfileController::class, 'passwordChange'])->name('profile.password-change');

        Route::prefix('admin')->name('admin.')->group(function () {
            Route::get('/dashboard', function () {
                return view('admin.dashboard');
            })->name('dashboard');
            Route::resource('users', UserController::class);
            Route::resource('roles', RoleController::class);
            Route::resource('permissions', PermissionController::class);
            Route::resource('audit-logs', AuditLogController::class, ['except' => ['store', 'update', 'destroy', 'create', 'edit']]);
            //Start From there , where you resume your dream
            //Route::resource('keywords', KeywordController::class);
        });


    });


    require __DIR__ . '/auth.php';
});
