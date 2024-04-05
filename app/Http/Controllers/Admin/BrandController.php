<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\MerchantBrandConnect;
use App\Models\TrendyolBrand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandSync()
    {
        return view('admin.apps.ecommerce.catalog.sync-brands', ['brands' => Brand::orderBy('name')->paginate(20)]);
    }

    public function updateBrandConnection(Request $request)
    {
        $merchantBrandId = $request->input('merchantBrandId');
        $brandId = $request->input('brandId');

        MerchantBrandConnect::updateOrCreate([
            'merchant' => 'trendyol',
            'brand_id' => $brandId,
        ], [
            'merchant_id' => $merchantBrandId,
        ]);
    }

    public function searchTrendyolBrands(Request $request)
    {
        $term = $request->input('term');

        return [
            'results' => TrendyolBrand::whereFullText('name', $term)->get(['id', 'name as text']),
        ];
    }

    public function index()
    {
        $brands = Brand::query();

        if ($search = request('search')) {
            $brands->where('name', 'like', "%$search%");
        }

        return view('admin.inhouse.brands.index', [
            'brands' => $brands->paginate(),
        ]);
    }

    public function update(Brand $brand)
    {
        $data = request()->validate([
            'name' => 'nullable',
            'slug' => 'nullable',
            'botname' => 'nullable',
        ]);

        if (\request()->hasFile('image')) {
            $imagePath = \request()->file('image')->store('images/brands', 'public');
            $brand->image()->updateOrCreate([], ['path' => $imagePath]);
        }

        $brand->update($data);

        return redirect()->route('admin.brands.index');
    }

    public function edit(Brand $brand)
    {
        return view('admin.inhouse.brands.edit', compact('brand'));
    }
}
