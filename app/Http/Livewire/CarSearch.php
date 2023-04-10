<?php

namespace App\Http\Livewire;

use App\Models\Car;
use App\Models\Maker;
use Livewire\Component;

class CarSearch extends Component
{
    public $year, $maker, $engine, $car, $cat_id, $spesificCar;
    public $makers, $cars, $engines, $years, $spesificCars;

    public function render()
    {
        $this->makers ??= $this->maker();

        if ($this->maker !== null)
            $this->cars ??= $this->model("short_name")->pluck("short_name");

        if ($this->car !== null)
            $this->years ??= $this->model(["from_year", "to_year"])->map(fn($m) => range($m->from_year, $m->to_year))->flatten()->unique()->sort();

        if ($this->year !== null)
            $this->spesificCars ??= $this->model("name")->pluck("name");

        if ($this->spesificCar !== null)
            $this->engines ??= $this->model(["power", "capacity", "id"])->map(fn($x) => [
                "id" => $x->id,
                "name" => "$x->power Kw / {$this->kwToHp($x->power)} Hp / $x->capacity cc"
            ]);

        return view('livewire.car-search');
    }

    private function kwToHp(string $kw)
    {
        return round(intval($kw) * 1.361);
    }

    public function model($get = ['*'])
    {
        $builder = Car::query()->distinct();

        if ($this->year !== null)
            $builder->whereNested(fn($q) => $q->whereRaw("? BETWEEN from_year AND COALESCE(to_year, year(current_date))", $this->year));

        if ($this->car !== null)
            $builder->where("short_name", "=", $this->car);

        if ($this->spesificCar !== null)
            $builder->where("name", "=", $this->spesificCar);

        if ($this->maker !== null)
            $builder->where("maker_id", "=", $this->maker);

        if ($this->cat_id !== null)
            $builder->whereRaw("FIND_IN_SET(id ,REPLACE(REPLACE((select supported_cars from categories where id = ?), ']', ''), '[', ''))", [$this->cat_id]);

        return $builder->get($get)->flatten()->unique();
    }

    public function maker($get = ['*'])
    {
        $builder = Maker::query();
        if ($this->year !== null) $builder->whereRaw("? BETWEEN from_year AND to_year", [$this->year]);
        /*
                if ($this->cat_id !== null) {
                    $supported_cars = Category::query()->where("id", $this->cat_id)->valueOrFail("supported_cars");
                    $ids = collect();
                    foreach (array_chunk($supported_cars, 500) as $chunk) {
                        $ids->push(Car::query()->whereIn("id", $chunk)->distinct()->pluck("maker_id"));
                    }
                    $builder->whereIn("id", $ids->flatten()->unique());
                }
        */
        return $builder->orderBy("name")->get($get);
    }
}
