<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $subcategory->name ?? old('name') }}" class="form-control" required maxlength="255">
</div>

<!-- Category Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="category_id">Category</label>
    <select class="form-control" id="category_id" name="category_id" required>
        <option value="">- Choose a Category -</option>
        @foreach ($categories as $category)
            <option value="{{ $category->id }}" {{ ($subcategory->category_id ?? old('category_id')) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="description">Description</label>
    <input type="text" id="description" name="description" value="{{ $subcategory->description ?? old('description') }}" class="form-control" maxlength="255">
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <select class="form-control" id="status_id" name="status_id" required>
        <option value="">- Choose a Status -</option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}" {{ ($subcategory->status_id ?? old('status_id')) == $status->id ? 'selected' : '' }}>
                {{ $status->name }}
            </option>
        @endforeach
    </select>
</div>
