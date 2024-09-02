@props(['menu', 'parentClass' => ''])

<div class="dropdown {{ $parentClass }}" wire:ignore.self>
    <button wire:key="toggle" wire:ignore.self {{ $attributes->class("dropdown-toggle")  }} type="button" data-toggle="dropdown" aria-expanded="false">
        {{ $slot }}
    </button>
    <div wire:key="menu" wire:ignore.self {{ $menu->attributes->class("dropdown-menu") }}>
        {{ $menu }}
    </div>
</div>
