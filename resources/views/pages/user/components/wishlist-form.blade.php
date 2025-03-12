<div class="col-lg-6">
    <div class="overflow-hidden mb-4 mt-4">
        <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
            data-appear-animation="maskUp" data-appear-animation-delay="2600">Fill in your details.</h3>
    </div>
    <form class="custom-form-style-1 appear-animation" action="{{ route('user.wishlists.store') }}" method="POST"
    data-appear-animation="fadeInUpShorter" data-appear-animation-delay="2800">
        @csrf

        {{-- <div class="contact-form-success alert alert-success d-none mt-4">
            <strong>Success!</strong> Your message has been sent to us.
        </div>

        <div class="contact-form-error alert alert-danger d-none mt-4">
            <strong>Error!</strong> There was an error sending your message.
            <span class="mail-error-message text-1 d-block"></span>
        </div> --}}

        <div class="row">
            <!-- Wisher ID Field -->
            <div class="form-group col-sm-6">
                <label class="ms-0">Wisher</label>
                <input type="text" class="form-control" value="{{ $wisher->name ?? 'No Wisher Found' }}" readonly>
                <input type="hidden" name="wisher_id" value="{{ $wisher->id ?? '' }}">
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
        </div>

        <!-- Submit & Cancel Buttons -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 m-3">Save</button>
            <a href="{{ route('admin.user.wishers.index') }}" class="btn btn-default custom-btn-style-1 font-weight-bold text-3 px-5 py-3">Cancel</a>
        </div>
    </form>
</div>
