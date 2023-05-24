<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate();
        return view("admin.apps.ecommerce.catalog.products", compact("products"));
    }

    public function show(Product $product)
    {
        return view("admin.apps.ecommerce.catalog.edit-product", compact("product"));
    }

    public function update(Request $request, int $id)
    {

    }
}
