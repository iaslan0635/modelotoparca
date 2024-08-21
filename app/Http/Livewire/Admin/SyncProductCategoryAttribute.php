<?php

namespace App\Http\Livewire\Admin;

use App\Models\Product;
use App\Services\Merchants\Hepsiburada;
use App\Services\Merchants\N11;
use App\Services\Merchants\TrendyolMerchant;
use Livewire\Component;

class SyncProductCategoryAttribute extends Component
{
    public Product $product;

    public string $type = 'trendyol';

    public function render()
    {
        try {
            if ($this->type === 'trendyol') {
                $merchant = new TrendyolMerchant();
                $merchant_id = @$this->product->categories[0]?->merchants()->trendyol()->first()->merchant_id;
            } elseif ($this->type === 'hepsiburada') {
                $merchant = new Hepsiburada();
                $merchant_id = @$this->product->categories[0]?->merchants()->hepsiburada()->first()->merchant_id;
            } elseif ($this->type === 'n11') {
                $merchant = new N11();
                $merchant_id = @$this->product->categories[0]?->merchants()->n11()->first()->merchant_id;
            }

            return $merchant_id ? view('livewire.admin.sync-product-category-attribute', [
                'attributes' => $merchant->getCategoryAttributes($merchant_id),
            ]) : '<p>Kategori sayfası alınamadı</p>';
        } catch (\Throwable $e) {
            report($e);
            return "<p>Kategori sayfası alınamadı ({$e->getMessage()})</p>";
        }
    }
}
