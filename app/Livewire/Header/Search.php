<?php

namespace App\Livewire\Header;

use App\Packages;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;

    public $query = '';

    public $term = 'product';

    public $highlights = [];
    //protected $queryString = ['query'];

    public bool $mobile = false;

    public function render()
    {
        $relations = [
            'alternatives',
            'similars',
            'image',
        ];

        $categories = [];
        $results = [];
        $suggestions = [];
        if (strlen($this->query) >= 3) {
            $search = new Packages\Search\Search($this->query, loadRelations: $relations);
            $search->saveSearch();
            $categories = $search->categories();
            $results = $search->paginateProducts();
            $suggestions = $search->suggestions();
        }

        $data = [
            'results' => $results,
            'categories' => $categories,
            'suggestions' => $suggestions,
        ];

        return view($this->mobile ? 'livewire.header.mobile-search' : 'livewire.header.search', $data);
    }
}
