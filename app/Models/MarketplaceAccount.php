<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'marketplace_id',
        'store_name',
        'api_key',
        'api_secret',
        'settings',
        'is_active', // ekle
    ];



    public function marketplace()
    {
        return $this->belongsTo(Marketplace::class);
    }

}
