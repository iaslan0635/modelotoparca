<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Database\Eloquent\Builder;

class BrandController extends Controller
{
    public function show(Brand $brand)
    {
        $query = $brand->products();

        if (request("category")) {
            $query->whereHas('categories', function (Builder $query) {
                $query->where('slug', request('category'));
            });
        }

        return view('products-page', compact('query'));
    }

    public function index()
    {
        return view('brands', ['brands' => Brand::has('products')->get()]);
    }
}
