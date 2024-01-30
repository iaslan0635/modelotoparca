<div class="d-flex flex-column gap-7 gap-lg-10">
    @forelse($this->getImages() as $image)
        <div class="card card-flush py-4">
            <div class="card-header">
                <div class="card-title">
                    <a href="{{ $image->bot_page_url }}" target="_blank">
                        {{ $image->bot_page_url }}
                    </a>
                </div>
                <div class="card-toolbar gap-4">
                    <button type="button" class="btn btn-sm btn-danger" wire:click="decline({{$image->id}})">
                        Reddet
                    </button>
                    <button type="button" class="btn btn-sm btn-success" wire:click="accept({{$image->id}})">
                        Kabul et
                    </button>
                </div>
            </div>
            <div class="card-body mx-auto">
                <img src="{{ $image->url }}"/>
            </div>
        </div>
    @empty
        <div class="card card-flush py-4">
            <div class="card-body mx-auto">
                <h3 class="text-center">Onaylanması gereken resim kalmadı</h3>
            </div>
        </div>
    @endforelse
</div>
