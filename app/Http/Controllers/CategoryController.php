<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::root()->with('image')->orderBy('order')->get();

        return view('categories', compact('categories'));
    }
}
