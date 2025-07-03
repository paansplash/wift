@extends('layouts.shop.app')

@section('content')
    <div role="main" class="main">

        <div class="container">
            @include('user.components.breadcrumbs')
        </div>

        <div class="custom-page-wrapper pt-5 pb-1">
            <div class="container container-xl-custom pb-5 mb-5">
                <div class="row pb-3">
                    @include('user.components.wisher-form')
                </div>
            </div>
        </div>
    </div>
@endsection
