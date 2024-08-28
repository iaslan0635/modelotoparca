<?php

namespace App\Livewire;

use App\Models\Product;
use App\Packages\Search\Search;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination;

    const CODE_FIELDS = [
        'part_number',
        'producercode',
        'producercode_unbranded',
        'producercode_unbranded_regex',
        'cross_code',
        'producercode2',
        'part_number_regex',
        'producercode_regex',
        'cross_code_regex',
        'producercode2_regex',
        'oems.oem',
        'oems.oem_regex',
        'similars.code',
        'similars.code_regex',
    ];

    #[Url]
    public $query;

    #[Url]
    public $category;

    public $term = 'product';

    public $highlights = [];

    public $sortBy;

    #[Url(as: "brands")]
    public ?array $brandFilters = null;

    public $min_price;
    public $max_price;

    public function render()
    {
        $search = $this->search();

        return view('livewire.search-page', $search);
    }

    public function search()
    {
        $categoryId = $this->category && is_numeric($this->category) ? (int)$this->category : null;
        $search = new Search(
            term: $this->query,
            sortBy: $this->sortBy,
            categoryId: $categoryId,
            brandIds: $this->brandFilters,
            minPrice: $this->min_price,
            maxPrice: $this->max_price,
        );
        $search->saveSearch();

        $products = $search->paginateProducts();
        $brands = $search->brands();
        $categories = $search->categories();
        $this->highlights = Search::parseHighlights($products);

        $searchedOnCode = $this->highlights->some($this->isCodeHighlight(...));

        if ($searchedOnCode) {
            [$alternatives, $similars] = Product::alternativesAndSimilars($products->models());
        } else {
            $alternatives = null;
            $similars = null;
        }

        return compact(
            'products',
            'brands',
            'categories',
            'alternatives',
            'similars'
        );
    }

    private function isCodeHighlight(array $a)
    {
        foreach (self::CODE_FIELDS as $codeField) {
            if (array_key_exists($codeField, $a)) {
                return true;
            }
        }

        return false;
    }

    #[On('filtered')]
    public function onFiltered($filters)
    {
        [
            "categoryId" => $this->category,
            "brandIds" => $this->brandFilters,
            "priceMin" => $this->min_price,
            "priceMax" => $this->max_price,
        ] = $filters;
    }
}
