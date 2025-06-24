@extends('layouts.shop.app')

@section('content')
    <div role="main" class="main shop pb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 order-2 order-lg-1">
                    <aside class="sidebar">
                        <form action="page-search-results.html" method="get">
                            <div class="input-group mb-3 pb-1">
                                <input class="form-control text-1" placeholder="Search..." name="s" id="s"
                                    type="text">
                                <button type="submit" class="btn btn-dark text-1 p-2"><i
                                        class="fas fa-search m-2"></i></button>
                            </div>
                        </form>
                        <h5 class="font-weight-semi-bold pt-3">Categories</h5>
                        <form action="{{ route('user.dashboard.create') }}" method="get" id="filterForm">
                            <input type="hidden" name="search" value="{{ request('search') }}">
                            <input type="hidden" name="sort" value="{{ request('sort') }}">

                            <ul class="nav nav-list flex-column">
                                <li class="nav-item"><a class="nav-link" href="#">Arts & Crafts</a></li>
                            </ul>
                    </aside>
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    @forelse($wishlist->wishlistItems as $item)
                        <div class="masonry-loader masonry-loader-showing">
                            <div class="products product-thumb-info-list" data-plugin-masonry
                                data-plugin-options="{'layoutMode': 'fitRows'}">

                                <div class="row align-items-center">
                                    <div class="col-sm-5 mb-4 mb-sm-0">
                                        <div class="product mb-0">
                                            <div class="product-thumb-info border-0 mb-0">

                                                <div class="product-thumb-info-badges-wrapper">
                                                    <span class="badge badge-ecommerce text-bg-success">NEW</span>

                                                </div>

                                                <div class="addtocart-btn-wrapper">
                                                    <a href="shop-cart.html" class="text-decoration-none addtocart-btn"
                                                        title="Add to Cart">
                                                        <i class="icons icon-bag"></i>
                                                    </a>
                                                </div>

                                                <a href="ajax/shop-product-quick-view.html"
                                                    class="quick-view text-uppercase font-weight-semibold text-2">
                                                    QUICK VIEW
                                                </a>
                                                <a href="shop-product-sidebar-left.html">
                                                    <div class="product-thumb-info-image">
                                                        @if ($item->inventory->image)
                                                            <img alt="{{ $item->inventory->name }}" class="img-fluid"
                                                                src="{{ asset('storage/' . $item->inventory->image) }}">
                                                        @else
                                                            <img alt="No Image" class="img-fluid"
                                                                src="{{ asset('images/no-image.png') }}">
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-7">
                                        <div class="summary entry-summary">
                                            <h2 class="mb-0 font-weight-bold text-7"><a
                                                    href="shop-product-sidebar-left.html"
                                                    class="text-color-dark text-color-hover-primary text-decoration-none">{{ $item->inventory->name }}</a>
                                            </h2>

                                            <div class="pb-0 clearfix d-flex align-items-center">
                                                <div title="Rated 3 out of 5" class="float-start">
                                                    <input type="text" class="d-none" value="3" title=""
                                                        data-plugin-star-rating
                                                        data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                                </div>

                                                <div class="review-num">
                                                    <a href="shop-product-sidebar-left.html#description"
                                                        class="text-decoration-none text-color-default text-color-hover-primary"
                                                        data-hash data-hash-offset="0" data-hash-offset-lg="75"
                                                        data-hash-trigger-click=".nav-link-reviews"
                                                        data-hash-trigger-click-delay="1000">
                                                        <span class="count text-color-inherit"
                                                            itemprop="ratingCount">(2</span> reviews)
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="divider divider-small">
                                                <hr class="bg-color-grey-400">
                                            </div>

                                            <p class="price mb-3">
                                                <span
                                                    class="sale text-color-dark">${{ number_format($item->inventory->price, 2) }}</span>
                                                <span class="amount">${{ number_format($item->inventory->price, 2) }}</span>
                                            </p>
                                            <p><strong>Status:</strong>
                                                <span
                                                    class="sale text-color-dark-{{ $item->status_id == 3 ? 'success' : 'warning' }}">
                                                    {{ $item->status->name }}
                                                </span>
                                            </p>

                                            <p class="text-3-5 mb-3">{{ $item->inventory->subcategory->name }}</p>

                                            <ul class="list list-unstyled text-2">
                                                <li class="mb-0">AVAILABILITY:<span
                                                        class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">
                                                        {{ $item->status->name }}
                                                    </span> <strong class="text-color-dark">AVAILABLE</strong></li>
                                                <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <hr class="my-5">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                @if ($item->status_id != 3)
                                    <form action="{{ route('public.wishlist.buy', $item->id) }}" method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-primary btn-block">
                                            <i class="fas fa-gift mr-2"></i> Mark as Purchased
                                        </button>
                                    </form>
                                @else
                                    <button class="btn btn-success btn-block" disabled>
                                        <i class="fas fa-check mr-2"></i> Already Purchased
                                    </button>
                                @endif
                            </div>
                        @empty
                            <div class="col-12 text-center">
                                <p>No items in this wishlist</p>
                            </div>
                    @endforelse

                    <div class="row">
                        <div class="col">
                            <ul class="pagination float-end">
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item"><a class="page-link" href="#"><i
                                            class="fas fa-angle-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
