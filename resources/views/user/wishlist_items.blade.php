@extends('layouts.user.app')

@section('content')
    <div role="main" class="main shop pt-4">
        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Pick Your Wishlist
                                        Items</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">User</a></li>
                                        <li class="text-transform-none active">Wisher</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="custom-page-wrapper pt-5 pb-1">

            <div class="container">
                <div class="spacer py-4 my-5"></div>

                <div class="row">
                    <div class="col-lg-3 order-2 order-lg-1">
                        @include('user.wishlist_items.filters')

                    </div>
                    <div class="col-lg-9 order-1 order-lg-2">
                        <div class="masonry-loader masonry-loader-showing">
                            <div class="products product-thumb-info-list" data-plugin-masonry
                                data-plugin-options="{'layoutMode': 'fitRows'}">
                                @include('user.wishlist_items.items')
                            </div>
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
    </div>
@endsection
