<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TigerProduct extends BaseModel
{
    public function vehicles(): BelongsToMany
    {
        return $this->belongsToMany(Car::class);
    }

    public function oems(): HasMany
    {
        return $this->hasMany(ProductOem::class);
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
                        'message' => "Değişiklik yapıldı \n Eski: $old, Yeni: $new",
                    ]);
                }
            }
        });
    }
}
