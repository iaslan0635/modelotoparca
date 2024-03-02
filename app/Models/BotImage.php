<?php

namespace App\Models;

use App\Services\Bots\OcpClient;

class BotImage extends BaseModel
{
    public $timestamps = false;

    public function downloadImage()
    {
        $image = OcpClient::requestWithoutCache($this->url);
        $path = "product_images/extras/{$this->id}.png";
        \Storage::disk('public')->put($path, $image);

        return $path;
    }
}
