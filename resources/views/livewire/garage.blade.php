<div wire:ignore.self class="search__dropdown search__dropdown--vehicle-picker vehicle-picker">
    <div class="search__dropdown-arrow"></div>
    <div class="vehicle-picker__panel vehicle-picker__panel--list vehicle-picker__panel--active" data-panel="list">
        <div class="vehicle-picker__panel-body">
            <div class="vehicle-picker__text">
                Aracınız ile tam uyumlu parçaları bulmak için seçiniz
            </div>
            <div class="vehicles-list">
                <div class="vehicles-list__body">
                    @foreach($cars as $car)
                        <label class="vehicles-list__item" wire:click="$emitSelf('chooseCar', {{ $car["id"] }})">
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
                            <button type="button" class="vehicles-list__item-remove" wire:click="remove({{ $car["id"] }})">
                                <svg width="16" height="16">
                                    <path d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"/>
                                </svg>
                            </button>
                        </label>
                    @endforeach
                </div>
            </div>
            <div class="vehicle-picker__actions">
                <button type="button" class="btn btn-primary btn-sm" data-to-panel="form">Yeni Araç Ekle</button>
            </div>
        </div>
    </div>
    <div class="vehicle-picker__panel vehicle-picker__panel--form" data-panel="form">
        <div class="vehicle-picker__panel-body">
            <div class="vehicle-form vehicle-form--layout--search">
                <div class="vehicle-form__item vehicle-form__item--select">
                    <select class="form-control form-control-select2" aria-label="Year">
                        <option value="none">Yıl Seç</option>
                        <option>2010</option>
                        <option>2011</option>
                        <option>2012</option>
                        <option>2013</option>
                        <option>2014</option>
                        <option>2015</option>
                        <option>2016</option>
                        <option>2017</option>
                        <option>2018</option>
                        <option>2019</option>
                        <option>2020</option>
                    </select>
                </div>
                <div class="vehicle-form__item vehicle-form__item--select">
                    <select class="form-control form-control-select2" aria-label="Brand" disabled>
                        <option value="none">Marka Seç</option>
                        <option>Audi</option>
                        <option>BMW</option>
                        <option>Ferrari</option>
                        <option>Ford</option>
                        <option>KIA</option>
                        <option>Nissan</option>
                        <option>Tesla</option>
                        <option>Toyota</option>
                    </select>
                </div>
                <div class="vehicle-form__item vehicle-form__item--select">
                    <select class="form-control form-control-select2" aria-label="Model" disabled>
                        <option value="none">Model</option>
                        <option>Explorer</option>
                        <option>Focus S</option>
                        <option>Fusion SE</option>
                        <option>Mustang</option>
                    </select>
                </div>
                <div class="vehicle-form__item vehicle-form__item--select">
                    <select class="form-control form-control-select2" aria-label="Engine" disabled>
                        <option value="none">Motor Gücü</option>
                        <option>Gas 1.6L 125 hp AT/L4</option>
                        <option>Diesel 2.5L 200 hp AT/L5</option>
                        <option>Diesel 3.0L 250 hp MT/L5</option>
                    </select>
                </div>
                <div class="vehicle-form__divider">Ya Da</div>
                <div class="vehicle-form__item">
                    <input type="text" class="form-control" placeholder="Aracınızın Şase Numarası" aria-label="VIN number">
                </div>
            </div>
            <div class="vehicle-picker__actions">
                <div class="search__car-selector-link">
                    <a href="" data-to-panel="list">Araç Listesine Dön</a>
                </div>
                <button type="button" class="btn btn-primary btn-sm" disabled>Aracı Ekle</button>
            </div>
        </div>
    </div>
</div>
