@extends('layouts.user.app')

@section('content')
<div role="main" class="main shop pb-4">
    <section class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
        <div class="custom-page-header-1-wrapper overflow-hidden">
            <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="800">
                <div class="container py-3 my-3">
                    <div class="row">
                        <div class="col-md-12 align-self-center p-static text-center">
                            <div class="overflow-hidden mb-2">
                                <h1 class="font-weight-black text-12 mb-0 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1200">My Dashboard</h1>
                            </div>
                        </div>
                        <div class="col-md-12 align-self-center">
                            <div class="overflow-hidden">
                                <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                    <li class="text-transform-none active">Dashboard</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="custom-page-wrapper pt-5 pb-1">
        <div class="container container-xl-custom pb-5 mb-5">
            <!-- Progress Overview -->
            <div class="row mb-4">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wishlist Progress</h5>
                            @php
                                $totalItems = $wishlist->wishlistItems->count();
                                $completedItems = $wishlist->wishlistItems->where('status_id', 3)->count();
                                $progressPercentage = $totalItems > 0 ? ($completedItems / $totalItems) * 100 : 0;
                            @endphp
                            <div class="progress mb-3" style="height: 25px;">
                                <div class="progress-bar bg-success" role="progressbar" 
                                     style="width: {{ $progressPercentage }}%;" 
                                     aria-valuenow="{{ $progressPercentage }}" 
                                     aria-valuemin="0" 
                                     aria-valuemax="100">
                                    {{ number_format($progressPercentage, 1) }}%
                                </div>
                            </div>
                            <p class="mb-0">
                                <strong>{{ $completedItems }}</strong> of <strong>{{ $totalItems }}</strong> items completed
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Quick Actions</h5>
                            <a href="{{ route('user.wishlistItems.index') }}" class="btn btn-primary btn-block mb-2">
                                <i class="fas fa-plus mr-2"></i> Add Items to Wishlist
                            </a>
                            <a href="{{ route('user.wishlists.index') }}" class="btn btn-outline-primary btn-block">
                                <i class="fas fa-list mr-2"></i> View All Wishlists
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Wishlist Items -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">My Wishlist Items</h5>
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Item</th>
                                            <th>Price</th>
                                            <th>Category</th>
                                            <th>Status</th>
                                            <th>Added Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($wishlist->wishlistItems as $item)
                                            <tr>
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        @if($item->inventory->image)
                                                            <img src="{{ asset('storage/' . $item->inventory->image) }}" 
                                                                 class="img-fluid mr-3" 
                                                                 style="max-width: 50px;" 
                                                                 alt="{{ $item->inventory->name }}">
                                                        @else
                                                            <img src="{{ asset('images/no-image.png') }}" 
                                                                 class="img-fluid mr-3" 
                                                                 style="max-width: 50px;" 
                                                                 alt="No Image">
                                                        @endif
                                                        <span>{{ $item->inventory->name }}</span>
                                                    </div>
                                                </td>
                                                <td>${{ number_format($item->inventory->price, 2) }}</td>
                                                <td>{{ $item->inventory->subcategory->name }}</td>
                                                <td>
                                                    <span class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">
                                                        {{ $item->status->name }}
                                                    </span>
                                                </td>
                                                <td>{{ $item->created_at->format('M d, Y') }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button type="button" 
                                                                class="btn btn-sm btn-outline-primary" 
                                                                data-toggle="modal" 
                                                                data-target="#itemModal{{ $item->id }}">
                                                            <i class="fas fa-eye"></i>
                                                        </button>
                                                        <form action="{{ route('user.wishlistItems.destroy', $item->id) }}" 
                                                              method="POST" 
                                                              class="d-inline">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" 
                                                                    class="btn btn-sm btn-outline-danger" 
                                                                    onclick="return confirm('Are you sure you want to remove this item?')">
                                                                <i class="fas fa-trash"></i>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- Item Detail Modal -->
                                            <div class="modal fade" id="itemModal{{ $item->id }}" tabindex="-1" role="dialog" aria-labelledby="itemModalLabel{{ $item->id }}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="itemModalLabel{{ $item->id }}">Item Details</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="text-center mb-4">
                                                                @if($item->inventory->image)
                                                                    <img src="{{ asset('storage/' . $item->inventory->image) }}" 
                                                                         class="img-fluid" 
                                                                         style="max-height: 200px;" 
                                                                         alt="{{ $item->inventory->name }}">
                                                                @else
                                                                    <img src="{{ asset('images/no-image.png') }}" 
                                                                         class="img-fluid" 
                                                                         style="max-height: 200px;" 
                                                                         alt="No Image">
                                                                @endif
                                                            </div>
                                                            <h5>{{ $item->inventory->name }}</h5>
                                                            <p><strong>Price:</strong> ${{ number_format($item->inventory->price, 2) }}</p>
                                                            <p><strong>Category:</strong> {{ $item->inventory->subcategory->name }}</p>
                                                            <p><strong>Status:</strong> {{ $item->status->name }}</p>
                                                            <p><strong>Added Date:</strong> {{ $item->created_at->format('M d, Y') }}</p>
                                                            <p><strong>Last Updated:</strong> {{ $item->updated_at->format('M d, Y') }}</p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @empty
                                            <tr>
                                                <td colspan="6" class="text-center">No items in your wishlist</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 