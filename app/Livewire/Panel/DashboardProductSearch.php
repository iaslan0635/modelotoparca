<?php

namespace App\Livewire\Panel;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class DashboardProductSearch extends Component
{
    use WithPagination;

    public string $tab = 'general';
    public string $searchGeneralInput = '';
    public string $searchLogicalInput = '';

    public $products = [];
    public ?Product $selectedProduct = null;
    public bool $showModal = false;

    protected array $columnLabels = [
        'title' => 'Ürün Adı',
        'sub_title' => 'Alt Başlık',
        'description' => 'Açıklama',
        'sku' => 'SKU',
        'part_number' => 'Parça Numarası',
        'producercode' => 'Üretici Kodu',
        'cross_code' => 'Cross Kod',
        'oem_codes' => 'OEM Kodları',
        'producercode2' => 'Üretici Kodu 2',
        'abk' => 'ABK',
        'similar_product_codes' => 'Benzer Ürün Kodları',
        'producercode_unbranded' => 'Markasız Üretici Kodu',
        'cross_code_regexed' => 'Regex Cross Kod',
        'producercode_regexed' => 'Regex Üretici Kodu',
        'producercode2_regexed' => 'Regex Üretici Kodu 2',
        'similar_product_codes_regexed' => 'Regex Benzer Kodlar',
        'oem_codes_regexed' => 'Regex OEM Kodları',
        'oem_codes_unspaced' => 'Boşluksuz OEM Kodları',
        'hidden_searchable' => 'Gizli Arama',
        'tecdoc' => 'TecDoc'
    ];

    public int $limit = 10;

    public function searchGeneral()
    {
        $query = trim($this->searchGeneralInput);
        $this->products = [];

        foreach ($this->columnLabels as $column => $label) {
            $matched = Product::where($column, 'like', "%{$query}%")
                ->limit($this->limit)
                ->get()
                ->map(function ($product) use ($label) {
                    $product->match_column = $label;
                    return $product;
                });

            if ($matched->isNotEmpty()) {
                $this->products = $matched;
                break;
            }
        }
    }

    public function searchLogical()
    {
        $query = trim($this->searchLogicalInput);
        $product = Product::find($query);
        if ($product) {
            $product->match_column = 'ID';
            $this->products = [$product];
        } else {
            $this->products = [];
        }
    }

    public function openModal($productId)
    {
        $this->selectedProduct = Product::find($productId);
        $this->dispatch('open-product-modal');
    }

    public function closeModal()
    {
        $this->reset('selectedProduct');
        $this->dispatch('close-product-modal');
    }

    public function getLatestProductsProperty()
    {
        $items = Product::latest('updated_at')->take(25)->get();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $perPage = 5;

        $currentItems = $items->slice(($currentPage - 1) * $perPage, $perPage)->values();

        return new LengthAwarePaginator(
            $currentItems,
            $items->count(),
            $perPage,
            $currentPage,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    }

    public function render()
    {
        return view('livewire.panel.dashboard-product-search', [
            'latestProducts' => $this->latestProducts,
            'showModal' => $this->showModal,
            'selectedProduct' => $this->selectedProduct,
            'products' => $this->products
        ]);
    }
}
