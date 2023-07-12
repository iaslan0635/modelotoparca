@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--xl">
                <div class="row">
                    <div class="col-12 col-lg-3 d-flex">
                        <div class="account-nav flex-grow-1">
                            <h4 class="account-nav__title">Hesabım</h4>
                            <ul class="account-nav__list">
                                <li class="account-nav__item  account-nav__item--active ">
                                    <a href="#">Adres Düzenle</a>
                                </li>

                                <li class="account-nav__divider" role="presentation"></li>
                                <li class="account-nav__item ">
                                    <a href="{{ url()->previous() }}">Vazgeç</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <livewire:user.add-address :address="$address" :edit="true" :type="old('type', $address->type)" />
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
    </div>
    <!-- site__body / end -->
@endsection
