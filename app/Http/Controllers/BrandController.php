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
                $query->where('id', request('category'));
            });
        }

        $filterCategories = $query->clone()->with('categories:id,name,slug')->get("id")->pluck('categories')->flatten()->unique('name');
        $filterCategories = ProductFilters::normalizeCategories($filterCategories);
        return $filterCategories;

        return view('products-page', compact('query', 'filterCategories'));
    }

    public function index()
    {
        $query = Brand::has('products')->orderBy('name')->whereNot('name', 'like', '-%');
        return view('brands', [
            'brands' => $query->clone()->get(),
            'featuredBrands' => $query->clone()->where('is_featured', true)->get(),
        ]);
    }
}