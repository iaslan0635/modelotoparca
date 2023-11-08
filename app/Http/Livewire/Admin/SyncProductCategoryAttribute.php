<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Services\Merchants\TrendyolMerchant;
use Livewire\Component;

class SyncProductCategoryAttribute extends Component
{
    public Product $product;
    public function render()
    {
        $trendyol = new TrendyolMerchant();
//        dd($trendyol->getCategoryAttributes($this->product->categories[0]->merchants()->trendyol()->first()->merchant_id));
        return view('livewire.admin.sync-product-category-attribute', [
            'attributes' => $trendyol->getCategoryAttributes($this->product->categories[0]->merchants()->trendyol()->first()->merchant_id)
        ]);
    }
}
