<?php

namespace App\Livewire;

use App\Models\CalculateTool as CalculateToolModel;
use App\Models\Product;
use Livewire\Attributes\Computed;
use Livewire\Component;

class HesaplamaButton extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.hesaplama-button');
    }

    public function toggleCalculate()
    {
        if ($this->exists()) {
            CalculateToolModel::forUser()->where('product_id', $this->product->id)->delete();
        } else {
            $data = [
                'session_id' => \Session::getId(),
                'product_id' => $this->product->id,
            ];

            if (auth()->check()) {
                $data['user_id'] = auth()->id();
            }

            CalculateToolModel::create($data);
        }
    }

    public function exists(): bool
    {
        return CalculateToolModel::forUser()->where('product_id', $this->product->id)->exists();
    }
}
