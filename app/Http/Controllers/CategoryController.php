<?php

namespace App\Http\Controllers;

use App\Facades\CategoryFacade;
use App\Models\Category;
use App\Models\Product;
use BlueM\Tree;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryController extends Controller
{
    public function index()
    {
        //
    }

    public function show(Category $category)
    {

        $category->load(["children" => fn(HasMany $b) => $b->withCount("products")]);
        $category->loadCount('products');

        $tree = CategoryFacade::getTree($category->id);

        $parents = Category::query()->with('products')->whereIn('id', $tree["parents"])->get();
        $products = Product::query()->with('category')->whereRelation('category', fn(Builder $q) => $q->whereIn("id", $tree["childs"]))->paginate(10);
        return view('product-list', compact('category', 'parents', 'products'));
    }
}
