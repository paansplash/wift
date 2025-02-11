<!-- Wishlist Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="wishlist_id">Wishlist</label>
    <select class="form-control" id="wishlist_id" name="wishlist_id">
        <option value=''>- Choose a wishlist -</option>
        @foreach ($wishlists as $wishlist)
            <option {{ $wishlistItem->wishlist_id ?? old('wishlist_id') == $wishlist->id ? 'selected' : '' }}
                value="{{ $wishlist->id }}">
                {{ $wishlist->title }}</option>
        @endforeach
    </select>
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="inventory_id">Inventory</label>
    <select class="form-control" id="inventory_id" name="inventory_id">
        <option value=''>- Choose an Inventory -</option>
        @foreach ($inventories as $inventory)
            <option {{ $wishlistItem->inventory_id ?? old('inventory_id') == $inventory->id ? 'selected' : '' }}
                value="{{ $inventory->id }}">
                {{ $inventory->name }}</option>
        @endforeach
    </select>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <select class="form-control" id="status_id" name="status_id">
        <option value=''>- Choose a status -</option>
        @foreach ($statuses as $status)
            <option {{ $wishlistItem->status_id ?? old('status_id') == $status->id ? 'selected' : '' }}
                value="{{ $status->id }}">
                {{ $status->name }}</option>
        @endforeach
    </select>
</div>
