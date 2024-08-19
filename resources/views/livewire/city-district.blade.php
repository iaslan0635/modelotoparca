<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="city">İl</label>
            <select name="{{ $type === "default" ? "city":"city_id" }}" id="city" wire:model="city" class="form-control">
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="town">İlçe</label>
            <select name="{{ $type === "default" ? "district":"district_id" }}" wire:model="town" id="town" class="form-control">
                @foreach($towns as $town)
                    <option value="{{ $town }}">{{ $town }}</option>
                @endforeach
            </select>
        </div>
    </div>
</div>
