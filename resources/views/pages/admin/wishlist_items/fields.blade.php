<!-- Wishlist Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('wishlist_id', 'Wishlist Id:') !!}
    {!! Form::number('wishlist_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Inventory Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('inventory_id', 'Inventory Id:') !!}
    {!! Form::number('inventory_id', null, ['class' => 'form-control', 'required']) !!}
</div>

<!-- Status Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status_id', 'Status Id:') !!}
    {!! Form::number('status_id', null, ['class' => 'form-control']) !!}
</div>