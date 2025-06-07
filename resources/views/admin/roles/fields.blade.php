<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $role->name ?? '') }}" 
        class="form-control" required maxlength="255">
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="description">Description</label>
    <input type="text" id="description" name="description" value="{{ old('description', $role->description ?? '') }}" 
        class="form-control" maxlength="255">
</div>
