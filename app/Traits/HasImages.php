<?php

namespace App\Traits;

use App\Models\Image;
use Exception;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Collection;

trait HasImages
{
    public function storeImage(UploadedFile $image): void
    {
        $path = $image->storePublicly('images', ['disk' => 'public']);
        if (! $path) {
            throw new Exception('Unable to store image');
        }
        $this->images()->create(['path' => $path]);
    }

    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, 'imageable');
    }

    public function image(): MorphOne
    {
        return $this->morphOne(Image::class, 'imageable')->oldestOfMany();
    }

    /**
     * Default can be a closure that returns default image url
     * If default is null, it will return the predefined default image url
     *
     * @return mixed|string
     */
    public function imageUrl($default = null)
    {
        return $this->image?->url ?? (($default === null ? $this->defaultImage() : value($default)));
    }

    public function defaultImage(): string
    {
        return asset('/images/products/defaults/product-1.jpg');
    }

    public function imageUrls(): Collection
    {
        return $this->images->map(fn (Image $image) => $image->url);
    }
}
