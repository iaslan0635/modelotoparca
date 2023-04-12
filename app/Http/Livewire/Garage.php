<?php

namespace App\Http\Livewire;

use App\Facades\Garage as GarageFacade;
use App\Models\Car;
use Livewire\Component;

class Garage extends Component
{
    public array|null $cars;
    public int|null $chosen;
    protected $listeners = ['chooseCar', 'reloadData'];
    public function render()
    {
        $this->reloadData();
        return view('livewire.garage');
    }

    public function reloadData()
    {
        $this->cars = GarageFacade::items();
        $this->chosen = GarageFacade::chosen();
    }

    public function chooseCar(int $id)
    {
        GarageFacade::choose($id);

        $this->emit("reload");
    }

    public function remove(int $id)
    {
        GarageFacade::remove($id);
    }
}
