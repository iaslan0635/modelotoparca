<tr>
    <td>{{ $attribute?->name ?? $attribute['name'] }}</td>
    <td>{!! $attribute['mandatory'] ? "<b>Evet</b>":"Hayır" !!}</td>
    <td>
        @if(!array_key_exists("valueList", $attribute))
            <input type="text" wire:model="value">
        @else
            <select wire:model="value" class="form-select">
                @foreach(data_get($attribute['valueList'], "value") as $value)
                    <option value="{{ data_get($value, "name") }}">{{ data_get($value, "name") }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        <button wire:click="save" class="btn btn-success btn-sm">
            Kaydet
            <span wire:loading>
                <i class="fas fa-spinner fa-spin"></i>
            </span>
        </button>
    </td>
</tr>
