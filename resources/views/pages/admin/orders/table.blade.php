<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="orders-table">
            <thead>
            <tr>
                <th>Wishlist</th>
                <th>Amount</th>
                <th>Status</th>
                <th>Name</th>
                <th>Note</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
                <tr>
                    <td>{{ $order->wishlist_id }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>{{ $order->status_id }}</td>
                    <td>{{ $order->name }}</td>
                    <td>{{ $order->note }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['admin.orders.destroy', $order->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.orders.show', [$order->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.orders.edit', [$order->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $orders])
        </div>
    </div>
</div>
