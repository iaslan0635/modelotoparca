@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--divider-xs"></div>
        <x-breadcrumb :parts="[
            ['name' => 'Satın Al']
        ]" />
        <div class="checkout block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Adres Seçimi</h3>
                                <div class="addresses-list">
                                    <a href="{{ route('add-adress') }}"
                                       class="addresses-list__item addresses-list__item--new">
                                        <div class="addresses-list__plus"></div>
                                        <div class="btn btn-secondary btn-sm">Yeni Ekle</div>
                                    </a>
                                    <div class="addresses-list__divider"></div>
                                    @foreach(auth()->user()->addresses as $address)
                                        @if($address->genre === "address")
                                            <div class="addresses-list__item card address-card">
                                                <div class="address-card__badge tag-badge tag-badge--theme">Default
                                                </div>
                                                <div class="address-card__body">
                                                    <div class="address-card__name">
                                                        {{ $address->fullName }}
                                                    </div>
                                                    <div class="address-card__row">
                                                        {{ $address->address }}
                                                    </div>
                                                    <div class="address-card__row">
                                                        <div class="address-card__row-title">Telefon Numarası</div>
                                                        <div
                                                            class="address-card__row-content">{{ $address->phone }}</div>
                                                    </div>
                                                    <div class="address-card__row">
                                                        <div class="address-card__row-title">İl / İlçe</div>
                                                        <div
                                                            class="address-card__row-content">{{ "$address->city / $address->district" }}</div>
                                                    </div>
                                                    <div class="address-card__footer">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <a href="{{ route('addresses.edit', $address) }}">Düzenle</a>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <form
                                                                    action="{{ route('addresses.destroy', $address) }}"
                                                                    method="post">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button class="btn btn-danger btn-sm">Sil</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="addresses-list__divider"></div>
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                            <div class="card-divider"></div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 col-xl-5 mt-4 mt-lg-0">
                        <div class="card mb-0">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Sipariş Bilgisi</h3>
                                <table class="checkout__totals">
                                    <thead class="checkout__totals-header">
                                    <tr>
                                        <th>Ürün</th>
                                        <th>Tutar</th>
                                    </tr>
                                    </thead>
                                    <tbody class="checkout__totals-products">
                                    @foreach(\App\Packages\Cart::getItems() as $item)
                                        <tr>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->formattedPrice() }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Ara Toplam</th>
                                        <td>{{ \App\Packages\Cart::formattedSubTotal() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Gönderim Ücreti</th>
                                        <td>{{ \App\Packages\Cart::formattedShipping() }}</td>
                                    </tr>
                                    <tr>
                                        <th>Vergi</th>
                                        <td>{{ \App\Packages\Cart::formattedTax() }}</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Toplam</th>
                                        <td>{{ \App\Packages\Cart::formattedTotal() }}</td>
                                    </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="block-space block-space--layout--divider-xs"></div>
                <div class="row">
                    <div class="col-12">
                        <div class="card mb-0">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Ödeme Formu</h3>
                                <form action="{{ route('order-complete') }}" method="POST">
                                    @csrf
                                    <div class="checkout__payment-methods payment-methods">
                                        <ul class="payment-methods__list">
                                            <li class="payment-methods__item payment-methods__item--active">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method" type="radio" checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">Banka Havalesi</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-details text-muted">
                                                        Make your payment directly into our bank account. Please use
                                                        your Order ID as the payment
                                                        reference. Your order will not be shipped until the funds have
                                                        cleared in our account.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">Kapıda Ödeme</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-details text-muted">
                                                        Please send a check to Store Name, Store Street, Store Town,
                                                        Store State / County, Store Postcode.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span
                                                        class="payment-methods__item-title">Kredi Kartı İle Ödeme</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-details text-muted">
                                                        Pay with cash upon delivery.
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="payment-methods__item">
                                                <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input"
                                                                   name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                    <span class="payment-methods__item-title">Bakiye İle Öde</span>
                                                </label>
                                                <div class="payment-methods__item-container">
                                                    <div class="payment-methods__item-details text-muted">
                                                        Pay via PayPal; you can pay with your credit card if you don’t
                                                        have a PayPal account.
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="checkout__agree form-group">
                                        <div class="form-check">
                                            <span class="input-check form-check-input">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox"
                                                           name="order_agreement"
                                                           id="checkout-terms">
                                                    <span class="input-check__box"></span>
                                                    <span class="input-check__icon"><svg width="9px" height="7px">
                                                            <path
                                                                d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z"/>
                                                        </svg>
                                                    </span>
                                                </span>
                                            </span>
                                            <label class="form-check-label" for="checkout-terms">
                                                <a target="_blank" href="terms.html">Mesafeli Satış Sözleşmesi</a>'ni
                                                Kabul Ediyorum
                                            </label>
                                            @error('order_agreement') <span class="error">{{ $message }}</span> @enderror
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-xl btn-block">Siparişi Tamamla
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection
