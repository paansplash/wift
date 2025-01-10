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

                    @include('pages.welcomes.steps')

                    <div id="start" class="row align-items-center pb-xl-5 mb-xl-5">
                        <div class="col-9 col-lg-4 col-xl-5 pb-5 pb-lg-0 mb-5 mb-lg-0">
                            <div class="position-relative">
                                <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-2.jpg"
                                    class="img-fluid position-absolute left-0 z-index-0 appear-animation" alt=""
                                    data-appear-animation="fadeIn" data-appear-animation-delay="850"
                                    style="bottom: -168px;" />
                                <div class="overflow-hidden position-relative z-index-1">
                                    <img src="assets/img/demos/architecture-2/generic/generic-1.jpg"
                                        class="img-fluid appear-animation" alt=""
                                        data-appear-animation="maskLeft" data-appear-animation-delay="250" />
                                </div>
                                <div class="overflow-hidden position-absolute z-index-2"
                                    style="bottom: -75px; right: -17%;">
                                    <img src="assets/img/demos/architecture-2/generic/generic-2.jpg"
                                        class="img-fluid appear-animation" alt=""
                                        data-appear-animation="maskRight" data-appear-animation-delay="550" />
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
                @include('pages.welcomes.collaborators')

                <div class="custom-section">
                    <div class="custom-section-left-content parallax p-0 m-0" data-plugin-parallax
                        data-plugin-options="{'speed': 1.5, 'fadeIn': true}"
                        data-image-src="assets/img/demos/architecture-2/generic/generic-3.jpg" style="min-height: 400px">
                    </div>
                    <div class="custom-section-middle-content bg-primary p-5">
                        <div class="owl-carousel owl-theme nav-style-1 nav-svg-arrows-1 nav-light custom-hide-prev-nav custom-dots-style-1 custom-dots-style-1-light mb-0"
                            data-plugin-options="{'responsive': {'0': { 'items': 1}, '576': {'items': 1}, '768': {'items': 1, 'dots': true, 'nav': false}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20, 'refresh': true}">
                            <div class="pt-4 pb-3">
                                <h2 class="custom-heading-style-1 text-4-5 mb-4">
                                    <span class="custom-heading-style-1-step">01</span>
                                    <span class="custom-heading-style-1-text">RESEARCH</span>
                                </h2>
                                <p
                                    class="text-3-5 text-color-light opacity-4 pe-5 pe-md-0 pe-lg-5 me-3 me-md-0 me-lg-3 mb-0">
                                    Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                                    gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id
                                    faucibus ac.</p>
                            </div>
                            <div class="pt-4 pb-3">
                                <h2 class="custom-heading-style-1 text-4-5 mb-4">
                                    <span class="custom-heading-style-1-step">02</span>
                                    <span class="custom-heading-style-1-text">WORK</span>
                                </h2>
                                <p
                                    class="text-3-5 text-color-light opacity-4 pe-5 pe-md-0 pe-lg-5 me-3 me-md-0 me-lg-3 mb-0">
                                    Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                                    gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id
                                    faucibus ac.</p>
                            </div>
                            <div class="pt-4 pb-3">
                                <h2 class="custom-heading-style-1 text-4-5 mb-4">
                                    <span class="custom-heading-style-1-step">03</span>
                                    <span class="custom-heading-style-1-text">DELIVERY</span>
                                </h2>
                                <p
                                    class="text-3-5 text-color-light opacity-4 pe-5 pe-md-0 pe-lg-5 me-3 me-md-0 me-lg-3 mb-0">
                                    Vestibulum auctor felis eget orci semper vestibulum. Pellentesque ultricies nibh
                                    gravida, accumsan libero luctus, molestie nunc. In nibh ipsum, blandit id
                                    faucibus ac.</p>
                            </div>
                        </div>
                    </div>
                    <div class="custom-section-right-content parallax p-0 m-0" data-plugin-parallax
                        data-plugin-options="{'speed': 3, 'parallaxDirection': 'bottom', 'fadeIn': true}"
                        data-image-src="assets/img/demos/architecture-2/generic/generic-4.jpg" style="min-height: 400px">
                    </div>
                </div>
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
            @include('pages.welcomes.statistics')

            <div class="container container-xl-custom py-4 my-3">
                <div class="lightbox"
                    data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="masonry row" data-plugin-masonry
                            data-plugin-options="{'layoutMode': 'packery', 'itemSelector': '.masonry-item', 'sortBy': 'original-order'}">
                            <div class="masonry-item no-default-style col-6 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-5.jpg"
                                    data-appear-animation="maskDown" data-appear-animation-delay="500">
                                    <img src="assets/img/demos/architecture-2/generic/generic-5.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-6.jpg"
                                    data-appear-animation="maskRight" data-appear-animation-delay="250">
                                    <img src="assets/img/demos/architecture-2/generic/generic-6.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-7.jpg"
                                    data-appear-animation="maskLeft" data-appear-animation-delay="750">
                                    <img src="assets/img/demos/architecture-2/generic/generic-7.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="masonry-item no-default-style col-6 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-10.jpg"
                                    data-appear-animation="maskUp" data-appear-animation-delay="500">
                                    <img src="assets/img/demos/architecture-2/generic/generic-10.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-8.jpg"
                                    data-appear-animation="maskRight" data-appear-animation-delay="750">
                                    <img src="assets/img/demos/architecture-2/generic/generic-8.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                            <div class="masonry-item no-default-style col-6 col-lg-3 overflow-hidden px-0">
                                <a class="d-inline-block custom-img-thumbnail-style-1 img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon rounded-0 appear-animation"
                                    href="assets/img/demos/architecture-2/generic/generic-9.jpg"
                                    data-appear-animation="maskLeft" data-appear-animation-delay="250">
                                    <img src="assets/img/demos/architecture-2/generic/generic-9.jpg"
                                        class="img-fluid rounded-0" alt="" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="section section-height-3 bg-primary border-0 m-0">
                <div class="container container-xl-custom">
                    <div class="row align-items-center justify-content-center text-center text-xl-start">
                        <div class="col-md-8 col-xl-9 mb-4 mb-xl-0 appear-animation"
                            data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250">
                            <h2 class="text-color-default font-weight-semibold positive-ls-3 text-4 mb-0">WE'RE
                                HERE TO HELP</h2>
                            <h3 class="text-transform-none text-color-light font-weight-black line-height-2 text-9 mb-0">
                                Let's Talk About Your New Project, We Can Do It!</h3>
                        </div>
                        <div class="col-xl-3 text-xl-end appear-animation" data-appear-animation="fadeInRightShorterPlus"
                            data-appear-animation-delay="500">
                            <a href="demo-architecture-2-contact.html"
                                class="btn btn-light custom-btn-style-1 font-weight-bold text-color-dark text-3 px-5 py-3">CONTACT
                                US</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container container-xl-custom">
                <div class="row py-5 my-5">
                    <div class="col-lg-5 col-xl-4 position-relative mb-5 mb-lg-0 appear-animation"
                        data-appear-animation="fadeInRightShorterPlus" data-appear-animation-delay="250"
                        data-plugin-options="{'accY': -400}">
                        <div class="position-absolute z-index-0 appear-animation"
                            data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"
                            style="top: 102px; left: -246px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">
                                SOLUTIONS</h2>
                        </div>
                        <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">COMMON QUESTIONS
                        </h2>
                        <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">
                            Frequent Questions</h3>
                        <img src="assets/img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2"
                            alt="" />
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed imperdiet libero</p>
                        <p class="text-3-5 pb-2 mb-4">Vestibulum auctor felis eget orci semper vestibulum.
                            Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                        <a href="demo-architecture-2-contact.html"
                            class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3">CONTACT
                            US</a>
                    </div>
                    <div class="col-lg-7 col-xl-8 appear-animation" data-appear-animation="fadeInRightShorterPlus"
                        data-appear-animation-delay="500" data-plugin-options="{'accY': -400}">
                        <div class="custom-accordion-style-1 accordion accordion-modern" id="FAQAccordion">
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold"
                                            data-bs-toggle="collapse" href="#collapseFAQOne">
                                            What does an architect actually do?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQOne" class="collapse show" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4 w-md-75pct">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer
                                            aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold"
                                            data-bs-toggle="collapse" href="#collapseFAQTwo">
                                            Why do I need an architect?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQTwo" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer
                                            aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold"
                                            data-bs-toggle="collapse" href="#collapseFAQFour">
                                            What's the largest project you've ever worked on?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQFour" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer
                                            aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold"
                                            data-bs-toggle="collapse" href="#collapseFAQFive">
                                            What is the structure of your architecture practice?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQFive" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer
                                            aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-default">
                                <div class="card-header">
                                    <h4 class="card-title m-0">
                                        <a class="accordion-toggle text-color-dark font-weight-bold"
                                            data-bs-toggle="collapse" href="#collapseFAQTSix">
                                            Can you work with clients long distance?
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFAQTSix" class="collapse" data-bs-parent="#FAQAccordion">
                                    <div class="card-body ps-4">
                                        <p class="mb-0">Cras a elit sit amet leo accumsan volutpat. Suspendisse
                                            hendrerit vehicula leo, vel efficitur felis ultrices non. Integer
                                            aliquet ullamcorper dolor, quis sollicitudin.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="my-0">

                <div class="row py-5 my-5">
                    <div class="col-lg-6 col-xl-7 mx-auto mb-5 mb-lg-0 appear-animation"
                        data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="500">
                        <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-font-size-lg custom-nav-grey mb-0"
                            data-plugin-options="{'responsive': {'576': {'items': 1}, '768': {'items': 2}, '992': {'items': 1}, '1200': {'items': 2}}, 'loop': true, 'nav': true, 'dots': false, 'margin': 20}">
                            <div>
                                <div class="card border-radius-0">
                                    <img class="card-img-top border-radius-0"
                                        src="assets/img/demos/architecture-2/authors/author-1.jpg" alt="" />
                                    <div class="card-body text-center">
                                        <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                            John Doe</h4>
                                        <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                            CEO & FOUNDER</h3>
                                        <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card border-radius-0">
                                    <img class="card-img-top border-radius-0"
                                        src="assets/img/demos/architecture-2/authors/author-2.jpg" alt="" />
                                    <div class="card-body text-center">
                                        <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                            Janice Doe</h4>
                                        <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                            ARCHITECT</h3>
                                        <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="card border-radius-0">
                                    <img class="card-img-top border-radius-0"
                                        src="assets/img/demos/architecture-2/authors/author-1.jpg" alt="" />
                                    <div class="card-body text-center">
                                        <h4 class="card-title font-weight-extra-bold text-color-dark text-5 mb-1">
                                            John Doe</h4>
                                        <h3 class="text-color-default text-3-5 ls-0 font-weight-normal mb-2 pb-1">
                                            CEO & FOUNDER</h3>
                                        <p class="card-text font-weight-light">Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. Nunc viverra erat orci, ac auctor...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-xl-4 text-end position-relative appear-animation"
                        data-appear-animation="fadeInLeftShorterPlus" data-appear-animation-delay="250">
                        <div class="position-absolute z-index-0 appear-animation"
                            data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="500"
                            style="top: 102px; right: -50px;">
                            <h2
                                class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-3 font-weight-black opacity-1 mb-0">
                                ARCHLIFE</h2>
                        </div>
                        <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">THE BEST
                            PROFESSIONALS</h2>
                        <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-4">
                            Meet Our Team</h3>
                        <img src="assets/img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mb-4 mt-2"
                            alt="" />
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2">Lorem ipsum dolor sit amet,
                            consectetur adipiscing elit. Sed imperdiet libero</p>
                        <p class="text-3-5 pb-3 mb-4">Vestibulum auctor felis eget orci semper vestibulum.
                            Pellentesque ultricies nibh gravida, accumsan libero luctus, molestie nunc.</p>
                        <a href="demo-architecture-2-contact.html"
                            class="btn btn-primary custom-btn-style-1 custom-btn-style-1-right font-weight-bold text-3 px-5 py-3">CONTACT
                            US</a>
                    </div>
                </div>
            </div>

            <section class="section parallax bg-transparent border-0 py-0 m-0" data-plugin-parallax
                data-plugin-options="{'speed': 1.5, 'scrollableParallax': true, 'scrollableParallaxMinWidth': 991, 'startOffset': 13, 'cssProperty': 'width', 'cssValueStart': 40, 'cssValueEnd': 100, 'cssValueUnit': 'vw'}">
                <div class="d-flex justify-content-center">
                    <div class="scrollable-parallax-wrapper bg-primary overflow-hidden">
                        <div
                            class="container container-xl-custom custom-container-style-3 custom-container-position-1 py-5 my-5 mx-0">
                            <div class="row justify-content-center pt-3 mb-5">
                                <div class="col-sm-8 col-md-12 text-center">
                                    <h2 class="text-color-light opacity-6 positive-ls-3 line-height-3 text-4 mb-3">
                                        HAPPY CLIENTS</h2>
                                    <h3
                                        class="text-transform-none text-color-light font-weight-black line-height-2 text-10 negative-ls-1 mb-0">
                                        See What Clients Are Saying</h3>
                                </div>
                            </div>
                            <div class="row justify-content-center pb-3">
                                <div class="col-lg-9">
                                    <div class="owl-carousel owl-theme nav-style-1 nav-light nav-outside nav-font-size-lg custom-dots-style-1 custom-dots-style-1-light mb-0"
                                        data-plugin-options="{'responsive': {'0': {'items': 1, 'nav': false, 'dots': true}, '576': {'items': 1, 'nav': false, 'dots': true}, '768': {'items': 1, 'nav': false, 'dots': true}, '992': {'items': 1}, '1200': {'items': 1}}, 'loop': false, 'nav': true, 'dots': false}">
                                        <div>
                                            <div
                                                class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-quote mb-0">
                                                <blockquote>
                                                    <p
                                                        class="custom-font-secondary text-color-light opacity-8 font-weight-light line-height-6 text-4-5 px-2 px-lg-3 mb-0">
                                                        <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Sed eget risus porta, tincidunt turpis at, interdum
                                                            tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit.</em>
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p class="text-color-light font-weight-bold text-4 mb-0">John
                                                        Smith</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <div
                                                class="testimonial testimonial-style-2 testimonial-with-quotes testimonial-remove-right-quote custom-testimonial-quote mb-0">
                                                <blockquote>
                                                    <p
                                                        class="custom-font-secondary text-color-light opacity-8 font-weight-light line-height-6 text-4-5 px-2 px-lg-3 mb-0">
                                                        <em>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                                            Sed eget risus porta, tincidunt turpis at, interdum
                                                            tortor. Suspendisse potenti. Lorem ipsum dolor sit amet,
                                                            consectetur adipiscing elit.</em>
                                                    </p>
                                                </blockquote>
                                                <div class="testimonial-author">
                                                    <p class="text-color-light font-weight-bold text-4 mb-0">John
                                                        Smith</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section bg-transparent border-0 position-relative m-0">
                <div class="container container-xl-custom py-5">
                    <div class="row">
                        <div class="col text-center position-relative">
                            <div class="appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="500">
                                <div class="position-absolute transform3dx-n50 left-50pct z-index-0" style="top: 56px;">
                                    <h2
                                        class="text-color-dark custom-stroke-text-effect-1 custom-big-font-size-1 font-weight-black opacity-1 mb-0">
                                        WHAT'S HAPPENING</h2>
                                </div>
                            </div>
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-2">OUR BLOG</h2>
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-3">
                                Recent News</h3>
                            <img src="assets/img/demos/architecture-2/divider.jpg" class="img-fluid opacity-5 mt-3 mb-5"
                                alt="" />
                        </div>
                    </div>
                    <div class="row row-gutter-sm">
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <article>
                                <div class="card border-0 border-radius-0">
                                    <div class="card-body bg-color-grey p-4 z-index-1">
                                        <a href="demo-architecture-2-blog-post.html">
                                            <img class="card-img-top border-radius-0 hover-effect-2"
                                                src="assets/img/demos/architecture-2/blog/blog-thumb-1.jpg"
                                                alt="Card Image">
                                        </a>
                                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                            <time pubdate datetime="2024-01-10">10 Jan 2024</time>
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            3 Comments
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            John Doe
                                        </p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                    class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                    href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                    a met</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                            </p>
                                            <a href="demo-architecture-2-blog-post.html"
                                                class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none ps-0">
                                                READ MORE +
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4 mb-4 mb-lg-0">
                            <article>
                                <div class="card border-0 border-radius-0">
                                    <div class="card-body bg-color-grey p-4 z-index-1">
                                        <a href="demo-architecture-2-blog-post.html">
                                            <img class="card-img-top border-radius-0 hover-effect-2"
                                                src="assets/img/demos/architecture-2/blog/blog-thumb-2.jpg"
                                                alt="Card Image">
                                        </a>
                                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                            <time pubdate datetime="2024-01-10">10 Jan 2024</time>
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            3 Comments
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            John Doe
                                        </p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                    class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                    href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                    a met</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                            </p>
                                            <a href="demo-architecture-2-blog-post.html"
                                                class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none ps-0">
                                                READ MORE +
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-4">
                            <article>
                                <div class="card border-0 border-radius-0">
                                    <div class="card-body bg-color-grey p-4 z-index-1">
                                        <a href="demo-architecture-2-blog-post.html">
                                            <img class="card-img-top border-radius-0 hover-effect-2"
                                                src="assets/img/demos/architecture-2/blog/blog-thumb-3.jpg"
                                                alt="Card Image">
                                        </a>
                                        <p class="text-uppercase text-1 mb-3 pt-1 text-color-default">
                                            <time pubdate datetime="2024-01-10">10 Jan 2024</time>
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            3 Comments
                                            <span class="opacity-3 d-inline-block px-2">|</span>
                                            John Doe
                                        </p>
                                        <div class="card-body p-0">
                                            <h4 class="card-title mb-3 text-5 font-weight-semibold"><a
                                                    class="text-color-dark text-color-hover-primary text-decoration-none font-weight-bold text-3-5"
                                                    href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit
                                                    a met</a></h4>
                                            <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur
                                                adipiscing elit. Nunc viverra lorem ipsum erat orci, ac auctor...
                                            </p>
                                            <a href="demo-architecture-2-blog-post.html"
                                                class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none ps-0">
                                                READ MORE +
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <div class="position-relative" style="margin-top: 50px;">
            <img src="assets/img/demos/architecture-2/backgrounds/arch-plan-3.jpg"
                class="img-fluid position-absolute bottom-0 left-0" alt="" />
        </div>

    </div>

    

    </div>
@endsection
