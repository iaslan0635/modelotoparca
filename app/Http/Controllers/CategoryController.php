<?php

namespace App\Http\Controllers;

use App\Facades\CategoryFacade;
use App\Facades\Garage;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::root()->with('image')->orderBy('order')->get();

        return view('categories', compact('categories'));
    }
}
