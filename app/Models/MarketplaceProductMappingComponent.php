<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Product;
use App\Models\MarketplaceAccount;
use App\Models\MarketplaceProductMapping as ProductMappingModel;

class MarketplaceProductMappingComponent extends Component
{
    public $products = [];
    public $marketplaceProducts = [];
    public $selectedMarketplaceAccount = null;
    public string $searchProduct = '';
    public string $searchMarketplaceProduct = '';
    public $selectedMappings = [];

    public function mount()
    {
        $this->products = $this->fetchProducts();
        $this->marketplaceProducts = $this->fetchMarketplaceProducts();
    }

    public function fetchProducts()
    {
        return Product::latest()->take(50)->get();
    }

    public function fetchMarketplaceProducts()
    {
        return \App\Models\MarketplaceProduct::latest()->take(50)->get();
    }

    public function updatedSearchProduct()
    {
        $this->products = $this->fetchProducts();
    }

    public function updatedSearchMarketplaceProduct()
    {
        $this->marketplaceProducts = $this->fetchMarketplaceProducts();
    }

    public function saveMapping($productId)
    {
        $selectedMarketplaceProductId = $this->selectedMappings[$productId] ?? null;

        if (!$selectedMarketplaceProductId) {
            session()->flash('error', 'Pazaryeri ürünü seçilmedi.');
            return;
        }

        ProductMappingModel::updateOrCreate(
            [
                'product_id' => $productId,
                'marketplace_account_id' => $this->selectedMarketplaceAccount,
            ],
            [
                'external_product_id' => $selectedMarketplaceProductId,
                'status' => 'synced',
            ]
        );

        session()->flash('success', 'Eşleme başarılı.');
    }

    public function render()
    {
        return view('livewire.panel.marketplace-product-mapping-component');
    }
}
