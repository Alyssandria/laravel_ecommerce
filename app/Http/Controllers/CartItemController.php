<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class CartItemController extends Controller
{
    public function store(Request $request, $productId): RedirectResponse
    {
        // CREATES OR FINDS THE CART OF THE CURRENT USER
        $cart = $request->user()->cart()->firstOrCreate([]);

        $cart->cartItems()->create([
            'product_id' => $productId,
            'quantity' => 1
        ]);

        return to_route('app.shop');
    }
}
