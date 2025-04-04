@extends('layouts.user.app')

@section('content')

<div role="main" class="main shop pb-4">
    <section class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
        <div class="custom-page-header-1-wrapper overflow-hidden">
            <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                data-appear-animation-delay="800">
                <div class="container py-3 my-3">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <div class="overflow-hidden mb-2">
                                <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                    data-appear-animation="maskUp" data-appear-animation-delay="1200">Create Your Wishlist</h1>
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
        <div class="spacer py-4 my-5"></div>
        <div class="container container-xl-custom pb-5 mb-5">
            <div class="container">
                <form role="search" action="page-search-results.html" method="get">
                    <div class="search-with-select">
                        <a href="#" class="mobile-search-toggle-btn text-decoration-none" data-toggle-class="open">
                            <i class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
                        </a>
                        <div class="search-form-wrapper input-group">
                            <input class="form-control text-1" id="headerSearch" name="q" type="search" value="" placeholder="Search...">
                            <div class="search-form-select-wrapper">
                                <div class="custom-select-1 d-none d-lg-block">
                                    <select name="category" class="form-control form-select">
                                        <option value="all" selected>All Categories</option>
                                        <option value="fashion">Fashion</option>
                                        <option value="electronics">Electronics</option>
                                        <option value="homegarden">Home & Garden</option>
                                        <option value="motors">Motors</option>
                                        <option value="features">Features</option>
                                    </select>
                                </div>
                                <button class="btn" type="submit" aria-label="Search">
                                    <i class="icons icon-magnifier header-nav-top-icon text-color-dark"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            @include('pages.user.shop.cart')
        </div>
    </div>
</div>
@endsection