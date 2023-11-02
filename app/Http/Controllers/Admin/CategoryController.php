<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ManagesImages;

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::paginate();

        return view('admin.apps.ecommerce.catalog.categories', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('admin.apps.ecommerce.catalog.edit-category', compact('category'));
    }

    public function categorySync()
    {
        $categories = Category::all();
        return view('admin.apps.ecommerce.catalog.sync-categories', compact('categories'));
    }

    public function push_image(Category $category, Request $request)
    {
        return $this->storeImage($category, $request);
    }
}
