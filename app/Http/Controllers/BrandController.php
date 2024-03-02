<?php

namespace App\Http\Controllers;

use App\Models\Brand;

class BrandController extends Controller
{
    public function show(Brand $brand)
    {
        $products = $brand->products()->paginate(10);

        return view('products-page', compact('products'));
    }
}
