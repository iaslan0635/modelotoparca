<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TigerProduct extends BaseModel
{
    public function getForeignKey()
    {
        return "product_id";
    }

    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Car::class, 'product_cars', 'logicalref', 'car_id');
    }

    public function oems(): HasMany
    {
        return $this->hasMany(ProductOem::class, "logicalref");
    }

    public function similars(): HasMany
    {
        return $this->hasMany(ProductSimilar::class);
    }

    protected static function booted()
    {
        self::saved(function ($model) {
            $changes = $model->getChanges();
            if (! empty($changes)) {
                foreach ($changes as $column => $new) {
                    $old = $model->getOriginal($column);
                    Log::create([
                        'product_id' => $model->id,
                        'message' => "Değişiklik yapıldı Kolon : $column \n Eski: $old, Yeni: $new",
                    ]);
                }
            }
        });
    }
}
