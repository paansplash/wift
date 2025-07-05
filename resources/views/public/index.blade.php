@extends('layouts.shop.app')

@section('content')
    <div role="main" class="main shop pb-4">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-12">
                    <div class="masonry-loader masonry-loader-showing">
                        <div class="products product-thumb-info-list" data-plugin-masonry data-plugin-options="{'layoutMode': 'fitRows'}">
                
                            @forelse($wishlist->wishlistItems as $item)
                                <div class="row align-items-center mb-5">
                                    <div class="col-sm-4 mb-4 mb-sm-0">
                                        <div class="product mb-0">
                                            <div class="product-thumb-info border-0 mb-0">
                
                                                <div class="product-thumb-info-badges-wrapper">
                                                    <span class="badge badge-ecommerce text-bg-success">NEW</span>
                                                </div>
                
                                                <div class="addtocart-btn-wrapper">
                                                    <form action="{{ route('public.wishlist.buy', $item->id) }}" method="POST">
                                                        @csrf
                                                        <button type="submit" class="text-decoration-none addtocart-btn" title="Mark as Purchased">
                                                            <i class="fas fa-gift"></i>
                                                        </button>
                                                    </form>
                                                </div>
                
                                                <a href="#" class="quick-view text-uppercase font-weight-semibold text-2" data-bs-toggle="modal" data-bs-target="#quickViewModal{{ $item->inventory->id }}">
                                                    QUICK VIEW
                                                </a>
                
                                                <a href="#">
                                                    <div class="product-thumb-info-image">
                                                        @if ($item->inventory->image)
                                                            <img alt="{{ $item->inventory->name }}" class="img-fluid"
                                                                 src="{{ asset('storage/' . $item->inventory->image) }}">
                                                        @else
                                                            <img alt="No Image" class="img-fluid" src="{{ asset('images/no-image.png') }}">
                                                        @endif
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="summary entry-summary">
                                            <h2 class="mb-0 font-weight-bold text-7">
                                                <a href="#" class="text-color-dark text-color-hover-primary text-decoration-none">
                                                    {{ $item->inventory->name }}
                                                </a>
                                            </h2>
                
                                            <div class="pb-0 clearfix d-flex align-items-center mb-2">
                                                <div title="Rated 3 out of 5" class="float-start">
                                                    <input type="text" class="d-none" value="3" data-plugin-star-rating data-plugin-options="{'displayOnly': true, 'color': 'primary', 'size':'xs'}">
                                                </div>
                                                <div class="review-num">
                                                    <a href="#" class="text-decoration-none text-color-default text-color-hover-primary">
                                                        <span class="count text-color-inherit">(2</span> reviews)
                                                    </a>
                                                </div>
                                            </div>
                
                                            <div class="divider divider-small">
                                                <hr class="bg-color-grey-400">
                                            </div>
                
                                            <p class="price mb-3">
                                                <span class="sale text-color-dark">RM{{ number_format($item->inventory->price, 2) }}</span>
                                                <span class="amount">RM{{ number_format($item->inventory->price * 0.9, 2) }}</span>
                                            </p>
                
                                            <p class="text-3-5 mb-3">{{ $item->inventory->subcategory->name }}</p>
                
                                            <ul class="list list-unstyled text-2 mb-2">
                                                <li class="mb-0">
                                                    AVAILABILITY: 
                                                    <span class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">
                                                        {{ $item->status->name }}
                                                    </span>
                                                </li>
                                                <li class="mb-0">SKU: <strong class="text-color-dark">1234567890</strong></li>
                                            </ul>
                
                                            <div class="card-footer p-0 border-0 mt-3">
                                                @if ($item->status_id != 3)
                                                    <a href="{{ route('public.wishlist.checkout', $item->id) }}" class="btn btn-primary btn-block">
                                                        <i class="fas fa-gift mr-2"></i> Make Purchase
                                                    </a>
                                                @else
                                                    <button class="btn btn-success btn-block" disabled>
                                                        <i class="fas fa-check mr-2"></i> Already Purchased
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                
                                    <div class="col-12">
                                        <hr class="my-5">
                                    </div>
                
                                    <!-- Quick View Modal -->
                                    <div class="modal fade" id="quickViewModal{{ $item->inventory->id }}" tabindex="-1" aria-labelledby="quickViewModalLabel{{ $item->inventory->id }}" aria-hidden="true">
                                        <div class="modal-dialog modal-lg modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="quickViewModalLabel{{ $item->inventory->id }}">{{ $item->inventory->name }}</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body text-center">
                                                    @if ($item->inventory->image)
                                                        <img src="{{ asset('storage/' . $item->inventory->image) }}" alt="{{ $item->inventory->name }}" class="img-fluid mb-3" style="max-height: 400px;">
                                                    @else
                                                        <img src="{{ asset('images/no-image.png') }}" alt="No image" class="img-fluid mb-3">
                                                    @endif
                                                    <p class="text-muted">{{ $item->inventory->subcategory->category->name }} - {{ $item->inventory->subcategory->name }}</p>
                                                    <p class="fw-bold">RM {{ number_format($item->inventory->price, 2) }}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                
                                </div>
                            @empty
                                <div class="col-12 text-center">
                                    <p>No items in this wishlist.</p>
                                </div>
                            @endforelse
                
                        </div>
                
                        <div class="row">
                            <div class="col">
                                <ul class="pagination float-end">
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-left"></i></a></li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#"><i class="fas fa-angle-right"></i></a></li>
                                </ul>
                            </div>
                        </div>
                
                    </div>
                </div>
                
            </div>
        </div>

    </div>
    </div>
@endsection
