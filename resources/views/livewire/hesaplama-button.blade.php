<button class="product-card__addtocart-full" wire:click="toggleCalculate" wire:loading.attr="disabled">
    <span wire:loading.remove>
        {{$this->exists() ? "Hesaplama Aracından kaldır" : "Hesaplama Aracına Ekle"}}
    </span>
    <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
</button>
