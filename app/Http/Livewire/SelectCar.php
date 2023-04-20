<?php

namespace App\Http\Livewire;

use App\Models\Maker;
use Livewire\Component;

class SelectCar extends Component
{
    public $makers;
    public $selectMaker = null;

    public function render()
    {
        $this->loadData();
        return view('livewire.select-car');
    }

    public function loadData()
    {
        $this->makers = Maker::all();
    }

    public function setMaker($id)
    {

    }
}
