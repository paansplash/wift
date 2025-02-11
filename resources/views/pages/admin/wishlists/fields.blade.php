<!-- wisher Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="wisher_id">Wisher</label>
    <select class="form-control" id="wisher_id" name="wisher_id">
        <option value=''>- Choose a wisher -</option>
        @foreach ($wishers as $wisher)
            <option {{ $wishlist->wisher_id ?? old('wisher_id') == $wisher->id ? 'selected' : '' }}
                value="{{ $wisher->id }}">
                {{ $wisher->name }}</option>
        @endforeach
    </select>
</div>

<!-- Title Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="title">Title</label>
    <input type="text" id="title" name="title" value="{{ old('title', $wishlist->title ?? '') }}"
        class="form-control" required maxlength="255">
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    <label class="ms-0" for="description">Description</label>
    <textarea id="description" name="description" class="form-control" maxlength="65535">{{ old('description', $wishlist->description ?? '') }}</textarea>
</div>
