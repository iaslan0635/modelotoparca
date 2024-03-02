<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;

class MerchantBrandConnect extends BaseModel
{
    public function scopeN11(Builder $query)
    {
        return $query->where('merchant', '=', 'n11');
    }

    public function scopeTrendyol(Builder $query)
    {
        return $query->where('merchant', '=', 'trendyol');
    }

    public function scopeHepsiburada(Builder $query)
    {
        return $query->where('merchant', '=', 'hepsiburada');
    }
}
