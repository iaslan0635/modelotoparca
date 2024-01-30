@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--spaceship-ledge-height"></div>
        <div class="block order-success">
            <div class="container">
                <div class="order-success__body">
                    <div class="order-success__header">
                        <div class="order-success__icon">
                            <svg width="100" height="100">
                                <path d="M50,100C22.4,100,0,77.6,0,50S22.4,0,50,0s50,22.4,50,50S77.6,100,50,100z M50,2C23.5,2,2,23.5,2,50
        s21.5,48,48,48s48-21.5,48-48S76.5,2,50,2z M44.2,71L22.3,49.1l1.4-1.4l21.2,21.2l34.4-34.4l1.4,1.4L45.6,71
        C45.2,71.4,44.6,71.4,44.2,71z" />
                            </svg>
                        </div>
                        <h1 class="order-success__title">Siparişiniz Başarılı</h1>
                        <hr>
                        <div class="order-success__subtitle">Bizi tercih ettiğiniz için teşekkür ederiz.</div>
                        <div class="order-success__actions">
                            <a href="/" class="btn btn-sm btn-secondary">Anasayfaya Dön</a>
                        </div>
                    </div>
                    <div class="card order-success__meta">
                        <ul class="order-success__meta-list">
                            <li class="order-success__meta-item">
                                <span class="order-success__meta-title">Sipariş Numarası:</span>
                                <span class="order-success__meta-value">#{{ $order->id }}</span>
                            </li>
                            <li class="order-success__meta-item">
                                <span class="order-success__meta-title">Oluşturulma Tarihi:</span>
                                <span class="order-success__meta-value">{{ $order->created_at->translatedFormat("d M Y H:i") }}</span>
                            </li>
                            <li class="order-success__meta-item">
                                <span class="order-success__meta-title">Toplam Tutar:</span>
                                <span class="order-success__meta-value">{{ \App\Facades\TaxFacade::formattedPrice($order->items()->sum('price')) }}</span>
                            </li>
                            <li class="order-success__meta-item">
                                <span class="order-success__meta-title">Ödeme Yöntemi:</span>
                                <span class="order-success__meta-value">Kredi Kartı</span>
                            </li>
                        </ul>
                    </div>
                    <div class="card">
                        <div class="order-list">
                            <table>
                                <thead class="order-list__header">
                                <tr>
                                    <th class="order-list__column-label" colspan="2">Ürün</th>
                                    <th class="order-list__column-quantity">Miktar</th>
                                    <th class="order-list__column-total">Tutar</th>
                                </tr>
                                </thead>
                                <tbody class="order-list__products">
                                @foreach($order->items as $item)
                                    <tr>
                                        <td class="order-list__column-image">
                                            <div class="image image--type--product">
                                                <a href="{{ route('product.show', $item->product->id) }}" class="image__body">
                                                    <img class="image__tag" src="{{ $item->product->imageUrl() }}" alt="">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="order-list__column-product">
                                            <a href="{{ route('product.show', $item->product->id) }}">{{ $item->product_data['title'] }}</a>
                                            <div class="order-list__options">
                                                <ul class="order-list__options-list">
                                                    <li class="order-list__options-item">
                                                            <span class="order-list__options-label">
                                                                Color:
                                                            </span>
                                                        <span class="order-list__options-value">
                                                                True Red
                                                            </span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="order-list__column-quantity" data-title="Quantity:">
                                            {{ $item->quantity }}
                                        </td>
                                        <td class="order-list__column-total">
                                            {{ $item->formattedPrice }}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tbody class="order-list__subtotals">
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Toplam</th>
                                    <td class="order-list__column-total">{{ \App\Facades\TaxFacade::formattedPrice($order->items()->sum('price')) }}</td>
                                </tr>
                                </tbody>
                                <tfoot class="order-list__footer">
                                <tr>
                                    <th class="order-list__column-label" colspan="3">Genel Toplam</th>
                                    <td class="order-list__column-total">{{ \App\Facades\TaxFacade::formattedPrice($order->items()->sum('price')) }}</td>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <div class="order-success__addresses">
                        <div class="order-success__address card address-card">
                            <div class="address-card__badge tag-badge tag-badge--theme">
                                Kargo Adresi
                            </div>
                            <div class="address-card__body">
                                <div class="address-card__name">{{ $order->shipmentAddress->fullName }}</div>
                                <div class="address-card__row">
                                    {{ $order->shipmentAddress->address }}
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Telefon Numarası</div>
                                    <div class="address-card__row-content">{{ $order->shipmentAddress->phone }}</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">İl / İlçe</div>
                                    <div class="address-card__row-content">{{ $order->shipmentAddress->city }} / {{ $order->shipmentAddress->district }}</div>
                                </div>
                            </div>
                        </div>
                        <div class="order-success__address card address-card">
                            <div class="address-card__badge tag-badge tag-badge--theme">
                                Fatura Adresi
                            </div>
                            <div class="address-card__body">
                                <div class="address-card__name">{{ $order->invoiceAddress->fullName }}</div>
                                <div class="address-card__row">
                                    {{ $order->invoiceAddress->address }}
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">Telefon Numarası</div>
                                    <div class="address-card__row-content">{{ $order->invoiceAddress->phone }}</div>
                                </div>
                                <div class="address-card__row">
                                    <div class="address-card__row-title">İl / İlçe</div>
                                    <div class="address-card__row-content">{{ $order->invoiceAddress->city }} / {{ $order->invoiceAddress->district }}</div>
                                </div>
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
