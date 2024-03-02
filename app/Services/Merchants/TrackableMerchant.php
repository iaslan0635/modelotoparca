<?php

namespace App\Services\Merchants;

use GuzzleHttp\Promise\PromiseInterface;

interface TrackableMerchant extends Merchant
{
    public function getTrackingResult(string $trackingId): PromiseInterface;

    public function parseTrackingErrors(array $trackingResponse): array;
}
