<?php

namespace App\Http\Livewire\Header;

use App\Facades\Garage;
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
        if (!$this->query && request()->has("query")) $this->query = request("query");

        $relations = [
            'alternatives',
            'similars',
            'image',
        ];

        $categories = [];
        $results = [];
        $suggestions = [];
        if (strlen($this->query) >= 3) {
            $measurement = Packages\Measure::start();

            $search = new Packages\Search\Search($this->query, loadRelations: $relations);
            $categories = $search->categories();
            $results = $search->paginateProducts();
            $suggestions = $search->suggestions();

            $measurement->log('Ajax search');
        }

        $data = [
            'results' => $results,
            'categories' => $categories,
            'suggestions' => $suggestions,
        ];

        return view($this->mobile ? 'livewire.header.mobile-search' : 'livewire.header.search', $data);
    }

    public function deselect()
    {
        Garage::deselect();
        $this->emit('reload');
    }

    public function reloadData()
    {
        return $this->emit('forwardCallToGarage', 'reloadData', func_get_args());
    }

    public function chooseCar()
    {
        return $this->emit('forwardCallToGarage', 'chooseCar', func_get_args());
    }

    public function remove()
    {
        return $this->emit('forwardCallToGarage', 'remove', func_get_args());
    }
}
