<!-- Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('order_item_id', 'Order Item:') !!}
    <p>{{ $delivery->order_id }}</p>
</div>

<!-- Status Id Field -->
<div class="col-sm-12">
    {!! Form::label('status_id', 'Status:') !!}
    <p>{{ $delivery->status_id }}</p>
</div>

<!-- User Id Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $delivery->user_id }}</p>
</div>

