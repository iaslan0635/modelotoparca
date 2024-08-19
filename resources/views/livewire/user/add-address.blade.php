<div class="col-12 col-lg-9 mt-4 mt-lg-0">
    <form method="POST" action="{{ $edit ? route('addresses.update', $address):route('addresses.store') }}">
        @csrf
        @if($edit)
            @method('PUT')
        @endif
        <div class="card">
            <div class="card-header">
                <h5>{{ $edit ? "Mevcut adresinizi düzenliyorsunuz" : "Yeni Adres Ekle" }}</h5>
            </div>
            <div class="card-divider"></div>
            <div class="card-body card-body--padding--2">
                <div class="row no-gutters">
                    <div class="col-12 col-lg-10 col-xl-8">
                        <div class="form-group">
                            <label for="address-address1">Fatura Tipi</label>
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-check">
                                        <span class="input-check form-check-input">
                                            <span class="input-check__body">
                                                <input class="input-check__input" type="radio"
                                                       name="type" value="company" wire:model="type"
                                                       id="default-address">
                                                <span class="input-check__box"></span>
                                                <span class="input-check__icon"><svg width="9px"
                                                                                     height="7px">
                                                        <path
                                                            d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <label class="form-check-label" for="default-address">Kurumsal Fatura</label>
                                    </div>
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <div class="form-check">
                                        <span class="input-check form-check-input">
                                            <span class="input-check__body">
                                                <input class="input-check__input" type="radio"
                                                       name="type" value="individual" wire:model="type"
                                                       id="individual-address">
                                                <span class="input-check__box"></span>
                                                <span class="input-check__icon"><svg width="9px"
                                                                                     height="7px">
                                                        <path
                                                            d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                    </svg>
                                                </span>
                                            </span>
                                        </span>
                                        <label class="form-check-label" for="individual-address">Bireysel Fatura</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if($type === "individual")
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="address-first-name">Ad</label>
                                    <input type="text" class="form-control" id="address-first-name" name="first_name"
                                           placeholder="Ad" value="{{ old('first_name', $address?->first_name) }}">
                                    @error('first_name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address-last-name">Soyad</label>
                                    <input type="text" class="form-control" id="address-last-name" name="last_name"
                                           value="{{ old('last_name', $address?->last_name) }}" placeholder="Soyad">
                                    @error('last_name') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-0">
                                    <label for="address-identity">T.C. Kimlik Numarası </label>
                                    <input type="text" class="form-control" id="address-identity" name="identity"
                                           value="{{ old('identity', $address?->identity) }}">
                                    @error('identity') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12 mb-0">
                                    <label for="address-identity">Doğum tarihi</label>
                                    <input type="date" class="form-control" id="address-identity" name="identity"
                                           value="{{ old('birthdate', $address?->birthdate) }}">
                                    @error('birthdate') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                        @else
                            <div class="form-row">
                                <div class="form-group col-md-6 mb-0">
                                    <label for="address-email">Vergi Dairesi </label>
                                    <input type="text" class="form-control" id="address-email" name="tax_office"
                                           value="{{ old('tax_office', $address?->tax_office) }}" placeholder="Avcılar">
                                    @error('tax_office') <span class="error">{{ $message }}</span> @enderror
                                </div>
                                <div class="form-group col-md-6 mb-0">
                                    <label for="address-tax-number">Vergi No</label>
                                    <input type="text" class="form-control" id="address-tax-number" name="tax_number"
                                           value="{{ old('tax_number', $address?->tax_number) }}" placeholder="1123">
                                    @error('tax_number') <span class="error">{{ $message }}</span> @enderror
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="address-company-name">Şirket Adı<span
                                        class="text-muted">(Varsa)</span></label>
                                <input type="text" class="form-control" id="address-company-name" name="company_name"
                                       value="{{ old('company_name', $address?->company_name) }}"
                                       placeholder="Şirket Adı">
                                @error('company_name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                        @endif

                        <div class="form-group">
                            <label for="address-phone">Telefon Numarası</label>
                            <input type="text" class="form-control" id="address-phone" name="phone"
                                   placeholder="05xx xxx xx xx" value="{{ old('phone', $address?->phone) }}">
                        </div>
                        <div class="form-group">
                            <label for="address-country">İl</label>
                            <select id="address-country" name="city" class="form-control">
                                <option value="">Select a country...</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                                <option value="IT">Italy</option>
                                <option value="RU">Russia</option>
                                <option value="UA">Ukraine</option>
                                <option value="US">United States</option>
                            </select>
                            <label for="address-country">İlçe</label>
                            <select id="address-country" name="district" class="form-control">
                                <option value="">Select a country...</option>
                                <option value="AU">Australia</option>
                                <option value="DE">Germany</option>
                                <option value="FR">France</option>
                                <option value="IT">Italy</option>
                                <option value="RU">Russia</option>
                                <option value="UA">Ukraine</option>
                                <option value="US">United States</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="address-address1">Adres</label>
                            <textarea type="text" class="form-control" name="address" id="address-address1"
                                      placeholder="Mahalle">{{ old('address', $address?->address) }}</textarea>
                        </div>
                        <div class="form-group mb-0 pt-3 mt-3">

                        </div>
                        <div class="form-group mt-3">
                            <div class="form-check">
                                <span class="input-check form-check-input">
                                    <span class="input-check__body">
                                        <input class="input-check__input" type="checkbox"
                                               id="default-address">
                                        <span class="input-check__box"></span>
                                        <span class="input-check__icon"><svg width="9px"
                                                                             height="7px">
                                                <path
                                                    d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                            </svg>
                                        </span>
                                    </span>
                                </span>
                                <label class="form-check-label" for="default-address">Bu adresi varsayılan adres
                                    yap</label>
                            </div>
                        </div>
                        <div class="form-group mb-0 pt-3 mt-3">
                            <button type="submit" class="btn btn-primary">{{ $edit ? "Adresimi Düzenle":"Adres Ekle" }}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
