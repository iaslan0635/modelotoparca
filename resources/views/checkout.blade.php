@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--divider-xs"></div>
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                    </nav>
                    <h1 class="block-header__title">Satın Al</h1>
                </div>
            </div>
        </div>
        <div class="checkout block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-9 col-xl-7">
                        <div class="card mb-lg-0">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Adres Seçimi</h3>
                                <div class="addresses-list">
                                    <a href="{{route('add-adress')}}" class="addresses-list__item addresses-list__item--new">
                                        <div class="addresses-list__plus"></div>
                                        <div class="btn btn-secondary btn-sm">Yeni Ekle</div>
                                    </a>
                                    <div class="addresses-list__divider"></div>
                                    <div class="addresses-list__item card address-card">
                                        <div class="address-card__badge tag-badge tag-badge--theme">Default</div>
                                        <div class="address-card__body">
                                            <div class="address-card__name">Helena Garcia</div>
                                            <div class="address-card__row">
                                                Random Federation<br>
                                                115302, Moscow<br>
                                                ul. Varshavskaya, 15-2-178
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Phone Number</div>
                                                <div class="address-card__row-content">38 972 588-42-36</div>
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Email Address</div>
                                                <div class="address-card__row-content">helena@example.com</div>
                                            </div>
                                            <div class="address-card__footer">
                                                <a href="">Düzenle</a>&nbsp;&nbsp;
                                                <a href="">Sil</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="addresses-list__divider"></div>
                                    <div class="addresses-list__item card address-card">
                                        <div class="address-card__body">
                                            <div class="address-card__name">Jupiter Saturnov</div>
                                            <div class="address-card__row">
                                                RandomLand<br>
                                                4b4f53, MarsGrad<br>
                                                Sun Orbit, 43.3241-85.239
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Phone Number</div>
                                                <div class="address-card__row-content">ZX 971 972-57-26</div>
                                            </div>
                                            <div class="address-card__row">
                                                <div class="address-card__row-title">Email Address</div>
                                                <div class="address-card__row-content">jupiter@example.com</div>
                                            </div>
                                            <div class="address-card__footer">
                                                <a href="">Düzenle</a>&nbsp;&nbsp;
                                                <a href="">Sil</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="addresses-list__divider"></div>
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
                                        <th>Product</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody class="checkout__totals-products">
                                    <tr>
                                        <td>Glossy Gray 19" Aluminium Wheel AR-19 × 2</td>
                                        <td>$1398.00</td>
                                    </tr>
                                    <tr>
                                        <td>Brandix Brake Kit BDX-750Z370-S × 1</td>
                                        <td>$849.00</td>
                                    </tr>
                                    <tr>
                                        <td>Twin Exhaust Pipe From Brandix Z54 × 3</td>
                                        <td>$3630.00</td>
                                    </tr>
                                    </tbody>
                                    <tbody class="checkout__totals-subtotals">
                                    <tr>
                                        <th>Subtotal</th>
                                        <td>$5877.00</td>
                                    </tr>
                                    <tr>
                                        <th>Store Credit</th>
                                        <td>$-20.00</td>
                                    </tr>
                                    <tr>
                                        <th>Shipping</th>
                                        <td>$25.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot class="checkout__totals-footer">
                                    <tr>
                                        <th>Toplam Tutar</th>
                                        <td>$5882.00</td>
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
                                <form action="{{route('order-success')}}">
                                <div class="checkout__payment-methods payment-methods">
                                    <ul class="payment-methods__list">
                                        <li class="payment-methods__item payment-methods__item--active">
                                            <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio" checked>
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">Banka Havalesi</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-details text-muted">
                                                    Make your payment directly into our bank account. Please use your Order ID as the payment
                                                    reference. Your order will not be shipped until the funds have cleared in our account.
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item">
                                            <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">Kapıda Ödeme</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-details text-muted">
                                                    Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.
                                                </div>
                                            </div>
                                        </li>
                                        <li class="payment-methods__item">
                                            <label class="payment-methods__item-header">
                                                    <span class="payment-methods__item-radio input-radio">
                                                        <span class="input-radio__body">
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">Kredi Kartı İle Ödeme</span>
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
                                                            <input class="input-radio__input" name="checkout_payment_method" type="radio">
                                                            <span class="input-radio__circle"></span>
                                                        </span>
                                                    </span>
                                                <span class="payment-methods__item-title">Bakiye İle Öde</span>
                                            </label>
                                            <div class="payment-methods__item-container">
                                                <div class="payment-methods__item-details text-muted">
                                                    Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="checkout__agree form-group">
                                    <div class="form-check">
                                            <span class="input-check form-check-input">
                                                <span class="input-check__body">
                                                    <input class="input-check__input" type="checkbox" id="checkout-terms">
                                                    <span class="input-check__box"></span>
                                                    <span class="input-check__icon"><svg width="9px" height="7px">
                                                            <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                                        </svg>
                                                    </span>
                                                </span>
                                            </span>
                                        <label class="form-check-label" for="checkout-terms">
                                            <a target="_blank" href="terms.html">Mesafeli Satış Sözleşmesi</a>'ni Kabul Ediyorum
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-xl btn-block">Siparişi Tamamla</button>
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
