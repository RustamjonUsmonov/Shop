<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(20);
        return view('products-index', ['products' => $products]);
    }

    public function show(int $id)
    {
        $product = Product::findOrFail($id);
        return view('single-product', ['product' => $product]);
    }
}
