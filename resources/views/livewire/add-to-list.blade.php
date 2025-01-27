<x-wire-dropdown
        :class="$class ?? ($variant == 'icon' ? 'product-card__addtocart-icon mr-2' : 'product-card__addtocart-full')"
        wire:loading.attr="disabled" parent-class="dropleft"
        :style="$variant == 'default' ? 'min-width: 11rem' : ''"
>
    @if ($variant == 'icon')
        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="12">
            <path d="M6.5,1.5l1.6,3L8.4,5H9h2.4l-2,1.6L8.9,7L9,7.6l0.7,3L7,9.1L6.5,8.9L6,9.1l-2.8,1.5l0.7-3L4.1,7L3.6,6.6L1.6,5
	H4h0.6l0.3-0.5L6.5,1.5 M6.5,0C6.3,0,6.1,0.1,6,0.3L4,4H0.5C0,4.1-0.2,4.8,0.2,5.1L3,7.4l-1,4C1.9,11.7,2.2,12,2.5,12
	c0.1,0,0.2,0,0.3-0.1L6.5,10l3.7,1.9c0.1,0,0.2,0.1,0.3,0.1c0.3,0,0.6-0.3,0.5-0.6l-1-4l2.8-2.3c0.3-0.3,0.1-1-0.3-1.1H9L7,0.3
	C6.9,0.1,6.7,0,6.5,0L6.5,0z"/>
        </svg>
    @else
        <span wire:loading.delay.remove>
            {{$this->exists() ? "Listede" : "Listeye Ekle"}}
        </span>
        <span wire:loading.delay>
            <i class="fas fa-spinner fa-spin"></i>
        </span>
    @endif
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
