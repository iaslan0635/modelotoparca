<?php

namespace App\Livewire\Admin\Product;

use App\Models\Product;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrendyolMerchant;
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
        (new N11())->sendProduct($this->product);
    }

    public function createHepsiburada()
    {
        (new Hepsiburada())->sendProduct($this->product);
    }

    public function createTrendyol()
    {
        (new TrendyolMerchant())->sendProduct($this->product);
    }
}
