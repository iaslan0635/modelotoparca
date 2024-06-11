@if(\App\Facades\Garage::hasChosen())
    @php
        $car = \App\Facades\Garage::findChosen();
    @endphp
    <div {{ $attributes->class(['products-view__options view-options view-options--offcanvas--mobile']) }}>
        <div class="card">
            <div class="card-header">
                <h5>Seçiminiz</h5>
            </div>
            <div class="card-divider"></div>
            <div class="card-body card-body--padding--2">
                <div class="vehicles-list vehicles-list--layout--account">
                    <div class="vehicles-list__body">
                        <div class="vehicles-list__item">
                            <div>
                                <img src="{{ $car->imageUrl() }}" alt="{{ $car->name }}" style="height: 2em">
                            </div>
                            <div class="vehicles-list__item-info">
                                <div class="vehicles-list__item-name">{{ $car->name }}</div>
                                <div class="vehicles-list__item-details">{{ $car->short_name }} - Power : {{ $car->power_kw }} Kw / {{ $car->power_hp }} HP -
                                    Capacity: {{ $car->capacity }} - From/To : {{ $car->from_year }}/{{ $car->to_year }}</div>
                            </div>
                            <button onclick="window.location.href = '/garage/deselect'" type="button" class="vehicles-list__item-remove">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-divider"></div>

        </div>
    </div>
@endif
