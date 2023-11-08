<tr>
    <td>{{ $attribute['attribute']?->name ?? $attribute['attribute']['name'] }}</td>
    <td>{{ $attribute['required'] ? "Evet":"Hayır" }}</td>
    <td>
        @if($attribute['allowCustom'])
            <input type="text" wire:model="value">
        @else
            <select wire:model="value_id"
                    class="form-control">
                @foreach($attribute['attributeValues'] as $value)
                    <option value="{{ $value?->id ?? $value['id'] }}">{{ $value?->name ?? $value['name'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        <button wire:click="save" class="btn btn-success btn-sm">Kaydet</button>
    </td>
</tr>
