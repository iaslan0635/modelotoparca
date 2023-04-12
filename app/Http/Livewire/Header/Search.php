<?php

namespace App\Http\Livewire\Header;

use App\Models\Product;
use Elastic\ScoutDriverPlus\Decorators\Hit;
use Elastic\ScoutDriverPlus\Support\Query;
use Livewire\Component;
use App\Packages\Search as Searchable;

class Search extends Component
{
    public $query = "";


    public function render()
    {
        $categories = [];
        $results = [];

        if (strlen($this->query) >= 3) {
            $results = Searchable::query($this->query)->limit(10)->get()->all();
            foreach ($results as $result) {
                foreach ($result->category as $item) {
                    $categories[$item->id] = $item;
                }
            }
        }

        return view('livewire.header.search', [
            'results' => $results,
            'categories' => $categories
        ]);
    }
}
