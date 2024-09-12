<?php

namespace App\Livewire;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Cart extends Component
{
    use LivewireAlert;
    public string $total = '0 ₺';

    public string $subTotal = '0 ₺';

    public string $shipping = '0 ₺';

    public string $tax = '0 ₺';
    public string $coupon = '';

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

    public function addCoupon()
    {
        $add = \App\Packages\Cart::addCoupon($this->coupon);

        if (!$add){
            $this->alert('success', 'Kupon kodu bulunamadı');
        }

        $this->updateContent();
    }
}
