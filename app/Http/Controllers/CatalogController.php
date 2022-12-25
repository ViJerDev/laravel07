<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function catalog()
    {

        $products = Product::query()
            ->where('status', 1)
            ->paginate();
        return view('catalog.catalog', compact('products'));

    }

    public function category(Request $request, Category $category)
    {

        $products = $category->products()
            ->where('status', 1)
            ->paginate();
        return view('catalog.catalog', compact('products'));

    }

    public function product()
    {

    }
}
