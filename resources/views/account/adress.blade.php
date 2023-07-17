@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        @include('account.partials.navigation')
                    </div>
                    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
                        <div class="addresses-list">
                            <a href="{{ route('add-adress') }}" class="addresses-list__item addresses-list__item--new">
                                <div class="addresses-list__plus"></div>
                                <div class="btn btn-secondary btn-sm">Add New</div>
                            </a>
                            <div class="addresses-list__divider"></div>
                            @foreach(auth()->user()->addresses as $address)
                                <div class="addresses-list__item card address-card">
                                    <div class="address-card__badge tag-badge tag-badge--theme">{{ $address->type === "company" ? "Şirket":"Bireysel" }}</div>
                                    <div class="address-card__body">
                                        <div class="address-card__name">{{ $address->fullName }}</div>
                                        <div class="address-card__row">
                                            {{ $address->address }}
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">Telefon Numarası</div>
                                            <div class="address-card__row-content">{{ $address->phone }}</div>
                                        </div>
                                        <div class="address-card__row">
                                            <div class="address-card__row-title">İl / İlçe</div>
                                            <div class="address-card__row-content">{{ "$address->city / $address->district" }}</div>
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
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection
