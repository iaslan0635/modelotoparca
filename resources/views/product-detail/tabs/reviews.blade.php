<div class="product-tabs__pane" id="reviews">
    <div class="reviews-view">
        <div class="reviews-view__list">
            <div class="reviews-list">
                <ol class="reviews-list__content">
                    @forelse($product->reviews as $review)
                        <li class="reviews-list__item">
                            <div class="review">
                                <div class="review__body">
                                    <div class="review__meta">
                                        <div class="review__author">{{ $review->user->full_name }}</div>
                                        <div class="review__date">{{ $review->created_at->format("d M Y") }}</div>
                                    </div>
                                    <div class="review__rating">
                                        <div class="rating">
                                            <div class="rating__body">
                                                @for ($i = 1; $i <= 5; $i++)
                                                    <div class="rating__star {{ $i <= $review->rating ? 'rating__star--active' : '' }}"></div>
                                                @endfor
                                            </div>
                                        </div>
                                    </div>
                                    <div class="review__content typography">
                                        {{ $review->content }}
                                    </div>
                                </div>
                            </div>
                        </li>
                    @empty
                        <li class="reviews-list__item">
                            <div class="review">
                                <div class="review__body">
                                    Henüz yorum yapılmadı
                                </div>
                            </div>
                        </li>
                    @endforelse
                </ol>
            </div>
        </div>
    </div>
</div>
