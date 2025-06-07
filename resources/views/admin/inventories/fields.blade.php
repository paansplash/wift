<!-- Name Field -->
<div class="form-group col-sm-6">
    <label for="name" class="font-weight-bold">
        <i class="fas fa-tag mr-1"></i> Name
    </label>
    <input type="text" id="name" name="name" value="{{ old('name', $inventory->name ?? '') }}"
        class="form-control" required maxlength="255" placeholder="Enter name">
</div>

<!-- Subcategory Id Field -->
<div class="form-group col-sm-6">
    <label for="subcategory_id" class="font-weight-bold">
        <i class="fas fa-list mr-1"></i> Subcategory
    </label>
    <select class="form-control" id="subcategory_id" name="subcategory_id" required>
        <option value=''>- Choose a Subcategory -</option>
        @foreach ($subcategories as $subcategory)
            <option {{ ($inventory->subcategory_id ?? old('subcategory_id')) == $subcategory->id ? 'selected' : '' }}
                value="{{ $subcategory->id }}">
                {{ $subcategory->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    <label for="price" class="font-weight-bold">
        <i class="fas fa-dollar-sign mr-1"></i> Price
    </label>
    <input type="number" id="price" name="price" value="{{ old('price', $inventory->price ?? '') }}"
        class="form-control" required step="0.01" min="0" placeholder="Enter price">
</div>

<!-- Quantity Field -->
<div class="form-group col-sm-6">
    <label for="quantity" class="font-weight-bold">
        <i class="fas fa-boxes mr-1"></i> Quantity
    </label>
    <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $inventory->quantity ?? '') }}"
        class="form-control" required min="0" placeholder="Enter quantity">
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label for="user_id" class="font-weight-bold">
        <i class="fas fa-user mr-1"></i> User
    </label>
    <select class="form-control" id="user_id" name="user_id" required>
        <option value=''>- Choose a User -</option>
        @foreach ($users as $user)
            <option {{ ($inventory->user_id ?? old('user_id')) == $user->id ? 'selected' : '' }}
                value="{{ $user->id }}">
                {{ $user->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    <label for="status_id" class="font-weight-bold">
        <i class="fas fa-toggle-on mr-1"></i> Status
    </label>
    <select class="form-control" id="status_id" name="status_id" required>
        <option value="">- Choose a Status -</option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}"
                {{ ($inventory->status_id ?? old('status_id')) == $status->id ? 'selected' : '' }}>
                {{ $status->name }}
            </option>
        @endforeach
    </select>
</div>

<!-- Image Upload Field -->
<div class="form-group col-sm-6">
    <label for="image" class="font-weight-bold">
        <i class="fas fa-image mr-1"></i> Image
    </label>
    <div class="custom-file">
        <input type="file" name="image" class="custom-file-input" id="image" accept="image/*">
        <label class="custom-file-label" for="image">Choose a file</label>
    </div>
    <small class="form-text text-muted">Maximum file size: 2MB. Supported formats: JPG, PNG, GIF</small>
    
    <div class="mt-2" id="image-preview">
        @if (isset($inventory->image))
            <img src="{{ asset('storage/' . $inventory->image) }}" alt="Inventory Image" class="img-thumbnail" style="max-width: 200px;">
        @endif
    </div>
</div>

@push('scripts')
<script>
    // Update custom file input label
    document.querySelector('.custom-file-input').addEventListener('change', function(e) {
        var fileName = e.target.files[0].name;
        var nextSibling = e.target.nextElementSibling;
        nextSibling.innerText = fileName;
        
        // Preview image
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                document.getElementById('image-preview').innerHTML = 
                    '<img src="' + e.target.result + '" alt="Preview" class="img-thumbnail" style="max-width: 200px;">';
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
</script>
@endpush
