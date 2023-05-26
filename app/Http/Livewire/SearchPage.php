<?php

namespace App\Http\Livewire;

use App\Models\Product;
use App\Packages\Search as Searchable;
use App\Packages\Utils;
use Barryvdh\Debugbar\Facades\Debugbar;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $query;

    public $category;

    public $term = 'product';

    public $highlights = [];

    const CODE_FIELDS = [
        "producercode",
        "cross_code",
        "oem_codes",
        "producercode2",
        "similar_product_codes",
        "producercode_unbranded",
        "cross_code_regex",
        "producercode_regex",
        "producercode2_regex",
        "similar_product_codes_regex",
        "oem_codes_regex",
        "oem_codes_unspaced",
    ];

    protected $queryString = ['query', 'category'];

    public $sortBy;

    public function render()
    {
        $search = $this->search();

        return view('livewire.search-page', $search);
    }

    function isCodeHighlight(array $a)
    {
        foreach (self::CODE_FIELDS as $codeField) {
            if (array_key_exists($codeField, $a)) return true;
        }
        return false;
    }

    public function search()
    {
        $query = Searchable::query($this->query, $this->sortBy);
        $products = $query['products'];
        $brands = $query["brands"];
        $categories = $query['categories'];
//        $this->term = $query['term'];
        $this->highlights = $query['highlights'];


        $searchedOnCode = $this->highlights->some($this->isCodeHighlight(...));

        if ($searchedOnCode) {
            /** @var Collection<int, Product> $pm */
            $pm = $products->models();
            $idMatcher = fn(Product $p, Product $i) => $p->id === $i->id;

            $alternatives = $pm->map(fn(Product $p) => $p->alternatives()->get())->flatten();
            $alternatives = Utils::uniqueOn($alternatives, $pm, $idMatcher);

            $similars = $pm->map(fn(Product $p) => $p->similars()->get())->flatten();
            $similars = Utils::uniqueOn($similars, $alternatives, $idMatcher);
            $similars = Utils::uniqueOn($similars, $pm, $idMatcher);
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

    public function changeCategory($id)
    {
        $this->category = $id;
    }
}
