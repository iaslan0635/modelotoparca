<?php

namespace App\Packages;

use App\Models\Product;
use Illuminate\Http\Request;

class SubSearch
{
    public static function query(Request $request, callable|null $filterCallback = null)
    {
        $minPrice = $request->input('min_price', 0);
        $maxPrice = $request->input('max_price', 999999);
        $query = Product::query()
            ->with(['categories', 'price', 'brand'])
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->whereBetween('prices.price', [$minPrice, $maxPrice])->select('products.*')
            ->distinct();

        $filterCallback($query);
        $filters = $query->get();

        if ($request->has('sortBy') && $request->input('sortBy') === 'price-asc') {
            $query = $query->orderBy('prices.price', 'asc');
        } elseif ($request->has('sortBy') && $request->input('sortBy') === 'price-desc') {
            $query = $query->orderBy('prices.price', 'desc');
        } elseif ($request->has('sortBy') && $request->input('sortBy') === 'title-asc') {
            $query = $query->orderBy('products.title', 'asc');
        } elseif ($request->has('sortBy') && $request->input('sortBy') === 'title-desc') {
            $query = $query->orderBy('products.title', 'desc');
        }

        $brands = $query->get()->groupBy('brand_id');

        if ($request->has('brands')) {
            $query = $query->whereIn('brand_id', $request->input('brands'));
        }

        return compact('filters', 'query', 'brands');
    }
}
