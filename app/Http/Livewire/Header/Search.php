<?php

namespace App\Http\Livewire\Header;

use App\Models\Product;
use Livewire\Component;
use Elastic\ScoutDriverPlus\Support\Query;

class Search extends Component
{
    public $query = "";

    public function render()
    {
        $categories = [];
        $results = [];

        if (strlen($this->query) >= 3) {
            $query = Query::multiMatch()
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

            $results = Product::searchQuery($query)->execute()->models();

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
