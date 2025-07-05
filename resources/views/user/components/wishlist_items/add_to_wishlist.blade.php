<div class="addtocart-btn-wrapper">
    @if (array_key_exists($inventory->id, $wishlistItemsMap))
        {{-- Already in wishlist: show remove button --}}
        <form action="{{ route('user.wishlistItems.destroy', $wishlistItemsMap[$inventory->id]) }}"
            method="POST" class="d-inline"
            onsubmit="return confirm('Remove this item from wishlist?');">
            @csrf
            @method('DELETE')
            <button type="submit"
                class="btn btn-link text-decoration-none p-0 text-4 text-primary"
                title="Remove from Wishlist">
                <i class="fa fa-gift"></i>
            </button>
        </form>
    @else
        {{-- Not in wishlist: show add button --}}
        <form action="{{ route('user.wishlistItems.store') }}"
            method="POST" class="d-inline">
            @csrf
            <input type="hidden" name="inventory_id" value="{{ $inventory->id }}">
            <input type="hidden" name="wishlist_id" value="{{ request('wishlist_id', $wishlist->id ?? null) }}">
            <button type="submit"
                class="btn btn-link text-decoration-none p-0 text-4 text-color-default text-color-hover-dark"
                title="Add to Wishlist">
                <i class="fa fa-gift"></i>
            </button>
        </form>
    @endif
</div>