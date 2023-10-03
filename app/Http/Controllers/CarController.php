<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Packages\SubSearch;
use Illuminate\Database\Eloquent\Builder;

class CarController extends Controller
{
    public function show($permalink)
    {
        $car = Car::query()->where('permalink', '=', $permalink)->firstOrFail();
        extract(SubSearch::query(request(),
            fn (Builder $query) => $query->whereRelation('cars', fn ($q) => $q->where('id', $car->id))
        ));

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
