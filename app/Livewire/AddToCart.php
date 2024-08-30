<?php

namespace App\Livewire;

use App\Packages\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;

    public bool $quantity_mode = true;

    public bool $quickview = false;

    public int $quantity = 1;

    public function render()
    {
        return view('livewire.add-to-cart');
    }

    public function addToCart()
    {
        Cart::addItem($this->product->full_title, $this->product->price->sellingPrice()->getValue(), quantity: $this->quantity, attributes: [], model: $this->product);
        $this->dispatch('updateContent');
    }

    public function add()
    {
        $this->quantity += 1;
    }

    public function sub()
    {
        if ($this->quantity > 1) {
            $this->quantity -= 1;
        }
    }
}
