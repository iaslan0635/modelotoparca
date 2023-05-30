<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $categories = Product::paginate();
        return view("admin.apps.ecommerce.catalog.categories", compact("categories"));
    }

    public function show(Category $category)
    {
        return view("admin.apps.ecommerce.catalog.edit-product", compact("category"));
    }
}
