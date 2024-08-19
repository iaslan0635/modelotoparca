<?php

namespace App\Http\Livewire;

use Epigra\TrGeoZones\Models\City;
use Epigra\TrGeoZones\Models\District;
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
        $towns = District::query()->where('city_id', $this->city)->get()->groupBy('ilce');
        foreach ($towns as $key => $town) {
            $this->towns[] = $key;
        }
    }

    public function changeCity($id)
    {
        $this->towns = [];
        $towns = District::query()->where('city_id', $id)->get()->groupBy('ilce');
        foreach ($towns as $key => $town) {
            $this->towns[] = $key;
        }
    }
}
