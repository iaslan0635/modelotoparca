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
        return $this->product->botImages()->get();
    }

    public function reject(int $id)
    {
        BotImage::where('id', $id)->update(['rejected' => true]);
    }

    public function accept(int $id)
    {
        $botImage = BotImage::findOrFail($id);
        $botImage->downloadAndAssociateImage();
    }

    public function intermediate(int $id)
    {
        $image = BotImage::findOrFail($id);
        $image->update(['rejected' => false]);
        if ($image->image_id !== null) {
            $image->removeImage();
        }
    }
}
