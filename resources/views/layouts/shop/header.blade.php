{{-- 
<header id="header"
data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': false, 'stickyStartAt': 135, 'stickySetTop': '-135px', 'stickyChangeLogo': true}">
<div class="header-body header-body-bottom-border-fixed box-shadow-none border-top-0">
    
    <div class="header-container container">
        <div class="header-row py-2">
            <div class="header-column w-100">
                <div class="header-row justify-content-between">
                    <div class="header-logo z-index-2 col-lg-2 px-0">
                        <a href="index.html">
                            <img alt="Porto" width="100" height="48" data-sticky-width="82"
                                data-sticky-height="40" data-sticky-top="84"
                                src="{{ asset('assets/img/logo-default-slim.png') }}">
                        </a>
                    </div>
                    <div class="col-auto col-lg-2 pe-0 ps-0 ps-xl-3" src="assets/img/">
                        <div class="header-nav-features ps-0 ms-1">
                            <div
                                class="header-nav-feature header-nav-features-cart header-nav-features-cart-big d-inline-flex top-2 ms-2 float-end">
                                <a href="#" class="header-nav-features-toggle" aria-label="">
                                    <img src="{{ asset('assets/img/icons/icon-cart-big.svg') }}"
                                        height="30" alt="" class="header-nav-top-icon-img">
                                    <span class="cart-info">
                                        <span class="cart-qty">1</span>
                                    </span>
                                </a>
                                <div class="header-nav-features-dropdown" id="headerTopCartDropdown">
                                    <ol class="mini-products-list">
                                        <li class="item">
                                            <a href="#" title="Camera X1000" class="product-image"><img
                                                    src="{{ asset('assets/img/products/product-1.jpg') }}"
                                                    alt="Camera X1000"></a>
                                            <div class="product-details">
                                                <p class="product-name">
                                                    <a href="#">Camera X1000 </a>
                                                </p>
                                                <p class="qty-price">
                                                    1X <span class="price">$890</span>
                                                </p>
                                                <a href="#" title="Remove This Item"
                                                    class="btn-remove"><i class="fas fa-times"></i></a>
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
                                            <a class="dropdown-item dropdown-toggle" href="index.html">
                                                Home
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a class="dropdown-item" href="index.html">
                                                        Landing Page
                                                    </a>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item" href="index.html#demos">
                                                        Demos <span class="tip tip-dark">hot</span>
                                                    </a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Classic</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-classic.html">Classic -
                                                                Original</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-color.html">Classic -
                                                                Color</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-light.html">Classic -
                                                                Light</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-video.html">Classic -
                                                                Video</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-classic-video-light.html">Classic
                                                                - Video - Light</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Corporate</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate.html">Corporate -
                                                                Version 1</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-2.html">Corporate -
                                                                Version 2</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-3.html">Corporate -
                                                                Version 3</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-4.html">Corporate -
                                                                Version 4</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-5.html">Corporate -
                                                                Version 5</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-6.html">Corporate -
                                                                Version 6</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-7.html">Corporate -
                                                                Version 7</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-8.html">Corporate -
                                                                Version 8</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-9.html">Corporate -
                                                                Version 9</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-corporate-10.html"->Corporate -
                                                                Version 10</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index.html#demos"->More...</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Portfolio</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio.html">Portfolio -
                                                                Version 1</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-2.html">Portfolio -
                                                                Version 2</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-3.html">Portfolio -
                                                                Version 3</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-4.html">Portfolio -
                                                                Version 4</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-portfolio-5.html">Portfolio -
                                                                Version 5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Blog</a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <a class="dropdown-item"
                                                                href="index-blog.html">Version 1</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="index-blog-2.html">Blog
                                                                - Version
                                                                2</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-blog-3.html">Blog
                                                                - Version
                                                                3</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-blog-4.html">Blog
                                                                - Version
                                                                4</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-blog-5.html">Blog
                                                                - Version
                                                                5</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">One Page</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-one-page.html">One Page
                                                                Original</a></li>
                                                    </ul>
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
                                                                            href="elements-ani"
                                                                            src="assets/img/tml">Animations
                                                                            <span
                                                                                class="tip tip-dark p-relative bottom-2">hot</span></a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-arrows.html">Arrows</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-badges.html">Badges</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-before-after.html">Before
                                                                            / After</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-blockquotes.html">Blockquotes</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-buttons.html">Buttons</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-call-to-action.html">Call
                                                                            to Action</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-cards.html">Cards</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-carousels.html">Carousels</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-cascading-images.html">Cascading
                                                                            Images</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements
                                                                    2</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-content-rotate.html">Content
                                                                            Rotate</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-countdowns.html">Countdowns</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-counters.html">Counters</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-dividers.html">Dividers</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-forms.html">Forms</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-headings.html">Headings</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-icons.html">Icons</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-icon-boxes.html">Icon
                                                                            Boxes</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-image-frames.html">Image
                                                                            Frames <span
                                                                                class="tip tip-dark p-relative bottom-2">hot</span></a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-image-gallery.html">Image
                                                                            Gallery</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-image-hotspots.html">Image
                                                                            Hotspots</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-lightboxes.html">Lightboxes</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements
                                                                    3</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-lists.html">Lists</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-maps.html">Maps</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-medias.html">Medias</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-modals.html">Modals</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-parallax.html">Parallax</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-particles.html">Particles</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-posts.html">Posts</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-pricing-tables.html">Pricing
                                                                            Tables</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-process.html">Process</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-progressbars.html">Progress
                                                                            Bars</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-random-images.html">Random
                                                                            Images</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-read-more.html">Read
                                                                            More</a></li>
                                                                </ul>
                                                            </div>
                                                            <div class="col-lg-3">
                                                                <span class="dropdown-mega-sub-title">Elements
                                                                    4</span>
                                                                <ul class="dropdown-mega-sub-nav">
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-sections.html">Sections</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-shape-dividers.html">Shape
                                                                            Dividers</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-star-ratings.html">Star
                                                                            Ratings</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-sticky-elements.html">Sticky
                                                                            Elements</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-tables.html">Tables</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-tabs.html">Tabs</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-testimonials.html">Testimonials</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-tog"
                                                                            src="assets/img/">Toggles</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-tooltips-popovers.html">Tooltips
                                                                            & Popovers</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-typography.html">Typography</a>
                                                                    </li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-word-rotator.html">Word
                                                                            Rotator</a></li>
                                                                    <li><a class="dropdown-item"
                                                                            href="elements-360-image-viewer.html">360º
                                                                            Image Viewer</a></li>
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
                                                            <a class="dropdown-item"
                                                                href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-classic.html">Classic</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-classic-language-dropdown.html">Classic
                                                                        + Language Dropdown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-classic-big-logo.html">Classic
                                                                        + Big Logo</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Flat</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-flat.html">Flat</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-flat-top-bar.html">Flat
                                                                        + Top Bar</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-flat-top-bar-top-borders.html">Flat
                                                                        + Top Bar + Top Border</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-flat-colored-top-bar.html">Flat
                                                                        + Colored Top Bar</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-flat-borders.html">Flat
                                                                        + Borders</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Center</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-center.html">Center</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-center-double-navs.html">Center
                                                                        + Double Navs</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-center-nav-buttons.html">Center
                                                                        + Nav + Buttons</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-center-below-slider.html">Center
                                                                        Below Slider</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Floating</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-floating-bar.html">Floating
                                                                        Bar</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-floating-icons.html">Floating
                                                                        Icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-headers-below-slider.html">Below
                                                                Slider</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-headers-full-video.html">Full
                                                                Video</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-headers-narrow.html">Narrow</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Sticky</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-sticky-shrink.html">Sticky
                                                                        Shrink</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-sticky-scroll-up.html">Sticky
                                                                        Scroll Up</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-sticky-static.html">Sticky
                                                                        Static</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-sticky-change-logo.html">Sticky
                                                                        Change Logo</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-sticky-reveal.html">Sticky
                                                                        Reveal</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Transparent</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-light.html">Transparent
                                                                        Light</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-dark.html">Transparent
                                                                        Dark</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-light-bottom-border.html">Transparent
                                                                        Light + Bottom Border</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-dark-bottom-border.html">Transparent
                                                                        Dark + Bottom Border</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-bottom-slider.html">Transparent
                                                                        Bottom Slider</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-transparent-top-bar-extra-buttons.html">Transparent
                                                                        Top Bar Extra Buttons</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-semi-transparent-light.html">Semi
                                                                        Transparent Light</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-semi-transparent-dark.html">Semi
                                                                        Transparent Dark</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-semi-transparent-bottom-slider.html">Semi
                                                                        Transparent Bottom Slider</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-semi-transparent-top-bar-borders.html">Semi
                                                                        Transparent + Top Bar + Borders</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Full
                                                                Width</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width.html">Full
                                                                        Width</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-borders.html">Full
                                                                        Width + Borders</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-transparent-light.html">Full
                                                                        Width Transparent Light</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-transparent-dark.html">Full
                                                                        Width Transparent Dark</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-semi-transparent-light.html">Full
                                                                        Width Semi Transparent Light</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-semi-transparent-dark.html">Full
                                                                        Width Semi Transparent Dark</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-full-width-2-rows-extra-buttons.html">Full
                                                                        Width 2 Rows + Extra Buttons</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Navbar</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-navbar.html">Navbar</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-navbar-full.html">Navbar
                                                                        Full</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-navbar-pills.html">Navbar
                                                                        Pills</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-navbar-divisors.html">Navbar
                                                                        Divisors</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-navbar-icons-search.html">Nav
                                                                        Bar + Icons + Search</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Side
                                                                Header</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Side
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
                                                                    <a class="dropdown-item"
                                                                        href="#">Side
                                                                        Header
                                                                        Right</a>
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
                                                                    <a class="dropdown-item"
                                                                        href="#">Side
                                                                        Header
                                                                        Offcanvas</a>
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
                                                                href="feature-headers-sign-in-sign-up.html">Sign
                                                                In / Sign Up</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-headers-logged.html">Logged</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-headers-mini-cart.html">Mini
                                                                Cart</a></li>
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
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-extra-big-icons-top.html">Big
                                                                        Icons Top</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-extra-button.html">Button</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-headers-extra-background-color.html">Background
                                                                        Color</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Navigations</a>
                                                    <ul class="dropdown-menu">
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Pills</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-pills.html">Pills</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        src="assets/img/feature-navigations-pills-arrows.html">Pills
                                                                        + Arrows</a></li>
                                                                <li><a class="dropdown-it"
                                                                        src="assets/img/feature-navigations-pills-dark-text.html">Pills
                                                                        Dark Text</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-pills-color-dropdown.html">Pills
                                                                        Color Dropdown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-pills-square.html">Pills
                                                                        Square</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-pills-rounded.html">Pills
                                                                        Rounded</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Stripes</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-stripe.html">Stripe</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-stripe-dark-text.html">Stripe
                                                                        Dark Text</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-stripe-color-dropdown.html">Stripe
                                                                        Color Dropdown</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Hover
                                                                Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-top-line.html">Top
                                                                        Line</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-top-line-animated.html">Top
                                                                        Line Animated</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-top-line-color-dropdown.html">Top
                                                                        Line Color Dropdown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-bottom-line.html">Bottom
                                                                        Line</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-bottom-line-animated.html">Bottom
                                                                        Line Animated</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-slide.html">Slide</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-sub-title.html">Sub
                                                                        Title</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hover-line-under-text.html">Line
                                                                        Under Text</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Vertical</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-vertical-dropdown.html">Dropdown</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        src="assets/img/feature-navigations-vertical-expand.html">Expand</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-vertical-columns.html">Columns</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-vertical-slide.html">Slide</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Hamburguer</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hamburguer-sidebar.html">Sidebar</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-hamburguer-overlay.html">Overlay</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown
                                                                Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-dark.html">Dark</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-light.html">Light</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-colors.html">Colors</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-top-line.html">Top
                                                                        Line</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-square.html">Square</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-arrow.html">Arrow
                                                                        Dropdown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-arrow-center.html">Arrow
                                                                        Center Dropdown</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-modern-light.html">Modern
                                                                        Light</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-modern-dark.html">Modern
                                                                        Dark</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Dropdown
                                                                Effects</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-no-effect.html">No
                                                                        Effect</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-opacity.html">Opacity</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-move-to-top.html">Move
                                                                        To Top</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-move-to-bottom.html">Move
                                                                        To Bottom</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-move-to-right.html">Move
                                                                        To Right</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-dropdowns-effect-move-to-left.html">Move
                                                                        To Left</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Font
                                                                Styles</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-font-small.html">Small</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-font-medium.html">Medium</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-font-large.html">Large</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-font-alternative.html">Alternative</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Icons</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-icons.html">Icons</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-navigations-icons-float-icons.html">Float
                                                                        Icons</a></li>
                                                            </ul>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-navigations-sub-title.html">Sub
                                                                Title</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-navigations-divisors.html">Divisors</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-navigations-logo-between.html">Logo
                                                                Between</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-navigations-one-page.html">One
                                                                Page Nav</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-navigations-click-to-open.html">Click
                                                                To Open</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Page
                                                        Headers</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="feature-page-headers-overview.html">Overview</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        src="assets/img/feature-page-headers-classic-small.html">Small</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-classic-medium.html">Medium</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-classic-large.html">Large</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Modern</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-modern-small.html">Small</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-modern-medium.html">Medium</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-modern-large.html">Large</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Colors</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-primary.html">Primary</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-secondary.html">Secondary</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-tertiary.html">Tertiary</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-quaternary.html">Quaternary</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-light.html">Light</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-colors-dark.html">Dark</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Title
                                                                Position</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Left</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-left-small.html">Small</a>
                                                                        </li>
                                                                        <li><a class="dropdown"
                                                                                src="assets/img/effeature-page-headers-title-position-left-medium.html">Medium</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-left-large.html">Large</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Right</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-right-small.html">Small</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-right-medium.html">Medium</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-right-large.html">Large</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Center</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-center-small.html">Small</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-center-medium.html">Medium</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-title-position-center-large.html">Large</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Background</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-background-fixed.html">Fixed</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Breadcrumb</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-extra-breadcrumb-outside.html">Outside</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-page-headers-extra-breadcrumb-dark.html">Dark</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-extra-scroll-to-content.html">Scroll
                                                                        to Content</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-extra-full-width.html">Full
                                                                        Width</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-extra-product.html">Product</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-page-headers-extra-mouse-hover-split.html">Mouse
                                                                        Hover Split</a></li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Footers</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="feature-footers-overview.html">Overview</a>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">Classic</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-classic.html#footer">Classic</a>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Copyright</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-classic-copyright-light.html#footer">Light</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-classic-copyright-dark.html#footer">Dark</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-classic-copyright-social-icons.html#footer">Social
                                                                                Icons</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Colors</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-classic-colors-primary.html#footer">Primary</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Modern</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-modern.html#footer">Modern</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-modern-font-style-alternative.html#footer">Font
                                                                        Style Alternative</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-modern-clean.html#footer">Clean</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-modern-useful-links.html#footer">Useful
                                                                        Links</a></li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        src="assets/img/">Background</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-modern-background-image-simple.html#footer">Image
                                                                                Simple</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Call
                                                                        to Action</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-modern-call-to-action-button.html#footer">Button</a>
                                                                        </li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-modern-call-to-action-simple.html#footer">Simple</a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Blog</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-blog-classic.html#footer">Blog
                                                                        Classic</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item"
                                                                href="#">eCommerce</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-ecommerce-classic.html#footer">eCommerce
                                                                        Classic</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Contact
                                                                Form</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-contact-form-classic.html#footer">Classic</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-contact-form-above-the-map.html#footer">Above
                                                                        the Map</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-contact-form-center.html#footer">Center</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-contact-form-columns.html#footer">Columns</a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Map</a>
                                                            <ul class="dropdown-menu">
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-map-hidden.html#footer">Hidden
                                                                        Map</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-map-full-width.html#footer">Full
                                                                        Width</a></li>
                                                            </ul>
                                                        </li>
                                                        <li class="dropdown-submenu">
                                                            <a class="dropdown-item" href="#">Extra</a>
                                                            <ul class="dropdown-menu">
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Simple</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-extra-top-social-icons.html#footer">Top
                                                                                Social Icons</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-extra-big-icons.html#footer">Big
                                                                                Icons</a></li>
                                                                    </ul>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-extra-recent-work.html#footer">Recent
                                                                        Work</a></li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-extra-reveal.html#footeranchor">Reveal</a>
                                                                </li>
                                                                <li><a class="dropdown-item"
                                                                        href="feature-footers-extra-instagram.html#footer">Instagram</a>
                                                                </li>
                                                                <li class="dropdown-submenu">
                                                                    <a class="dropdown-item"
                                                                        href="#">Full
                                                                        Width</a>
                                                                    <ul class="dropdown-menu">
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-extra-full-width-light.html#footer">Simple
                                                                                Light</a></li>
                                                                        <li><a class="dropdown-item"
                                                                                href="feature-footers-extra-full-width-dark.html#footer">Simple
                                                                                Dark</a></li>
                                                                    </ul>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Sliders</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="index-slider-revolution.html">Revolution
                                                                Slider</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="index-slider-owl.html">Owl
                                                                Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Layout
                                                        Options</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="feature-layout-boxed.html">Boxed</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-layout-dark.html">Dark</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-layout-rtl.html">RTL</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="feature-cursor-effect.html">Cursor
                                                                Effect</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-grid-system.html">Grid
                                                                System</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a class="dropdown-item"
                                                        href="feature-style-switcher.html">Style Switcher
                                                        <span class="tip tip-dark">hot</span></a>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Admin
                                                        Extension<em class="not-included">(Not
                                                            Included)</em></a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="feature-admin-forms-basic.html">Forms
                                                                Basic</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="feature-admin-forms-advanced.html">Forms
                                                                Advanced</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Pages
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Contact
                                                        Us</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="contact-us-advanced.php">Contact Us
                                                                - Advanced</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="contact-us.html">Contact Us -
                                                                Basic</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="contact-us-recaptcha.html">Contact
                                                                Us - Recaptcha</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">About Us</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="about-us-advanced.html">About Us -
                                                                Advanced</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="page-full-width.html">Full Width</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="page-404.html">404
                                                                Error</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="page-500.html">500
                                                                Error</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Team</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="page-team-advanced.html">Team -
                                                                Advanced</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="page-team.html">Team
                                                                - Basic</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Services</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="page-services.html">Services -
                                                                Version 1</a></li>

                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="page-careers.html">Careers</a></li>
                                                <li><a class="dropdown-item" href="page-faq.html">FAQ</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Portfolio
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single
                                                        Project</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-single-wide-slider.html">Wide
                                                                Slider</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-single-small-slider.html">Small
                                                                Slider</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Grid
                                                        Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-grid-1-column.html">1
                                                                Column</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-grid-2-columns.html">2
                                                                Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Masonry
                                                        Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-masonry-2-columns.html">2
                                                                Columns</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-masonry-3-columns.html">3
                                                                Columns</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Sidebar
                                                        Layouts</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-sidebar-left.html">Left
                                                                Sidebar</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Ajax</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-ajax-page.html">Ajax on
                                                                Page</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-ajax-modal.html">Ajax on
                                                                Modal</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Extra</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-extra-timeline.html">Timeline</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="portfolio-extra-lightbox.html">Lightbox</a>
                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                Blog
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Large
                                                        Image</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-large-image-full-width.html">Full
                                                                Width</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Medium
                                                        Image</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-medium-image-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-medium-image-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Grid</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-grid-4-columns.html">4
                                                                Columns</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-grid-3-columns.html">3
                                                                Columns</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Masonry</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-masonry-4-columns.html">4
                                                                Columns</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-masonry-3-columns.html">3
                                                                Columns</a></li>

                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Timeline</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-timeline.html">Full Width</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-timeline-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-timeline-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single
                                                        Post</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-post.html">Full
                                                                Width</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-slider-gallery.html">Slider
                                                                Gallery</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-image-gallery.html">Image
                                                                Gallery</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-embedded-video.html">Embedded
                                                                Video</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-html5-video.html">HTML5
                                                                Video</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-blockquote.html">Blockquote</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-link.html">Link</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-embedded-audio.html">Embedded
                                                                Audio</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-small-image.html">Small
                                                                Image</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-sidebar-left-and-right.html">Left
                                                                and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Post
                                                        Comments</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="blog-post.html#comments">Default</a>
                                                        </li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-comments-facebook.html#comments">Facebook
                                                                Comments</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="blog-post-comments-disqus.html#comments">Disqus
                                                                Comments</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a class="dropdown-item dropdown-toggle active" href="#">
                                                Shop
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">Single
                                                        Product</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="shop-product-full-width.html">Full
                                                                Width</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-product-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-product-sidebar-right.html">Right
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-product-sidebar-left-and-right.html">Left
                                                                and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-4-columns.html">4
                                                        Columns</a></li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">3
                                                        Columns</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="shop-3-columns-full-width.html">Full
                                                                Width</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-3-columns-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-3-columns-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">2
                                                        Columns</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="shop-2-columns-full-width.html">Full
                                                                Width</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-2-columns-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-2-columns-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-2-columns-sidebar-left-and-right.html">Left
                                                                and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown-submenu">
                                                    <a class="dropdown-item" href="#">1 Column</a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item"
                                                                href="shop-1-column-full-width.html">Full
                                                                Width</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-1-column-sidebar-left.html">Left
                                                                Sidebar</a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-1-column-sidebar-right.html">Right
                                                                Sidebar </a></li>
                                                        <li><a class="dropdown-item"
                                                                href="shop-1-column-sidebar-left-and-right.html">Left
                                                                and Right Sidebar</a></li>
                                                    </ul>
                                                </li>
                                                <li><a class="dropdown-item" href="shop-cart.html">Cart</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="shop-login.html">Login</a>
                                                </li>
                                                <li><a class="dropdown-item"
                                                        href="shop-checkout.html">Checkout</a></li>
                                                <li><a class="dropdown-item"
                                                        href="shop-order-complete.html">Order Complete</a>
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
</header> --}}