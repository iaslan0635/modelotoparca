<div class="sidebar__content" style="max-height: 98vh; overflow-y: scroll;">
    <div class="widget widget-filters widget-filters--offcanvas--mobile carbon-fiber">
        <div class="widget__header widget-filters__header">
            <h4 style="color: #ffdf40">Kategoriler</h4>
        </div>
        <div class="widget-filters__list">
            @foreach($categories as $category)
                <div class="widget-filters__item py-0 border-0">
                    <div class="widget-filters__item-title">
                        <a style="color: white; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: block" href="{{ route('category.show', $category->slug) }}">
                            <img src="{{ $category->imageUrl() }}" style="height: 3em; margin-right: .5rem">
                            {{ $category->name }}
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <x-last-visited/>
</div>

<style>
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
        background: #5b8bbd; /* Thumb'un rengi */
        border-radius: 1px; /* Köşelerin yuvarlatılması */
    }

    /* Scrollbar thumb hover durumu */
    .sidebar__content::-webkit-scrollbar-thumb:hover {
        background: #93b7ea; /* Hover durumunda thumb rengi */
    }
</style>
