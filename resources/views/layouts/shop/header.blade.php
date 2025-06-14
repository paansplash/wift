<header id="header"
    data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
    <div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
        {{-- <div class="header-top header-top-small-minheight header-top-simple-border-bottom">
                        <div class="container">
                                <div class="header-row justify-content-between">
                                        <div class="header-column col-auto px-0">
                                                <div class="header-row">
                                                        <p class="font-weight-semibold text-1 mb-0 d-none d-sm-block d-md-none">FREE SHIPPING ORDERS $99+</p>
                                                        <p class="font-weight-semibold text-1 mb-0 d-none d-md-block">FREE RETURNS, STANDARD SHIPPING ORDERS $99+</p>
                                                </div>
                                        </div>
                                        <div class="header-column justify-content-end col-auto px-0">
                                                <div class="header-row">
                                                        <nav class="header-nav-top">
                                                                <ul class="nav nav-pills font-weight-semibold text-2">
                                                                        <li class="nav-item dropdown nav-item-left-border d-lg-none">
                                                                                <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownMobileMore" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        More
                                                                                        <i class="fas fa-angle-down"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu" aria-labelledby="dropdownMobileMore">
                                                                                        <a class="dropdown-item" href="{{ route('shop.cart') }}">Cart</a>
                                                                                        <a class="dropdown-item" href="{{ route('shop.completed') }}">Completed</a>
                                                                                        <a class="dropdown-item" href="{{ route('shop.checkout') }}">Checkout</a>
                                                                                        <a class="dropdown-item" href="#">Contact</a>
                                                                                        <a class="dropdown-item" href="#">Help & FAQs</a>
                                                                                        <a class="dropdown-item" href="#">Track Order</a>
                                                                                </div>
                                                                        </li>
                                                                        <li class="nav-item d-none d-lg-inline-block">
                                                                                <a href="{{ route('shop.cart') }}" class="text-decoration-none text-color-default text-color-hover-primary">About</a>
                                                                        </li>
                                                                        <li class="nav-item d-none d-lg-inline-block">
                                                                                <a href="{{ route('shop.checkout') }}" class="text-decoration-none text-color-default text-color-hover-primary">Our Stores</a>
                                                                        </li>
                                                                        <li class="nav-item d-none d-lg-inline-block">
                                                                                <a href="{{ route('shop.completed') }}" class="text-decoration-none text-color-default text-color-hover-primary">Blog</a>
                                                                        </li>
                                                                        <li class="nav-item d-none d-lg-inline-block">
                                                                                <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Contact</a>
                                                                        </li>
                                                                        <li class="nav-item d-none d-xl-inline-block">
                                                                                <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Help & FAQs</a>
                                                                        </li>
                                                                        <li class="nav-item d-none d-xl-inline-block">
                                                                                <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">Track Order</a>
                                                                        </li>
                                                                        <li class="nav-item dropdown nav-item-left-border">
                                                                                <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownCurrency" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        USD
                                                                                        <i class="fas fa-angle-down"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0" aria-labelledby="dropdownCurrency">
                                                                                        <a class="dropdown-item" href="#">EUR</a>
                                                                                        <a class="dropdown-item" href="#">USD</a>
                                                                                </div>
                                                                        </li>
                                                                        <li class="nav-item dropdown nav-item-right-border">
                                                                                <a class="nav-link text-color-default text-color-hover-primary" href="#" role="button" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                                                        ENG
                                                                                        <i class="fas fa-angle-down"></i>
                                                                                </a>
                                                                                <div class="dropdown-menu dropdown-menu-arrow-centered min-width-0" aria-labelledby="dropdownLanguage">
                                                                                        <a class="dropdown-item" href="#">ESP</a>
                                                                                        <a class="dropdown-item" href="#">FRA</a>
                                                                                        <a class="dropdown-item" href="#">ENG</a>
                                                                                </div>
                                                                        </li>
                                                                </ul>
                                                                <ul class="header-social-icons social-icons social-icons-clean social-icons-icon-gray">
                                                                        <li class="social-icons-facebook">
                                                                                <a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                                                        </li>
                                                                        <li class="social-icons-twitter">
                                                                                <a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-x-twitter"></i></a>
                                                                        </li>
                                                                        <li class="social-icons-linkedin">
                                                                                <a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a>
                                                                        </li>
                                                                </ul>
                                                        </nav>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </div> --}}
        <div class="header-container container">
            <div class="header-row py-2">
                <div class="header-column w-100">
                    <div class="header-row justify-content-between">
                        <div class="header-logo z-index-2 col-lg-2 px-0">
                            <a href="index.html">
                                <img alt="Porto" width="100" height="48" data-sticky-width="82"
                                    data-sticky-height="40" data-sticky-top="84"
                                    src="{{ asset('assets/images/logos/icon2.png') }}">
                            </a>
                        </div>
                        <div
                            class="header-nav-features header-nav-features-no-border p-relative z-index-2 col col-lg-5 col-xl-6 px-0 ms-0">
                            <div class="header-nav-feature ps-lg-5 pe-2 pe-lg-4 me-4 me-lg-0">
                                <form role="search" action="page-search-results.html" method="get">
                                    <div class="search-with-select">
                                        <a href="#" class="mobile-search-toggle-btn text-decoration-none"
                                            data-toggle-class="open">
                                            <i
                                                class="icons icon-magnifier text-color-dark text-color-hover-primary"></i>
                                        </a>
                                        <div class="search-form-wrapper input-group">
                                            <input class="form-control text-1" id="headerSearch" name="q"
                                                type="search" value="" placeholder="Search...">
                                            <div class="search-form-select-wrapper">
                                                <div class="custom-select-1 d-none d-lg-block">
                                                    <select name="category" class="form-control form-select">
                                                        <option value="all" selected>All Categories</option>
                                                        <option value="fashion">Fashion</option>
                                                    </select>
                                                </div>
                                                <button class="btn" type="submit" aria-label="Search">
                                                    <i
                                                        class="icons icon-magnifier header-nav-top-icon text-color-dark"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <ul class="header-extra-info col-auto col-lg-3 col-xl-2 ps-2 ps-xl-0 ms-lg-3 d-none d-lg-block">
                            <li class="d-none d-sm-inline-flex ms-0">
                                <div class="header-extra-info-icon ms-lg-4">
                                    <i class="icons icon-phone text-3 text-color-dark position-relative top-1"></i>
                                </div>
                                <div class="header-extra-info-text">
                                    <label class="text-1 font-weight-semibold text-color-default">CALL US NOW</label>
                                    <strong class="text-4"><a href="tel:+1234567890"
                                            class="text-color-hover-primary text-decoration-none">+123 4567
                                            890</a></strong>
                                </div>
                            </li>
                        </ul>
                        <div class="d-flex col-auto col-lg-2 pe-0 ps-0 ps-xl-3">
                            <ul class="header-extra-info">
                                <li class="ms-0 ms-xl-4">
                                    <div class="header-extra-info-icon">
                                        <a href="#" target="_blank" title="Facebook"
                                            class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </div>
                                    <div class="header-extra-info-icon">
                                        <a href="#" target="_blank" title="Instagram"
                                            class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                            <i class="fab fa-x-twitter"></i>
                                        </a>
                                    </div>
                                    <div class="header-extra-info-icon">
                                        <a href="#" target="_blank" title="Twitter"
                                            class="text-decoration-none text-color-dark text-color-hover-primary text-2">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                            <div class="header-nav-features ps-0 ms-1">
                                <div
                                    class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2">
                                    <a href="#" class="header-nav-features-toggle" aria-label="">
                                        <img src="{{ asset('shop/shopping-cart.svg') }}" height="30" alt=""
                                            class="header-nav-top-icon-img">
                                        <span class="cart-info">
                                            <span class="cart-qty">1</span>
                                        </span>
                                    </a>
                                    <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                        <ol class="mini-products-list">
                                            <li class="item">
                                                <a href="#" title="Camera X1000" class="product-image"><img
                                                        src="img/products/product-1.jpg" alt="Camera X1000"></a>
                                                <div class="product-details">
                                                    <p class="product-name">
                                                        <a href="#">Camera X1000 </a>
                                                    </p>
                                                    <p class="qty-price">
                                                        1X <span class="price">$890</span>
                                                    </p>
                                                    <a href="#" title="Remove This Item" class="btn-remove"><i
                                                            class="fas fa-times"></i></a>
                                                </div>
                                            </li>
                                        </ol>
                                        <div class="totals">
                                            <span class="label">Total:</span>
                                            <span class="price-total"><span class="price">$890</span></span>
                                        </div>
                                        <div class="actions">
                                            <a class="btn btn-dark" href="#">View Cart</a>
                                            <a class="btn btn-primary" href="#">Checkout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end">
                    <div class="header-row"></div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar header-nav-bar-top-border bg-light p-relative z-index-1">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row justify-content-end">
                            <div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border justify-content-start"
                                data-sticky-header-style="{'minResolution': 991}"
                                data-sticky-header-style-active="{'margin-left': '105px'}"
                                data-sticky-header-style-deactive="{'margin-left': '0'}">
                                <div
                                    class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-3 header-nav-main-sub-effect-1 w-100">
                                    <nav class="collapse w-100">
                                        <ul class="nav nav-pills w-100" id="mainNav">
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle"
                                                    href="{{ route('shop.cart') }}">
                                                    Home
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('shop.checkout') }}">
                                                            Landing Page
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{ route('shop.completed') }}">
                                                            Demos <span class="tip tip-dark">hot</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown dropdown-mega">
                                                <a class="dropdown-item dropdown-toggle" href="elements.html">
                                                    Elements
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <div class="dropdown-mega-content">
                                                            <div class="row">
                                                                <div class="col-lg-3">
                                                                    <span class="dropdown-mega-sub-title">Elements
                                                                        1</span>
                                                                    <ul class="dropdown-mega-sub-nav">
                                                                        <li><a class="dropdown-item"
                                                                                href="elements-accordions.html">Accordions</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="elements-alerts.html">Alerts</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="elements-cascading-images.html">Cascading
                                                                                Images</a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown">
                                                <a class="dropdown-item dropdown-toggle" href="#">
                                                    Features
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Headers</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-overview.html">Overview</a>
                                                            </li>
                                                            <li class="dropdown-submenu">
                                                                <a class="dropdown-item" href="#">Classic</a>
                                                                <ul class="dropdown-menu">
                                                                    <li><a class="dropdown-item"
                                                                            href="feature-headers-classic.html">Classic</a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-below-slider.html">Below
                                                                    Slider</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-full-video.html">Full
                                                                    Video</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-narrow.html">Narrow</a></li>

                                                            <a class="dropdown-item" href="#">Side
                                                                Header</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side
                                                                        Header Left</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-dropdown.html">Dropdown</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-expand.html">Expand</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-columns.html">Columns</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-slide.html">Slide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-semi-transparent.html">Semi
                                                                                Transparent</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-left-dark.html">Dark</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side
                                                                        Header Right</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-dropdown.html">Dropdown</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-expand.html">Expand</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-columns.html">Columns</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-slide.html">Slide</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-semi-transparent.html">Semi
                                                                                Transparent</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-right-dark.html">Dark</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item" href="#">Side
                                                                        Header Offcanvas</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-offcanvas-push.html">Push</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-headers-side-header-offcanvas-slide.html">Slide</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-side-header-narrow-bar.html">Side
                                                                        Header Narrow Bar</a></li>
                                                            </ul>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="feature-headers-sign-in-sign-up.html">Sign In
                                                            / Sign Up</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="feature-headers-logged.html">Logged</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="feature-headers-mini-cart.html">Mini Cart</a>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Search
                                                            Styles</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-search-simple-input.html">Simple
                                                                    Input</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-search-simple-input-reveal.html">Simple
                                                                    Input Reveal</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-search-dropdown.html">Dropdown</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-search-big-input-hidden.html">Big
                                                                    Input Hidden</a></li>
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-search-full-screen.html">Full
                                                                    Screen</a></li>
                                                        </ul>
                                                    </li>
                                                    <li class="dropdown-submenu">
                                                        <a class="dropdown-item" href="#">Extra</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="feature-headers-extra-big-icon.html">Big
                                                                    Icon</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="dropdown ms-lg-auto">
                                                <a href="#" class="dropdown-item">
                                                    Outlet
                                                </a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-item">
                                                    Buy Porto!
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                                <button class="btn header-btn-collapse-nav" data-bs-toggle="collapse"
                                    data-bs-target=".header-nav-main nav">
                                    <i class="fas fa-bars"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
