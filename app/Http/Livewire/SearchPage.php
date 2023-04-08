<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithPagination;

class SearchPage extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $query;
    public $category;

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
        $query = \Elastic\ScoutDriverPlus\Support\Query::multiMatch()
            ->fields([
                "title",
                "sub_title",
                "cross_code",
                "producercode",
                "producercode2",
                "similar_product_codes",
            ])
            ->query($this->query)
            ->fuzziness('AUTO');

        $results = Product::searchQuery($query)->load(['category', 'price', 'brand'])->paginate(10);
        $products = $results->onlyModels();
        $brands = $products->groupBy('brand_id');
        $categories = [];

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
