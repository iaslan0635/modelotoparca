<div class="sidebar__content">
    <div class="widget widget-filters widget-filters--offcanvas--mobile carbon-fiber">
        <div class="widget__header widget-filters__header">
            <h4 style="color: #ffdf40">Kategoriler</h4>
        </div>
        <div class="widget-filters__list">
            @foreach($categories as $category)
                <x-sidebar.collapse :category="$category"/>
            @endforeach
        </div>
    </div>
</div>

<style>
    .arrow-thingy {
        position: relative;
        padding-right: 24px;
        margin-right: 20px;
        text-overflow: ellipsis;
        overflow: hidden;
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
    }

    /* Scrollbar thumb (kayan kısmı) */
    .sidebar__content::-webkit-scrollbar-thumb {
        background: #344356; /* Thumb'un rengi */
        border-radius: 10px; /* Köşelerin yuvarlatılması */
    }

    /* Scrollbar thumb hover durumu */
    .sidebar__content::-webkit-scrollbar-thumb:hover {
        background: #93b7ea; /* Hover durumunda thumb rengi */
    }
</style>
