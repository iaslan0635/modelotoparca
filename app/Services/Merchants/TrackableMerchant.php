<?php

namespace App\Services\Merchants;

interface TrackableMerchant
{
    public function getTrackingResult(string $trackingId): TrackingResult;
}
