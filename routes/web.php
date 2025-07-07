<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

Route::get('/', function () {
    return view('welcome');
})->name('app.home');

Route::get('/auth/redirect/{provider}', function ($provider) {
    return Socialite::driver($provider)->redirect();
});
Route::get('/auth/callback/{provider}', [UserController::class, 'handleOauthCallback']);
