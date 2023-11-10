<tr>
    <td>{{ $name }}</td>
    <td>{!! $attribute['mandatory'] ? "<b>Evet</b>":"Hayır" !!}</td>
    <td>
        @if($attribute['customValue'])
            <input type="text" wire:model="value">
        @else
            <select wire:model="value"
                    class="form-control">
                @foreach($attribute['valueList'] as $value)
                    <option value="{{ $value->name }}">{{ $value->name }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        <button wire:click="save" class="btn btn-success btn-sm">Kaydet</button>
    </td>
</tr>
