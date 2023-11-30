<?php

namespace App\Http\Controllers;

use App\Models\Tracking;

class MerchantTrackingController extends Controller
{
    public function failed()
    {
        $fails = \App\Services\MarketPlace::getFailedProducts();
        $merchants = ["trendyol", "hepsiburada"];
        return view("admin.inhouse.merchant.failed-trackings", compact("merchants", "fails"));
    }
}
