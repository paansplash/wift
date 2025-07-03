@extends('layouts.shop.app')

@section('content')
    <div role="main" class="main shop pt-4">

        <div class="container">
            @include('user.components.breadcrumbs')
            @include('user.components.wishlist-items-form')
        </div>
    </div>
@endsection
