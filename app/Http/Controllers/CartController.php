<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $cart = session()->get('cart', []);
        $productId = $request->input('product', 0);
        if ($productId) {
            if (isset($cart[$productId])) {
                $cart[$productId] += 1;
            } else {
                $cart[$productId] = 1;
            }
        }
        session()->put('cart', $cart);
    }

    public function show(Request $request)
    {
        $cart = session()->get('cart', []);
        $productIds = array_keys($cart);
        $products = Product::query()
            ->whereIn('id', $productIds)
            ->get();
        dd($products);
    }
}
