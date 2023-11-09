<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\MerchantBrandConnect;
use App\Models\TrendyolBrand;
use App\Services\Merchants\TrendyolMerchant;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function brandSync()
    {
        $trendyol = new TrendyolMerchant();
        $trendyolBrands = TrendyolBrand::all();
        return view('admin.apps.ecommerce.catalog.sync-brands', ["brands" => Brand::paginate(20), "trendyolBrands" => $trendyolBrands]);
    }

    public function updateBrandConnection(Request $request)
    {
        $merchantBrandId = $request->input("merchantBrandId");
        $brandId = $request->input("brandId");

        MerchantBrandConnect::updateOrCreate([
            "merchant" => "trendyol",
            "brand_id" => $brandId,
        ], [
            "merchant_id" => $merchantBrandId,
        ]);
    }
}
