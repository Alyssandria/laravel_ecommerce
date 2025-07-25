<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('app.home')->middleware('auth');

Route::get('/shop', [ProductController::class, 'index'])
    ->name('app.shop');
