<div class="row">
    <x-wire-loading/>
    <div class="col-12 col-lg-3 d-flex">
        <div class="aiz-user-sidenav-wrap position-relative z-1 rounded-0" style="height: max-content">
            <div class="aiz-user-sidenav overflow-auto c-scrollbar-light px-4">
                <div class="sidemnenu">
                    <ul class="aiz-side-nav-list py-3 metismenu" data-toggle="aiz-side-menu">
                        @foreach($this->lists as $list)
                            @php $active = $currentList == $list @endphp
                            <li class="aiz-side-nav-item {{$active ? 'mm-active' : ''}}">
                                <a class="aiz-side-nav-link cursor-pointer {{$active ? 'active' : ''}}" wire:click="$set('currentList', '{{ $list }}')">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                                        <g id="Group_8109" data-name="Group 8109" transform="translate(-27.466 -542.963)">
                                            <path id="Path_2953" data-name="Path 2953"
                                                  d="M14.5,5.963h-4a1.5,1.5,0,0,0,0,3h4a1.5,1.5,0,0,0,0-3m0,2h-4a.5.5,0,0,1,0-1h4a.5.5,0,0,1,0,1"
                                                  transform="translate(22.966 537)" fill="#b5b5bf"></path>
                                            <path id="Path_2954" data-name="Path 2954"
                                                  d="M12.991,8.963a.5.5,0,0,1,0-1H13.5a2.5,2.5,0,0,1,2.5,2.5v10a2.5,2.5,0,0,1-2.5,2.5H2.5a2.5,2.5,0,0,1-2.5-2.5v-10a2.5,2.5,0,0,1,2.5-2.5h.509a.5.5,0,0,1,0,1H2.5a1.5,1.5,0,0,0-1.5,1.5v10a1.5,1.5,0,0,0,1.5,1.5h11a1.5,1.5,0,0,0,1.5-1.5v-10a1.5,1.5,0,0,0-1.5-1.5Z"
                                                  transform="translate(27.466 536)" fill="#b5b5bf"></path>
                                            <path id="Path_2955" data-name="Path 2955"
                                                  d="M7.5,15.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 532)"
                                                  fill="#b5b5bf"></path>
                                            <path id="Path_2956" data-name="Path 2956"
                                                  d="M7.5,21.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 529)"
                                                  fill="#b5b5bf"></path>
                                            <path id="Path_2957" data-name="Path 2957"
                                                  d="M7.5,27.963h1a.5.5,0,0,1,.5.5v1a.5.5,0,0,1-.5.5h-1a.5.5,0,0,1-.5-.5v-1a.5.5,0,0,1,.5-.5" transform="translate(23.966 526)"
                                                  fill="#b5b5bf"></path>
                                            <path id="Path_2958" data-name="Path 2958" d="M13.5,16.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 531.5)"
                                                  fill="#b5b5bf"></path>
                                            <path id="Path_2959" data-name="Path 2959" d="M13.5,22.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 528.5)"
                                                  fill="#b5b5bf"></path>
                                            <path id="Path_2960" data-name="Path 2960" d="M13.5,28.963h5a.5.5,0,0,1,0,1h-5a.5.5,0,0,1,0-1" transform="translate(20.966 525.5)"
                                                  fill="#b5b5bf"></path>
                                        </g>
                                    </svg>
                                    <span class="aiz-side-nav-text ml-3">{{ $list ?: "Varsayılan Liste" }}</span>
                                    <span class="badge badge-success">{{ $this->listCount($list) }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-lg-9 mt-4 mt-lg-0">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <h3>{{ $currentList ?: 'Varsayılan Liste' }}</h3>
            <button class="btn btn-success" wire:click="export">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" style="height: 2em">
                    <path
                        d="M28.875 0c-.019531.0078125-.042969.0195313-.0625.03125l-28 5.3125c-.476562.089844-.8203125.511719-.8125 1v37.3125c-.0078125.488281.335938.910156.8125 1l28 5.3125c.289063.054688.589844-.019531.820313-.207031.226562-.1875.363281-.464844.367187-.761719v-5h17c1.09375 0 2-.90625 2-2V8c0-1.09375-.90625-2-2-2H30V1c.003906-.289062-.121094-.5625-.335937-.753906C29.449219.0546875 29.160156-.0351563 28.875 0ZM28 2.1875v4.34375c-.132812.277344-.132812.597656 0 .875V42.8125c-.027344.132813-.027344.273438 0 .40625v4.59375L2 42.84375V7.15625ZM30 8h17v34H30v-5h4v-2h-4v-6h4v-2h-4v-5h4v-2h-4v-5h4v-2h-4Zm6 5v2h8v-2ZM6.6875 15.6875l5.46875 9.34375L6.1875 34.375h5l3.25-6.03125c.226563-.582031.375-1.027344.4375-1.3125h.03125c.128906.609375.253906 1.023438.375 1.25l3.25 6.09375H23.5l-5.75-9.4375 5.59375-9.25h-4.6875l-2.96875 5.53125c-.285156.722656-.488281 1.292969-.59375 1.65625h-.03125c-.164062-.609375-.351562-1.152344-.5625-1.59375l-2.6875-5.59375ZM36 20v2h8v-2Zm0 7v2h8v-2Zm0 8v2h8v-2Z"/>
                </svg>
                <span class="ml-2">Dışa aktar</span>
            </button>
        </div>
        <div class="cart">
            <div class="cart__table cart-table">
                <table class="cart-table__table">
                    <thead class="cart-table__head">
                    <tr class="cart-table__row">
                        <th class="cart-table__column cart-table__column--image"></th>
                        <th class="cart-table__column cart-table__column--product">Ürün</th>
                        <th class="cart-table__column cart-table__column--price">Fiyat</th>
                        <th class="cart-table__column cart-table__column--quantity">Miktar</th>
                        <th class="cart-table__column cart-table__column--total">Tutar</th>
                        <th class="cart-table__column cart-table__column--remove"></th>
                    </tr>
                    </thead>
                    <tbody class="cart-table__body">
                    @forelse($this->products as $item)
                        <tr class="cart-table__row">
                            <td class="cart-table__column cart-table__column--image">
                                <div class="image image--type--product">
                                    <a href="{{ route("product.show", $item->product) }}" class="image__body">
                                        <img class="image__tag" src="{{ $item->product->imageUrl() }}">
                                    </a>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--product">
                                <a href="" class="cart-table__product-name">
                                    {{ $item->product->full_title }}
                                    @if ($item->product->quantity)
                                        <span class="badge badge-success">Stokta {{ $item->product->quantity }} tane kaldı</span>
                                    @else
                                        <span class="badge badge-danger">Stokta yok</span>
                                    @endif
                                </a>
                            </td>
                            <td class="cart-table__column cart-table__column--price" data-title="Price">{{ $item->product->price->sellingPrice() }}</td>
                            <td class="cart-table__column cart-table__column--quantity" data-title="Quantity">
                                <div class="cart-table__quantity input-number">
                                    <input class="form-control input-number__input" type="number" min="1" disabled value="{{ $item->quantity }}"
                                           wire:change="changeQuantity({{ $item->product->id }}, $event.target.value)"
                                    >
                                    <div class="input-number__add"></div>
                                    <div class="input-number__sub"></div>
                                </div>
                            </td>
                            <td class="cart-table__column cart-table__column--total"
                                data-title="Total">{{ $item->product->price->sellingPrice()->multiply($item->quantity) }}</td>
                            <td class="cart-table__column cart-table__column--remove">
                                <button wire:click="removeItem('{{ $item->product_id }}')" type="button" class="cart-table__remove btn btn-sm btn-icon btn-muted">
                                    <svg width="12" height="12">
                                        <path d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
        c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
        C11.2,9.8,11.2,10.4,10.8,10.8z"/>
                                    </svg>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="cart-table__column"></td>
                            <td colspan="5" class="cart-table__column">
                                Henüz ürün eklenmedi.
                            </td>
                        </tr>
                    @endforelse
                    <tr>
                        <td colspan="3" class="cart-table__column"></td>
                        <td colspan="3" class="cart-table__column cart-table__column--total text-end ">
                            Toplam: {{ $this->total() }}
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
