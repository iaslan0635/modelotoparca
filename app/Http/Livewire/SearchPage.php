<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Packages\Search\Search;
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

    public $query;

    public $category;

    public $term = 'product';

    public $highlights = [];

    public $sortBy;

    public ?array $brandFilters = null;

    protected $paginationTheme = 'bootstrap';

    protected $queryString = [
        'query',
        'category',
        'brandFilters' => ['as' => 'brands'],
    ];

    public function render()
    {
        $search = $this->search();

        return view('livewire.search-page', $search);
    }

    public function search()
    {
        $search = new Search(
            term: $this->query,
            sortBy: $this->sortBy,
            categoryId: $this->category,
            brandIds: $this->brandFilters,
            minPrice: request('min_price'),
            maxPrice: request('max_price'),
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

    public function isCodeHighlight(array $a)
    {
        foreach (self::CODE_FIELDS as $codeField) {
            if (array_key_exists($codeField, $a)) {
                return true;
            }
        }

        return false;
    }

    public function changeCategory($id)
    {
        $this->category = $id;
        $this->resetPage();
    }

    public function cleanCategory()
    {
        $this->category = null;
        $this->resetPage();
    }
}
