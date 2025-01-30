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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200" style="color: #f586ac !important">Register</h1>
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
                            <div class="card-body register-card-body">
                                <p class="login-box-msg">Register a new membership</p>
            
                                <form method="post" action="{{ route('register') }}">
                                    @csrf
            
                                    <div class="input-group mb-3">
                                        <input type="text" name="name"
                                            class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}"
                                            placeholder="Full name">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-user"></span></div>
                                        </div>
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" value="{{ old('email') }}"
                                            class="form-control @error('email') is-invalid @enderror" placeholder="Email">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-envelope"></span></div>
                                        </div>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="input-group mb-3">
                                        <input type="password" name="password"
                                            class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                                        </div>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
            
                                    <div class="input-group mb-3">
                                        <input type="password" name="password_confirmation" class="form-control"
                                            placeholder="Retype password">
                                        <div class="input-group-append">
                                            <div class="input-group-text"><span class="fas fa-lock"></span></div>
                                        </div>
                                    </div>
            
                                    <div class="row">
                                        <div class="col-8">
                                            <div class="icheck-primary">
                                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                                <label for="agreeTerms">
                                                    I agree to the <a href="#">terms</a>
                                                </label>
                                            </div>
                                        </div>
                                        <!-- /.col -->
                                        <div class="col-4">
                                            <button type="submit" class="btn btn-primary btn-block">Register</button>
                                        </div>
                                        <!-- /.col -->
                                    </div>
                                </form>
            
                                <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                            </div>
                            <!-- /.form-box -->
                        </div><!-- /.card -->
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection