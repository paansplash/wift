<!-- Name Field -->
<div class="col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $subcategory->name }}</p>
</div>

<!-- Category Id Field -->
<div class="col-sm-12">
    {!! Form::label('category_id', 'Category:') !!}
    <p>{{ $subcategory->category_id }}</p>
</div>

<!-- Description Field -->
<div class="col-sm-12">
    {!! Form::label('description', 'Description:') !!}
    <p>{{ $subcategory->description }}</p>
</div>

<!-- Status Id Field -->
<div class="col-sm-12">
    {!! Form::label('status_id', 'Status:') !!}
    <p>{{ $subcategory->status_id }}</p>
</div>

