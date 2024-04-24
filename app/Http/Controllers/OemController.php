<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Packages\SubSearch;
use App\Providers\AppServiceProvider;
use Illuminate\Database\Eloquent\Builder;

class OemController extends Controller
{
    public function show(string $oem)
    {
        extract(SubSearch::query(request(),
            fn (Builder $query) => $query->whereRelation('oems', fn ($q) => $q->where('oem', $oem))
        ));

        $products = $query->paginate(12);
        $categories = [];

        foreach ($filters as $product) {
            foreach ($product->categories as $item) {
                $categories[$item->id] = $item;
            }
        }

        [$alternatives, $similars] = Product::alternativesAndSimilars($products->getCollection());

        return view('oem-search', compact('products', 'oem', 'categories', 'brands', 'alternatives', 'similars'));
    }
}
