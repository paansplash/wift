<!-- Order Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="order_id">Order</label>
    <input type="number" id="order_id" name="order_id" value="{{ old('order_id', $orderItem->order_id ?? '') }}" 
        class="form-control" required>
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="wishlist_item_id">Wishlist Item</label>
    <input type="number" id="wishlist_item_id" name="wishlist_item_id" value="{{ old('wishlist_item_id', $orderItem->wishlist_item_id ?? '') }}" 
        class="form-control" required>
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="price">Price</label>
    <input type="number" id="price" name="price" value="{{ old('price', $orderItem->price ?? '') }}" 
        class="form-control" required step="0.01">
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $orderItem->quantity ?? '') }}" 
        class="form-control">
</div>
