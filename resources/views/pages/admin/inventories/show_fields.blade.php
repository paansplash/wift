<!-- Image Field -->
<div class="col-sm-12">
    {!! Form::label('image', 'Image:') !!}
    <div class="mb-3">
        @if($inventory->image)
            <img src="{{ asset('storage/' . $inventory->image) }}" alt="{{ $inventory->name }}" class="img-fluid" style="max-width: 300px;">
        @else
            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-fluid" style="max-width: 300px;">
        @endif
    </div>
</div>

<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $inventory->name }}</p>
</div>

<!-- Price Field -->
<div class="col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    <p>{{ number_format($inventory->price, 2) }}</p>
</div>

<!-- Quantity Field -->
<div class="col-sm-12">
    {!! Form::label('quantity', 'Quantity:') !!}
    <p>{{ $inventory->quantity }}</p>
</div>

<!-- User Field -->
<div class="col-sm-12">
    {!! Form::label('user_id', 'User:') !!}
    <p>{{ $inventory->user->name }}</p>
</div>

<!-- Status Field -->
<div class="col-sm-12">
    {!! Form::label('status_id', 'Status:') !!}
    <p>{{ $inventory->status->name }}</p>
</div>

<!-- Subcategory Field -->
<div class="col-sm-12">
    {!! Form::label('subcategory_id', 'Subcategory:') !!}
    <p>{{ $inventory->subcategory->name }}</p>
</div>

<!-- Created At Field -->
<div class="col-sm-12">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $inventory->created_at->format('Y-m-d H:i:s') }}</p>
</div>

<!-- Updated At Field -->
<div class="col-sm-12">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $inventory->updated_at->format('Y-m-d H:i:s') }}</p>
</div>

