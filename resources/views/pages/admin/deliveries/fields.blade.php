<!-- Order Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="order_id">Order</label>
    <input type="number" id="order_id" name="order_id" value="{{ old('order_id', $delivery->order_id ?? '') }}"
        class="form-control" required>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <input type="number" id="status_id" name="status_id" value="{{ old('status_id', $delivery->status_id ?? '') }}"
        class="form-control" required>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="user_id">User</label>
    <input type="number" id="user_id" name="user_id" value="{{ old('user_id', $delivery->user_id ?? '') }}"
        class="form-control" required>
</div>
