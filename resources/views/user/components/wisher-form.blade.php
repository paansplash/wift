<div class="col-lg-6">
    <div class="overflow-hidden mb-4 mt-4">
        <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
            data-appear-animation="maskUp" data-appear-animation-delay="2600">Fill in your details.</h3>
    </div>
    <form class="custom-form-style-1 appear-animation" action="{{ route('user.wishers.store') }}" method="POST"
        data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2800">
        @csrf

        <!-- <div class="contact-form-success alert alert-success d-none mt-4">
            <strong>Success!</strong> Your message has been sent to us.
        </div>

        <div class="contact-form-error alert alert-danger d-none mt-4">
            <strong>Error!</strong> There was an error sending your message.
            <span class="mail-error-message text-1 d-block"></span>
        </div> -->

        <div class="row">
            <!-- User ID Field -->
            <div class="form-group col-sm-6">
                <label for="user_email">User</label>
                <!-- Display User Email -->
                <input type="text" value="{{ auth()->user()->email }}" class="form-control border-radius-0" readonly>

                <!-- Hidden User ID Field -->
                <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}">
            </div>

            <!-- Name Field -->
            <div class="form-group col-sm-6">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name', $wisher->name ?? '') }}"
                    class="form-control border-radius-0" required maxlength="255">
            </div>

            <!-- Phone No Field -->
            <div class="form-group col-sm-6">
                <label for="phone_no">Phone No</label>
                <input type="text" id="phone_no" name="phone_no"
                    value="{{ old('phone_no', $wisher->phone_no ?? '') }}" class="form-control border-radius-0" required
                    maxlength="255">
            </div>

            <!-- Addr1 Field -->
            <div class="form-group col-sm-6">
                <label for="addr1">Address 1</label>
                <input type="text" id="addr1" name="addr1" value="{{ old('addr1', $wisher->addr1 ?? '') }}"
                    class="form-control border-radius-0" required maxlength="255">
            </div>

            <!-- Addr2 Field -->
            <div class="form-group col-sm-6">
                <label for="addr2">Address 2</label>
                <input type="text" id="addr2" name="addr2" value="{{ old('addr2', $wisher->addr2 ?? '') }}"
                    class="form-control border-radius-0" maxlength="255">
            </div>

            <!-- Addr3 Field -->
            <div class="form-group col-sm-6">
                <label for="addr3">Address 3</label>
                <input type="text" id="addr3" name="addr3" value="{{ old('addr3', $wisher->addr3 ?? '') }}"
                    class="form-control border-radius-0" maxlength="255">
            </div>

            <!-- Postcode Field -->
            <div class="form-group col-sm-6">
                <label for="postcode">Postcode</label>
                <input type="text" id="postcode" name="postcode"
                    value="{{ old('postcode', $wisher->postcode ?? '') }}" class="form-control border-radius-0" required
                    maxlength="255">
            </div>

            <!-- City Field -->
            <div class="form-group col-sm-6">
                <label for="city">City</label>
                <input type="text" id="city" name="city" value="{{ old('city', $wisher->city ?? '') }}"
                    class="form-control border-radius-0" required maxlength="255">
            </div>

            <!-- State Field -->
            <div class="form-group col-sm-6">
                <label for="state">State</label>
                <input type="text" id="state" name="state" value="{{ old('state', $wisher->state ?? '') }}"
                    class="form-control border-radius-0" required maxlength="255">
            </div>
        </div>

        <!-- Submit & Cancel Buttons -->
        <div class="card-footer">
            <button type="submit"
                class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 m-3">Save</button>
            <a href="{{ route('user.wishers.index') }}"
                class="btn btn-default custom-btn-style-1 font-weight-bold text-3 px-5 py-3">Cancel</a>
        </div>

    </form>
</div>
