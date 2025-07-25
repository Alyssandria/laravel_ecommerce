<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartItemController;

Route::middleware(['auth'])
    ->group(function () {
        Route::post('/cart/{id}', [CartItemController::class, 'store'])
            ->name('cart.add');
    });
