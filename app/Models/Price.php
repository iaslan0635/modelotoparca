<?php

namespace App\Models;

use App\Events\PriceChangedEvent;
use App\Packages\PriceBuilder;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Price extends BaseModel
{
    protected $with = ['tax'];

    protected $dispatchesEvents = [
        'updated' => PriceChangedEvent::class,
    ];

    public function tax(): HasOne
    {
        return $this->hasOne(Tax::class, 'id', 'tax_id');
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function builder(): PriceBuilder
    {
        return new PriceBuilder($this);
    }

    /** Build price without discount */
    public function listingPrice(): PriceBuilder
    {
        return $this->builder()->convertToTRY()->applyDiscount()->applyTax();
    }

    /** Build price with discount */
    public function sellingPrice(): PriceBuilder
    {
        return $this->builder()->convertToTRY()->applyTax();
    }
}
