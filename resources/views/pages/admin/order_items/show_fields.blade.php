<!-- Order Id Field -->
<div class="col-sm-12">
    {!! Form::label('order_id', 'Order Id:') !!}
    <p>{{ $orderItem->order_id }}</p>
</div>

<!-- Inventory Id Field -->
<div class="col-sm-12">
    {!! Form::label('inventory_id', 'Inventory Id:') !!}
    <p>{{ $orderItem->inventory_id }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ $orderItem->price }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $orderItem->quantity }}</p>
</div>

