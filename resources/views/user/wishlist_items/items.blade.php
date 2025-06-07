@forelse($inventories as $inventory)
    <div class="row align-items-center mb-5 mx-3"> {{-- Added mb-5 for spacing --}}
        <div class="col-sm-5 mb-4 mb-sm-0">
            <div class="product mb-0">
                <div class="product-thumb-info border-0 mb-0">
                    <div class="product-thumb-info-badges-wrapper">
                        <span class="badge badge-ecommerce text-bg-success">NEW</span>
                    </div>

                    <div class="addtocart-btn-wrapper">
                        <form action="{{ route('user.wishlistItems.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="inventory_id" value="{{ $inventory->id }}">
                            <button type="submit" class="btn btn-link text-decoration-none addtocart-btn p-0"
                                title="Add to Wishlist">
                                <i class="fa-solid fa-gift  "></i>
                            </button>
                        </form>
                    </div>


                    <a href="#" class="quick-view text-uppercase font-weight-semibold text-2"
                        data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $inventory->id }}">
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
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-center">
                                    @if ($inventory->image)
                                        <img src="{{ asset('storage/' . $inventory->image) }}"
                                            alt="{{ $inventory->name }}" class="img-fluid mb-3"
                                            style="max-height: 400px;">
                                    @else
                                        <img src="{{ asset('images/no-image.png') }}" alt="No image"
                                            class="img-fluid mb-3">
                                    @endif

                                    <p class="text-muted">{{ $inventory->subcategory->category->name }} -
                                        {{ $inventory->subcategory->name }}</p>
                                    <p class="fw-bold">RM {{ number_format($inventory->price, 2) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="shop-product-sidebar-left.html">
                        <div class="product-thumb-info-image">
                            @if ($inventory->image)
                                <img alt="" class="img-fluid"
                                    src="{{ asset('storage/' . $inventory->image) }}">
                            @else
                                <img alt="" class="img-fluid" src="{{ asset('images/no-image.png') }}">
                            @endif
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="col-sm-7">
            <div class="summary entry-summary">
                <h2 class="mb-0 font-weight-bold text-7">
                    <a href="shop-product-sidebar-left.html"
                        class="text-color-dark text-color-hover-primary text-decoration-none">{{ $inventory->name }}</a>
                </h2>

                <p class="price mb-3">
                    <span class="sale text-color-dark">{{ number_format($inventory->price, 2) }}</span>
                    <span class="amount">RM{{ number_format($inventory->price, 2) }}</span>
                </p>

                <p class="text-3-5 mb-3">{{ $inventory->subcategory->category->name }}
                    {{ $inventory->subcategory->name }}</p>

                <ul class="list list-unstyled text-2">
                    <li class="mb-0">AVAILABILITY: <strong class="text-color-dark">AVAILABLE</strong></li>
                    <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
                </ul>
            </div>
        </div>
    </div>
@empty
    <div class="col-12">
        <p>No items found.</p>
    </div>
@endforelse
