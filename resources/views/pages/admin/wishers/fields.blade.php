<!-- User Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="user_id">User</label>
    <select class="form-control" id="user_id" name="user_id">
        <option value=''>- Choose a user -</option>
        @foreach ($users as $user)
            <option {{ $wisher->user_id ?? old('user_id') == $user->id ? 'selected' : '' }} value="{{ $user->id }}">
                {{ $user->name }}</option>
        @endforeach
    </select>
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ old('name', $wisher->name ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- Phone No Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="phone_no">Phone No</label>
    <input type="text" id="phone_no" name="phone_no" value="{{ old('phone_no', $wisher->phone_no ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- Addr1 Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="addr1">Addr1</label>
    <input type="text" id="addr1" name="addr1" value="{{ old('addr1', $wisher->addr1 ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- Addr2 Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="addr2">Addr2</label>
    <input type="text" id="addr2" name="addr2" value="{{ old('addr2', $wisher->addr2 ?? '') }}" class="form-control" maxlength="255">
</div>

<!-- Addr3 Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="addr3">Addr3</label>
    <input type="text" id="addr3" name="addr3" value="{{ old('addr3', $wisher->addr3 ?? '') }}" class="form-control" maxlength="255">
</div>

<!-- Postcode Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="postcode">Postcode</label>
    <input type="text" id="postcode" name="postcode" value="{{ old('postcode', $wisher->postcode ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- City Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="city">City</label>
    <input type="text" id="city" name="city" value="{{ old('city', $wisher->city ?? '') }}" class="form-control" required maxlength="255">
</div>

<!-- State Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="state">State</label>
    <input type="text" id="state" name="state" value="{{ old('state', $wisher->state ?? '') }}" class="form-control" required maxlength="255">
</div>
