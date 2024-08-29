<?php

namespace App\Livewire\Header;

use Livewire\Attributes\On;
use Livewire\Component;

class Cart extends Component
{
    #[On('updateContent')]
    public function updateContent()
    {
        // Placeholder listener for rerender
    }

    public function render()
    {
        return view('livewire.header.cart', [
            'total' => \App\Packages\Cart::formattedTotal(),
            'subTotal' => \App\Packages\Cart::formattedSubTotal(),
            'shipping' => \App\Packages\Cart::formattedShipping(),
            'tax' => \App\Packages\Cart::formattedTax(),
            'items' => \App\Packages\Cart::getItems(),
        ]);
    }

    public function removeItem($id)
    {
        \App\Packages\Cart::removeItem($id);
    }
}
