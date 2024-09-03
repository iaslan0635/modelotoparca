<div class="cart">
    <div class="cart__table cart-table">
        <table class="cart-table__table">
            <thead class="cart-table__head">
            <tr class="cart-table__row">
                <th class="cart-table__column cart-table__column--image">#</th>
                <th class="cart-table__column cart-table__column--product">Ürün</th>
                <th class="cart-table__column cart-table__column--price">Fiyat</th>
                <th class="cart-table__column cart-table__column--quantity">Miktar</th>
                <th class="cart-table__column cart-table__column--total">Tutar</th>
                <th class="cart-table__column cart-table__column--remove"></th>
            </tr>
            </thead>
            <tbody class="cart-table__body">
            @forelse($products as $item)
                <tr class="cart-table__row">
                    <td class="cart-table__column cart-table__column--image">
                        <div class="image image--type--product">
                            <a href="{{ route("product.show", $item->product) }}" class="image__body">
                                <img class="image__tag" src="{{ $item->product->imageUrl() }}" alt="">
                            </a>
                        </div>
                    </td>
                    <td class="cart-table__column cart-table__column--product">
                        <a href="" class="cart-table__product-name">{{ $item->product->full_title }}</a>
                    </td>
                    <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $item->product->price->sellingPrice() }}</td>
                    <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                        <div class="cart-table__quantity input-number">
                            <input class="form-control input-number__input" type="number" min="1" disabled value="{{ $item->quantity }}"
                                   wire:change="changeQuantity({{ $item->product->id }}, $event.target.value)"
                            >
                            <div class="input-number__add"></div>
                            <div class="input-number__sub"></div>
                        </div>
                    </td>
                    <td class="cart-table__column cart-table__column--total" data-title="Total">{{ $item->product->price->sellingPrice()->multiply($item->quantity) }}</td>
                    <td class="cart-table__column cart-table__column--remove">
                        <button wire:click="removeItem('{{ $item->product_id }}')" type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
                            <svg width="12" height="12">
                                <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
        c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
        C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                            </svg>
                        </button>
                    </td>
                </tr>
            @empty
            @endforelse
            </tbody>
        </table>
    </div>
</div>
