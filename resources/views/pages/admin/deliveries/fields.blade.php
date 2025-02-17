<!-- Order Item Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="order_item_id">Order Item</label>
    <input type="number" id="order_item_id" name="order_item_id"
        value="{{ old('order_item_id', $delivery->order_item_id ?? '') }}" class="form-control" required>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <select class="form-control" id="status_id" name="status_id">
        <option value=''>- Choose a status -</option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}"
                {{ old('status_id', $delivery->status_id ?? '') == $status->id ? 'selected' : '' }}>
                {{ $status->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="user_id">User</label>
    <input type="number" id="user_id" name="user_id" value="{{ old('user_id', $delivery->user_id ?? '') }}"
        class="form-control" required>
</div>
