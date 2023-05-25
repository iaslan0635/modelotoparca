@if($homepageVariant)
    @include("livewire.car-search.homepage-variant")
@else
    @include("livewire.car-search.dropdown-variant")
@endif
