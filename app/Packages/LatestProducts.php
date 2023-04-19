<?php

namespace App\Packages;

use Illuminate\Support\Facades\Session;

class LatestProducts
{
    public static function add($product)
    {
        $items = Session::get('latest.products', []);
        if (! array_key_exists($product->id, $items)) {
        $items[$product->id] = $product;
        }

        Session::put('latest.products', $items);
    }

    public static function items()
    {
        return Session::get('latest.products', []);
    }
}
