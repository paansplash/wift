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
                                        
                                        <li class="text-transform-none">
                                            <a href="{{ route('user.dashboard.index') }}" class="text-decoration-none">Home</a>
                                        </li>
                                        <li class="text-transform-none">
                                            <a href="{{ route('user.wishers.index') }}" class="text-decoration-none">Wisher</a>
                                        </li>
                                        <li class="text-transform-none active">
                                            <a href="{{ route('user.wishlists.index') }}" class="text-decoration-none">Wishlists</a>
                                        </li>
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
                        @include('user.components.wishlist-items-form')
                </div>
            </div>
        </div>
    </div>
@endsection
