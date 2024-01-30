<?php

namespace App\Models;


use App\Services\Bots\OcpClient;

class BotImage extends BaseModel
{
    public function downloadImage()
    {
        $image = OcpClient::requestWithoutCache($this->url);
        return \Storage::disk("public")->put(
            "product_images/extras/{$this->id}.png",
            $image
        );
    }
}
