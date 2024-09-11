<x-wire-dropdown :class="$class ?? 'product-card__addtocart-full'" wire:loading.attr="disabled" parent-class="dropleft" style="min-width: 11rem">
    <span wire:loading.delay.remove>
        {{$this->exists() ? "Listeye Ekli" : "Listeye Ekle"}}
    </span>
    <span wire:loading.delay>
        <i class="fas fa-spinner fa-spin"></i>
    </span>
    <x-slot:menu style="width: max-content" class="p-3">
        @foreach($this->lists as $list)
            <div>
                <label wire:key="{{$list}}">
                    <input type="checkbox" @if($exists = $this->existsInList($list)) checked @endif wire:change="toggleList(@js($list), @js(!$exists))">
                    {{ $list ?? 'Varsayılan Liste' }}
                </label>
            </div>
        @endforeach
        @if ($addMode)
            <div class="d-flex" style="gap: .5rem">
                <input wire:keydown.enter="addToNewList" class="form-control form-control-sm flex-grow-1" type="text" wire:model="newListName" placeholder="Yeni liste">
                <button wire:click="addToNewList" wire:en class="btn btn-primary btn-sm d-inline">Ekle</button>
            </div>
        @else
            <button wire:click="$set('addMode', true)" class="btn btn-primary btn-sm">Yeni liste oluştur</button>
        @endif
    </x-slot:menu>
</x-wire-dropdown>
