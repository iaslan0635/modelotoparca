<?php

namespace App\Http\Livewire;

use App\Packages\Search as Searchable;
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

    protected $queryString = ['query', 'category'];

    public $sortBy;

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
        $brands = [];
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
