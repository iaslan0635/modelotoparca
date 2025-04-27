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
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function marketplaceProduct()
    {
        return $this->belongsTo(MarketplaceProduct::class, 'external_product_id');
    }
}
