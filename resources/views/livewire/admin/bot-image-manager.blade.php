<div class="d-flex d-lg-grid flex-column gap-7 gap-lg-10" style="grid-template-columns: repeat(4, 1fr)">
    @forelse($this->getImages() as $image)
        <div class="card card-flush py-4" style="min-height: 0px !important;">
            <div class="card-header justify-content-start" style="min-height: 0px !important;">
{{--                <div class="card-title w-100">--}}
{{--                    <a style="white-space: nowrap; text-overflow: ellipsis; overflow: hidden">--}}
{{--                        {{ $image->bot_page_url }}--}}
{{--                    </a>--}}
{{--                </div>--}}
                <div class="card-toolbar gap-4">
                    <a title="Sayfaya git" href="{{ $image->bot_page_url }}" target="_blank" class="btn btn-sm p-1 btn-info" wire:click="decline({{$image->id}})">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                            <rect x="11" y="11" width="2" height="2" rx="1" fill="currentColor"/>
                            <rect x="11" y="15" width="2" height="2" rx="1" fill="currentColor"/>
                            <rect x="11" y="7" width="2" height="2" rx="1" fill="currentColor"/>
                        </svg>
                    </a>
                    <button title="Reddet" class="btn btn-sm p-1 btn-danger" wire:click="decline({{$image->id}})">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                            <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="currentColor"/>
                            <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="currentColor"/>
                        </svg>
                    </button>
                    <button title="Kabul et" class="btn btn-sm p-1 btn-success" wire:click="accept({{$image->id}})">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor"/>
                            <path d="M10.4343 12.4343L8.75 10.75C8.33579 10.3358 7.66421 10.3358 7.25 10.75C6.83579 11.1642 6.83579 11.8358 7.25 12.25L10.2929 15.2929C10.6834 15.6834 11.3166 15.6834 11.7071 15.2929L17.25 9.75C17.6642 9.33579 17.6642 8.66421 17.25 8.25C16.8358 7.83579 16.1642 7.83579 15.75 8.25L11.5657 12.4343C11.2533 12.7467 10.7467 12.7467 10.4343 12.4343Z" fill="currentColor"/>
                        </svg>
                    </button>
                </div>
            </div>
            <div class="card-body mx-auto">
                <img src="{{ $image->url }}" style="max-width: 100%"/>
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
