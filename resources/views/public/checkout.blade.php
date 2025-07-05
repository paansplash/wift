@extends('layouts.shop.app')

@section('content')
<div role="main" class="main shop pb-4">
    <div class="container">
        <div class="row">
            <div class="col">
                <ul class="breadcrumb breadcrumb-dividers-no-opacity font-weight-bold text-6 justify-content-center my-5">
                    <li class="text-transform-none me-2">
                        <a href="{{ route('shop.cart') }}" class="text-decoration-none text-color-dark text-color-hover-primary">Shopping Cart</a>
                    </li>
                    <li class="text-transform-none text-color-dark me-2">
                        <a href="#" class="text-decoration-none text-color-primary">Checkout</a>
                    </li>
                    <li class="text-transform-none text-color-grey-lighten">
                        <a href="#" class="text-decoration-none text-color-grey-lighten text-color-hover-primary">Order Complete</a>
                    </li>
                </ul>
            </div>
        </div>

        <form action="{{ route('public.wishlist.processCheckout', $item->id) }}" method="POST">
            @csrf {{-- Don't forget CSRF --}}
            <div class="row">
                <div class="col-lg-7 mb-4 mb-lg-0">

                    <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Say Your Wish</h2>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label">Name <span class="text-color-danger">*</span></label>
                            <input type="text" class="form-control h-auto py-2" name="name" value="{{ old('name') }}" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col">
                            <label class="form-label">Order Notes</label>
                            <textarea class="form-control h-auto py-2" name="note" rows="5" placeholder="Notes about your order, e.g. special requests">{{ old('note') }}</textarea>
                        </div>
                    </div>

                </div>

                <div class="col-lg-5 position-relative">
                    <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                        <div class="card-body">
                            <h4 class="font-weight-bold text-uppercase text-4 mb-3">Your Order</h4>
                            <table class="shop_table cart-totals mb-3">
                                <tbody>
                                    <tr>
                                        <td colspan="2" class="border-top-0">
                                            <strong class="text-color-dark">Product</strong>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="border-top-0 pt-0">
                                            <strong class="d-block text-color-dark line-height-1 font-weight-semibold">
                                                {{ $item->inventory->name }} <span class="product-qty">x1</span>
                                            </strong>
                                            <span class="text-1">{{ $item->inventory->subcategory->name ?? 'Product' }}</span>
                                        </td>
                                        <td class="border-top-0 text-end align-top pt-0">
                                            <span class="amount font-weight-medium text-color-grey">${{ number_format($item->inventory->price, 2) }}</span>
                                        </td>
                                    </tr>

                                    <tr class="cart-subtotal">
                                        <td class="border-top-0">
                                            <strong class="text-color-dark">Subtotal</strong>
                                        </td>
                                        <td class="border-top-0 text-end">
                                            <strong><span class="amount font-weight-medium">${{ number_format($item->inventory->price, 2) }}</span></strong>
                                        </td>
                                    </tr>
                                    
                                    <tr class="total">
                                        <td>
                                            <strong class="text-color-dark text-3-5">Total</strong>
                                        </td>
                                        <td class="text-end">
                                            <strong class="text-color-dark"><span class="amount text-color-dark text-5">${{ number_format($item->inventory->price, 2) }}</span></strong>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <button type="submit" class="btn btn-dark btn-modern w-100 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">
                                Place Order <i class="fas fa-arrow-right ms-2"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

    </div>
</div>
@endsection
