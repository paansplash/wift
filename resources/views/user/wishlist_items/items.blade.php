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
                            <input type="hidden" name="wishlist_id" value="{{ request('wishlist_id', $wishlist->id ?? null) }}">
                            <button type="submit" class="btn btn-link text-decoration-none addtocart-btn p-0"
                                title="Add to Wishlist">
                                <i class="fa-solid fa-gift"></i>
                            </button>
                        </form>
                    </div>

                    @include('user.wishlist_items.quick_view')
                    
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
