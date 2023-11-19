<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Auth\AdminRegistationController;
use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\Auth\ForgetController;

Route::name('admin.')->prefix('admin')->group(function () {
    Route::get('register', [AdminRegistationController::class, 'create'])->name('register');
    Route::post('register', [AdminRegistationController::class, 'store']);
    Route::get('login', [LoginController::class, 'create'])->name('login');
    Route::post('login', [LoginController::class, 'store']);

    // admin password reset
    Route::get('password-reset', [ForgetController::class,'password_reset'])->name('password.reset');
    Route::post('password-reset-submit', [ForgetController::class,'reset_password_submit'])->name('password.reset.submit');
    Route::get('reset-password/{token}', [ForgetController::class, 'show_reset_password_form'])->name('reset.password.form');
    Route::post('new-password-submit', [ForgetController::class, 'new_password_submit'])->name('new.password.submit');
    
    
    Route::middleware(['AdminAuth'])->group(function (){
        Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
    });

});