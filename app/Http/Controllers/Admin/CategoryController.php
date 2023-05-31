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
    public function index()
    {
        $categories = Category::paginate();
        return view("admin.apps.ecommerce.catalog.categories", compact("categories"));
    }

    public function show(Category $category)
    {
        return view("admin.apps.ecommerce.catalog.edit-category", compact("category"));
    }

    public function push_image(Category $category, Request $request)
    {
        $file = $request->file("file")->storePublicly("images");
        abort_unless($file, 400, "Unable to read file");
        $category->image()->create(["path" => $file]);
        return "success";
    }
}
