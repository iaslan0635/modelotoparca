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
                foreach ($result->categories as $item) {
                    $categories[$item->id] = $item;
                }
            }
        }

        return view('livewire.header.search', [
            'results' => $results,
            'categories' => $categories
        ]);
    }

    // @formatter:off
    public function reloadData(){return $this->emit("forwardCallToGarage", "reloadData", func_get_args());}
    public function chooseCar() {return $this->emit("forwardCallToGarage", "chooseCar",  func_get_args());}
    public function remove()    {return $this->emit("forwardCallToGarage", "remove",     func_get_args());}
    // @formatter:on

}
