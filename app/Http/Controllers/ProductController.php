<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        return $product;
    }

    public function quickview(Product $product)
    {
        $product->load('brand');
        return view('quickview', compact('product'));
    }
}
