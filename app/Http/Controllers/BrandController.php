<?php

namespace App\Http\Controllers;

use App\Livewire\ProductFilters;
use App\Models\Brand;
use App\Models\Category;
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

        $filterCategories = $query->clone()
            ->with(relations: 'categories:id,name,slug,parent_id')
            ->get("id")->pluck('categories')->flatten()->unique('name');

        $parentCategoryIds = $filterCategories->whereNotNull('parent_id')->pluck('parent_id')->unique();

        $categories = Category::whereIn('id', $parentCategoryIds)
            ->with(['children' => function ($query) use ($filterCategories) {
                $query->whereIn('id', $filterCategories->pluck('id'));
            }])
            ->get();


        $filterCategories = ProductFilters::normalizeCategories($categories);

        return view('products-page', compact('query', 'filterCategories', 'brand'));
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