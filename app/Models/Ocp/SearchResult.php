<?php

namespace App\Models\Ocp;

use Illuminate\Database\Eloquent\Model;

class SearchResult extends Model
{
    public $timestamps = false;

    protected $casts = [
        'brands' => 'array',
    ];

    public function products()
    {
        return $this->belongsToMany(Product::class)->using(SearchResultProduct::class);
    }
}
