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
                <select class="form-select" wire:change="resetTo('maker')" wire:model.live="maker" name="maker" aria-label="Aracın Markası" @if(blank($makers)) disabled @endif >
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
                <select class="form-select" wire:change="resetTo('car')" wire:model.live="car" name="car" aria-label="Aracın Modeli" @if(blank($cars)) disabled @endif >
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
                <select class="form-select" wire:change="resetTo('year')" wire:model.live="year" name="year" aria-label="Aracın Yılı" @if(blank($years)) disabled @endif >
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
                <select class="form-select" wire:change="resetTo('spesificCar')" wire:model.live="spesificCar" name="spesificCar" aria-label="Araç Seçiniz"
                        @if(blank($spesificCars)) disabled @endif >
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
            @if(filled($engines))
                <form class="d-flex mt-4" id="car-select-form">
                    @foreach([1, 0] as $group)
                        @foreach($engines[$group] ?? [] as $engine_)
                            <div class="form-check">
                                <label class="form-check-label">
{{--                                    <input class="form-check-input" type="checkbox" name="{{ $engine_["id"] }}">--}}
                                    <input class="form-check-input" type="checkbox" name="{{ $engine_["id"] }}" value="on">
                                    {{ $engine_["name"] }}
                                </label>
                            </div>
                        @endforeach
                        @if ($loop->first)
                            <option disabled>──────────</option>
                        @endif
                    @endforeach
                </form>
            @endif
            <button type="submit" class="btn btn-primary mt-4" wire:loading.class="btn-loading" wire:click="$dispatch('data-submit-cars')">
{{--            <button type="button" class="btn btn-primary mt-4" data-submit-cars>--}}
                Bağla
            </button>
        </div>
        <!--end::Card body-->
    </div>
</div>

@section('custom_scripts')
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const button = document.querySelector('[data-submit-cars]');
            if (!button) {
                console.warn("🚫 data-submit-cars butonu bulunamadı.");
                return;
            }

            button.addEventListener('click', () => {
                const form = document.querySelector('#car-select-form');
                if (!form) {
                    console.warn("🚫 #car-select-form bulunamadı.");
                    return;
                }

                const formData = new FormData(form);
                const ids = [];
                for (const [name, value] of formData.entries()) {
                    ids.push(name);
                }

                console.log("✅ Seçilen araç ID'leri:", ids);

                if (window.Livewire?.dispatch) {
                    window.Livewire.dispatch('submitCarIds', { ids });
                    console.log("📤 Livewire.dispatch gönderildi");
                } else {
                    console.warn("🚫 window.Livewire.dispatch tanımlı değil.");
                }
            });
        });
    </script>
{{--    <script>--}}
{{--        Livewire.on('submitCars', () => {--}}
{{--            let formData = $("#car-select-form").serializeArray()--}}
{{--            let ids = formData.filter(o => o.value === "on").map(o => o.name)--}}
{{--            console.log(ids)--}}
{{--            Livewire.emit('submitCarIds', ids)--}}
{{--        })--}}
{{--    </script>--}}
@endsection
