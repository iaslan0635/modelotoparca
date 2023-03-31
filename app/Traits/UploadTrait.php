<?php

namespace App\Traits;


use App\Models\Image;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\Storage;

trait UploadTrait{
    public function saveImages($model_id, $images)
    {
        foreach ($images as $image){
            $this->images()->create([
                'model' => self::class,
                'model_id' => $model_id,
                'path' => Storage::url($image->store('public/images')),
            ]);
        }
    }

    public function images(): HasMany
    {
        return $this->hasMany(Image::class, 'model_id')
            ->where('model', '=', self::class);
    }
}
