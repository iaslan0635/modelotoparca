<tr>
    <td>{{ $category->name }}</td>
    <td>
        @if($category->merchants()->n11()->exists())
            Eşleştirilmiş
        @else
            <select name="n11_id" id="n11_id" wire:model.live="n11_id" wire:change="addN11">
                @foreach($n11Categories as $ncat)
                    <option
                        value="{{ $ncat->id ?? $ncat['id'] }}">{{ $ncat->name ?? $ncat['name'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        @if($category->merchants()->hepsiburada()->exists())
            Eşleştirilmiş
        @else
            <select name="hepsiburada_id" id="hepsiburada_id" wire:model.live="hepsiburada_id" wire:change="addHepsiburada">
                @foreach($hepsiCategories as $hcat)
                    <option
                        value="{{ $hcat->categoryId ?? $hcat['categoryId'] }}">{{ $hcat->displayName ?? $hcat['displayName'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
    <td>
        @if($category->merchants()->trendyol()->exists())
            Eşleştirilmiş
        @else
            <select name="trendyol_id" id="trendyol_id" wire:model.live="trendyol_id" wire:change="addTrendyol">
                @foreach($trendyolCategories as $tcat)
                    <option
                        value="{{ $tcat->id ?? $tcat['id'] }}">{{ $tcat->name ?? $tcat['name'] }}</option>
                @endforeach
            </select>
        @endif
    </td>
</tr>
