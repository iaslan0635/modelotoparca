<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Services\MarketPlace;

class MerchantTrackingController extends Controller
{
    public function failed()
    {
        $fails = self::getFailedProducts();
        $merchants = ["trendyol", "hepsiburada"];
        return view("admin.inhouse.merchant.failed-trackings", compact("merchants", "fails"));
    }

    public static function getFailedProducts($perPage = null)
    {
        // Resolve all unresolved trackings
        $latestQuery = Tracking::groupBy("product_id", "merchant")->latest();

        foreach ($latestQuery->clone()->whereNull("result")->cursor() as $tracking) {
            $merchant = MarketPlace::createTrackableMerchant($tracking->merchant);
            $result = $merchant->getTrackingResult($tracking->tracking_id);

            $result->fill($tracking);
            $tracking->save();
        }

        // Return all failed trackings
        $failedTrackings = $latestQuery->clone()->where("result", false)->with("product")->paginate($perPage);

        $items = $failedTrackings->groupBy("product.id")->map(fn($entries) => [
            "product" => $entries[0]->product,
            "merchants" => $entries->map->merchant,
            "trackings" => $entries->groupBy("merchant"),
        ]);

        return $failedTrackings->setCollection($items);
    }

}
