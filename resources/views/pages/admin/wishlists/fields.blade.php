<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="user_id">User</label>
    <input type="number" id="user_id" name="user_id" value="{{ old('user_id', $wishlist->user_id ?? '') }}" class="form-control" required>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ old('title', $wishlist->title ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label class="ms-0" for="description">Description</label>
    <textarea id="description" name="description" class="form-control" maxlength="65535">{{ old('description', $wishlist->description ?? '') }}</textarea>
</div>
