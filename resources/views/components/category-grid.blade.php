@props(['categories' => []])

<div class="container">
    <div class="row g-4">
        @foreach($categories as $category)
        <div class="col-6 col-md-4 col-lg-2">
            <div class="card border-0 h-100 position-relative category-card">
                <div class="card-body text-center">
                    <img src="{{ $category['imageUrl'] }}" alt="{{ $category['name'] }}" class="img-fluid mb-3"
                        style="height: 96px; object-fit: contain; filter: grayscale(100%);">
                    <h5 class="card-title text-primary fw-normal">{{ $category['name'] }}</h5>
                </div>
                <div class="subcategories-container">
                    <div class="subcategories bg-white border shadow py-3 px-4">
                        <div class="row row-cols-2 g-3">
                            @foreach($category['subcategories'] as $subcategory)
                            <div class="col"><a href="#"
                                    class="text-decoration-none text-secondary">{{ $subcategory['name'] }}</a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<style>
    .category-card {
        background: transparent;
    }

    .category-card .card-title {
        font-size: 1rem;
    }

    .subcategories-container {
        display: none;
        position: absolute;
        top: 100%;
        left: 50%;
        transform: translateX(-50%);
        z-index: 1000;
        width: 300px;
    }

    .category-card:hover .subcategories-container {
        display: block;
    }

    .subcategories {
        border-radius: 4px;
    }

    .subcategories a {
        font-size: 0.9rem;
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
        display: block;
    }

    .subcategories a:hover {
        color: var(--bs-primary) !important;
    }
</style>

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const cards = document.querySelectorAll('.category-card');
    cards.forEach(card => {
        const container = card.querySelector('.subcategories-container');

        card.addEventListener('mouseenter', () => {
            container.style.display = 'block';
        });

        card.addEventListener('mouseleave', () => {
            container.style.display = 'none';
        });
    });
});
</script>
@endpush
