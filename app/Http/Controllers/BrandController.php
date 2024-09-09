<?php

namespace App\Http\Controllers;

use App\Livewire\ProductFilters;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Builder;

class BrandController extends Controller
{
    public function show(Brand $brand)
    {
        $query = $brand->products();

        if (request('category')) {
            $query->whereHas('categories', function (Builder $query) {
                $query->where('slug', request('category'));
            });
        }

        $filterCategories = $query->clone()->with('categories:id,name,slug')->get("id")->pluck('categories')->flatten()->unique('name');
        $filterCategories = ProductFilters::normalizeCategories($filterCategories);

        return view('products-page', compact('query', 'filterCategories'));
    }

    public function index()
    {
        return view('brands', ['brands' => Brand::has('products')->orderBy('name')->whereNot('name', 'like', '-%')->get()]);
    }
}
