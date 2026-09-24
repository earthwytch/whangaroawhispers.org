<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('guest')->group(function () {
    Route::view('login', 'auth.login')->name('login');
    Route::post('login', [AuthController::class, 'login'])->middleware('throttle:login');
    
    Route::view('register', 'auth.register')->name('register');
    Route::post('register', [AuthController::class, 'register']);
    
    Route::view('forgot-password', 'auth.forgot-password')->name('password.request');
    Route::post('forgot-password', [AuthController::class, 'sendResetLink'])->name('password.email');
    
    Route::get('reset-password/{token}', [AuthController::class, 'showResetPassword'])->name('password.reset');
    Route::post('reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
    
    Route::get('auth/google/redirect', [AuthController::class, 'googleRedirect'])->name('google.login');
    Route::get('auth/google/callback', [AuthController::class, 'googleCallback']);
});

// Protected routes
Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::put('profile', [AuthController::class, 'updateProfile'])->name('profile.update');
    Route::post('logout', [AuthController::class, 'logout'])->name('logout');
});