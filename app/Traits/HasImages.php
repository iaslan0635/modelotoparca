<?php

namespace App\Traits;

use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage;

trait HasImages
{
    public function saveImages(int $model_id, array|string $images): void
    {
        $images = Arr::wrap($images);

        $this->images()->createMany(Arr::map($images, fn ($image) => [
            'model' => self::class,
            'model_id' => $model_id,
            'path' => Storage::url($image->store('public/images')),
        ]));
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->oldestOfMany();
    }

    public function imageUrl(): string
    {
        return 'https://web.modelotoparca.com'.($this->image?->path ?? '/images/products/defaults/product-1-245x245.jpg');
    }
}
