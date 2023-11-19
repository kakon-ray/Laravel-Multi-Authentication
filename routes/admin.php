<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminRegistationController;
use App\Http\Controllers\Admin\Auth\LoginController;

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('register', [AdminRegistationController::class, 'create'])->name('register');

    Route::post('register', [AdminRegistationController::class, 'store']);

    Route::get('login', [LoginController::class, 'create'])->name('login');

    Route::post('login', [LoginController::class, 'store']);

  

    
    Route::middleware(['AdminAuth'])->group(function (){
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });

});