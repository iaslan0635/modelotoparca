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
    public $term = "product";
    public $highlights = [];


    public function render()
    {
        $categories = [];
        $results = [];
        //dd($this->query);
        if (strlen($this->query) >= 3) {
            $resulta = Searchable::query($this->query);
            $results = $resulta['query']->limit(10)->get()->all();
            $this->term = $resulta["term"];
            $this->highlights = $resulta["highlights"];
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
