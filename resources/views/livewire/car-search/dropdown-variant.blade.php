<div wire:ignore.self class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
    <div class="vehicle-picker__panel-body">
        <div class="vehicle-form vehicle-form--layout--search">
            <div class="vehicle-form__item vehicle-form__item--select">
                <select class="form-control" wire:change="resetTo('maker')" wire:model.live="maker" name="maker" aria-label="Aracın Markası" @if(blank($makers)) disabled @endif >
                    <option value="none">Aracın Markası</option>
                    @foreach($makers ?? [] as $maker_)
                        <option value="{{ $maker_["id"] }}">{{ $maker_["name"] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
                <select class="form-control" wire:change="resetTo('car')" wire:model.live="car" name="car" aria-label="Aracın Modeli" @if(blank($cars)) disabled @endif >
                    <option value="none">Aracın Modeli</option>
                    @foreach($cars ?? [] as $car_)
                        <option value="{{ $car_ }}">{{ $car_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
                <select class="form-control" wire:change="resetTo('year')" wire:model.live="year" name="year" aria-label="Aracın Yılı" @if(blank($years)) disabled @endif >
                    <option value="none">Aracın Yılı</option>
                    @foreach($years ?? [] as $year_)
                        <option>{{ $year_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
                <select class="form-control" wire:change="resetTo('spesificCar')" wire:model.live="spesificCar" name="spesificCar" aria-label="Araç Seçiniz" @if(blank($spesificCars)) disabled @endif >
                    <option value="none">Araç Seçiniz</option>
                    @foreach($spesificCars ?? [] as $spesificCar_)
                        <option value="{{ $spesificCar_ }}">{{ $spesificCar_ }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vehicle-form__item vehicle-form__item--select">
                <select class="form-control" wire:change="resetTo('engine')" wire:model.live="engine" name="engine" aria-label="Aracın Motoru" @if(blank($engines)) disabled @endif >
                    <option value="none">Aracın Motoru</option>
                    @foreach($engines ?? [] as $engine_)
                        <option value="{{ $engine_["id"] }}">{{ $engine_["name"] }}</option>
                    @endforeach
                </select>
            </div>
            <div class="vehicle-form__divider">Ya Da</div>
            <div class="vehicle-form__item">
                <input type="text" class="form-control" placeholder="Aracınızın Şase Numarası">
            </div>
        </div>
        <div class="vehicle-picker__actions">
            <div class="search__car-selector-link">
                <a href="" data-to-panel="list">Araç Listesine Dön</a>
            </div>
            <button type="button" class="btn btn-primary btn-sm" @if($engine === null) disabled @endif wire:click="add">Aracı Ekle</button>
        </div>
    </div>
    <div wire:loading.flex
         style="display: none; background: rgba(255, 255, 255, 0.29);backdrop-filter: blur(3px);position: absolute;inset: 0;justify-content: center;align-items: center;">
        <div class="spinner-border"></div>
    </div>
</div>
