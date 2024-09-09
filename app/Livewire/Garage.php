<?php

namespace App\Livewire;

use App\Facades\Garage as GarageFacade;
use Illuminate\Support\Arr;
use Livewire\Component;

class Garage extends Component
{
    public bool $onlyChosen = false;

    protected $listeners = ['chooseCar', 'reloadData', 'forwardCallToGarage'];

    public function render()
    {
        $cars = $this->onlyChosen ? Arr::wrap(GarageFacade::findChosen()) : GarageFacade::items();
        $chosen = GarageFacade::chosen();

        return view('livewire.garage', compact("cars", "chosen"))
            ->fragmentIf($this->onlyChosen, 'only-chosen');
    }

    public function chooseCar(int $id)
    {
        GarageFacade::choose($id);
        $this->dispatch('reload');
    }

    public function remove(int $id)
    {
        GarageFacade::remove($id);
    }

    public function deselect()
    {
        GarageFacade::deselect();
        $this->dispatch('reload');
    }
}
