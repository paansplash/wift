@extends('layouts.app')

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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Blog</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="demo-architecture-2.html"
                                                class="text-decoration-none">Home</a></li>
                                        <li class="text-transform-none active">Blog</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="custom-page-wrapper pt-5">
            <div class="spacer py-4 my-5"></div>
            <div class="container container-xl-custom">
                <div class="row">
                    <div class="col-lg-8 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1600">

                        <article class="mb-5">
                            <div class="card border-0 border-radius-0">
                                <div class="card-body p-0 z-index-1">
                                    <a href="demo-architecture-2-blog-post.html">
                                        <img class="card-img-top border-radius-0 hover-effect-2"
                                            src="img/blog/wide/blog-37.jpg" alt="Card Image">
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
                                                href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit a met</a>
                                        </h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                                        <a href="demo-architecture-2-blog-post.html"
                                            class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none ps-0">
                                            READ MORE +
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <hr class="mb-5">

                        <article class="mb-5">
                            <div class="card border-0 border-radius-0">
                                <div class="card-body p-0 z-index-1">
                                    <a href="demo-architecture-2-blog-post.html">
                                        <img class="card-img-top border-radius-0 hover-effect-2"
                                            src="img/blog/wide/blog-11.jpg" alt="Card Image">
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
                                                href="demo-architecture-2-blog-post.html">Lorem ipsum dolor sit a met</a>
                                        </h4>
                                        <p class="card-text mb-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                            Nunc viverra lorem ipsum erat orci, ac auctor...</p>
                                        <a href="demo-architecture-2-blog-post.html"
                                            class="custom-read-more d-inline-flex align-items-center font-weight-semibold text-3 text-decoration-none ps-0">
                                            READ MORE +
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <ul
                            class="custom-pagination-style-1 pagination pagination-rounded pagination-md justify-content-center">
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a>
                            </li>
                        </ul>

                    </div>
                    <div class="blog-sidebar col-lg-4 pt-4 pt-lg-0 appear-animation" data-appear-animation="fadeInUpShorter"
                        data-appear-animation-delay="1800">
                        <aside class="sidebar">
                            <div class="px-3 mb-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">About The
                                    Blog</h3>
                                <p class="m-0">Lorem ipsum dolor sit amet, conse elit porta. Vestibulum ante justo,
                                    volutpat quis porta diam.</p>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <form action="page-search-results.html" method="get">
                                    <div class="input-group mb-3 pb-1">
                                        <input class="form-control box-shadow-none text-1 border-0 bg-color-grey"
                                            placeholder="Search..." name="s" id="s" type="text">
                                        <button type="submit" class="btn bg-color-grey text-1 p-2"><i
                                                class="fas fa-search m-2"></i></button>
                                    </div>
                                </form>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent
                                    Posts</h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2024 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Lorem
                                        ipsum dolor sit amet</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2024 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Consectetur
                                        adipiscing elit</a>
                                    <a href="#"
                                        class="text-color-default text-uppercase text-1 mb-0 d-block text-decoration-none">10
                                        Jan 2024 <span class="opacity-3 d-inline-block px-2">|</span> 3 Comments <span
                                            class="opacity-3 d-inline-block px-2">|</span> John Doe</a>
                                    <a href="#"
                                        class="text-color-dark text-hover-primary font-weight-bold text-3 d-block pb-3 line-height-4">Vivamus
                                        sollicitudin nibh luctus</a>
                                </div>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0 mb-3">Recent
                                    Comments</h3>
                                <div class="pb-2 mb-1">
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on <strong class="text-color-dark text-hover-primary text-4">Vivamus
                                            sollicitudin</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10
                                            Jan 2024</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">John
                                        Doe on <strong class="text-color-dark text-hover-primary text-4">Lorem ipsum
                                            dolor</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10 Jan
                                            2024</span></a>
                                    <a href="#"
                                        class="text-color-default text-2 mb-0 d-block text-decoration-none line-height-4">Admin
                                        on <strong class="text-color-dark text-hover-primary text-4">Consectetur
                                            adipiscing</strong> <span class="text-uppercase text-1 d-block pt-1 pb-3">10
                                            Jan 2024</span></a>
                                </div>
                            </div>
                            <div class="py-1 clearfix">
                                <hr class="my-2">
                            </div>
                            <div class="px-3 mt-4">
                                <h3 class="text-color-quaternary text-capitalize font-weight-bold text-5 m-0">Categories
                                </h3>
                                <ul class="nav nav-list flex-column mt-2 mb-0 p-relative right-9">
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Design (2)</a></li>
                                    <li class="nav-item">
                                        <a class="nav-link bg-transparent border-0 active" href="#">Photos (4)</a>
                                        <ul>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Animals</a></li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0 active"
                                                    href="#">Business</a></li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">Sports</a></li>
                                            <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                                    href="#">People</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Videos (3)</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Lifestyle (2)</a></li>
                                    <li class="nav-item"><a class="nav-link bg-transparent border-0"
                                            href="#">Technology (1)</a></li>
                                </ul>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>

        </div>

    </div>
@endsection
