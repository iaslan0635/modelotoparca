<div class="sidebar__content" style="max-height: 98vh; overflow-y: scroll; z-index: 20">
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
