@extends('layouts.shop.app')
@section('content')
<div class="container text-center py-5">
    <h1 class="text-success">Payment Successful 🎉</h1>
    <p>Thank you, {{ $order->name }}. Your gift order is now complete.</p>
    <a href="{{ route('public.wishlist.show', [$order->wishlist->user->name, $order->wishlist->title]) }}" class="btn btn-primary mt-3">Back to Wishlist</a>
</div>
@endsection