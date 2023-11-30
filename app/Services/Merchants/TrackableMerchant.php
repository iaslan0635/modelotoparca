<?php

namespace App\Services\Merchants;

use Illuminate\Support\Collection;

interface TrackableMerchant
{
    public function getTrackingResult(string $trackingId): TrackingResult;

    public function parseTrackingErrors(array $trackingResponse): array;
}
