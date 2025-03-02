<div class="col-lg-6">
    <div class="overflow-hidden mb-4 mt-4">
        <h3 class="text-transform-none text-color-dark font-weight-black text-7 line-height-2 mb-0 pt-3 appear-animation"
            data-appear-animation="maskUp" data-appear-animation-delay="2600">Fill in your details.</h3>
    </div>
    <form class="custom-form-style-1 appear-animation" action="{{ route('user.wishlistItems.store') }}" method="POST"
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
            <!-- Wishlist Id Field -->
            <div class="form-group col-sm-6">
                <label class="ms-0" for="wishlist_id">Wishlist</label>
                <input type="text" class="form-control" value="{{ $wishlist->title ?? 'No Wisher Found' }}" readonly>
                <input type="hidden" name="wishlist_id" value="{{ $wishlist->id ?? '' }}">
            </div>

            <!-- Inventory Id Field -->
            <div class="form-group col-sm-6">
                <label class="ms-0" for="inventory_id">Inventory</label>
                <select class="form-control" id="inventory_id" name="inventory_id">
                    <option value=''>- Choose an Inventory -</option>
                    @foreach ($inventories as $inventory)
                        <option {{ ($wishlistItem->inventory_id ?? old('inventory_id')) == $inventory->id ? 'selected' : '' }}
                            value="{{ $inventory->id }}">
                            {{ $inventory->name }}
                        </option>
                    @endforeach
                </select>
            </div>
        
            <!-- Status Id Field -->
            <input type="hidden" name="status_id" value="5">

        </div>
        

        <!-- Submit & Cancel Buttons -->
        <div class="card-footer">
            <button type="submit" class="btn btn-primary custom-btn-style-1 font-weight-bold text-3 px-5 py-3 m-3">Save</button>
            <a href="{{ route('user.wishlists.index') }}" class="btn btn-default custom-btn-style-1 font-weight-bold text-3 px-5 py-3">Cancel</a>
        </div>
    </form>
</div>
