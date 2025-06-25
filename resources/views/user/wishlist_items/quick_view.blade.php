<a href="#" class="quick-view text-uppercase font-weight-semibold text-2" data-bs-toggle="modal"
    data-bs-target="#quickViewModal{{ $inventory->id }}">
    QUICK VIEW
</a>

<!-- Modal for this inventory -->
<div class="modal fade" id="quickViewModal{{ $inventory->id }}" tabindex="-1"
    aria-labelledby="quickViewModalLabel{{ $inventory->id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="quickViewModalLabel{{ $inventory->id }}">
                    {{ $inventory->name }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                @if ($inventory->image)
                    <img src="{{ asset('storage/' . $inventory->image) }}" alt="{{ $inventory->name }}"
                        class="img-fluid mb-3" style="max-height: 400px;">
                @else
                    <img src="{{ asset('images/no-image.png') }}" alt="No image" class="img-fluid mb-3">
                @endif

                <p class="text-muted">{{ $inventory->subcategory->category->name }} -
                    {{ $inventory->subcategory->name }}</p>
                <p class="fw-bold">RM {{ number_format($inventory->price, 2) }}</p>
            </div>
        </div>
    </div>
</div>
