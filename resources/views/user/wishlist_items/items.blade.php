@forelse($inventories as $inventory)
    <div class="col-sm-6 col-lg-4" style="position: absolute; left: 0px; top: 0px;">
        <div class="product mb-0">
            <div class="product-thumb-info border-0 mb-3">
                <div class="product-thumb-info-badges-wrapper">
                    <span class="badge badge-ecommerce text-bg-success">NEW</span>
                </div>

                <div class="addtocart-btn-wrapper">
                    <form action="{{ route('user.wishlistItems.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="inventory_id" value="{{ $inventory->id }}">
                        <input type="hidden" name="wishlist_id"
                            value="{{ request('wishlist_id', $wishlist->id ?? null) }}">
                        <button type="submit" class="btn btn-link text-decoration-none addtocart-btn p-0"
                            title="Add to Wishlist">
                            <i class="fa-solid fa-gift"></i>
                        </button>
                    </form>
                </div>

                <a href="#" class="quick-view text-uppercase font-weight-semibold text-2">
                    QUICK VIEW
                </a>

                <a 
                {{-- href="{{ route('shop.product.show', $inventory->id) }}" --}}
                >
                    <div class="product-thumb-info-image">
                        @if ($inventory->image)
                            <img alt="{{ $inventory->name }}" class="img-fluid"
                                src="{{ asset('storage/' . $inventory->image) }}">
                        @else
                            <img alt="No Image" class="img-fluid" src="{{ asset('images/no-image.png') }}">
                        @endif
                    </div>
                </a>
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    <a href="#"
                        class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">
                        {{ $inventory->subcategory->category->name ?? 'Category' }}
                    </a>
                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                        <a 
                        {{-- href="{{ route('shop.product.show', $inventory->id) }}" --}}
                            class="text-color-dark text-color-hover-primary">
                            {{ $inventory->name }}
                        </a>
                    </h3>
                </div>
                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4">
                    <i class="far fa-heart"></i>
                </a>
            </div>

            <div title="Rated 5 out of 5">
                <input type="text" class="d-none" value="5" title="" data-plugin-star-rating
                    data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
            </div>

            <p class="price text-5 mb-3">
                <span
                    class="sale text-color-dark font-weight-semi-bold">RM{{ number_format($inventory->price, 2) }}</span>
                {{-- Example discount price, remove if not applicable --}}
                <span class="amount">RM{{ number_format($inventory->price * 0.9, 2) }}</span>
            </p>
        </div>
    </div>

    {{-- <div class="row align-items-center mb-5 mx-3">
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
                            <input type="hidden" name="wishlist_id"
                                value="{{ request('wishlist_id', $wishlist->id ?? null) }}">
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
    </div> --}}
@empty
    <div class="col-12">
        <p>No items found.</p>
    </div>
@endforelse
