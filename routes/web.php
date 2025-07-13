<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('index');
})->name('app.home');

Route::get('/login', function () {
    return view('auth.login');
})->name('app.auth.login');

Route::get('/signin', function () {
    return view('auth.signin');
})->name('app.auth.signin');

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
});
Route::get('/auth/callback/{provider}', [UserController::class, 'handleOauthCallback']);
