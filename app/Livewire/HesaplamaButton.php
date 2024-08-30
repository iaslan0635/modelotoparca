<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class HesaplamaButton extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.hesaplama-button');
    }

    public function addCalculate()
    {
        $data = [
            'session_id' => \Session::getId(),
            'product_id' => $this->product->id,
        ];

        if (auth()->check()){
            $data['user_id'] = auth()->id();
        }

        \App\Models\CalculateTool::create($data);
    }
}
