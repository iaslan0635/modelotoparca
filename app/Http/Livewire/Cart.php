<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Cart extends Component
{
    public string $total = "0 ₺";
    public string $subTotal = "0 ₺";
    public string $shipping = "0 ₺";
    public string $tax = "0 ₺";
    public array $items = [];

    protected $listeners = ['updateContent'];

    public function updateContent()
    {
        $this->total = \App\Packages\Cart::formattedTotal();
        $this->subTotal = \App\Packages\Cart::formattedSubTotal();
        $this->shipping = \App\Packages\Cart::formattedShipping();
        $this->tax = \App\Packages\Cart::formattedTax();
        $this->items = \App\Packages\Cart::getItems();
    }

    public function render()
    {
        $this->updateContent();
        return view('livewire.cart');
    }

    public function add($id, $quantity)
    {
        \App\Packages\Cart::updateItem($id, $quantity);

        $this->updateContent();
    }

    public function sub($id, $quantity)
    {
        \App\Packages\Cart::updateItem($id, $quantity);

        $this->updateContent();
    }

    public function removeItem($id)
    {
        \App\Packages\Cart::removeItem($id);

        $this->updateContent();
    }
}
