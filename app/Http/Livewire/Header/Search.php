<?php

namespace App\Http\Livewire\Header;

use App\Facades\Garage;
use App\Packages\Search as Searchable;
use Livewire\Component;

class Search extends Component
{
    public $query = '';

    public $term = 'product';

    public $highlights = [];
    //protected $queryString = ['query'];

    public bool $mobile = false;

    public function render()
    {
        $categories = [];
        $results = [];
        $suggestions = [];
        //        dd($this->query);
        if (strlen($this->query) >= 3) {
            $result = Searchable::query($this->query);
            $categories = $result['categories'];
            $results = $result['products'];
            $suggestions = $result['suggestions'];

            //            dd($result);
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
