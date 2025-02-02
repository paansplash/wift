@extends('layouts.user.app')

@section('content')
    <div role="main" class="main">
        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary-100 border-0 z-index-1 my-0">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200"
                                        style="color: #f586ac !important">Insert Your Details</h1>
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
                                YOUR PLACE</h2>
                        </div>
                        <div class="overflow-hidden mb-2">
                            <h2 class="text-color-default positive-ls-3 line-height-3 text-4 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1500">WE'RE HERE TO HELP
                            </h2>
                        </div>
                        <div class="overflow-hidden mb-4">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-10 line-height-2 mb-0 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="1700">Get Your Project Done
                            </h3>
                        </div>
                        <img src="assets/img/demos/architecture-2/divider.jpg"
                            class="img-fluid opacity-5 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorterPlus" data-appear-animation-delay="1900" alt="" />
                        <p class="custom-font-tertiary text-5 line-height-4 mb-4 mt-2 appear-animation"
                            data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2100">Lorem ipsum dolor
                            sit
                            amet, consectetur adipiscing elit. Sed imperdiet libero id nisi euismod, sed porta est
                            consectetur.</p>
                        <p class="text-3-5 pb-2 mb-5 appear-animation" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="2300">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                            sed
                            do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
                        <div class="row">
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2500">
                                <h4 class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mb-0">
                                    Work Inquiries</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(800)
                                    123-4567</a>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Careers & Press</h4>
                                <a href="tel:1234567890"
                                    class="text-decoration-none text-color-default text-color-hover-primary">(800)
                                    123-4567</a>
                            </div>
                            <div class="col-lg-4 appear-animation" data-appear-animation="fadeInUpShorter"
                                data-appear-animation-delay="2700">
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mt-lg-0 mb-0">
                                    Address</h4>
                                <p class="mb-0">12345 Porto Blvd.<br>Suite 1500<br>Los Angeles, California 90000</p>
                                <h4
                                    class="alternative-font-4 text-color-dark font-weight-bold line-height-3 text-3-5 mt-4 mb-0">
                                    Email</h4>
                                <a href="mailto:mail@example.com"
                                    class="text-decoration-none text-color-default text-color-hover-primary">mail@example.com</a>
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
                    <div class="col-lg-6">
                        <div class="overflow-hidden mb-4 mt-4">
                            <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
                                data-appear-animation="maskUp" data-appear-animation-delay="2600">Send a Message</h3>
                        </div>
                        <form class="contact-form custom-form-style-1 appear-animation"
                            action="{{ route('wishers.store') }}" method="post" data-appear-animation="fadeInUpShorter"
                            data-appear-animation-delay="2800">
                            @csrf

                            <div class="contact-form-success alert alert-success d-none mt-4">
                                <strong>Success!</strong> Details saved.
                            </div>

                            <div class="contact-form-error alert alert-danger d-none mt-4">
                                <strong>Error!</strong> There was an error saving your details.
                                <span class="mail-error-message text-1 d-block"></span>
                            </div>

                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" value="{{ auth()->user()->email }}"
                                        class="form-control border-radius-0" readonly>
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="name" value="{{ old('name') }}"
                                        class="form-control border-radius-0 @error('name') is-invalid @enderror" required
                                        maxlength="255" placeholder="Name *">
                                    @error('name')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="phone_no" value="{{ old('phone_no') }}"
                                        class="form-control border-radius-0 @error('phone_no') is-invalid @enderror"
                                        required maxlength="255" placeholder="Phone No *">
                                    @error('phone_no')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="addr1" value="{{ old('addr1') }}"
                                        class="form-control border-radius-0 @error('addr1') is-invalid @enderror" required
                                        maxlength="255" placeholder="Address Line 1 *">
                                    @error('addr1')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="addr2" value="{{ old('addr2') }}"
                                        class="form-control border-radius-0 @error('addr2') is-invalid @enderror"
                                        maxlength="255" placeholder="Address Line 2">
                                    @error('addr2')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="addr3" value="{{ old('addr3') }}"
                                        class="form-control border-radius-0 @error('addr3') is-invalid @enderror"
                                        maxlength="255" placeholder="Address Line 3">
                                    @error('addr3')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="postcode" value="{{ old('postcode') }}"
                                        class="form-control border-radius-0 @error('postcode') is-invalid @enderror"
                                        required maxlength="255" placeholder="Postcode *">
                                    @error('postcode')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="city" value="{{ old('city') }}"
                                        class="form-control border-radius-0 @error('city') is-invalid @enderror" required
                                        maxlength="255" placeholder="City *">
                                    @error('city')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-3">
                                    <input type="text" name="state" value="{{ old('state') }}"
                                        class="form-control border-radius-0 @error('state') is-invalid @enderror" required
                                        maxlength="255" placeholder="State *">
                                    @error('state')
                                        <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row">
                                <div class="form-group col mb-0">
                                    <button type="submit"
                                        class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3"
                                        data-loading-text="Loading...">SUBMIT</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
