<div style="display: flex">
    @if($quantity_mode)
        <div class="product__actions-item product__actions-item--quantity">
            <div class="input-number">
                <input class="input-number__input form-control form-control-lg" type="number" min="1"
                       value="{{ $quantity }}">
                <div class="input-number__add" wire:click="add()"></div>
                <div class="input-number__sub" wire:click="sub()"></div>
            </div>
        </div>
        <div class="product__actions-item product__actions-item--addtocart" data-slug="{{ $product->slug }}">
            <button class="btn btn-primary btn-lg btn-block" wire:click="addToCart()" wire:loading.attr="disabled">
                <span wire:loading.remove>Sepete Ekle</span>
                <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
            </button>
        </div>
    @else
        <button class="product-card__addtocart-full" wire:click="addToCart()" wire:loading.attr="disabled">
            <span wire:loading.remove>Sepete Ekle</span>
            <span wire:loading><i class="fas fa-spinner fa-spin"></i></span>
        </button>
    @endif
</div>
