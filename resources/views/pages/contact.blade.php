@extends('layouts.master')
@section('content')

    <div class="site__body">
        <div class="block-header block-header--has-breadcrumb block-header--has-title">
            <div class="container">
                <div class="block-header__body">
                    <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                        <ol class="breadcrumb__list">
                            <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                            <li class="breadcrumb__item breadcrumb__item--parent breadcrumb__item--first">
                                <a href="index.html" class="breadcrumb__item-link">Anasayfa</a>
                            </li>
                            <li class="breadcrumb__item breadcrumb__item--current breadcrumb__item--last" aria-current="page">
                                <span class="breadcrumb__item-link">İletişim</span>
                            </li>
                            <li class="breadcrumb__title-safe-area" role="presentation" style="--block-header-title-width: 177.646px;"></li>
                        </ol>
                    </nav>
                    <h1 class="block-header__title">Bize Ulaşın</h1>
                </div>
            </div>
        </div>

        <div class="block">
            <div class="container container--max--lg">
                <div class="card">
                    <div class="card-body card-body--padding--2">
                        <div class="row">
                            <div class="col-12 col-lg-6 pb-4 pb-lg-0">
                                <div class="mr-1">
                                    <h4 class="contact-us__header card-title">Model Otomotiv</h4>
                                    <div class="contact-us__address">
                                        <p>İlhanlı, Kayseri Yolu No:298/1, 51100<br>
                                            Merkez/Niğde<br>
                                           </p>
                                        <p><strong>Telefon</strong><br>
                                           0388 213 67 57 <br>
                                            <br>
                                            </p>
                                        <p><strong>E-mail</strong><br>
                                            <a href="mailto:info@modelotoparca.com">info@modelotoparca.com</a> </p>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-lg-6">
                                <div class="ml-1">
                                    <h4 class="contact-us__header card-title">Mesaj Gönder</h4>
                                    <form>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="form-name">Ad Soyad</label>
                                                <input type="text" id="form-name" class="form-control" placeholder="Ad Soyad">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="form-email">Email</label>
                                                <input type="email" id="form-email" class="form-control" placeholder="Email Address">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="form-subject">Konu</label>
                                            <input type="text" id="form-subject" class="form-control" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="form-message">Mesajınız</label>
                                            <textarea id="form-message" class="form-control" rows="4"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Mesaj Gönder</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-space block-space--layout--before-footer"></div>
        <div class="block-map block">
            <div class="block-map__body">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6821.334007723454!2d34.7179261342836!3d37.98813095353351!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14d08f89b25d935f%3A0x370c8eab64ebc5dd!2sModel%20Otomotiv!5e1!3m2!1str!2str!4v1726233058747!5m2!1str!2str" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>       </div>
        </div>

    </div>


@endsection
