<?php

namespace App\Services\Merchants;

use App\Models\Tracking;

class TrackingResult
{
    public function __construct(
        public string $trackingId,
        public bool $success,
        public object|array $result,
    ) {
    }

    /** Sonuç verilerini modele ekle */
    public function fill(Tracking $trackingModel): void
    {
        $trackingModel->fill([
            'success' => $this->success,
            'result' => (array) $this->result,
        ]);
    }

    /** Sonuç verilerini belirleyici veriler ile birlikte modele ekle */
    public function fillWithId(Tracking $trackingModel): void
    {
        $this->fill($trackingModel);
        $trackingModel->fill([
            'tracking_id' => $this->trackingId,
        ]);
    }
}
