@extends('layouts.shop.app')

@section('content')
<div role="main" class="main shop pb-4">
    <section class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
        <div class="custom-page-header-1-wrapper overflow-hidden">
            <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">
                <div class="container py-3 my-3">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <div class="overflow-hidden mb-2">
                                <h1 class="font-weight-black text-12 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">
                                    {{ $wishlist->title }}
                                </h1>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center">
                            <div class="overflow-hidden">
                                <p class="text-4 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                    Wishlist by {{ $user->name }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container py-4">
        <div class="row">
            @forelse($wishlist->wishlistItems as $item)
                <div class="col-md-4 mb-4">
                    <div class="card h-100">
                        <div class="card-header">
                            <h5 class="card-title mb-0">{{ $item->inventory->name }}</h5>
                        </div>
                        <div class="card-body">
                            <div class="text-center mb-3">
                                @if ($item->inventory->image)
                                    <img src="{{ asset('storage/' . $item->inventory->image) }}" class="img-fluid" style="max-height: 150px;" alt="{{ $item->inventory->name }}">
                                @else
                                    <img src="{{ asset('images/no-image.png') }}" class="img-fluid" style="max-height: 150px;" alt="No Image">
                                @endif
                            </div>
                            <p><strong>Price:</strong> ${{ number_format($item->inventory->price, 2) }}</p>
                            <p><strong>Category:</strong> {{ $item->inventory->subcategory->name }}</p>
                            <p><strong>Status:</strong> 
                                <span class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">
                                    {{ $item->status->name }}
                                </span>
                            </p>
                        </div>
                        <div class="card-footer">
                            @if($item->status_id != 3)
                                <form action="{{ route('public.wishlist.buy', $item->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-primary btn-block">
                                        <i class="fas fa-gift mr-2"></i> Mark as Purchased
                                    </button>
                                </form>
                            @else
                                <button class="btn btn-success btn-block" disabled>
                                    <i class="fas fa-check mr-2"></i> Already Purchased
                                </button>
                            @endif
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-12 text-center">
                    <p>No items in this wishlist</p>
                </div>
            @endforelse
        </div>
    </div>
</div>
@endsection 