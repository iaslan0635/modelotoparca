<div wire:ignore.self class="search__dropdown search__dropdown--vehicle-picker vehicle-picker">
    <div class="search__dropdown-arrow"></div>
    <div class="vehicle-picker__panel vehicle-picker__panel--list vehicle-picker__panel--active"
         data-panel="list">
        <div class="vehicle-picker__panel-body">
            <div class="vehicle-picker__text">
                Aracınız ile tam uyumlu parçaları bulmak için seçiniz
            </div>
            <div class="vehicles-list">
                @fragment("only-chosen")
                    <div class="vehicles-list__body">
                        @foreach($cars as $car)
                            <label class="vehicles-list__item" wire:click="$dispatch('chooseCar', {id: {{ $car["id"] }}})">
                                <span class="vehicles-list__item-radio input-radio">
                                    <span class="input-radio__body">
                                        <input @if($car["id"] === $chosen) checked @endif
                                        class="input-radio__input" name="header-vehicle" type="radio">
                                        <span class="input-radio__circle"></span>
                                    </span>
                                </span>
                                <span class="vehicles-list__item-info">
                                    <span class="vehicles-list__item-name">{{ $car["name"] }}</span>
                                    <span class="vehicles-list__item-details">{{ $car["details"] }}</span>
                                </span>
                                <button type="button" class="vehicles-list__item-remove" wire:click="deselect({{ $car["id"] }})">
                                    <svg width="16" height="16">
                                        <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                    </svg>
                                </button>
                            </label>
                        @endforeach
                    </div>
                @endfragment
            </div>
            <div class="vehicle-picker__actions">
                <button type="button" class="btn btn-dark btn-sm" wire:click="deselect">
                    Araç seçimini kaldır
                </button>
                <button type="button" class="btn btn-primary btn-sm" data-to-panel="form">
                    Yeni Araç Ekle
                </button>
            </div>
        </div>
    </div>
    <livewire:car-search variant="dropdown"/>
    <div wire:loading.flex
         style="display: none; background: rgba(255, 255, 255, 0.29);backdrop-filter: blur(3px);position: absolute;inset: 0;justify-content: center;align-items: center;">
        <div class="spinner-border"></div>
    </div>
</div>
