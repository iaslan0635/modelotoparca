<?php

namespace App\Http\Livewire\Admin;

use App\Models\Car;
use Livewire\Component;

class CarTable extends Component
{
    public array $cars;

    public array|null $editingModel = null;

    public int|null $editingIndex = null;

    const EDITABLE_FIELDS = [
        'id',
        'name',
        'short_name',
        'power_kw',
        'power_hp',
        'capacity',
        'produced_from',
        'produced_to',
    ];

    public function render()
    {
        return view('livewire.admin.car-table');
    }

    public function toggleIndexing($index)
    {
        ['id' => $carId, 'indexable' => $prevState] = $this->cars[$index];
        $car = Car::find($carId);
        $car->indexable = ! $prevState;
        $car->save();
        $this->cars[$index] = $car;
    }

    public function enterEditing($index)
    {
        $this->editingModel = array_intersect_key($this->cars[$index], array_flip(self::EDITABLE_FIELDS));
        $this->editingIndex = $index;
    }

    public function exitEditing()
    {
        ['id' => $id] = $this->editingModel;
        unset($this->editingModel['id']);

        $car = Car::find($id);
        $car->update($this->editingModel);

        $this->cars[$this->editingIndex] = $car;
        $this->editingIndex = null;
        $this->editingModel = null;
    }
}
