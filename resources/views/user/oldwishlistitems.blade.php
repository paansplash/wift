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
                                        data-appear-animation="maskUp" data-appear-animation-delay="1200">Pick Your Wishlist
                                        Items</h1>
                                </div>
                            </div>
                            <div class="col-md-12 align-self-center">
                                <div class="overflow-hidden">
                                    <ul class="custom-breadcrumb-style-1 breadcrumb breadcrumb-light custom-font-secondary d-block text-center custom-ls-1 text-5 appear-animation"
                                        data-appear-animation="maskUp" data-appear-animation-delay="1450">
                                        <li class="text-transform-none"><a href="{{ route('user.dashboard.index') }}"
                                                class="text-decoration-none">User</a></li>
                                        <li class="text-transform-none active">Wishlist Items</li>
                                    </ul>
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
                <div class="row">
                    <!-- Sidebar Categories -->
                    <div class="col-lg-3 mb-4">
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Categories</h5>
                                <form action="{{ route('user.wishlistItems.index') }}" method="get" id="filterForm">
                                    <input type="hidden" name="search" value="{{ request('search') }}">
                                    <input type="hidden" name="sort" value="{{ request('sort') }}">

                                    <div class="accordion" id="categoryAccordion">
                                        @foreach ($categories as $category)
                                            <div class="card border-0 mb-2">
                                                <div class="card-header bg-light p-0" id="heading{{ $category->id }}">
                                                    <div class="d-flex align-items-center">
                                                        <div class="custom-control custom-checkbox mr-2">
                                                            <input type="checkbox"
                                                                class="custom-control-input category-checkbox"
                                                                id="category{{ $category->id }}" name="category"
                                                                value="{{ $category->id }}"
                                                                {{ request('category') == $category->id ? 'checked' : '' }}>
                                                            <label class="custom-control-label"
                                                                for="category{{ $category->id }}"></label>
                                                        </div>
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link text-dark text-decoration-none w-100 text-left"
                                                                type="button" data-toggle="collapse"
                                                                data-target="#collapse{{ $category->id }}"
                                                                aria-expanded="{{ request('category') == $category->id ? 'true' : 'false' }}"
                                                                aria-controls="collapse{{ $category->id }}">
                                                                {{ $category->name }}
                                                            </button>
                                                        </h2>
                                                    </div>
                                                </div>
                                                <div id="collapse{{ $category->id }}"
                                                    class="collapse {{ request('category') == $category->id ? 'show' : '' }}"
                                                    aria-labelledby="heading{{ $category->id }}"
                                                    data-parent="#categoryAccordion">
                                                    <div class="card-body pt-0">
                                                        <div class="list-group list-group-flush">
                                                            @foreach ($subcategories->where('category_id', $category->id) as $subcategory)
                                                                <div class="list-group-item border-0 px-0">
                                                                    <div class="custom-control custom-checkbox">
                                                                        <input type="checkbox"
                                                                            class="custom-control-input subcategory-checkbox"
                                                                            id="subcategory{{ $subcategory->id }}"
                                                                            name="subcategory"
                                                                            value="{{ $subcategory->id }}"
                                                                            {{ request('subcategory') == $subcategory->id ? 'checked' : '' }}>
                                                                        <label class="custom-control-label"
                                                                            for="subcategory{{ $subcategory->id }}">
                                                                            {{ $subcategory->name }}
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Sort Options -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h5 class="card-title mb-3">Sort By</h5>
                                <div class="list-group list-group-flush">
                                    <a href="#"
                                        class="list-group-item list-group-item-action {{ request('sort') == 'price_asc' ? 'active' : '' }}"
                                        onclick="event.preventDefault(); document.getElementById('sort').value = 'price_asc'; document.getElementById('filterForm').submit();">
                                        Price: Low to High
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action {{ request('sort') == 'price_desc' ? 'active' : '' }}"
                                        onclick="event.preventDefault(); document.getElementById('sort').value = 'price_desc'; document.getElementById('filterForm').submit();">
                                        Price: High to Low
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action {{ request('sort') == 'name_asc' ? 'active' : '' }}"
                                        onclick="event.preventDefault(); document.getElementById('sort').value = 'name_asc'; document.getElementById('filterForm').submit();">
                                        Name: A to Z
                                    </a>
                                    <a href="#"
                                        class="list-group-item list-group-item-action {{ request('sort') == 'name_desc' ? 'active' : '' }}"
                                        onclick="event.preventDefault(); document.getElementById('sort').value = 'name_desc'; document.getElementById('filterForm').submit();">
                                        Name: Z to A
                                    </a>
                                </div>
                                <input type="hidden" name="sort" id="sort" value="{{ request('sort') }}">
                            </div>
                        </div>

                        <!-- Wishlist Button -->
                        <button type="button" class="btn btn-primary btn-block mb-4" data-toggle="modal"
                            data-target="#wishlistModal">
                            <i class="fas fa-heart mr-2"></i> View My Wishlist ({{ $wishlist->wishlistItems->count() }})
                        </button>
                    </div>

                    <!-- Main Content -->
                    <div class="col-lg-9">
                        <!-- Search Bar -->
                        <div class="mb-4">
                            <form action="{{ route('user.wishlistItems.index') }}" method="get" id="searchForm">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="search"
                                        value="{{ request('search') }}" placeholder="Search items...">
                                    <input type="hidden" name="category" value="{{ request('category') }}">
                                    <input type="hidden" name="subcategory" value="{{ request('subcategory') }}">
                                    <input type="hidden" name="sort" value="{{ request('sort') }}">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="submit">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <!-- Inventory Grid -->
                        <div class="row">
                            @forelse($inventories as $inventory)
                                <div class="col-12 col-sm-6 col-lg-4 mb-4">
                                    <div class="card h-100">
                                        @if ($inventory->image)
                                            <img src="{{ asset('storage/' . $inventory->image) }}" class="card-img-top"
                                                alt="{{ $inventory->name }}" style="height: 200px; object-fit: cover;">
                                        @else
                                            <img src="{{ asset('images/no-image.png') }}" class="card-img-top"
                                                alt="No Image" style="height: 200px; object-fit: cover;">
                                        @endif
                                        <div class="card-body d-flex flex-column">
                                            <h5 class="card-title">{{ $inventory->name }}</h5>
                                            <p class="card-text flex-grow-1">
                                                <strong>Price:</strong> ${{ number_format($inventory->price, 2) }}<br>
                                                <strong>Category:</strong> {{ $inventory->subcategory->name }}<br>
                                                <strong>Available:</strong> {{ $inventory->quantity }}
                                            </p>
                                            <form action="{{ route('user.wishlistItems.store') }}" method="POST"
                                                class="wishlist-form mt-auto">
                                                @csrf
                                                <input type="hidden" name="wishlist_id" value="{{ $wishlist->id }}">
                                                <input type="hidden" name="inventory_id" value="{{ $inventory->id }}">
                                                <button type="submit"
                                                    class="btn btn-primary btn-block {{ $wishlist->wishlistItems->contains('inventory_id', $inventory->id) ? 'btn-success' : '' }}">
                                                    <i class="fas fa-heart mr-2"></i>
                                                    {{ $wishlist->wishlistItems->contains('inventory_id', $inventory->id) ? 'Added to Wishlist' : 'Add to Wishlist' }}
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-12">
                                    <div class="alert alert-info">
                                        No items found. Please try different search criteria.
                                    </div>
                                </div>
                            @endforelse
                        </div>

                        <!-- Pagination -->
                        <div class="row mt-4">
                            <div class="col-12">
                                {{ $inventories->appends(request()->query())->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Wishlist Modal -->
    <div class="modal fade" id="wishlistModal" tabindex="-1" role="dialog" aria-labelledby="wishlistModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="wishlistModalLabel">My Wishlist</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Price</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($wishlist->wishlistItems as $item)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if ($item->inventory->image)
                                                    <img src="{{ asset('storage/' . $item->inventory->image) }}"
                                                        class="img-fluid mr-3" style="max-width: 50px;"
                                                        alt="{{ $item->inventory->name }}">
                                                @else
                                                    <img src="{{ asset('images/no-image.png') }}" class="img-fluid mr-3"
                                                        style="max-width: 50px;" alt="No Image">
                                                @endif
                                                <span>{{ $item->inventory->name }}</span>
                                            </div>
                                        </td>
                                        <td>${{ number_format($item->inventory->price, 2) }}</td>
                                        <td>{{ $item->inventory->subcategory->name }}</td>
                                        <td>{{ $item->status->name }}</td>
                                        <td>
                                            <form action="{{ route('user.wishlistItems.destroy', $item->id) }}"
                                                method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No items in your wishlist</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="{{ route('user.wishlists.index') }}" class="btn btn-primary">View Full Wishlist</a>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
    // Update button state after adding to wishlist
    document.querySelectorAll('.wishlist-form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            const button = this.querySelector('button');
            const formData = new FormData(this);

            fetch(this.action, {
                    method: 'POST',
                    body: formData,
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json'
                    },
                    credentials: 'same-origin'
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        button.classList.remove('btn-primary');
                        button.classList.add('btn-success');
                        button.innerHTML = '<i class="fas fa-heart mr-2"></i> Added to Wishlist';

                        // Update wishlist count in the button
                        const wishlistButton = document.querySelector('[data-target="#wishlistModal"]');
                        const match = wishlistButton.textContent.match(/\d+/);
                        const currentCount = match ? parseInt(match[0]) : 0;
                        wishlistButton.innerHTML =
                            `<i class="fas fa-heart mr-2"></i> View My Wishlist (${currentCount + 1})`;
                    } else {
                        alert(data.message || 'An unexpected error occurred. Please try again.');
                    }
                })
                .catch(error => {
                    console.error('Fetch error:', error);
                    alert('An error occurred while adding to wishlist. Please try again.');
                });
        });
    });

    // Auto-submit on checkbox change
    document.querySelectorAll('.category-checkbox, .subcategory-checkbox').forEach(checkbox => {
        checkbox.addEventListener('change', function () {
            document.getElementById('filterForm').submit();
        });
    });
</script>
@endpush
