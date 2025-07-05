@extends('layouts.shop.app')
@section('content')
<div class="container text-center py-5">
    <h1 class="text-danger">Payment Failed ❌</h1>
    <p>Sorry, {{ $order->name }}. Something went wrong with your payment.</p>
    <a href="{{ url()->previous() }}" class="btn btn-dark mt-3">Try Again</a>
</div>
@endsection