<?php

namespace App\Http\Livewire\Admin;

use App\Models\Car;
use App\Models\ProductCar;
use Livewire\Component;

class CarPanel extends Component
{
    public $car_brands;

    public $product_id;

    public $chosen_car_id;

    protected $listeners = ['submitCarIds' => 'alert'];

    public function render()
    {
        return view('livewire.admin.car-panel');
    }

    public function alert(array $ids)
    {
        if (empty($ids)) {
            return $this->emit('toast', 'Araç seçiniz', 'error');
        }

        foreach ($ids as $id) {
            $this->connectCar($id);
        }
    }

    private function connectCar(int $id)
    {
        $car = ProductCar::firstOrCreate([
            'car_id' => $id,
            'logicalref' => $this->product_id,
        ])->car;

        $maker = $car->maker?->name ?? '[Marka Yok]';
        $short_name = $car->short_name;

        if (!array_key_exists($maker, $this->car_brands)) {
            $this->car_brands[$maker] = [];
        }

        if (!array_key_exists($short_name, $this->car_brands[$maker])) {
            $this->car_brands[$maker][$short_name] = [];
        }

        $this->car_brands[$maker][$short_name][] = $car;
    }

    public function disconnectCar(int $id)
    {
        $car = Car::find($id);
        $arr = &$this->car_brands[$car->maker->name][$car->short_name];
        $car->delete();

        foreach (array_keys($arr) as $key) {
            if ($arr[$key]['id'] == $id) {
                unset($arr[$key]);
            }
        }
    }
}
