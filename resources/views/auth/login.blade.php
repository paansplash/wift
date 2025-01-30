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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200" style="color: #f586ac !important">Login</h1>
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
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body login-card-body">
                                <p class="login-box-msg">Sign in to start your session</p>

                                <form method="post" action="{{ url('/login') }}">
                                    @csrf

                                    <div class="input-group mb-3">
                                        <input type="email" name="email" value="{{ old('email') }}" placeholder="Email"
                                            class="form-control @error('email') is-invalid @enderror">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                        </div>
                                        @error('email')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="password" name="password" placeholder="Password"
                                            class="form-control @error('password') is-invalid @enderror">
                                        <div class="input-group-append">
                                            <div class="input-group-text">
                                                <span class="fas fa-lock"></span>
                                            </div>
                                        </div>
                                        @error('password')
                                            <span class="error invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>

                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="remember">
                                                <label for="remember">Remember Me</label>
                                            </div>
                                        </div>

                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary custom-btn-style-1 btn-block">Sign
                                                In</button>
                                        </div>

                                    </div>
                                </form>

                                <p class="mb-1">
                                    <a href="{{ route('password.request') }}">I forgot my password</a>
                                </p>
                                <p class="mb-0">
                                    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                                </p>
                            </div>
                            <!-- /.login-card-body -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
