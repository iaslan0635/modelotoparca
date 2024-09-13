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
            @forelse($items as $item)
            <tr class="cart-table__row">
                <td class="cart-table__column cart-table__column--image">
                    <div class="image image--type--product">
                        <a href="{{ route("product.show", $item->model) }}" class="image__body">
                            <img class="image__tag" src="{{ $item->model->imageUrl() }}" alt="">
                        </a>
                    </div>
                </td>
                <td class="cart-table__column cart-table__column--product">
                    <a href="" class="cart-table__product-name">{{ $item->name }}</a>
                    <ul class="cart-table__options">
                        @foreach($item->attributes as $attribute)
                            <li>{{ $attribute["name"] }}: {{ $attribute["value"] }}</li>
                        @endforeach
                    </ul>

                    @if($item->alert)
                        <div class="alert alert-{{ $item->alertType }} alert-dismissible fade show" role="alert">
                            <strong>UYARI!</strong> {{ $item->alertMessage }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    @if($item->stockAlert)
                        <div class="alert alert-{{ $item->stockAlertType }} alert-dismissible fade show" role="alert">
                            <strong>UYARI!</strong> {{ $item->stockAlertMessage }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </td>
                <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $item->formattedPrice() }}</td>
                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                    <div class="cart-table__quantity input-number">
                        <input class="form-control input-number__input" type="number" min="1" disabled value="{{ $item->quantity }}">
                        <div class="input-number__add" wire:loading.attr="disabled" wire:click="add('{{ $item->id }}', {{ $item->quantity + 1 }})"></div>
                        <div class="input-number__sub" wire:loading.attr="disabled" wire:click="sub('{{ $item->id }}', {{ $item->quantity - 1 }})"></div>
                    </div>
                </td>
                <td class="cart-table__column cart-table__column--total" data-title="Total">{{ $item->totalFormattedPrice() }}</td>
                <td class="cart-table__column cart-table__column--remove">
                    <button wire:click="removeItem('{{ $item->id }}')" type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
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
            <tfoot class="cart-table__foot">
            <tr>
                <td colspan="6">
                    <div class="cart-table__actions">
                        <form class="cart-table__coupon-form form-row" wire:submit.prevent="addCoupon">
                            <div class="form-group mb-0 col flex-grow-1">
                                <input type="text" wire:model="coupon" class="form-control form-control-sm" placeholder="İndirim Kodu">
                            </div>
                            <div class="form-group mb-0 col-auto">
                                <button type="submit" class="btn btn-sm btn-primary">Kodu Uygula</button>
                            </div>
                        </form>
                        <div class="cart-table__update-button">
                            {{--                                            <a class="btn btn-sm btn-primary" href="">Sepeti Güncelle</a>--}}
                        </div>
                    </div>
                </td>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="cart__totals">
        <div class="card">
            <div class="card-body card-body--padding--2">
                <h3 class="card-title">Sipariş özeti</h3>
                <table class="cart__totals-table">
                    <thead>
                    <tr>
                        <th>Ara Toplam</th>
                        <td>{{ $subTotal }}</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th>Kargo</th>
                        <td>
                            {{ $shipping }}
                        </td>
                    </tr>
                    <tr>
                        <th>Vergi</th>
                        <td>{{ $tax }}</td>
                    </tr>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th>Toplam Tutar</th>
                        <td>{{ $total }}</td>
                    </tr>
                    <tr>
                        <th>İndirim</th>
                        <td>{{ \App\Packages\Cart::getDiscounts()['amount'] }}</td>
                    </tr>
                    </tfoot>
                </table>
                <a class="btn btn-primary btn-xl btn-block" href="{{route('checkout')}}">
                    İşleme Devam Et
                </a>
            </div>
        </div>
    </div>
</div>
