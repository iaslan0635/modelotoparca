<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;
use App\Packages\Search as Searchable;

class SearchPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $query;
    public $category;
    public $term = "product";
    public $highlights = [];

    protected $queryString = ['query', 'category'];

    public function render()
    {
        $search = $this->search();
        return view('livewire.search-page', [
            'products' => $search['products'],
            'brands' => $search['brands'],
            'categories' => $search['categories']
        ]);
    }


    public function search()
    {
        $query = Searchable::query($this->query);
        $products = $query['query']->paginate(12);
        $brands = $query['query']->get()->groupBy('brand_id');
        $categories = [];
        $this->term = $query["term"];
        $this->highlights = $query["highlights"];

        foreach ($products as $product) {
            foreach ($product->category as $item) {
                $categories[$item->id] = $item;
            }
        }

        return ['products' => $products, 'brands' => $brands, 'categories' => $categories];
    }

    public function changeCategory($id)
    {
        $this->category = $id;
    }
}
