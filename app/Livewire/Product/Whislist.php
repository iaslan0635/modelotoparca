<?php

namespace App\Livewire\Product;

use Livewire\Component;

class Whislist extends Component
{
    public $product;

    public $status = false;

    public function render()
    {
        if (auth()->user()?->whislist()->where('product_id', $this->product->id)->exists()) {
            $this->status = true;
        }

        return view('livewire.product.whislist');
    }

    public function addWhis()
    {
        if (! $this->status) {
            auth()->user()->whislist()->attach($this->product);
        }
    }
}
