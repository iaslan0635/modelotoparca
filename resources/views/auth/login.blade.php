@extends('layouts.master')
@section('content')
    <!-- site__body -->
    <div class="site__body">
        <div class="block-space block-space--layout--after-header"></div>
        <div class="block">
            <div class="container container--max--lg">
                <div class="row">
                    <div class="col-md-6 d-flex">
                        <div class="card flex-grow-1 mb-md-0 mr-0 mr-lg-3 ml-0 ml-lg-4">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Giriş Yap</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="signin-email">Email Adres</label>
                                        <input id="signin-email" type="email" class="form-control" placeholder="customer@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="signin-password">Şifre</label>
                                        <input id="signin-password" type="password" class="form-control" placeholder="Secret word">
                                        <small class="form-text text-muted">
                                            <a href="">Şifremi Unuttum?</a>
                                        </small>
                                    </div>
                                    <div class="form-group">
                                        <div class="form-check">
                                                <span class="input-check form-check-input">
                                                    <span class="input-check__body">
                                                        <input class="input-check__input" type="checkbox" id="signin-remember">
                                                        <span class="input-check__box"></span>
                                                        <span class="input-check__icon"><svg width="9px" height="7px">
                                                                <path d="M9,1.395L3.46,7L0,3.5L1.383,2.095L3.46,4.2L7.617,0L9,1.395Z" />
                                                            </svg>
                                                        </span>
                                                    </span>
                                                </span>
                                            <label class="form-check-label" for="signin-remember">Beni Hatırla</label>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary mt-3">Giriş Yap</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex mt-4 mt-md-0">
                        <div class="card flex-grow-1 mb-0 ml-0 ml-lg-3 mr-0 mr-lg-4">
                            <div class="card-body card-body--padding--2">
                                <h3 class="card-title">Kayıt Ol</h3>
                                <form>
                                    <div class="form-group">
                                        <label for="signup-email">Email Adres</label>
                                        <input id="signup-email" type="email" class="form-control" placeholder="customer@example.com">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-password">Şifre</label>
                                        <input id="signup-password" type="password" class="form-control" placeholder="Secret word">
                                    </div>
                                    <div class="form-group">
                                        <label for="signup-confirm">Şifre Tekrarı</label>
                                        <input id="signup-confirm" type="password" class="form-control" placeholder="Secret word">
                                    </div>
                                    <div class="form-group mb-0">
                                        <button type="submit" class="btn btn-primary mt-3">Kayıt Ol</button>
                                    </div>
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
