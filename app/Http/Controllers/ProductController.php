<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Http::get("https://api.escuelajs.co/api/v1/products")->json();
        return view("products.products", compact("products"));
    }
}
