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
