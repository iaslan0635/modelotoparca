<?php

namespace App\Http\Livewire\Admin\Product;

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
        (new N11())->createProduct($this->product);
    }

    public function createHepsiburada()
    {
        (new Hepsiburada())->createProduct($this->product);
    }

    public function createTrendyol()
    {
        (new TrendyolMerchant())->createProduct($this->product);
    }
}
