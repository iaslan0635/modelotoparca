@props(['category', 'depth' => 0])

@php
    $depth ??= 0;
    $id = "c-$depth-collapse-$category->id";
    $hasChildren = $depth <= 3 && $category->children?->isNotEmpty();
@endphp

<div {{ $attributes->class(['widget-filters__item py-0 pr-0 border-0']) }} style="margin-left: {{ $depth * 2 }}rem">
    <div class="widget-filters__item-title">
        <a
            title="{{ $category->name }}"
            style="color: white; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; display: flex;align-items: center;"
            @if($hasChildren)
                data-toggle="collapse" href="#{{$id}}"
            @else
                href="{{ route('category.show', $category->slug) }}"
            @endif
        >
            <img loading="lazy" src="{{ $category->imageUrl() }}" style="max-height: 2.8em; margin-right: .5rem; max-width: 2.8em;">
            <div @if($hasChildren) class="arrow-thingy" @endif>
                {{ $category->name }}
            </div>
        </a>
    </div>
</div>
@if ($hasChildren)
    <div class="collapse" id="{{$id}}">
        @foreach($category->children as $child)
            <x-sidebar.collapse :category="$child" :depth="$depth + 1"/>
        @endforeach
    </div>
@endif
