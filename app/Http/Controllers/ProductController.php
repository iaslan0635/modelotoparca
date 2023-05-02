<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductOem;
use App\Packages\LatestProducts;

class ProductController extends Controller
{
    public function show(Product $product)
    {
        $product->load(['brand', 'oems', 'crosses', 'alternatives']);
        $product->visit()->withIP()->withUser();

        $oems = $product->oems()->groupBy('brand')->selectRaw('brand, GROUP_CONCAT(oem) as oems')->get();
//            ->map(fn(ProductOem $oem) => ["brand" => $oem->brand, "oems" => explode(",", $oem->oem)]);

        $car_brands = $product->cars()->with('maker:id,name')->get()->groupBy('maker.name')->map(fn ($a) => $a->groupBy('short_name'));
        LatestProducts::add($product);

        $existsInCrosses = fn (Product $p) => $product->crosses->some(fn (Product $c) => $p->id === $c->id);
        $product->alternatives = $product->alternatives->reject($existsInCrosses);

        return view('product-detail', compact('product', 'oems', 'car_brands'));
    }

    public function quickview(Product $product)
    {
        $product->load('brand');
        $product->visit()->withIP()->withUser();
        LatestProducts::add($product);

        return view('quickview', compact('product'));
    }
}
