@extends('layouts.user.app')

@section('content')
    <div role="main" class="main shop pb-4">
        <section
            class="custom-page-header-1 page-header page-header-modern page-header-lg bg-primary border-0 z-index-1 my-0">
            <div class="custom-page-header-1-wrapper overflow-hidden">
                <div class="custom-bg-grey-1 py-5 appear-animation" data-appear-animation="maskUp"
                    data-appear-animation-delay="800">
                    <div class="container py-3 my-3">
                        <div class="row">
                            <div class="col-md-12 align-self-center p-static text-center">
                                <div class="overflow-hidden mb-2">
                                    <h1 class="font-weight-black text-12 mb-0 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">My Dashboard</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
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
            <div class="spacer py-3 my-3"></div>

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
                                        <a href="{{ route('user.wishlistItems.index') }}" class="btn btn-primary me-2">
                                            <i class="fas fa-plus mr-2"></i> Add Items to Wishlist
                                        </a>
                                        <button onclick="copyWishlistLink()" class="btn btn-secondary">
                                            <i class="fas fa-share-alt mr-2"></i> Share
                                        </button>
                                    </div>
                                </div>
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
                                                            <img src="{{ asset('images/no-image.png') }}" class="img-fluid"
                                                                style="max-height: 150px;" alt="No Image">
                                                        @endif
                                                    </div>
                                                    <p><strong>Price:</strong>
                                                        ${{ number_format($item->inventory->price, 2) }}</p>
                                                    <p><strong>Category:</strong> {{ $item->inventory->subcategory->name }}
                                                    </p>
                                                    <p><strong>Status:</strong> <span
                                                            class="badge badge-{{ $item->status_id == 3 ? 'success' : 'warning' }}">{{ $item->status->name }}</span>
                                                    </p>
                                                    <p><strong>Added Date:</strong>
                                                        {{ $item->created_at->format('M d, Y') }}</p>
                                                </div>
                                                <div class="card-footer">
                                                    <div class="btn-group">
                                                        <button type="button" class="btn btn-sm btn-outline-primary"
                                                            data-toggle="modal"
                                                            data-target="#itemModal{{ $item->id }}">
                                                            <i class="fas fa-eye"></i> View Details
                                                        </button>
                                                        <form action="{{ route('user.wishlistItems.destroy', $item->id) }}"
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
function copyWishlistLink() {
    const wishlistUrl = "{{ route('public.wishlist.show', ['name' => $user->name, 'title' => $wishlist->title]) }}";
    
    // Create a temporary input element
    const tempInput = document.createElement('input');
    tempInput.value = wishlistUrl;
    document.body.appendChild(tempInput);
    
    // Select and copy the text
    tempInput.select();
    document.execCommand('copy');
    
    // Remove the temporary input
    document.body.removeChild(tempInput);
    
    // Show a success message
    alert('Wishlist link copied to clipboard!');
}
</script>
@endpush
