<?php

namespace App\Http\Controllers;

use App\Models\Tracking;

class MerchantTrackingController extends Controller
{
    public function failed()
    {
        $fails = Tracking::with("product")->paginate(10);
        $merchants = ["trendyol", "hepsiburada"];
        return view("admin.inhouse.merchant.trackings", compact("merchants", "fails"));
    }
}
