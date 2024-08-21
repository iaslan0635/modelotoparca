<?php

namespace App\Models;

use App\Services\Bots\OcpClient;

class BotImage extends BaseModel
{
    public $timestamps = false;

    public function image()
    {
        return $this->belongsTo(Image::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function downloadImage()
    {
        $image = OcpClient::request($this->url);

        $stem = "product_images/extras/$this->id";
        $path = "$stem.jpg";
        $suffix = 0;
        while (file_exists($path)) {
            $path = "$stem-$suffix.jpg";
            $suffix++;
        }

        \Storage::disk('public')->put($path, $image);

        return $path;
    }

    public function downloadAndAssociateImage()
    {
        $localImagePath = $this->downloadImage();
        $image = $this->product->images()->updateOrCreate(
            ['path' => $localImagePath],
            ['from_bot' => true]
        );

        $this->update(['image_id' => $image->id]);
    }

    public function removeImage()
    {
        $this->image->deleteFile();
        $this->image->delete();
        $this->update(['image_id' => null]);
    }
}
