<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $categories = Category::root()->limit(15)->orderBy('order')->get(['slug', 'name', 'id']);
        $featured_products = Product::query()->limit(20)->with('price:id,price,currency,product_id')->get(['id', 'slug', 'sku', 'title', 'image_appendix']);

        return view('home', compact('categories', 'featured_products'));
    }
}
