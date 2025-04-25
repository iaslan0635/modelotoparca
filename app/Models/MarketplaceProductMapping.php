<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MarketplaceProductMapping extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'marketplace_account_id',
        'external_product_id',
        'status',
        'sync_log',
    ];
}
