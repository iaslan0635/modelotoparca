<div class="indicator indicator--trigger--click">
    <a href="cart.html" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5"/>
                                    <circle cx="23.5" cy="27.5" r="2.5"/>
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
	l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
	c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"/>
                                </svg>
                                <span class="indicator__counter">{{ count($items) }}</span>
                            </span>
        <span class="indicator__title">Sepetim</span>
        <span class="indicator__value">{{ $total }}</span>
    </a>
    <div class="indicator__content">
        <div class="dropcart">
            <ul class="dropcart__list">
                @forelse($items as $item)
                    <li class="dropcart__item">
                        <div class="dropcart__item-image image image--type--product">
                            <a class="image__body" href="{{ route('product.show', $item->model) }}">
                                <img class="image__tag"
                                     src="{{ $item->model->imageUrl() }}" alt="">
                            </a>
                        </div>
                        <div class="dropcart__item-info">
                            <div class="dropcart__item-name">
                                <a href="{{ route('product.show', $item->model) }}">{{ $item->name }}</a>
                            </div>
                            <ul class="dropcart__item-features">
                                @foreach($item->attributes as $attribute)
                                    <li>{{ $attribute["name"] }}: {{ $attribute["value"] }}</li>
                                @endforeach
                            </ul>
                            <div class="dropcart__item-meta">
                                <div class="dropcart__item-quantity">{{ $item->quantity }}</div>
                                <div class="dropcart__item-price">{{ $item->formattedPrice() }}</div>
                            </div>
                        </div>
                        <button type="button" class="dropcart__item-remove" wire:click="removeItem('{{ $item->id }}')">
                            <svg width="10" height="10">
                                <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z"/>
                            </svg>
                        </button>
                    </li>
                    <li class="dropcart__divider" role="presentation"></li>
                @empty
                    Sepetinizde Ürün Bulunmuyor
                @endforelse
            </ul>
            <div class="dropcart__totals">
                <table>
                    <tr>
                        <th>Ara Toplam</th>
                        <td>{{ $subTotal }}</td>
                    </tr>
                    <tr>
                        <th>Gönderim Ücreti</th>
                        <td>{{ $shipping }}</td>
                    </tr>
                    <tr>
                        <th>Vergi</th>
                        <td>{{ $tax }}</td>
                    </tr>
                    <tr>
                        <th>Toplam</th>
                        <td>{{ $total }}</td>
                    </tr>
                </table>
            </div>
            <div class="dropcart__actions">
                <a href="{{route('cart')}}" class="btn btn-secondary">Sepeti Görüntüle</a>
                <a href="{{route('checkout')}}" class="btn btn-primary">Ödeme Yap</a>
            </div>
        </div>
    </div>
</div>
