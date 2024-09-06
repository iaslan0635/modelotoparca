@props(['modifier' => '.delay.longer'])

<div wire:loading{{$modifier}}>
    <div style="
        position: fixed;
        bottom: 3rem;
        right: 3rem;
        width: 3rem;
        height: 3rem;
        display: flex;
        align-items: center;
        background-color: rgb(33, 37, 41);
        justify-content: center;
        border-radius: 50%;
     "
            {{ $attributes }}>
        <div class="spinner-border text-white" role="status"></div>
    </div>
</div>
