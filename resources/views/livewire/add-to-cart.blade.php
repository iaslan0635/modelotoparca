<div style="display: flex; width: 100%">
    @if($quantity_mode)
        @if($product->quantity > 1)
            <div class="product__actions-item product__actions-item--quantity">
                <div class="input-number">
                    <input class="input-number__input form-control form-control-lg" type="number" min="1"
                           value="{{ $quantity }}">
                    <div class="input-number__add" wire:click="add()"></div>
                    <div class="input-number__sub" wire:click="sub()"></div>
                </div>
            </div>
        @endif
        <div class="product__actions-item product__actions-item--addtocart" data-slug="{{ $product->slug }}">
            @if($product->quantity > 1)
                <button class="btn btn-primary btn-lg" wire:click="addToCart()" wire:loading.attr="disabled">
                    <span wire:loading.remove>Sepete Ekle</span>
                    <span wire:loading>
                        <i class="fas fa-spinner fa-spin"></i>
                    </span>
                </button>
            @else
                <button disabled class="btn btn-primary btn-lg">
                    <span>Stokta Yok</span>
                </button>
            @endif
        </div>
    @else
        @if($product->quantity > 1)
            <button class="product-card__addtocart-full" wire:click="addToCart()" wire:loading.attr="disabled">
                <span wire:loading.remove>Sepete Ekle</span>
                <span wire:loading>
                    <i class="fas fa-spinner fa-spin"></i>
                </span>
            </button>
        @else
            <button disabled class="product-card__addtocart-full">
                <span>Stokta Yok</span>
            </button>
        @endif
    @endif
</div>
