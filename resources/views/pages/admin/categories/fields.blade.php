<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $category->name ?? old('name') }}" class="form-control"
        required maxlength="255">
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="description">Description</label>
    <input type="text" id="description" name="description" value="{{ $category->description ?? old('description') }}"
        class="form-control" maxlength="255">
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="status_id">Status</label>
    <select class="form-control" id="status_id" name="status_id">
        <option value=''>- Choose a status -</option>
        @foreach ($statuses as $status)
            <option {{ $category->status_id ?? old('status_id') == $status->id ? 'selected' : '' }} value="{{ $status->id }}">
                {{ $status->name }}</option>
        @endforeach
    </select>
</div>
