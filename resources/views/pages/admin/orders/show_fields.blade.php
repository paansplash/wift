<!-- Wishlist Id Field -->
<div class="col-sm-12">
    {!! Form::label('wishlist_id', 'Wishlist Id:') !!}
    <p>{{ $order->wishlist_id }}</p>
</div>

<!-- Amount Field -->
<div class="col-sm-12">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{{ $order->amount }}</p>
</div>

<!-- Status Id Field -->
<div class="col-sm-12">
    {!! Form::label('status_id', 'Status Id:') !!}
    <p>{{ $order->status_id }}</p>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $order->name }}</p>
</div>

<!-- Note Field -->
<div class="col-sm-12">
    {!! Form::label('note', 'Note:') !!}
    <p>{{ $order->note }}</p>
</div>

