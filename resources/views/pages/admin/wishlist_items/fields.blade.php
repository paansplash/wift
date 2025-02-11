<!-- Wishlist Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="wishlist_id">Wishlist</label>
    <input type="number" id="wishlist_id" name="wishlist_id" value="{{ old('wishlist_id', $wishlistItem->wishlist_id ?? '') }}" class="form-control" required>
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="inventory_id">Inventory</label>
    <input type="number" id="inventory_id" name="inventory_id" value="{{ old('inventory_id', $wishlistItem->inventory_id ?? '') }}" class="form-control" required>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <input type="number" id="status_id" name="status_id" value="{{ old('status_id', $wishlistItem->status_id ?? '') }}" class="form-control">
</div>
