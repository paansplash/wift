<!-- Name Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="name">Name</label>
    <input type="text" id="name" name="name" value="{{ $user->name ?? old('name') }}" class="form-control">
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="password">Password</label>
    <input type="password" id="password" name="password" value="{{ $user->password ?? old('password') }}"
        class="form-control">
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="email">Email</label>
    <input type="email" id="email" name="email" value="{{ $user->email ?? old('email') }}" class="form-control">
</div>

<!-- Email Verified At Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="email_verified_at">Email Verified At</label>
    <input type="date" id="email_verified_at" name="email_verified_at"
        value="{{ $user->email_verified_at ?? old('email_verified_at') }}" class="form-control">
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="role_id">Role</label>
    <select class="form-control" id="role_id" name="role_id">
        <option value=''>- Choose a Role -</option>
        @foreach ($roles as $role)
            <option {{ $user->role_id ?? old('role_id') == $role->id ? 'selected' : '' }} value="{{ $role->id }}">
                {{ $role->name }}</option>
        @endforeach
    </select>
</div>

@push('page_scripts')
    <script type="text/javascript">
        $('#email_verified_at').datepicker({
            format: 'yyyy-mm-dd',
            autoclose: true,
            todayHighlight: true
        });
    </script>
@endpush
