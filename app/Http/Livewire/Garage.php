<?php

namespace App\Http\Livewire;

use App\Facades\Garage as GarageFacade;
use Illuminate\Support\Traits\ForwardsCalls;
use Livewire\Component;

class Garage extends Component
{
    use ForwardsCalls;

    public ?array $cars;

    public ?int $chosen;

    public bool $onlyChosen = false;

    protected $listeners = ['chooseCar', 'reloadData', 'forwardCallToGarage'];

    public function render()
    {
        $this->reloadData();

        return view('livewire.garage');
    }

    public function forwardCallToGarage(string $method, array $parameters)
    {
        return $this->forwardCallTo($this, $method, $parameters);
    }

    public function reloadData()
    {
        $this->cars = $this->onlyChosen ? [GarageFacade::findChosen()] : GarageFacade::items();
        $this->chosen = GarageFacade::chosen();
    }

    public function chooseCar(int $id)
    {
        GarageFacade::choose($id);

        $this->emit('reload');
    }

    public function remove(int $id)
    {
        GarageFacade::remove($id);
    }

    public function deselect()
    {
        GarageFacade::deselect();
    }
}
