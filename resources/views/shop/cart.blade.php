@extends('layouts.shop.app')

@section('content')
    <div role="main" class="main shop pb-4">

        <div class="container">

            <div class="row">
                <div class="col">
                    <ul class="breadcrumb font-weight-bold text-6 justify-content-center my-5">
                        <li class="text-transform-none me-2">
                            <a href="shop-cart.html" class="text-decoration-none text-color-primary">Shopping
                                Cart</a>
                        </li>
                        <li class="text-transform-none text-color-grey-lighten me-2">
                            <a href="shop-checkout.html"
                                class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Checkout</a>
                        </li>
                        <li class="text-transform-none text-color-grey-lighten">
                            <a href="shop-order-complete.html"
                                class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Order
                                Complete</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row pb-4 mb-5">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <form method="post" action="">
                        <div class="table-responsive">
                            <table class="shop_table cart">
                                <thead>
                                    <tr class="text-color-dark">
                                        <th class="product-thumbnail" width="15%">
                                            &nbsp;
                                        </th>
                                        <th class="product-name text-uppercase" width="30%">
                                            Product
                                        </th>
                                        <th class="product-price text-uppercase" width="15%">
                                            Price
                                        </th>
                                        <th class="product-quantity text-uppercase" width="20%">
                                            Quantity
                                        </th>
                                        <th class="product-subtotal text-uppercase text-end" width="20%">
                                            Subtotal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                                    title="Photo Camera">
                                                    <img width="90" height="90" alt="" class="img-fluid"
                                                        src="img/products/product-grey-1.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar-right.html"
                                                class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Photo
                                                Camera</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey">$59</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button"
                                                    class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="-">
                                                <input type="text" class="input-text qty text" title="Qty"
                                                    value="1" name="quantity" min="1" step="1">
                                                <input type="button"
                                                    class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="+">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4">$59</span>
                                        </td>
                                    </tr>

                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove" title="Remove Product">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                                    title="Porto Headphone">
                                                    <img width="90" height="90" alt="" class="img-fluid"
                                                        src="img/products/product-grey-7.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar-right.html"
                                                class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Porto
                                                Headphone</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey">$99</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button"
                                                    class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="-">
                                                <input type="text" class="input-text qty text" title="Qty"
                                                    value="1" name="quantity" min="1" step="1">
                                                <input type="button"
                                                    class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="+">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4">$99</span>
                                        </td>
                                    </tr>

                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove"
                                                    title="Remove Product">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                                    title="Golf Bag">
                                                    <img width="90" height="90" alt="" class="img-fluid"
                                                        src="img/products/product-grey-2.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar-right.html"
                                                class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Golf
                                                Bag</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey">$19</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button"
                                                    class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="-">
                                                <input type="text" class="input-text qty text" title="Qty"
                                                    value="1" name="quantity" min="1" step="1">
                                                <input type="button"
                                                    class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="+">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4">$19</span>
                                        </td>
                                    </tr>

                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove"
                                                    title="Remove Product">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                                    title="Workout">
                                                    <img width="90" height="90" alt="" class="img-fluid"
                                                        src="img/products/product-grey-3.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar-right.html"
                                                class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Workout</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey">$30</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button"
                                                    class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="-">
                                                <input type="text" class="input-text qty text" title="Qty"
                                                    value="1" name="quantity" min="1" step="1">
                                                <input type="button"
                                                    class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="+">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4">$30</span>
                                        </td>
                                    </tr>

                                    <tr class="cart_table_item">
                                        <td class="product-thumbnail">
                                            <div class="product-thumbnail-wrapper">
                                                <a href="#" class="product-thumbnail-remove"
                                                    title="Remove Product">
                                                    <i class="fas fa-times"></i>
                                                </a>
                                                <a href="shop-product-sidebar-right.html" class="product-thumbnail-image"
                                                    title="Luxury Bag">
                                                    <img width="90" height="90" alt="" class="img-fluid"
                                                        src="img/products/product-grey-4.jpg">
                                                </a>
                                            </div>
                                        </td>
                                        <td class="product-name">
                                            <a href="shop-product-sidebar-right.html"
                                                class="font-weight-semi-bold text-color-dark text-color-hover-primary text-decoration-none">Luxury
                                                Bag</a>
                                        </td>
                                        <td class="product-price">
                                            <span class="amount font-weight-medium text-color-grey">$79</span>
                                        </td>
                                        <td class="product-quantity">
                                            <div class="quantity float-none m-0">
                                                <input type="button"
                                                    class="minus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="-">
                                                <input type="text" class="input-text qty text" title="Qty"
                                                    value="1" name="quantity" min="1" step="1">
                                                <input type="button"
                                                    class="plus text-color-hover-light bg-color-hover-primary border-color-hover-primary"
                                                    value="+">
                                            </div>
                                        </td>
                                        <td class="product-subtotal text-end">
                                            <span class="amount text-color-dark font-weight-bold text-4">$79</span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="5">
                                            <div class="row justify-content-between mx-0">
                                                <div class="col-md-auto px-0 mb-3 mb-md-0">
                                                    <div class="d-flex align-items-center">
                                                        <input type="text"
                                                            class="form-control h-auto border-radius-0 line-height-1 py-3"
                                                            name="couponCode" placeholder="Coupon Code" />
                                                        <button type="submit"
                                                            class="btn btn-light btn-modern text-color-dark bg-color-grey text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 ws-nowrap btn-px-4 py-3 ms-2">Apply
                                                            Coupon</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-auto px-0">
                                                    <button type="submit"
                                                        class="btn btn-light btn-modern text-color-dark bg-color-grey text-color-hover-light bg-color-hover-primary text-uppercase text-3 font-weight-bold border-0 border-radius-0 btn-px-4 py-3">Update
                                                        Cart</button>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4 position-relative">
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky
                        data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase text-4 mb-3">Cart Totals</h4>
                            <table class="shop_table cart-totals mb-4">
                                <tbody>
                                    <tr class="cart-subtotal">
                                        <td class="border-top-0">
                                            <strong class="text-color-dark">Subtotal</strong>
                                        </td>
                                        <td class="border-top-0 text-end">
                                            <strong><span class="amount font-weight-medium">$431</span></strong>
                                        </td>
                                    </tr>
                                    <tr class="shipping">
                                        <td colspan="2">
                                            <strong class="d-block text-color-dark mb-2">Shipping</strong>

                                            <div class="d-flex flex-column">
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                    for="shipping_method1">
                                                    <input id="shipping_method1" type="radio" class="me-2"
                                                        name="shipping_method" value="free" checked />
                                                    Free Shipping
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                    for="shipping_method2">
                                                    <input id="shipping_method2" type="radio" class="me-2"
                                                        name="shipping_method" value="local-pickup" />
                                                    Local Pickup
                                                </label>
                                                <label class="d-flex align-items-center text-color-grey mb-0"
                                                    for="shipping_method3">
                                                    <input id="shipping_method3" type="radio" class="me-2"
                                                        name="shipping_method" value="flat-rate" />
                                                    Flat Rate: $5.00
                                                </label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <td>
                                            <strong class="text-color-dark text-3-5">Total</strong>
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-color-dark"><span
                                                    class="amount text-color-dark text-5">$431</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="shop-checkout.html"
                                class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Proceed
                                to Checkout <i class="fas fa-arrow-right ms-2"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h4 class="font-weight-semibold text-4 mb-3">PEOPLE ALSO BOUGHT</h4>
                    <hr class="mt-0">
                    <div class="products row">
                        <div class="col">
                            <div class="owl-carousel owl-theme nav-style-1 nav-outside nav-outside nav-dark mb-0"
                                data-plugin-options="{'loop': false, 'autoplay': false, 'items': 4, 'nav': true, 'dots': false, 'margin': 20, 'autoplayHoverPause': true, 'autoHeight': true, 'stagePadding': '75', 'navVerticalOffset': '50px'}">

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-1.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">electronics</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Photo Camera</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$69,00</span>
                                        <span class="amount">$59,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="product-thumb-info-badges-wrapper">
                                            <span class="badge badge-ecommerce text-bg-success">NEW</span>
                                            <span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
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
                                            <div class="product-thumb-info-image product-thumb-info-image-effect">
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-7.jpg">

                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-7-2.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Porto
                                                    Headphone</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
                                        <span class="amount">$99,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-2.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Golf Bag</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$29,00</span>
                                        <span class="amount">$19,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

                                        <div class="product-thumb-info-badges-wrapper">

                                            <span class="badge badge-ecommerce text-bg-danger">27% OFF</span>
                                        </div>

                                        <div class="addtocart-btn-wrapper">
                                            <a href="shop-cart.html" class="text-decoration-none addtocart-btn"
                                                title="Add to Cart">
                                                <i class="icons icon-bag"></i>
                                            </a>
                                        </div>

                                        <div class="countdown-offer-wrapper">
                                            <div class="text-color-light text-2" data-plugin-countdown
                                                data-plugin-options="{'textDay': 'DAYS', 'textHour': 'HRS', 'textMin': 'MIN', 'textSec': 'SEC', 'date': '2025/01/01 12:00:00', 'numberClass': 'text-color-light', 'wrapperClass': 'text-color-light', 'insertHTMLbefore': '<span>OFFER ENDS IN </span>', 'textDay': 'DAYS', 'textHour': ':', 'textMin': ':', 'textSec': '', 'uppercase': true}">
                                            </div>
                                        </div>

                                        <a href="ajax/shop-product-quick-view.html"
                                            class="quick-view text-uppercase font-weight-semibold text-2">
                                            QUICK VIEW
                                        </a>
                                        <a href="shop-product-sidebar-left.html">
                                            <div class="product-thumb-info-image">
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-3.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Workout</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$40,00</span>
                                        <span class="amount">$30,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-4.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Luxury Bag</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                        <span class="amount">$79,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-5.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Styled Bag</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$199,00</span>
                                        <span class="amount">$119,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-6.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">hat</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Blue Hat</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$299,00</span>
                                        <span class="amount">$289,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-8.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">accessories</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Adventurer
                                                    Bag</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$99,00</span>
                                        <span class="amount">$79,00</span>
                                    </p>
                                </div>

                                <div class="product mb-0">
                                    <div class="product-thumb-info border-0 mb-3">

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
                                                <img alt="" class="img-fluid"
                                                    src="img/products/product-grey-9.jpg">

                                            </div>
                                        </a>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div>
                                            <a href="#"
                                                class="d-block text-uppercase text-decoration-none text-color-default text-color-hover-primary line-height-1 text-0 mb-1">sports</a>
                                            <h3
                                                class="text-3-5 font-weight-medium font-alternative text-transform-none line-height-3 mb-0">
                                                <a href="shop-product-sidebar-right.html"
                                                    class="text-color-dark text-color-hover-primary">Baseball Ball</a>
                                            </h3>
                                        </div>
                                        <a href="#"
                                            class="text-decoration-none text-color-default text-color-hover-dark text-4"><i
                                                class="far fa-heart"></i></a>
                                    </div>
                                    <div title="Rated 5 out of 5">
                                        <input type="text" class="d-none" value="5" title=""
                                            data-plugin-star-rating
                                            data-plugin-options="{'displayOnly': true, 'color': 'default', 'size':'xs'}">
                                    </div>
                                    <p class="price text-5 mb-3">
                                        <span class="sale text-color-dark font-weight-semi-bold">$399,00</span>
                                        <span class="amount">$299,00</span>
                                    </p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
