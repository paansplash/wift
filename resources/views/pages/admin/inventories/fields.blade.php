<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $inventory->name ?? '') }}" 
        class="form-control" required maxlength="255">
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="price">Price</label>
    <input type="number" id="price" name="price" value="{{ old('price', $inventory->price ?? '') }}" 
        class="form-control" required step="0.01">
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="quantity">Quantity</label>
    <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $inventory->quantity ?? '') }}" 
        class="form-control">
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="user_id">User</label>
    <input type="number" id="user_id" name="user_id" value="{{ old('user_id', $inventory->user_id ?? '') }}" 
        class="form-control" required>
</div>
