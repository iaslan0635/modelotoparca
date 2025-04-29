<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketplaceProduct extends Model
{
    protected $table = 'marketplace_products';

    protected $fillable = [
        'marketplace_id',
        'marketplace_product_id',
        'name',
        'sku',
        'barcode',
        'stock',
        'price',
        'attributes',
        'raw',
    ];

    protected $casts = [
        'attributes' => 'array',
        'raw' => 'array',
    ];
}
