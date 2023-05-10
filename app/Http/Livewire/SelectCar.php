<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Maker;
use Livewire\Component;

class SelectCar extends Component
{
    public $selectMaker = null;

    public $selectedMakerForDropdown;
    public $dropdownContent;
    public $makers;

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

    public function selectMakerForDropdown(string $makerName)
    {
        $this->selectedMakerForDropdown = $makerName;
        $this->dropdownContent = Maker::where("name", $makerName)->firstOrFail()->cars
            ->map(fn(Car $car) => ["name" => $car->name, "link" => $car->permalink]);
    }
}
