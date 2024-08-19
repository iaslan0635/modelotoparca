<?php

namespace App\Http\Livewire;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\County;
use Livewire\Component;

class CityDistrict extends Component
{
    public $cities;

    public $towns = [];

    public $city = 1;

    public $town = '';

    public $type = 'default';

    public function mount()
    {
        $this->addresses();
    }

    public function render()
    {
        $this->changeCity($this->city);

        return view('livewire.city-district');
    }

    public function addresses()
    {
        $this->cities = City::all();
        $towns = County::query()->where('city_id', $this->city)->get();
        foreach ($towns as $key => $town) {
            $this->towns[] = $town->name;
        }
    }

    public function changeCity($id)
    {
        $this->towns = [];
        $towns = County::query()->where('city_id', $id)->get();
        foreach ($towns as $key => $town) {
            $this->towns[] = $town->name;
        }
    }
}
