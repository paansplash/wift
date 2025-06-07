@extends('layouts.user.app')

@section('content')
    <div role="main" class="main">
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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Create Your Wishlist</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">User</a></li>
                                        <li class="text-transform-none active">Wishlist</li>
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
                <div class="row pb-3">
                    <div class="col-lg-6 position-relative">
                        <div class="position-absolute z-index-0 appear-animation" data-appear-animation="fadeInRightShorter"
                            data-appear-animation-delay="3000" style="top: 110px; left: -206px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                YOUR WISH</h2>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1500">WE'RE HERE TO HELP</h2>
                        </div>
                        <div class="overflow-hidden mb-4">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1700">Get Your Wishlist Done</h3>
                        </div>
                        <img src="img/demos/architecture-2/divider.jpg"
                            class="img-fluid opacity-5 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">Create your wishlist by filling in the form on the right.</p>
                        <p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="2300">Make sure that you fill in all the blank fields.</p>
                        <div class="row">
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2500">
                                <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">
                                    Work Inquiries</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(60)
                                    16-619 3227</a>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Careers & Press</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(60)
                                    16-619 3227</a>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2700">
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                    Address</h4>
                                <p class="mb-0">E-06-21, Symphony Heights<br>68100, Batu Cave<br>Selangor</p>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Email</h4>
                                <a href="/cdn-cgi/l/email-protection#b6dbd7dfdaf6d3ced7dbc6dad398d5d9db"
                                    class="text-decoration-none text-color-default text-color-hover-primary"><span
                                        class="__cf_email__"
                                        data-cfemail="4528242c2905203d24283529206b262a28">wift@enquiries.com</span></a>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2900">
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                    Business Hours</h4>
                                <p class="mb-0">Mon - Sat 9:00am - 6:00pm<br>Sunday - CLOSED</p>
                            </div>
                        </div>
                    </div>
                    @include('user.components.wishlist-form')
                </div>
            </div>
        </div>
    </div>
@endsection
