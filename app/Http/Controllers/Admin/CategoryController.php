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
        $categories = $this->search(Category::query(), 'name')->paginate();

        return view('admin.apps.ecommerce.catalog.categories', compact('categories'));
    }

    public function show(Category $category)
    {
        return view('admin.apps.ecommerce.catalog.edit-category', compact('category'));
    }

    public function update(Category $category, Request $request)
    {
        $category->hide_in_sidebar = $request->input("hide_in_sidebar", "off") === "on";
        $category->save();
        return redirect()->route('admin.categories.index');
    }

    public function categorySync()
    {
        return view('admin.apps.ecommerce.catalog.sync-categories');
    }

    public function push_image(Category $category, Request $request)
    {
        return $this->storeImage($category, $request);
    }
}
