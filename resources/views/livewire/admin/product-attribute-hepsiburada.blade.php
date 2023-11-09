<tr wire:init="loadData">
    <td>{{ $attribute?->name ?? $attribute['name'] }}</td>
    <td>{{ $attribute['mandatory'] ? "<b>Evet</b>":"Hayır" }}</td>
    <td>
        @if($attribute['type'] === "string")
            <input type="text" wire:model="value">
        @else
            <select wire:model="value_id"
                    class="form-control">
                @foreach($values as $value)
                    <option value="{{ $value?->value ?? $value['value'] }}">{{ $value?->value ?? $value['value'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        <button wire:click="save" class="btn btn-success btn-sm">Kaydet</button>
    </td>
</tr>
