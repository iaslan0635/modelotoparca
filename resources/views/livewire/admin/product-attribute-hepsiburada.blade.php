<tr wire:init="loadData">
    <td>{{ $attribute?->name ?? $attribute['name'] }}</td>
    <td>{!! $attribute['mandatory'] ? "<b>Evet</b>":"Hayır" !!}</td>
    <td>
        @if($attribute['type'] === "string")
            <input type="text" wire:model.live="value">
        @else
            <select wire:model.live="value_id" class="form-select">
                <option value="0">(Seçilmedi)</option>
                @foreach($values as $value)
                    <option value="{{ $value?->value ?? $value['value'] }}">{{ $value?->value ?? $value['value'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        <button wire:click="save" class="btn btn-success btn-sm btn-block">
            Kaydet
            <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
        </button>
    </td>
</tr>
