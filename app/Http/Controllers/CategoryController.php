<?php

namespace App\Http\Controllers;

use App\Facades\CategoryFacade;
use App\Models\Category;
use App\Models\Product;
use App\Models\Property;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::root()->with('image')->orderBy('order')->get();

        return view('categories', compact('categories'));
    }

    public function show(Category $category)
    {
        $category->load('properties');
        $tree = CategoryFacade::getTree($category->id);

        $minPrice = request()->input('min_price', 0);
        $maxPrice = request()->input('max_price', 999999);

        $parents = Category::query()->with('products')->whereIn('id', $tree['parents'])->get();
        $query = Product::query()
            ->with(['categories', 'price', 'brand'])
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->whereBetween('prices.price', [$minPrice, $maxPrice])->select('products.*')
            ->distinct();

        if (request()->has('sortBy') && request()->input('sortBy') === 'price-asc') {
            $query->orderBy('prices.price', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === 'price-desc') {
            $query->orderBy('prices.price', 'desc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === 'title-asc') {
            $query->orderBy('products.title', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === 'title-desc') {
            $query->orderBy('products.title', 'desc');
        }

        foreach (request()->input('property') as $key => $values){
            $query->whereHas("propertyValues", function (Builder $builder) use ($values, $key) {
                $builder->where("property_id", $key)->whereIn("value", $values);
            });
        }

        $query->whereRelation('categories', fn(Builder $q) => $q->whereIn('id', $tree['childs']));

        $brands = $query->get()->groupBy('brand_id');

        if (request()->has('brands')) {
            $query->whereIn('brand_id', request()->input('brands'));
        }

        $pids = $query->get()->map(function ($item) {
            return $item->id;
        });

        $category->load([
            'children' => function (HasMany $b) use ($pids) {
                $b->whereHas('products', function ($q) use ($pids) {
                    $q->whereIn('id', $pids);
                })->withCount(['products' => function ($query) use ($pids) {
                    $query->whereIn('id', $pids);
                }]);
            },
        ]);
        $category->loadCount('products');

        $products = $query->paginate(12);

        return view('product-list', compact('category', 'parents', 'products', 'brands'));
    }
}
