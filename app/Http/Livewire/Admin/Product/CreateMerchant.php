<?php

namespace App\Http\Livewire\Admin\Product;

use App\Models\Product;
use App\Services\Merchants\N11;
use Livewire\Component;

class CreateMerchant extends Component
{
    public Product $product;
    public function render()
    {
        return view('livewire.admin.product.create-merchant');
    }

    public function createN11()
    {
        $n11 = new N11();
        $n11->createProduct($this->product);
    }
}
