@extends('layouts.shop.app')

@section('content')
<div role="main" class="main shop pb-4">

    <div class="container">
        @include('user.components.breadcrumbs')

        <div class="container container-xl-custom pb-5 mb-5">
            <!-- Progress Overview -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title mb-3">Wishlist Progress</h5>
                            <div class="progress mb-3" style="height: 25px;">
                                <div class="progress-bar {{ $progressPercentage == 0 ? 'bg-secondary' : 'bg-success' }}"
                                    role="progressbar"
                                    style="width: {{ max($progressPercentage, 1) }}%; min-width: 30px;"
                                    aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                    {{ number_format($progressPercentage, 1) }}%
                                </div>
                            </div>
                            <p class="mb-0">
                                <strong>{{ $completedItems }}</strong> of <strong>{{ $totalItems }}</strong> items
                                completed
                            </p>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Wishlist Items -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 d-flex justify-content-end mb-3">
                                @if ($wishlist)
                                <form action="{{ route('user.wishlistItems.index') }}" method="GET"
                                        class="d-inline">
                                        <input type="hidden" name="wishlist_id"
                                            value="{{ request('wishlist_id', $wishlist->id ?? null) }}">
                                        <button type="submit" class="btn btn-primary me-2">
                                            <i class="fas fa-plus mr-2"></i> Add Items to Wishlist
                                        </button>
                                    </form>
                                    <button onclick="copyWishlistLink()" class="btn btn-secondary">
                                        <i class="fas fa-share-alt mr-2"></i> Share
                                    </button>
                                    @endif
                                </div>
                            </div>
                            @if ($wishlist)
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
                                                <img src="{{ asset('storage/' . $item->inventory->image) }}"
                                                    class="img-fluid" style="max-height: 150px;"
                                                    alt="{{ $item->inventory->name }}">
                                                @else
                                                <img src="{{ asset('images/no-image.png') }}"
                                                    class="img-fluid" style="max-height: 150px;"
                                                    alt="No Image">
                                                @endif
                                            </div>
                                            <p><strong>Price:</strong>
                                                ${{ number_format($item->inventory->price, 2) }}</p>
                                            <p><strong>Category:</strong>
                                                {{ $item->inventory->subcategory->name }}
                                            </p>
                                            <p><strong>Status:</strong> <span
                                                    class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">{{ $item->status->name }}</span>
                                            </p>
                                            <p><strong>Added Date:</strong>
                                                {{ $item->created_at->format('M d, Y') }}
                                            </p>
                                        </div>
                                        <div class="card-footer">
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-sm btn-outline-primary"
                                                    data-toggle="modal"
                                                    data-target="#itemModal{{ $item->id }}">
                                                    <i class="fas fa-eye"></i> View Details
                                                </button>
                                                <form
                                                    action="{{ route('user.wishlistItems.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger"
                                                        onclick="return confirm('Are you sure you want to remove this item?')">
                                                        <i class="fas fa-trash"></i> Remove
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @empty
                                <div class="col-12 text-center">
                                    <p>No items in your wishlist</p>
                                </div>
                                @endforelse
                            </div>
                            @else
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="text-danger">Wishlist not found. Please create a new
                                        <a class="btn btn-primary custom-btn-style-1 font-weight-bold"
                                            href="{{ route('user.wishers.index') }}"> wishlist.</a>
                                    </p>
                                </div>
                            </div>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
@if ($wishlist)
<script>
    function copyWishlistLink() {
        const wishlistUrl =
            "{{ route('public.wishlist.show', ['name' => $user->name, 'title' => $wishlist->title]) }}";

        const tempInput = document.createElement('input');
        tempInput.value = wishlistUrl;
        document.body.appendChild(tempInput);

        tempInput.select();
        document.execCommand('copy');

        document.body.removeChild(tempInput);

        alert('Wishlist link copied to clipboard!');
    }
</script>
@else
<script>
    function copyWishlistLink() {
        alert('Cannot share: Wishlist not available.');
    }
</script>
@endif
@endpush