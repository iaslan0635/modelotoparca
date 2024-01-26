<div class="block-finder block">
    <div class="decor block-finder__decor decor--type--bottom">
        <div class="decor__body">
            <div class="decor__start"></div>
            <div class="decor__end"></div>
            <div class="decor__center"></div>
        </div>
    </div>
    <div class="block-finder__image" style="background-image: url('images/arac-parca-bul.png');"></div>
    <div class="block-finder__body container container--max--xl">
        <form class="block-finder__form" wire:submit.prevent="add">
            <div class="vehicles-list">
                <livewire:garage/>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('maker')" wire:model="maker" name="maker" aria-label="Aracın Markası" @if(blank($makers)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Markası</option>
                    @foreach($makers ?? [] as $maker_)
                        <option value="{{ $maker_["id"] }}">{{ $maker_["name"] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('car')" wire:model="car" name="car" aria-label="Aracın Modeli" @if(blank($cars)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Modeli</option>
                    @foreach($cars ?? [] as $car_)
                        <option value="{{ $car_ }}">{{ $car_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('year')" wire:model="year" name="year" aria-label="Aracın Yılı" @if(blank($years)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Yılı</option>
                    @foreach($years ?? [] as $year_)
                        <option>{{ $year_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('spesificCar')" wire:model="spesificCar" name="spesificCar" aria-label="Araç Seçiniz" @if(blank($spesificCars)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Araç Seçiniz</option>
                    @foreach($spesificCars ?? [] as $spesificCar_)
                        <option value="{{ $spesificCar_ }}">{{ $spesificCar_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('engine')" wire:model="engine" name="engine" aria-label="Aracın Motoru" @if(blank($engines)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Motoru</option>
                    @foreach($engines ?? [] as $engine_)
                        <option value="{{ $engine_["id"] }}">{{ $engine_["name"] }}</option>
                    @endforeach
                </select>
            </div>
            <button class="block-finder__form-control block-finder__form-control--button" @if($engine === null) disabled @endif type="submit">Ara</button>
        </form>
        <div wire:loading.flex
             style="display: none; background: rgba(0, 0, 0, 0.29);backdrop-filter: blur(3px);position: absolute;inset: 0;justify-content: center;align-items: center;">
            <div class="spinner-border"></div>
        </div>
    </div>
</div>
