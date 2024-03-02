<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Services\MarketPlace;
use Livewire\Component;

class MarketPlaceStatus extends Component
{
    public Product $product;

    public ?array $statuses = null;

    public function render()
    {
        return view('livewire.admin.market-place-status');
    }

    public function loadData()
    {
        $this->statuses = MarketPlace::getProductExistence($this->product);
    }
}
