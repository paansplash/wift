<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $inventory->name ?? '') }}"
        class="form-control" required maxlength="255">
</div>

<!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="subcategory_id">Subcategory</label>
    <select class="form-control" id="subcategory_id" name="subcategory_id">
        <option value=''>- Choose a Subcategory -</option>
        @foreach ($subcategories as $subcategory)
            <option {{ $inventory->subcategory_id ?? old('subcategory_id') == $subcategory->id ? 'selected' : '' }} value="{{ $subcategory->id }}">
                {{ $subcategory->name }}</option>
        @endforeach
    </select>
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
    <select class="form-control" id="user_id" name="user_id">
        <option value=''>- Choose a User -</option>
        @foreach ($users as $user)
            <option {{ $inventory->user_id ?? old('user_id') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">
                {{ $user->name }}</option>
        @endforeach
    </select>
</div>
