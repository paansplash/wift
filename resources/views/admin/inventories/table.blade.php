<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="inventories-table">
            <thead>
            <tr>
                <th>Image</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>User</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($inventories as $inventory)
                <tr>
                    <td>
                        @if($inventory->image)
                            <img src="{{ asset('storage/' . $inventory->image) }}" alt="{{ $inventory->name }}" class="img-thumbnail" style="max-width: 50px;">
                        @else
                            <img src="{{ asset('images/no-image.png') }}" alt="No Image" class="img-thumbnail" style="max-width: 50px;">
                        @endif
                    </td>
                    <td>{{ $inventory->name }}</td>
                    <td>{{ $inventory->price }}</td>
                    <td>{{ $inventory->quantity }}</td>
                    <td>{{ $inventory->user->name }}</td>
                    <td>{{ $inventory->status->name }}</td>
                    <td style="width: 120px">
                        {!! Form::open(['route' => ['admin.inventories.destroy', $inventory->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.inventories.show', [$inventory->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.inventories.edit', [$inventory->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                        </div>
                        {!! Form::close() !!}
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <div class="float-right">
            @include('adminlte-templates::common.paginate', ['records' => $inventories])
        </div>
    </div>
</div>
