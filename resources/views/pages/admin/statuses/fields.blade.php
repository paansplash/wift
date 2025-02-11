<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $status->name ?? '') }}" 
        class="form-control" required maxlength="255">
</div>
