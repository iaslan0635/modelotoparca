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
                    <h1 class="block-header__title">Alışveriş Sepeti</h1>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="container">
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
                            <tr class="cart-table__row">
                                <td class="cart-table__column cart-table__column--image">
                                    <div class="image image--type--product">
                                        <a href="product-full.html" class="image__body">
                                            <img class="image__tag" src="images/products/product-4-160x160.jpg" alt="">
                                        </a>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--product">
                                    <a href="" class="cart-table__product-name">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                    <ul class="cart-table__options">
                                        <li>Color: Yellow</li>
                                        <li>Material: Aluminium</li>
                                    </ul>
                                </td>
                                <td class="cart-table__column cart-table__column--price" data-title="Price">$699.00</td>
                                <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                    <div class="cart-table__quantity input-number">
                                        <input class="form-control input-number__input" type="number" min="1" value="2">
                                        <div class="input-number__add"></div>
                                        <div class="input-number__sub"></div>
                                    </div>
                                </td>
                                <td class="cart-table__column cart-table__column--total" data-title="Total">$1398.00</td>
                                <td class="cart-table__column cart-table__column--remove">
                                    <button type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
                                        <svg width="12" height="12">
                                            <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
	c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
	C11.2,9.8,11.2,10.4,10.8,10.8z" />
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            </tbody>
                            <tfoot class="cart-table__foot">
                            <tr>
                                <td colspan="6">
                                    <div class="cart-table__actions">
                                        <form class="cart-table__coupon-form form-row">
                                            <div class="form-group mb-0 col flex-grow-1">
                                                <input type="text" class="form-control form-control-sm" placeholder="İndirim Kodu">
                                            </div>
                                            <div class="form-group mb-0 col-auto">
                                                <button type="button" class="btn btn-sm btn-primary">Kodu Uygula</button>
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
                                        <th>Tutar</th>
                                        <td>$5,877.00</td>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th>Kargo</th>
                                        <td>
                                            $25.00
                                        </td>
                                    </tr>
                                    <tr>
                                        <th>Kdv</th>
                                        <td>$0.00</td>
                                    </tr>
                                    </tbody>
                                    <tfoot>
                                    <tr>
                                        <th>Toplam Tutar</th>
                                        <td>$5,902.00</td>
                                    </tr>
                                    </tfoot>
                                </table>
                                <a class="btn btn-primary btn-xl btn-block" href="">
                                    İşleme Devam Et
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-space block-space--layout--divider-nl"></div>
        <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__body">
                        <h2 class="section-header__title">Beğendiğim Ürünler</h2>
                        <div class="section-header__spring"></div>
                        <div class="section-header__arrows">
                            <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                <button class="arrow__button" type="button"><svg width="7" height="11">
                                        <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                <button class="arrow__button" type="button"><svg width="7" height="11">
                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="section-header__divider"></div>
                    </div>
                </div>
                <div class="block-products-carousel__carousel">
                    <div class="block-products-carousel__carousel-loader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                    <div class="tag-badge tag-badge--new">new</div>
                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                </div>
                                                <a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 3 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$19.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-2-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">5 on 22 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$224.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-3-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                </div>
                                                <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--new">$349.00</div>
                                            <div class="product-card__price product-card__price--old">$415.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-4-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> A43-44328-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                </div>
                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 26 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$589.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-5-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 9 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$749.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-6-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Motor Oil Level 5</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">5 on 2 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$23.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-7-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Engine Block Z4</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">0 on 0 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$452.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-8-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Clutch Discs Z175</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$345.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-9-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 855-78336-G</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Manual Five Speed Gearbox</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 6 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$879.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-10-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 473-75662-R</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Set of Car Floor Mats Brandix Z4</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 16 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$78.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="block-space block-space--layout--divider-nl"></div>
        <div class="block block-products-carousel" data-layout="grid-5">
            <div class="container">
                <div class="section-header">
                    <div class="section-header__body">
                        <h2 class="section-header__title">Son Gezdiklerim</h2>
                        <div class="section-header__spring"></div>
                        <div class="section-header__arrows">
                            <div class="arrow section-header__arrow section-header__arrow--prev arrow--prev">
                                <button class="arrow__button" type="button"><svg width="7" height="11">
                                        <path d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z" />
                                    </svg>
                                </button>
                            </div>
                            <div class="arrow section-header__arrow section-header__arrow--next arrow--next">
                                <button class="arrow__button" type="button"><svg width="7" height="11">
                                        <path d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	C-0.1,9.8-0.1,10.4,0.3,10.7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="section-header__divider"></div>
                    </div>
                </div>
                <div class="block-products-carousel__carousel">
                    <div class="block-products-carousel__carousel-loader"></div>
                    <div class="owl-carousel">
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-1-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 140-10440-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                    <div class="tag-badge tag-badge--new">new</div>
                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                </div>
                                                <a href="product-full.html">Brandix Spark Plug Kit ASR-400</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 3 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$19.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-2-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-23743-C</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Brake Kit BDX-750Z370-S</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">5 on 22 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$224.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-3-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 009-50078-Z</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--sale">sale</div>
                                                </div>
                                                <a href="product-full.html">Left Headlight Of Brandix Z54</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">3 on 14 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--new">$349.00</div>
                                            <div class="product-card__price product-card__price--old">$415.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-4-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> A43-44328-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <div class="product-card__badges">
                                                    <div class="tag-badge tag-badge--hot">hot</div>
                                                </div>
                                                <a href="product-full.html">Glossy Gray 19" Aluminium Wheel AR-19</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 26 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$589.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-5-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 729-51203-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Twin Exhaust Pipe From Brandix Z54</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 9 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$749.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-6-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 573-49386-C</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Motor Oil Level 5</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">5 on 2 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$23.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-7-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 753-38573-B</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Engine Block Z4</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">0 on 0 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$452.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-8-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 472-67382-Z</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Clutch Discs Z175</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">3 on 7 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$345.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-9-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 855-78336-G</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Brandix Manual Five Speed Gearbox</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 6 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$879.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="block-products-carousel__column">
                            <div class="block-products-carousel__cell">
                                <div class="product-card product-card--layout--grid">
                                    <div class="product-card__actions-list">
                                        <button class="product-card__action product-card__action--quickview" type="button" aria-label="Quick view">
                                            <svg width="16" height="16">
                                                <path d="M14,15h-4v-2h3v-3h2v4C15,14.6,14.6,15,14,15z M13,3h-3V1h4c0.6,0,1,0.4,1,1v4h-2V3z M6,3H3v3H1V2c0-0.6,0.4-1,1-1h4V3z
	 M3,13h3v2H2c-0.6,0-1-0.4-1-1v-4h2V13z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--wishlist" type="button" aria-label="Add to wish list">
                                            <svg width="16" height="16">
                                                <path d="M13.9,8.4l-5.4,5.4c-0.3,0.3-0.7,0.3-1,0L2.1,8.4c-1.5-1.5-1.5-3.8,0-5.3C2.8,2.4,3.8,2,4.8,2s1.9,0.4,2.6,1.1L8,3.7
	l0.6-0.6C9.3,2.4,10.3,2,11.3,2c1,0,1.9,0.4,2.6,1.1C15.4,4.6,15.4,6.9,13.9,8.4z" />
                                            </svg>
                                        </button>
                                        <button class="product-card__action product-card__action--compare" type="button" aria-label="Add to compare">
                                            <svg width="16" height="16">
                                                <path d="M9,15H7c-0.6,0-1-0.4-1-1V2c0-0.6,0.4-1,1-1h2c0.6,0,1,0.4,1,1v12C10,14.6,9.6,15,9,15z" />
                                                <path d="M1,9h2c0.6,0,1,0.4,1,1v4c0,0.6-0.4,1-1,1H1c-0.6,0-1-0.4-1-1v-4C0,9.4,0.4,9,1,9z" />
                                                <path d="M15,5h-2c-0.6,0-1,0.4-1,1v8c0,0.6,0.4,1,1,1h2c0.6,0,1-0.4,1-1V6C16,5.4,15.6,5,15,5z" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="product-card__image">
                                        <div class="image image--type--product">
                                            <a href="product-full.html" class="image__body">
                                                <img class="image__tag" src="images/products/product-10-245x245.jpg" alt="">
                                            </a>
                                        </div>
                                        <div class="status-badge status-badge--style--success product-card__fit status-badge--has-icon status-badge--has-text">
                                            <div class="status-badge__body">
                                                <div class="status-badge__icon"><svg width="13" height="13">
                                                        <path d="M12,4.4L5.5,11L1,6.5l1.4-1.4l3.1,3.1L10.6,3L12,4.4z" />
                                                    </svg>
                                                </div>
                                                <div class="status-badge__text">Part Fit for 2011 Ford Focus S</div>
                                                <div class="status-badge__tooltip" tabindex="0" data-toggle="tooltip" title="Part&#x20;Fit&#x20;for&#x20;2011&#x20;Ford&#x20;Focus&#x20;S"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-card__info">
                                        <div class="product-card__meta"><span class="product-card__meta-title">SKU:</span> 473-75662-R</div>
                                        <div class="product-card__name">
                                            <div>
                                                <a href="product-full.html">Set of Car Floor Mats Brandix Z4</a>
                                            </div>
                                        </div>
                                        <div class="product-card__rating">
                                            <div class="rating product-card__rating-stars">
                                                <div class="rating__body">
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star rating__star--active"></div>
                                                    <div class="rating__star"></div>
                                                </div>
                                            </div>
                                            <div class="product-card__rating-label">4 on 16 reviews</div>
                                        </div>
                                    </div>
                                    <div class="product-card__footer">
                                        <div class="product-card__prices">
                                            <div class="product-card__price product-card__price--current">$78.00</div>
                                        </div>
                                        <button class="product-card__addtocart-icon" type="button" aria-label="Add to cart">
                                            <svg width="20" height="20">
                                                <circle cx="7" cy="17" r="2" />
                                                <circle cx="15" cy="17" r="2" />
                                                <path d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
	V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
	C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z" />
                                            </svg>
                                        </button>
                                    </div>
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
