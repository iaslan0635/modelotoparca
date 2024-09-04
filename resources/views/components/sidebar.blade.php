<div class="sidebar__content">
    <div class="widget widget-filters widget-filters--offcanvas--mobile carbon-fiber">
        <div class="widget__header widget-filters__header">
            <h4 style="color: #ffdf40">Kategoriler</h4>
        </div>
        <div class="widget-filters__list">
            @foreach($categories as $category)
                @php
                    $id = "c-collapse-$category->id";
                    $hasChildren = $category->children->isNotEmpty();
                @endphp
                <div class="widget-filters__item py-0 pr-0 border-0">
                    <div class="widget-filters__item-title">
                        <a
                            style="color: white; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block"
                            @if($hasChildren)
                                data-toggle="collapse" href="#{{$id}}"
                            @else
                                href="{{ route('category.show', $category->slug) }}"
                            @endif
                        >
                            <img src="{{ $category->imageUrl() }}" style="max-height: 2.8em; margin-right: .5rem; max-width: 2.8em;">
                            <span @if($hasChildren) class="arrow-thingy" @endif>
                                {{ $category->name }}
                            </span>
                        </a>
                    </div>
                </div>
                @if ($hasChildren)
                    <div class="collapse" id="{{$id}}">
                        @foreach($category->children->prepend($category) as $child)
                            <div class="widget-filters__item py-0 border-0 ml-4">
                                <div class="widget-filters__item-title">
                                    <a style="color: white; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block"
                                       href="{{ route('category.show', $child->slug) }}">
                                        <img src="{{ $child->imageUrl() }}" style="max-height: 2.8em; margin-right: .5rem; max-width: 2.8em;">
                                        {{ $child->name }} @if($loop->first) (Ana kategori) @endif
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    <x-last-visited/>
</div>

<style>
    .arrow-thingy {
        position: relative;
        padding-right: 24px;
    }

    .arrow-thingy:before {
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
        content: "";
        display: block;
        height: 5px;
        margin-top: -3px;
        position: absolute;
        right: 4px;
        top: 50%;
        transform: rotate(45deg);
        width: 5px;
        transition: transform 0.2s;
    }

    [aria-expanded="true"] > .arrow-thingy:before {
        margin-top: 0;
        transform: rotate(225deg);
    }

    .sidebar__content {
        width: 19rem;
        position: fixed;
        top: 0;
        bottom: 0;
        overflow-y: scroll;
        z-index: 10;
    }

    /* Scrollbar genel stil */
    .sidebar__content::-webkit-scrollbar {
        width: 8px; /* Scrollbar genişliği */
    }

    /* Scrollbar arka planı */
    .sidebar__content::-webkit-scrollbar-track {
        background: rgb(41, 62, 100); /* Track'in arka plan rengi */
        border-radius: 10px; /* Köşelerin yuvarlatılması */
    }

    /* Scrollbar thumb (kayan kısmı) */
    .sidebar__content::-webkit-scrollbar-thumb {
        background: #344356; /* Thumb'un rengi */
        border-radius: 1px; /* Köşelerin yuvarlatılması */
    }

    /* Scrollbar thumb hover durumu */
    .sidebar__content::-webkit-scrollbar-thumb:hover {
        background: #93b7ea; /* Hover durumunda thumb rengi */
    }
</style>
