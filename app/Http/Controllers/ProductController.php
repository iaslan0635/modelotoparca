<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOem;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->load(['brand', 'oems']);

        $oems = $product->oems()->groupBy('brand')->selectRaw("brand, GROUP_CONCAT(oem) as oems")->get();
//            ->map(fn(ProductOem $oem) => ["brand" => $oem->brand, "oems" => explode(",", $oem->oem)]);

        return view('product-detail', compact('product', 'oems'));
    }

    public function quickview(Product $product)
    {
        $product->load('brand');
        return view('quickview', compact('product'));
    }
}
