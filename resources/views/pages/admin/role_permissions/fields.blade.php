<!-- Role Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="role_id">Role</label>
    <input type="number" id="role_id" name="role_id" value="{{ old('role_id', $rolePermission->role_id ?? '') }}" 
        class="form-control" required>
</div>

<!-- Permission Id Field -->
<div class="form-group col-sm-6">
    <label class="ms-0" for="permission_id">Permission</label>
    <input type="number" id="permission_id" name="permission_id" value="{{ old('permission_id', $rolePermission->permission_id ?? '') }}" 
        class="form-control" required>
</div>
