<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Product;
use App\Models\MarketplaceProduct;
use App\Models\MarketplaceAccount;
use App\Models\MarketplaceProductMapping;

class MarketplaceProductMappingComponent extends Component
{
    public $products = [];
    public $marketplaceProducts = [];
    public $marketplaceAccounts = [];
    public $selectedMappings = [];
    public $selectedMarketplaceAccount = null;
    public $searchProduct = '';
    public $searchMarketplaceProduct = '';
    public $existingMappings = [];

    public function mount()
    {
        $this->marketplaceAccounts = MarketplaceAccount::all();
        $this->products = $this->fetchProducts();
        $this->marketplaceProducts = $this->fetchMarketplaceProducts();
        $this->existingMappings = MarketplaceProductMapping::with(['product', 'marketplaceProduct'])->get();
    }

    public function fetchProducts()
    {
        return Product::query()
            ->where('ecommerce', 1)
            ->when($this->searchProduct, function ($query) {
                $query->where(function($q) {
                    $q->where('title', 'like', '%' . $this->searchProduct . '%')
                        ->orWhere('producercode', 'like', '%' . $this->searchProduct . '%');
                });
            })
            ->latest()
            ->take(50)
            ->get();
    }

    public function fetchMarketplaceProducts()
    {
        return MarketplaceProduct::query()
            ->when($this->searchMarketplaceProduct, function ($query) {
                $query->where(function($q) {
                    $q->where('name', 'like', '%' . $this->searchMarketplaceProduct . '%')
                        ->orWhere('sku', 'like', '%' . $this->searchMarketplaceProduct . '%');
                });
            })
            ->latest()
            ->take(50)
            ->get();
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
        try {
            $marketplaceProductId = $this->selectedMappings[$productId] ?? null;

            if (!$this->selectedMarketplaceAccount) {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Lütfen bir pazaryeri seçin.'
                ]);
                return;
            }

            if (!$marketplaceProductId) {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Lütfen pazaryeri ürünü seçin.'
                ]);
                return;
            }

            $existingMapping = MarketplaceProductMapping::where('product_id', $productId)
                ->where('marketplace_account_id', $this->selectedMarketplaceAccount)
                ->where('status', 'synced')
                ->first();

            if ($existingMapping) {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Eşleşmeye çalıştığınız ürün zaten bu mağazada senkronize edilmiştir.'
                ]);
                return;
            }

            $mapping = MarketplaceProductMapping::updateOrCreate(
                [
                    'product_id' => $productId,
                    'marketplace_account_id' => $this->selectedMarketplaceAccount,
                ],
                [
                    'external_product_id' => $marketplaceProductId,
                    'status' => 'synced',
                ]
            );

            if (!$mapping->wasRecentlyCreated && !$mapping->wasChanged()) {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Eşleme yapılamadı veya zaten mevcut.'
                ]);
                return;
            }

            $this->products = $this->products->reject(fn($product) => $product->id == $productId);
            $this->marketplaceProducts = $this->marketplaceProducts->reject(fn($marketplaceProduct) => $marketplaceProduct->id == $marketplaceProductId);
            unset($this->selectedMappings[$productId]);

            $this->existingMappings = MarketplaceProductMapping::with(['product', 'marketplaceProduct'])->get();

            $this->dispatch('notify', detail: [
                'type' => 'success',
                'message' => 'Ürün başarıyla eşlendi.'
            ]);
        } catch (\Illuminate\Database\QueryException $e) {
            if (str_contains($e->getMessage(), 'Duplicate entry')) {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Bu ürün veya pazaryeri ürünü zaten eşlenmiş.'
                ]);
            } else {
                $this->dispatch('notify', detail: [
                    'type' => 'error',
                    'message' => 'Bir hata oluştu: ' . $e->getMessage()
                ]);
            }
        }
    }

    public function deleteMapping($mappingId)
    {
        $mapping = MarketplaceProductMapping::find($mappingId);

        if ($mapping) {
            $mapping->delete();
            $this->existingMappings = MarketplaceProductMapping::with(['product', 'marketplaceProduct'])->get();

            $this->dispatch('notify', detail: [
                'type' => 'success',
                'message' => 'Eşleme silindi.'
            ]);
        } else {
            $this->dispatch('notify', detail: [
                'type' => 'error',
                'message' => 'Eşleme bulunamadı.'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.panel.marketplace-product-mapping-component');
    }
}
