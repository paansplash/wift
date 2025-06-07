<!-- User Id Field -->
<div class="col-sm-3">
    <label for="user_id"><strong>User:</strong></label>
    <p id="user_id">{{ $wisher->user->name }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-3">
    <label for="name"><strong>Name:</strong></label>
    <p id="name">{{ $wisher->name }}</p>
</div>

<!-- Phone No Field -->
<div class="col-sm-3">
    <label for="phone_no"><strong>Phone No:</strong></label>
    <p id="phone_no">{{ $wisher->phone_no }}</p>
</div>

<!-- Address Field -->
<div class="col-sm-3">
    <label for="address"><strong>Address:</strong></label>
    <p id="address">
        {{ implode(', ', array_filter([$wisher->addr1, $wisher->addr2, $wisher->addr3, $wisher->postcode, $wisher->city, $wisher->state])) }}
    </p>
</div>
