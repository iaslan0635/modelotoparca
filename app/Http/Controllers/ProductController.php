<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Packages\LatestProducts;

class ProductController extends Controller
{
    public static function getViewData(Product $product) // shared between this and admin
    {
        $oems = $product->oems()->groupBy('brand')->selectRaw('brand, GROUP_CONCAT(oem) as oems')->get();
        $car_brands = $product->cars()->with('maker')->get()->groupBy('maker.name')->map(fn($a) => $a->groupBy('short_name')->all())->all();
        $tiger = $product->tiger()->first([
            "raf_no",
            "stock_on_51",
            "stock_on_38",
            "stock_on_01",
        ]);

        return compact('product', 'oems', 'car_brands', 'tiger');
    }

    public function show(Product $product)
    {
        $product->load(['brand', 'oems', 'crosses', 'alternatives']);
        $product->visit()->withIP()->withUser();

        //            ->map(fn(ProductOem $oem) => ["brand" => $oem->brand, "oems" => explode(",", $oem->oem)]);

        LatestProducts::add($product);

        $existsInCrosses = fn(Product $p) => $product->crosses->some(fn(Product $c) => $p->id === $c->id);
        $product->alternatives = $product->alternatives->reject($existsInCrosses);

        return view('product-detail', self::getViewData($product));
    }

    public function quickview(Product $product)
    {
        $product->load('brand');
        $product->visit()->withIP()->withUser();
        LatestProducts::add($product);

        return view('quickview', compact('product'));
    }
}
