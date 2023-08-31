<?php

namespace App\Http\Livewire\Admin;

use App\Facades\SparetoConnector;
use App\Models\Product;
use App\Models\SparetoConnection;
use Livewire\Component;

class SparetoConnectionEditor extends Component
{
    public Product $product;
    public ?bool $connectionFilter = null;

    public function render()
    {
        return view('livewire.admin.spareto-connection-editor');
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

    public function applyConnectionFilter(?bool $filter)
    {
        $this->connectionFilter = $filter;
    }

    public function getConnections()
    {
        $query = $this->product->sparetoConnections();
        if ($this->connectionFilter !== null) $query->where("is_connection_applied", $this->connectionFilter);
        return $query->get();
    }
}
