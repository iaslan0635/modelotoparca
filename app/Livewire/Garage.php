<?php

namespace App\Livewire;

use App\Facades\Garage as GarageFacade;
use Illuminate\Support\Arr;
use Illuminate\Support\Traits\ForwardsCalls;
use Livewire\Attributes\On;
use Livewire\Component;

class Garage extends Component
{
    public ?array $cars;

    public ?int $chosen;

    public bool $onlyChosen = false;

    protected $listeners = ['chooseCar', 'reloadData', 'forwardCallToGarage'];

    public function render()
    {
        $this->reloadData();

        return view('livewire.garage');
    }

    #[On('garage.reloadData')]
    public function reloadData()
    {
        $this->cars = $this->onlyChosen ? Arr::wrap(GarageFacade::findChosen()) : GarageFacade::items();
        $this->chosen = GarageFacade::chosen();
    }

    #[On('garage.chooseCar')]
    public function chooseCar(int $id)
    {
        GarageFacade::choose($id);

        $this->dispatch('reload');
    }

    #[On('garage.remove')]
    public function remove(int $id)
    {
        GarageFacade::remove($id);
    }

    #[On('garage.deselect')]
    public function deselect()
    {
        GarageFacade::deselect();
        $this->dispatch('reload');
    }
}
