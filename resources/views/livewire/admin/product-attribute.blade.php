<tr wire:model.live="value" x-data
    x-init=" $($refs.select).select2().on('select2:select', () => $dispatch('input', $refs.select.value))
">
    <td>{{ $name }}</td>
    <td>
        @if($isMandatory)
            <b>Evet</b>
        @else
            Hayır
        @endif
    </td>
    <td>
        @if($isText)
            <input type="text" wire:model.live="value">
        @else
            <div wire:ignore>
                <select wire:model="value_id"
                    class="product-attribute-selector form-select" x-ref="select" wire:ignore>
                    <option disabled>Seçiniz</option>
                    @foreach($getIterator() ?? [] as $value)
                        <option value="{{ $getOptionValue($value) }}">
                            {{ $getOptionText($value) }}
                        </option>
                    @endforeach
                </select>
            </div>
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
