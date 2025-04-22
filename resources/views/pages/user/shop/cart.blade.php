<div class="container py-5">

    <div class="row pb-4 mb-5">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <form method="POST" action="{{ route('user.wishlistItems.update', $wishlistItem->id ?? 0) }}">
                @csrf
                @method('PUT')
                <div class="table-responsive">
                    <table class="shop_table cart">
                        <thead>
                            <tr class="text-color-dark">
                                <th class="product-thumbnail" width="15%">&nbsp;</th>
                                <th class="product-name text-uppercase" width="30%">Product</th>
                                <th class="product-price text-uppercase" width="15%">Price</th>
                                <th class="product-quantity text-uppercase" width="20%">Quantity</th>
                                <th class="product-subtotal text-uppercase text-end" width="20%">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($wishlistItems as $item)
                            <tr class="cart_table_item">
                                <td class="product-thumbnail">
                                    <div class="product-thumbnail-wrapper">
                                        <a href="{{ route('user.wishlistItems.destroy', $item->id) }}"
                                            class="product-thumbnail-remove"
                                            title="Remove Product"
                                            onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                                            <i class="fas fa-times"></i>
                                        </a>
                                        <form id="delete-form-{{ $item->id }}" action="{{ route('user.wishlistItems.destroy', $item->id) }}" method="POST" style="display: none;">
                                            @csrf
                                            @method('DELETE')
                                        </form>

                                        <a href="#" class="product-thumbnail-image" title="{{ $item->inventory->name }}">
                                            <img width="90" height="90" alt="" class="img-fluid" src="{{ asset($item->inventory->image ?? 'assets/img/products/product-grey-1.jpg') }}">
                                        </a>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <span class="font-weight-semi-bold text-color-dark">{{ $item->inventory->name }}</span>
                                </td>
                                <td class="product-price">
                                    <span class="amount font-weight-medium text-color-grey">${{ $item->inventory->price ?? '0.00' }}</span>
                                </td>
                                <td class="product-quantity">
                                    <div class="quantity float-none m-0">
                                        <input type="button" class="minus" value="-">
                                        <input type="text" class="input-text qty text" name="quantity[{{ $item->id }}]" value="{{ $item->quantity }}" min="1" step="1">
                                        <input type="button" class="plus" value="+">
                                    </div>
                                </td>
                                <td class="product-subtotal text-end">
                                    <span class="amount text-color-dark font-weight-bold text-4">${{ number_format($item->inventory->price * $item->quantity, 2) }}</span>
                                </td>
                            </tr>
                            @endforeach

                            <tr>
                                <td colspan="5">
                                    <div class="row justify-content-end mx-0">
                                        <div class="col-md-auto px-0">
                                            <button type="submit" class="btn btn-light btn-modern bg-color-grey text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3">
                                                Update Cart
                                            </button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </div>

        <div class="col-lg-4 position-relative">
            <div class="card border-width-3 border-radius-0" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
                    <table class="shop_table cart-totals mb-4">
                        <tbody>
                            <tr class="cart-subtotal">
                                <td><strong class="text-color-dark">Subtotal</strong></td>
                                <td class="text-end">
                                    <strong><span class="amount">${{ number_format($wishlistItems->sum(fn($item) => $item->inventory->price * $item->quantity), 2) }}</span></strong>
                                </td>
                            </tr>
                            <tr class="shipping">
                                <td colspan="2">
                                    <strong class="d-block text-color-dark mb-2">Shipping</strong>
                                    <div class="d-flex flex-column">
                                        <label><input type="radio" name="shipping_method" value="free" checked> Free Shipping</label>
                                        <label><input type="radio" name="shipping_method" value="local-pickup"> Local Pickup</label>
                                        <label><input type="radio" name="shipping_method" value="flat-rate"> Flat Rate: $5.00</label>
                                    </div>
                                </td>
                            </tr>
                            <tr class="total">
                                <td><strong class="text-color-dark text-3-5">Total</strong></td>
                                <td class="text-end">
                                    <strong class="text-color-dark">
                                        <span class="amount text-color-dark text-5">
                                            ${{ number_format($wishlistItems->sum(fn($item) => $item->inventory->price * $item->quantity) + 5, 2) }}
                                        </span>
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <a href="#" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 m-3">
                        Add To Wishlist <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    {{-- Recommended Products Section --}}
    <div class="row">
        <div class="col">
            <h4 class="font-weight-semibold text-4 mb-3">PEOPLE ALSO BOUGHT</h4>
            <hr class="mt-0">
            <div class="products row">
                <div class="col">
                    <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-dark mb-0"
                        data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20}">

                        @foreach ($inventories as $inventory)
                        <div class="product mb-0">
                            <div class="product-thumb-info border-0 mb-3">
                                <div class="product-thumb-info-badges-wrapper">
                                    <span class="badge badge-ecommerce text-bg-success">NEW</span>
                                </div>
                                <a href="shop-product-sidebar-right.html">
                                    <div class="product-thumb-info-image" style="width: 100%; height: 200px; overflow: hidden;">
                                        <img alt="" class="img-fluid w-100 h-100" style="object-fit: cover;"
                                            src="{{ asset($inventory->image ?? 'assets/img/products/product-grey-1.jpg') }}">
                                    </div>
                                </a>
                                <div class="addtocart-btn-wrapper position-absolute" style="top: 10px; right: 10px;">
                                    <form method="POST" action="{{ route('user.wishlistItems.store') }}">
                                        @csrf
                                        <input type="hidden" name="inventory_id" value="{{ $inventory->id }}">
                                        <input type="hidden" name="quantity" value="1">
                                        <button type="submit" class="btn btn-sm btn-primary">Add to Wishlist</button>
                                    </form>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div>
                                    <a href="#" class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">{{ $inventory->subcategory->name }}</a>
                                    <h3 class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                        <a href="shop-product-sidebar-right.html" class="text-color-dark text-color-hover-primary">
                                            {{ $inventory->name }}
                                        </a>
                                    </h3>
                                </div>
                                <a href="#" class="text-decoration-none text-color-default text-color-hover-dark text-4">
                                    <i class="far fa-heart"></i>
                                </a>
                            </div>
                            <div title="Rated 5 out of 5">
                                <input type="text" class="d-none" value="5" title=""
                                    data-plugin-star-rating
                                    data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                            </div>
                            <p class="price text-5 mb-3">
                                <span class="sale text-color-dark font-weight-semi-bold">${{ number_format($inventory->price, 2) }}</span>
                                <span class="amount text-muted text-decoration-line-through">$399.00</span>
                            </p>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

</div>