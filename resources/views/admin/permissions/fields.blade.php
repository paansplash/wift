<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $permission->name ?? '') }}" 
        class="form-control" required maxlength="255">
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label class="ms-0" for="description">Description</label>
    <textarea id="description" name="description" 
        class="form-control" maxlength="65535">{{ old('description', $permission->description ?? '') }}</textarea>
</div>
