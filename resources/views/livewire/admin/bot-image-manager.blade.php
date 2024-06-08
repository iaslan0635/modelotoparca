<div class="d-flex d-lg-grid flex-column gap-7 gap-lg-10" style="grid-template-columns: repeat(4, 1fr)">
    @forelse($this->getImages() as $image)
        <div class="card card-flush py-4
            @if($image->image_id)
                bg-light-success border border-success
            @elseif($image->rejected)
                bg-light-danger border border-danger
            @endif
        " style="min-height: 0 !important;">
            <div class="card-header justify-content-start" style="min-height: 0 !important;">
                <a title="Sayfaya git" href="{{ $image->bot_page_url }}" target="_blank" class="text-truncate">{{ $image->bot_page_url }}</a>
            </div>
            <div class="card-body mx-auto">
                <img class="rounded-4" src="{{ $image->url }}" style="max-width: 100%"/>
                @can("Stok Yönetimi.Ürünler.Detay Görüntüle.Bot Resimleri.İşlem Yap")
                    <form class="mt-4">
                        <div class="form-check" wire:click="intermediate({{$image->id}})">
                            <label class="form-check-label">
                                <input class="form-check-input" name="status" type="radio" @if(!$image->rejected && !$image->image_id) checked @endif>
                                Beklemede
                            </label>
                        </div>
                        <div class="form-check" wire:click="accept({{$image->id}})">
                            <label class="form-check-label">
                                <input class="form-check-input" name="status" type="radio" @if($image->image_id) checked @endif>
                                Kabul et
                            </label>
                        </div>
                        <div class="form-check" wire:click="reject({{$image->id}})">
                            <label class="form-check-label">
                                <input class="form-check-input" name="status" type="radio" @if($image->rejected) checked @endif>
                                Reddet
                            </label>
                        </div>
                    </form>
                @endcan
            </div>
        </div>
    @empty
        <div class="card card-flush py-4">
            <div class="card-body mx-auto">
                <h3 class="text-center">Şimdilik resim yok</h3>
            </div>
        </div>
    @endforelse
</div>
