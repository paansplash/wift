@extends('layouts.app')

@section('content')
    <div role="main" class="main">

        @include('pages.welcomes.carousels')

        <div class="position-relative">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-1.jpg"
                class="img-fluid position-absolute top-0 right-0" alt="" />
        </div>

        <div class="custom-page-wrapper">
            <section class="section bg-transparent border-0 position-relative py-0 m-0">
                <div class="container container-xl-custom custom-container-style custom-margin-top">

                    @include('pages.welcomes.company')

                    <div id="start" class="row align-items-center pb-xl-5 mb-xl-5">
                        <div class="col-9 col-lg-4 col-xl-5 pb-5 pb-lg-0 mb-5 mb-lg-0">
                            <div class="position-relative">
                                <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-2.jpg"
                                    class="img-fluid position-absolute left-0 z-index-0 appear-animation" alt=""
                                    data-appear-animation="fadeIn" data-appear-animation-delay="850"
                                    style="bottom: -168px;" />
                                <div class="overflow-hidden position-relative z-index-1">
                                    <img src="assets/img/demos/architecture-2/generic/generic-1.jpg"
                                        class="img-fluid appear-animation" alt="" data-appear-animation="maskLeft"
                                        data-appear-animation-delay="250" />
                                </div>
                                <div class="overflow-hidden position-absolute z-index-2"
                                    style="bottom: -75px; right: -17%;">
                                    <img src="assets/img/demos/architecture-2/generic/generic-2.jpg"
                                        class="img-fluid appear-animation" alt="" data-appear-animation="maskRight"
                                        data-appear-animation-delay="550" />
                                </div>
                            </div>
                        </div>
                        @include('pages.welcomes.objectives')
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row pt-5">
                        <div class="col pt-4">
                            <hr>
                        </div>
                    </div>
                </div>
                {{-- @include('pages.welcomes.collaborators') --}}

                @include('pages.welcomes.steps')
                
                <div class="container container-xl-custom py-5 mt-5 mb-4">
                    <div class="row py-4">
                        <div class="col-lg-5 col-xl-4 position-relative mb-4">
                            <div class="position-absolute z-index-0 appear-animation"
                                data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                                style="top: 102px; left: -64px;">
                                <h2
                                    class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-2 font-weight-black opacity-1 mb-0">
                                    IDEAS</h2>
                            </div>
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">CUSTOM SERVICES
                            </h2>
                            <h3 class="text-transform-none text-color-dark font-weight-black text-9 line-height-2 mb-4">
                                Design. Build. Better.</h3>
                            <img src="assets/img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2"
                                alt="" />
                            <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Discover how our unique
                                process improves your building experience.</p>
                        </div>
                        <div class="col-lg-6 col-xl-7 offset-lg-1">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 pb-2 mb-4">OUR SKILLS
                            </h2>
                            <div class="progress-bars custom-progress-bars-style-1">
                                <div class="progress-label d-flex justify-content-between">
                                    <span class="text-color-dark text-2">SAMPLE SKILL 1</span>
                                    <span class="text-color-dark text-2">85%</span>
                                </div>
                                <div class="progress progress-xs progress-no-border-radius bg-color-grey-300 mb-4">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%">
                                    </div>
                                </div>

                                <div class="progress-label d-flex justify-content-between pt-2">
                                    <span class="text-color-dark text-2">SAMPLE SKILL 2</span>
                                    <span class="text-color-dark text-2">90%</span>
                                </div>
                                <div class="progress progress-xs progress-no-border-radius bg-color-grey-300 mb-4">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="90%">
                                    </div>
                                </div>

                                <div class="progress-label d-flex justify-content-between pt-2">
                                    <span class="text-color-dark text-2">SAMPLE SKILL 3</span>
                                    <span class="text-color-dark text-2">85%</span>
                                </div>
                                <div class="progress progress-xs progress-no-border-radius bg-color-grey-300 mb-4">
                                    <div class="progress-bar progress-bar-primary" data-appear-progress-animation="85%">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- @include('pages.welcomes.statistics') --}}

            {{-- @include('pages.welcomes.gallery') --}}

            {{-- @include('pages.welcomes.contact-us') --}}

            {{-- @include('pages.welcomes.faq') --}}

            {{-- @include('pages.welcomes.teams') --}}

            {{-- @include('pages.welcomes.news') --}}
        </div>

        <div class="position-relative" style="margin-top: 50px;">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-3.jpg"
                class="img-fluid position-absolute bottom-0 left-0" alt="" />
        </div>

    </div>



    </div>
@endsection
