<div class="block-header block-header--has-breadcrumb block-header--has-title">
    <div class="container">
        <div class="block-header__body">
            <nav class="breadcrumb block-header__breadcrumb" aria-label="breadcrumb">
                <ol class="breadcrumb__list">
                    <li class="breadcrumb__spaceship-safe-area" role="presentation"></li>
                    @foreach($getParts() as $part)
                        <li class="breadcrumb__item @if($loop->first) breadcrumb__item--first @endif @if($loop->last) breadcrumb__item--current breadcrumb__item--last @else breadcrumb__item--parent @endif "
                            aria-current="page">
                            @if(array_key_exists("link", $part))
                                <a class="breadcrumb__item-link" href="{{ $part["link"] }}">{{ $part["name"] }}</a>
                            @else
                                <span class="breadcrumb__item-link">{{ $part["name"] }}</span>
                            @endif
                        </li>
                    @endforeach
                    <li class="breadcrumb__title-safe-area" role="presentation"></li>
                </ol>
            </nav>
        </div>
    </div>
</div>
