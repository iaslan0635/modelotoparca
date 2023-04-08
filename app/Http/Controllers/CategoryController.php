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
       return view('categories');
    }

    public function show(Category $category)
    {
        $category->load(["children" => fn(HasMany $b) => $b->withCount("products")]);
        $category->loadCount('products');

        $tree = CategoryFacade::getTree($category->id);

        $minPrice = request()->input('min_price', 0);
        $maxPrice = request()->input('max_price', 999999);


        $parents = Category::query()->with('products')->whereIn('id', $tree["parents"])->get();
        $query = Product::query()
            ->with(['category', 'price', 'brand'])
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->whereBetween('prices.price', [$minPrice, $maxPrice])->select('products.*')
            ->distinct();

        if (request()->has('sortBy') && request()->input('sortBy') === "price-asc") {
            $query = $query->orderBy('prices.price', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "price-desc") {
            $query = $query->orderBy('prices.price', 'desc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "title-asc") {
            $query = $query->orderBy('products.title', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "title-desc") {
            $query = $query->orderBy('products.title', 'desc');
        }

        if (request()->has('brands')){
            $query = $query->whereIn('brand_id', request()->input('brands'));
        }

        $query = $query
            ->whereRelation('category', fn(Builder $q) => $q->whereIn("id", $tree["childs"]));

        $brands = $query->get()->groupBy('brand_id');

        $products = $query->paginate(12);

        return view('product-list', compact('category', 'parents', 'products', 'brands'));
    }
}
