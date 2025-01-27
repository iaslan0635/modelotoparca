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
        <form class="block-finder__form" wire:submit="add">
            <div class="vehicles-list">
                {{-- <livewire:garage :only-chosen="true" /> --}}
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('maker')" wire:model.live="maker" name="maker" aria-label="Aracın Markası"
                    @if(blank($makers)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Markası</option>
                    @foreach([1, 0] as $group)
                    @foreach($makers[$group] ?? [] as $maker_)
                    <option value="{{ $maker_["id"] }}">{{ $maker_["name"] }}</option>
                    @endforeach
                    @if ($loop->first)
                    <option disabled>──────────</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('car')" wire:model.live="car" name="car" aria-label="Aracın Modeli"
                    @if(blank($cars)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Modeli</option>
                    @foreach([1, 0] as $group)
                    @foreach($cars[$group] ?? [] as $car_)
                    <option>{{ $car_ }}</option>
                    @endforeach
                    @if ($loop->first)
                    <option disabled>──────────</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('year')" wire:model.live="year" name="year" aria-label="Aracın Yılı"
                    @if(blank($years)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Aracın Yılı</option>
                    @foreach([1, 0] as $group)
                    @foreach($years[$group] ?? [] as $year_)
                    <option>{{ $year_ }}</option>
                    @endforeach
                    @if ($loop->first)
                    <option disabled>──────────</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('spesificCar')" wire:model.live="spesificCar" name="spesificCar"
                    aria-label="Araç Seçiniz" @if(blank($spesificCars)) disabled @endif
                    class="car-search-select disable-select2">
                    <option value="none">Araç Seçiniz</option>
                    @foreach([1, 0] as $group)
                    @foreach($spesificCars[$group] ?? [] as $spesificCar_)
                    <option>{{ $spesificCar_ }}</option>
                    @endforeach
                    @if ($loop->first)
                    <option disabled>──────────</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:change="resetTo('engine')" wire:model.live="engine" name="engine"
                    aria-label="Aracın Motoru" @if(blank($engines)) disabled @endif
                    class="car-search-select disable-select2">
                    <option value="none">Aracın Motoru</option>

                    @foreach([1, 0] as $group)
                    @foreach($engines[$group] ?? [] as $engine_)
                    <option value="{{ $engine_["id"] }}">{{ $engine_["name"] }}</option>
                    @endforeach
                    @if ($loop->first)
                    <option disabled>──────────</option>
                    @endif
                    @endforeach
                </select>
            </div>
            <button class="block-finder__form-control block-finder__form-control--button" @if($engine===null) disabled
                @endif type="submit">Ara</button>
        </form>
        <div wire:loading.delay.long.flex
            style="display: none; background: rgba(0, 0, 0, 0.29);backdrop-filter: blur(3px);position: absolute;inset: 0;justify-content: center;align-items: center;">
            <div class="spinner-border"></div>
        </div>
    </div>
</div>
