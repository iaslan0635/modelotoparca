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

        // İlk önce markanın tüm kategorilerini çek
        $initialCategories = $query->clone()
            ->with('categories:id,name,slug,parent_id')
            ->get('id')
            ->pluck('categories')
            ->flatten()
            ->unique('id');

        // Üst kategorileri topla
        $parentCategories = $initialCategories
            ->map(function ($category) {
                return $category->parent;
            })
            ->filter()
            ->unique('id')
            ->values();

        // Her üst kategoriye ait alt kategorileri ekle
        $filterCategories = $parentCategories->map(function ($parentCategory) use ($initialCategories) {
            return $parentCategory->setAttribute(
                'children',
                $initialCategories->when($parentCategory, function ($collection, $parent) {
                    return $collection->where('parent_id', $parent->id);
                })->values()
            );
        });

        dd($filterCategories);

        $filterCategories = ProductFilters::normalizeCategories($filterCategories);

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