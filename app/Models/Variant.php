<?php

namespace App\Models;

use App\Events\ProductVariantChangedEvent;
use App\Events\ProductVariantCreatedEvent;
use Coderflex\Laravisit\Concerns\CanVisit;
use Coderflex\Laravisit\Concerns\HasVisits;

class Variant extends BaseModel implements CanVisit
{
    use HasVisits;

    protected $dispatchesEvents = [
        'updated' => ProductVariantChangedEvent::class,
        'created' => ProductVariantCreatedEvent::class,
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
