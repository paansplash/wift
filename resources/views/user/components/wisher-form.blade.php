<form role="form" class="needs-validation" method="post" action="{{ route('user.wishers.store') }}" novalidate>
    @csrf
    <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0">
            <h2 class="text-color-dark font-weight-bold text-5-5 mb-3">Wisher & Wishlist Details</h2>

            <div class="row">
                <div class="form-group col-md-12">
                    <label class="form-label">User Email <span class="text-color-danger">*</span></label>
                    <input type="text" class="form-control h-auto py-2" value="{{ auth()->user()->email }}" readonly>
                    <input type="hidden" id="user_id" name="user_id" value="{{ auth()->id() }}">
                </div>
            </div>

            @foreach ([
                'name' => 'Name',
                'title' => 'Title',
                'phone_no' => 'Phone No',
                'addr1' => 'Address 1',
                'addr2' => 'Address 2',
                'addr3' => 'Address 3',
                'postcode' => 'Postcode',
                'city' => 'City',
                'state' => 'State'
            ] as $field => $label)
            <div class="row">
                <div class="form-group col-md-12">
                    <label class="form-label">{{ $label }} {!! in_array($field, ['name','title','phone_no','addr1','postcode','city','state']) ? '<span class="text-color-danger">*</span>' : '' !!}</label>
                    <input type="text" class="form-control h-auto py-2" id="{{ $field }}" name="{{ $field }}"
                        value="{{ old($field, ${isset($wisher) ? 'wisher' : 'wishlist'}->$field ?? '') }}"
                        {{ in_array($field, ['name','title','phone_no','addr1','postcode','city','state']) ? 'required' : '' }} maxlength="255">
                </div>
            </div>
            @endforeach

            <div class="row">
                <div class="form-group col-md-12">
                    <label class="form-label">Description</label>
                    <textarea class="form-control h-auto py-2" id="description" name="description" maxlength="65535">{{ old('description', $wishlist->description ?? '') }}</textarea>
                </div>
            </div>
        </div>

        <div class="col-lg-5 position-relative">
            <div class="card border-width-3 border-radius-0 border-color-hover-dark" data-plugin-sticky data-plugin-options="{'minWidth': 991, 'containerSelector': '.row', 'padding': {'top': 85}}">
                <div class="card-body">
                    <h4 class="font-weight-bold text-uppercase text-4 mb-3">Tips for Filling Out the Form</h4>
                    <ul class="list-unstyled text-color-dark text-2 mb-4">
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Ensure your name matches your ID.</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Use a valid phone number.</li>
                        <li class="mb-2"><i class="fas fa-check text-success me-2"></i>Complete your address to avoid issues.</li>
                    </ul>
                    <div class="d-flex gap-3 mt-3">
                        <a href="{{ route('user.dashboard.index') }}"
                            class="btn btn-dark btn-primary w-50 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Cancel</a>
                        <button type="submit"
                            class="btn btn-dark btn-modern w-50 text-uppercase bg-color-hover-primary border-color-hover-primary border-radius-0 text-3 py-3">Save <i class="fas fa-arrow-right ms-2"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>