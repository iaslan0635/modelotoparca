<button wire:ignore.self class="search__button search__button--start" type="button">
    <span class="search__button-icon">
        <svg width="20" height="20">
            <path
                d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1 c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2 C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9 c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0 c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0 C15.5,10.2,14,11.3,14,12z"/>
        </svg>
    </span>
    <span class="search__button-title">Araç Seç</span>
</button>
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
                                                                class="input-radio__input" name="header-vehicle" type="radio" >
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
