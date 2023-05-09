<?php

namespace App\Http\Livewire;

use App\Packages\Search as Searchable;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public string $query;

    public $category;

    public $term = 'product';

    public $highlights = [];

    /** BUG: livewire sondaki sıfırları siliyor */
    protected $queryString = [/*'query',*/
        'category'];

    public $sortBy;

    public function __construct($id = null)
    {
        request()->validate(["query" => "required|string|min:3"]);

        $this->query = request()->get("query");;
        parent::__construct($id);
    }

    public function render()
    {
        $search = $this->search();

        return view('livewire.search-page', [
            'products' => $search['products'],
            'brands' => $search['brands'],
            'categories' => $search['categories'],
        ]);
    }

    public function search()
    {
        $query = Searchable::query($this->query, $this->sortBy);
        $products = $query['products'];
        $brands = $query["brands"];
        $categories = $query['categories'];
//        $this->term = $query['term'];
        $this->highlights = $query['highlights'];

        return ['products' => $products, 'brands' => $brands, 'categories' => $categories];
    }

    public function changeCategory($id)
    {
        $this->category = $id;
    }
}
