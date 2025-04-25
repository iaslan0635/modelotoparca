<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Product;
use App\Models\MarketplaceAccount;
use App\Models\MarketplaceProductMapping as ProductMappingModel;

class MarketplaceProductMapping extends Component
{
    public $products;
    public $marketplaceAccounts;
    public $selectedMarketplaceAccount;
    public $mappings = [];

    public function mount()
    {
        $this->marketplaceAccounts = MarketplaceAccount::where('is_active', 1)->get();
        $this->products = Product::latest()->take(50)->get(); // ilk etapta 50 ürün
    }

    public function saveMapping($productId)
    {
        $externalProductId = $this->mappings[$productId] ?? null;

        if (!$this->selectedMarketplaceAccount || !$externalProductId) {
            session()->flash('error', 'Lütfen pazaryeri ve ürün ID giriniz.');
            return;
        }

        ProductMappingModel::updateOrCreate(
            [
                'product_id' => $productId,
                'marketplace_account_id' => $this->selectedMarketplaceAccount,
            ],
            [
                'external_product_id' => $externalProductId,
                'status' => 'synced',
            ]
        );

        session()->flash('success', 'Ürün eşlemesi kaydedildi.');
    }


    public function render()
    {
        return view('livewire.panel.marketplace-product-mapping');
    }
}
