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
        <form class="block-finder__form">
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:model="maker" name="maker" aria-label="Vehicle Make" @if(blank($makers)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Select Make</option>
                    @foreach($makers ?? [] as $maker)
                        <option value="{{ $maker->id }}">{{ $maker->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:model="car" name="model" aria-label="Vehicle Model" @if(blank($cars)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Select Model</option>
                    @foreach($cars ?? [] as $car)
                        <option value="{{ $car }}">{{ $car }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:model="year" name="year" aria-label="Vehicle Year" @if(blank($years)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Select Year</option>
                    @foreach(range(1998, 2023) as $year)
                        <option>{{ $year }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:model="spesificCar" name="model" aria-label="Vehicle Model" @if(blank($spesificCars)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Select Model</option>
                    @foreach($spesificCars ?? [] as $spesificCar)
                        <option value="{{ $spesificCar }}">{{ $spesificCar }}</option>
                    @endforeach
                </select>
            </div>
            <div class="block-finder__form-control block-finder__form-control--select">
                <select wire:model="engine" name="engine" aria-label="Vehicle Engine" @if(blank($engines)) disabled @endif class="car-search-select disable-select2">
                    <option value="none">Select Engine</option>
                    @foreach($engines ?? [] as $engine)
                        <option value="{{ $engine["id"] }}">{{ $engine["name"] }}</option>
                    @endforeach
                </select>
            </div>
            <button class="block-finder__form-control block-finder__form-control--button" type="submit">Search</button>
        </form>
        <div wire:loading style="background: rgba(0, 0, 0, 0.29);backdrop-filter: blur(10px);position: absolute;inset: 0;display: flex;justify-content: center;align-items: center;">
            <div class="spinner-border"></div>
        </div>
    </div>
</div>
