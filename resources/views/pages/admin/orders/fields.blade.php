<!-- Wishlist Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="wishlist_id">Wishlist</label>
    <input type="number" id="wishlist_id" name="wishlist_id" value="{{ old('wishlist_id', $order->wishlist_id ?? '') }}" 
        class="form-control" required>
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="amount">Amount</label>
    <input type="number" id="amount" name="amount" value="{{ old('amount', $order->amount ?? '') }}" 
        class="form-control" required>
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <select class="form-control" id="status_id" name="status_id">
        <option value=''>- Choose a status -</option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}" 
                {{ old('status_id', $order->status_id ?? '') == $status->id ? 'selected' : '' }}>
                {{ $status->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $order->name ?? '') }}" 
        class="form-control" required maxlength="255">
</div>

<!-- Note Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label class="ms-0" for="note">Note</label>
    <textarea id="note" name="note" class="form-control" maxlength="65535">{{ old('note', $order->note ?? '') }}</textarea>
</div>
