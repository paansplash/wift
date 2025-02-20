@extends('layouts.admin.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-12">
                    <h1>Create Wishlist Items</h1>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        @include('adminlte-templates::common.errors')

        <div class="card">
            {!! Form::open(['route' => 'wishlistItems.store', 'id' => 'wishlist-form']) !!}

            <div class="card-body">
                <div class="row">

                    <!-- Wishlist Id Field -->
                    <div class="form-group col-sm-4">
                        <label class="ms-0" for="wishlist_id">Wishlist</label>
                        <select id="wishlist_id" class="form-control wishlist_id">
                            <option value="">- Choose a wishlist -</option>
                            @foreach ($wishlists as $wishlist)
                                <option value="{{ $wishlist->id }}">{{ $wishlist->title }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Inventory Id Field -->
                    <div class="form-group col-sm-4">
                        <label class="ms-0" for="inventory_id">Inventory</label>
                        <select id="inventory_id" class="form-control inventory_id">
                            <option value="">- Choose an Inventory -</option>
                            @foreach ($inventories as $inventory)
                                <option value="{{ $inventory->id }}">{{ $inventory->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <!-- Status Id Field -->
                    <div class="form-group col-sm-4">
                        <label class="ms-0" for="status_id">Status</label>
                        <select id="status_id" class="form-control status_id">
                            <option value="">- Choose a status -</option>
                            @foreach ($statuses as $status)
                                <option value="{{ $status->id }}">{{ $status->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-sm-12 mt-2">
                        <button type="button" id="add-row" class="btn btn-success">Add Row</button>
                    </div>
                </div>

                <hr>

                <h4>Wishlist Items to be Saved</h4>
                <table class="table table-bordered" id="wishlist-table">
                    <thead>
                        <tr>
                            <th>Wishlist</th>
                            <th>Inventory</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be added dynamically here -->
                    </tbody>
                </table>
            </div>

            <div class="card-footer">
                {!! Form::hidden('wishlist_items', '', ['id' => 'wishlist-items']) !!}
                {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
                <a href="{{ route('wishlistItems.index') }}" class="btn btn-default">Cancel</a>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection