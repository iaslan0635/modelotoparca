<?php

namespace App\Http\Livewire;

use App\Packages\Cart;
use Livewire\Component;

class AddToCart extends Component
{
    public $product;
    public int $quantity = 1;

    public function render()
    {
        return view('livewire.add-to-cart');
    }

    public function addToCart()
    {
        Cart::addItem($this->product->title, $this->product->price->price, quantity: $this->quantity, attributes: [], model: $this->product);
        $this->emit('updateContent');
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
