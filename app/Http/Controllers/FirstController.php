<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FirstController extends Controller
{
    public function index()
    {
        $latestProducts = Product::query()
            ->where('status', true)
            ->limit(10)
            ->latest()
            ->get();

//        $categories = Category::all()->keyBy('id');

        return view('welcome', compact('latestProducts'));
    }

}
