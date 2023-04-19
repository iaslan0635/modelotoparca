<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index($permalink)
    {
        $car = Car::query()->where('permalink', '=', $permalink)->firstOrFail();
        $minPrice = request()->input('min_price', 0);
        $maxPrice = request()->input('max_price', 999999);
        $query = Product::query()
            ->with(['category', 'price', 'brand'])
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->whereBetween('prices.price', [$minPrice, $maxPrice])->select('products.*')
            ->whereRelation('cars', function ($q) use ($car) {
                return $q->where('id', $car->id);
            })
            ->distinct();
        $filters = $query->get();

        if (request()->has('sortBy') && request()->input('sortBy') === "price-asc") {
            $query = $query->orderBy('prices.price', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "price-desc") {
            $query = $query->orderBy('prices.price', 'desc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "title-asc") {
            $query = $query->orderBy('products.title', 'asc');
        } elseif (request()->has('sortBy') && request()->input('sortBy') === "title-desc") {
            $query = $query->orderBy('products.title', 'desc');
        }

        $brands = $query->get()->groupBy('brand_id');

        if (request()->has('brands')) {
            $query = $query->whereIn('brand_id', request()->input('brands'));
        }


        $products = $query->paginate(12);
        $categories = [];

        foreach ($filters as $product) {
            foreach ($product->categories as $item) {
                $categories[$item->id] = $item;
            }
        }

        return view('car-search', compact('products', 'car', 'categories', 'brands'));
    }
}
