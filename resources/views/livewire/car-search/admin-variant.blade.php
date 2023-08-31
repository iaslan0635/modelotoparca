<div wire:ignore.self class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
    <div class="card card-flush py-4">
        <!--begin::Card header-->
        <div class="card-header">
            <!--begin::Card title-->
            <div class="card-title">
                <h2>Araç bağlantısı ekle
                    <div wire:loading.inline style="display: none;">
                        <div class="spinner-border"></div>
                    </div>
                </h2>
            </div>
            <!--end::Card title-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <div class="d-flex gap-2">
                <select class="form-select" wire:change="resetTo('maker')" wire:model="maker" name="maker" aria-label="Aracın Markası" @if(blank($makers)) disabled @endif >
                    <option value="none">Aracın Markası</option>
                    @foreach($makers ?? [] as $maker_)
                        <option value="{{ $maker_["id"] }}">{{ $maker_["name"] }}</option>
                    @endforeach
                </select>
                <select class="form-select" wire:change="resetTo('car')" wire:model="car" name="car" aria-label="Aracın Modeli" @if(blank($cars)) disabled @endif >
                    <option value="none">Aracın Modeli</option>
                    @foreach($cars ?? [] as $car_)
                        <option value="{{ $car_ }}">{{ $car_ }}</option>
                    @endforeach
                </select>
                <select class="form-select" wire:change="resetTo('year')" wire:model="year" name="year" aria-label="Aracın Yılı" @if(blank($years)) disabled @endif >
                    <option value="none">Aracın Yılı</option>
                    @foreach($years ?? [] as $year_)
                        <option>{{ $year_ }}</option>
                    @endforeach
                </select>
                <select class="form-select" wire:change="resetTo('spesificCar')" wire:model="spesificCar" name="spesificCar" aria-label="Araç Seçiniz"
                        @if(blank($spesificCars)) disabled @endif >
                    <option value="none">Araç Seçiniz</option>
                    @foreach($spesificCars ?? [] as $spesificCar_)
                        <option value="{{ $spesificCar_ }}">{{ $spesificCar_ }}</option>
                    @endforeach
                </select>
            </div>
            @if(filled($engines))
                <form class="d-flex mt-4" id="car-select-form">
                    @foreach($engines ?? [] as $engine_)
                        <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="{{ $engine_["id"] }}">
                                {{ $engine_["name"] }}
                            </label>
                        </div>
                    @endforeach
                </form>
            @endif
            <button type="submit" class="btn btn-primary mt-4" wire:loading.class="btn-loading" wire:click="$emit('submitCars')">Bağla</button>
        </div>
        <!--end::Card body-->
    </div>
</div>

@push('custom_scripts')
    <script>
        Livewire.on('submitCars', () => {
            let formData = $("#car-select-form").serializeArray()
            let ids = formData.filter(o => o.value === "on").map(o => o.name)
            console.log(ids)
            Livewire.emit('submitCarIds', ids)
        })
    </script>
@endpush
