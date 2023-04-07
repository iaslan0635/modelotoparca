<header class="site__header">
    <div class="header">
        <div class="header__megamenu-area megamenu-area"></div>
        <div class="header__topbar-classic-bg"></div>
        <div class="header__topbar-classic">
            <div class="topbar topbar--classic">
                <div class="topbar__item-text"><a class="topbar__link" href="about-us.html">Hakkımızda</a></div>
                <div class="topbar__item-text"><a class="topbar__link" href="contact-us-v1.html">İletişim</a></div>
                <div class="topbar__item-text"><a class="topbar__link" href="track-order.html">Sipariş Takibi</a></div>
                <div class="topbar__item-spring"></div>
                <div class="topbar__item-button topbar__menu">
                    <button class="topbar__button topbar__button--has-arrow topbar__menu-button" type="button">
                        <span class="topbar__button-label">Para Birimi:</span>
                        <span class="topbar__button-title">USD</span>
                        <span class="topbar__button-arrow"><svg width="7px" height="5px">
                                        <path d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z" />
                                    </svg>
                                </span>
                    </button>
                    <div class="topbar__menu-body">
                        <a class="topbar__menu-item" href="#">€ Euro</a>
                        <a class="topbar__menu-item" href="#">£ Pound Sterling</a>
                        <a class="topbar__menu-item" href="#">$ US Dollar</a>
                        <a class="topbar__menu-item" href="#">₽ Russian Ruble</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header__navbar">
            <div class="header__navbar-departments">
                <div class="departments">
                    <button class="departments__button" type="button">
                                <span class="departments__button-icon"><svg width="16px" height="12px">
                                        <path d="M0,7L0,5L16,5L16,7L0,7ZM0,0L16,0L16,2L0,2L0,0ZM12,12L0,12L0,10L12,10L12,12Z" />
                                    </svg>
                                </span>
                        <span class="departments__button-title">Ürün Kategorileri</span>
                        <span class="departments__button-arrow"><svg width="9px" height="6px">
                                        <path d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z" />
                                    </svg>
                                </span>
                    </button>
                    <div class="departments__menu">
                        <div class="departments__arrow"></div>
                        <div class="departments__body">
                            <ul class="departments__list">
                                <li class="departments__list-padding" role="presentation"></li>
                                @foreach($__Categories as $root)
                                    <li class="departments__item departments__item--submenu--megamenu departments__item--has-submenu">
                                        <a href="{{ route('category.show', $root) }}" class="departments__item-link">
                                            {{ $root->name }}
                                            <span class="departments__item-arrow"><svg width="7" height="11"><path
                                                        d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9 C-0.1,9.8-0.1,10.4,0.3,10.7z"/></svg></span>
                                        </a>
                                        <div class="departments__item-menu">
                                            <div class="megamenu departments__megamenu departments__megamenu--size--xl">
                                                <div class="megamenu__image">
                                                    <img src="{{ $root->image?->url }}" alt="">
                                                </div>
                                                <div class="row">
                                                    @foreach($root->children->chunk(4) as $chunk)
                                                        <div class="col-1of5">
                                                            <ul class="megamenu__links megamenu-links megamenu-links--root">
                                                                @foreach($chunk as $child)
                                                                    @if(blank($child->children))
                                                                        <li class="megamenu-links__item">
                                                                            <a class="megamenu-links__item-link" href="">{{ $child->name }}</a>
                                                                        </li>
                                                                    @else
                                                                        <li class="megamenu-links__item megamenu-links__item--has-submenu">
                                                                            <a class="megamenu-links__item-link" href="">{{ $child->name }}</a>
                                                                            <ul class="megamenu-links">
                                                                                @foreach($child->children as $grandChild)
                                                                                    <li class="megamenu-links__item">
                                                                                        <a class="megamenu-links__item-link" href="">{{ $grandChild->name }}</a>
                                                                                    </li>
                                                                                @endforeach
                                                                            </ul>
                                                                        </li>
                                                                    @endempty
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                                <li class="departments__list-padding" role="presentation"></li>
                            </ul>
                            <div class="departments__menu-container"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__navbar-menu">
                <div class="main-menu">
                    <ul class="main-menu__list">
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="{{route('home')}}" class="main-menu__link">
                                Anasayfa
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--megamenu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Madeni Yağlar
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Akü
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                               Lastikler
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="#" class="main-menu__link">
                                Ürün Markaları
                            </a>
                        </li>
                        <li class="main-menu__item main-menu__item--submenu--menu main-menu__item--has-submenu">
                            <a href="{{route('category.index')}}" class="main-menu__link">
                                Kategoriler
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="header__navbar-phone phone">
                <a href="" class="phone__body">
                    <div class="phone__title">Destek Hattı:</div>
                    <div class="phone__number">800 060-0730</div>
                </a>
            </div>
        </div>
        <div class="header__logo">
            <a href="/" class="logo">
                <div class="logo__slogan">
                    Modelotoparca
                </div>
                <div class="logo__image">
                    <!-- logo -->
                    <img style="max-width: 160px" src="https://websitem.modelotoparca.com/public/images/default/dark-logo.png">
                    <!-- logo / end -->
                </div>
            </a>
        </div>
        <livewire:header.search />
        <div class="header__indicators">
            <div class="indicator">
                <a href="wishlist.html" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2
	C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2
	z" />
                                </svg>
                            </span>
                </a>
            </div>
            <div class="indicator indicator--trigger--click">
                <a href="account-login.html" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <path d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7
	C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z" />
                                </svg>
                            </span>
                    <span class="indicator__title">Hello, Log In</span>
                    <span class="indicator__value">Hesabım</span>
                </a>
                <div class="indicator__content">
                    <div class="account-menu">
                        <form class="account-menu__form">
                            <div class="account-menu__form-title">
                                Hesabınız ile Giriş Yap
                            </div>
                            <div class="form-group">
                                <label for="header-signin-email" class="sr-only">Email address</label>
                                <input id="header-signin-email" type="email" class="form-control form-control-sm" placeholder="Email address">
                            </div>
                            <div class="form-group">
                                <label for="header-signin-password" class="sr-only">Password</label>
                                <div class="account-menu__form-forgot">
                                    <input id="header-signin-password" type="password" class="form-control form-control-sm" placeholder="Password">
                                    <a href="" class="account-menu__form-forgot-link">Forgot?</a>
                                </div>
                            </div>
                            <div class="form-group account-menu__form-button">
                                <button type="submit" class="btn btn-primary btn-sm">Login</button>
                            </div>
                            <div class="account-menu__form-link">
                                <a href="account-login.html">Create An Account</a>
                            </div>
                        </form>
                        <div class="account-menu__divider"></div>
                        <a href="" class="account-menu__user">
                            <div class="account-menu__user-avatar">
                                <img src="{{ asset('images/avatars/avatar-4.jpg') }}" alt="">
                            </div>
                            <div class="account-menu__user-info">
                                <div class="account-menu__user-name">Ryan Ford</div>
                                <div class="account-menu__user-email">red-parts@example.com</div>
                            </div>
                        </a>
                        <div class="account-menu__divider"></div>
                        <ul class="account-menu__links">
                            <li><a href="account-dashboard.html">Dashboard</a></li>
                            <li><a href="account-dashboard.html">Garage</a></li>
                            <li><a href="account-profile.html">Edit Profile</a></li>
                            <li><a href="account-orders.html">Order History</a></li>
                            <li><a href="account-addresses.html">Addresses</a></li>
                        </ul>
                        <div class="account-menu__divider"></div>
                        <ul class="account-menu__links">
                            <li><a href="account-login.html">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="indicator indicator--trigger--click">
                <a href="cart.html" class="indicator__button">
                            <span class="indicator__icon">
                                <svg width="32" height="32">
                                    <circle cx="10.5" cy="27.5" r="2.5" />
                                    <circle cx="23.5" cy="27.5" r="2.5" />
                                    <path d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
	l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
	c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z" />
                                </svg>
                                <span class="indicator__counter">3</span>
                            </span>
                    <span class="indicator__title">Shopping Cart</span>
                    <span class="indicator__value">$250.00</span>
                </a>
                <div class="indicator__content">
                    <div class="dropcart">
                        <ul class="dropcart__list">
                            <li class="dropcart__item">
                                <div class="dropcart__item-image image image--type--product">
                                    <a class="image__body" href="product-full.html">
                                        <img class="image__tag" src="{{ asset('images/products/defaults/product-4-70x70.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dropcart__item-info">
                                    <div class="dropcart__item-name">
                                        <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                    </div>
                                    <ul class="dropcart__item-features">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                    <div class="dropcart__item-meta">
                                        <div class="dropcart__item-quantity">2</div>
                                        <div class="dropcart__item-price">$699.00</div>
                                    </div>
                                </div>
                                <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                        <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                    </svg>
                                </button>
                            </li>
                            <li class="dropcart__divider" role="presentation"></li>
                            <li class="dropcart__item">
                                <div class="dropcart__item-image image image--type--product">
                                    <a class="image__body" href="product-full.html">
                                        <img class="image__tag" src="{{ asset('images/products/defaults/product-2-70x70.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dropcart__item-info">
                                    <div class="dropcart__item-name">
                                        <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                    </div>
                                    <div class="dropcart__item-meta">
                                        <div class="dropcart__item-quantity">1</div>
                                        <div class="dropcart__item-price">$849.00</div>
                                    </div>
                                </div>
                                <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                        <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                    </svg>
                                </button>
                            </li>
                            <li class="dropcart__divider" role="presentation"></li>
                            <li class="dropcart__item">
                                <div class="dropcart__item-image image image--type--product">
                                    <a class="image__body" href="product-full.html">
                                        <img class="image__tag" src="{{ asset('images/products/defaults/product-5-70x70.jpg') }}" alt="">
                                    </a>
                                </div>
                                <div class="dropcart__item-info">
                                    <div class="dropcart__item-name">
                                        <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                    </div>
                                    <ul class="dropcart__item-features">
                                        <li>Color: True Red</li>
                                    </ul>
                                    <div class="dropcart__item-meta">
                                        <div class="dropcart__item-quantity">3</div>
                                        <div class="dropcart__item-price">$1210.00</div>
                                    </div>
                                </div>
                                <button type="button" class="dropcart__item-remove"><svg width="10" height="10">
                                        <path d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
	C9.2,7.8,9.2,8.4,8.8,8.8z" />
                                    </svg>
                                </button>
                            </li>
                            <li class="dropcart__divider" role="presentation"></li>
                        </ul>
                        <div class="dropcart__totals">
                            <table>
                                <tr>
                                    <th>Subtotal</th>
                                    <td>$5877.00</td>
                                </tr>
                                <tr>
                                    <th>Shipping</th>
                                    <td>$25.00</td>
                                </tr>
                                <tr>
                                    <th>Tax</th>
                                    <td>$0.00</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td>$5902.00</td>
                                </tr>
                            </table>
                        </div>
                        <div class="dropcart__actions">
                            <a href="cart.html" class="btn btn-secondary">View Cart</a>
                            <a href="checkout.html" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
