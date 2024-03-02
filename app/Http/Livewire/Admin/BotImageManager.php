<?php

namespace App\Http\Livewire\Admin;

use App\Models\BotImage;
use App\Models\Product;
use Livewire\Component;

class BotImageManager extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.admin.bot-image-manager');
    }

    public function getImages()
    {
        return $this->product->botImages()->where('rejected', false)->whereNull('image_id')->get();
    }

    public function decline(int $id)
    {
        BotImage::where('id', $id)->update(['rejected' => true]);
    }

    public function accept(int $id)
    {
        $botImage = BotImage::where('id', $id)->firstOrFail();
        $localImagePath = $botImage->downloadImage();
        $image = $this->product->images()->create([
            'path' => $localImagePath,
            'from_bot' => true,
        ]);

        $botImage->update(['image_id' => $image->id]);
    }
}
