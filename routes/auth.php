<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'createLogin'])->name('login');
Route::get('/register', [AuthController::class, 'createRegister'])->name('register');

// CREDENTIALS SUBMIT
Route::post('auth/login', [AuthController::class, 'store'])->name('login.submit');
Route::post('auth/register', [AuthController::class, 'create'])->name('register.submit');

// OAUTH
Route::get('/auth/redirect/{provider}', [AuthController::class, 'oAuthRedirect']);
Route::get('/auth/callback/{provider}', [AuthController::class, 'oAuthCallback']);
