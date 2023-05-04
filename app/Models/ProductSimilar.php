<?php

namespace App\Models;

use App\Facades\TrimFacade;
use Elastic\ScoutDriverPlus\Searchable;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ProductSimilar extends BaseModel
{
    public $timestamps = false;

    use Searchable;

    protected $searchableAs = 'product_similars_index';

    public function searchableAs()
    {
        return $this->searchableAs;
    }

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'product_id' => $this->product_id,
            'code' => $this->code,
            'code_regex' => TrimFacade::cleanText($this->code)
        ];
    }

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
