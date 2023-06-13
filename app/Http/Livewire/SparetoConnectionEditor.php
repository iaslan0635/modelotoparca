<?php

namespace App\Http\Livewire;

use App\Facades\SparetoConnector;
use App\Models\Product;
use App\Models\SparetoConnection;
use Livewire\Component;

class SparetoConnectionEditor extends Component
{
    public Product $product;

    public function render()
    {
        return view('livewire.spareto-connection-editor');
    }

    public function connect($id)
    {
        SparetoConnector::connect(SparetoConnection::findOrFail($id));
        $this->product->refresh();
    }

    public function disconnect($id)
    {
        SparetoConnector::disconnect(SparetoConnection::findOrFail($id));
        $this->product->refresh();
    }
}
