<?php

namespace App\Services\Merchants;

use GuzzleHttp\Promise\PromiseInterface;
use Illuminate\Support\Collection;

interface TrackableMerchant
{
    public function getTrackingResult(string $trackingId): PromiseInterface;

    public function parseTrackingErrors(array $trackingResponse): array;
}
