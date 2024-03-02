<?php

namespace App\Http\Controllers;

use App\Models\Tracking;
use App\Services\MarketPlace;
use App\Services\Merchants\TrackingResult;
use GuzzleHttp\Promise;

class MerchantTrackingController extends Controller
{
    public function failed()
    {
        return view('admin.inhouse.merchant.failed-trackings', self::getFailedProducts());
    }

    public static function getFailedProducts($perPage = null)
    {
        // Resolve all unresolved trackings
        $latestQuery = Tracking::groupBy('product_id', 'merchant')->latest();
        $trackings = $latestQuery->clone()->whereNull('success')->get();

        $fetchedTrackingCount = $trackings->count();

        $fetchStart = hrtime(true);
        $promises = $trackings->map(fn ($tracking) => MarketPlace::createTrackableMerchant($tracking->merchant)->getTrackingResult($tracking->tracking_id));

        /** @var array<array-key, TrackingResult> $trackingResults */
        $trackingResults = Promise\Utils::all($promises->all())->wait();
        $fetchEnd = hrtime(true);

        foreach ($trackingResults as $trackingResult) {
            $tracking = $trackings->firstWhere('tracking_id', $trackingResult->trackingId);
            $trackingResult->fill($tracking);
            $tracking->save();
        }

        // Return all failed trackings
        $failedTrackings = $latestQuery->clone()->where('success', false)->with('product')->paginate($perPage);

        $items = $failedTrackings->groupBy('product.id')->map(fn ($entries) => [
            'product' => $entries[0]->product,
            'merchants' => $entries->map->merchant,
            'trackings' => $entries->groupBy('merchant'),
        ]);

        return [
            'fails' => $failedTrackings->setCollection($items),
            'fetchCount' => $fetchedTrackingCount,
            'fetchTime' => $fetchEnd - $fetchStart,
        ];
    }
}
