<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;

class MerchantProductController extends Controller
{
    public function index()
    {
        $query = Product::whereHas('merchants');

        return ProductController::tableResponse($query);
    }

    public function onSaleIndex()
    {
//        $query = Product::whereHas('merchants')->where('ecommerce', true);
        $query = Product::where('ecommerce', true);

        return ProductController::tableResponse($query);
    }
}
