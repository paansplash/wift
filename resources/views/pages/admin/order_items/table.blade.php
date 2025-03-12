<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="order-items-table">
            <thead>
            <tr>
                <th>Order</th>
                <th>Inventory</th>
                <th>Price</th>
                <th>Quantity</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($orderItems as $orderItem)
                <tr>
                    <td>{{ $orderItem->order_id }}</td>
                    <td>{{ $orderItem->inventory_id }}</td>
                    <td>{{ $orderItem->price }}</td>
                    <td>{{ $orderItem->quantity }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['orderItems.destroy', $orderItem->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.orderItems.show', [$orderItem->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.orderItems.edit', [$orderItem->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $orderItems])
        </div>
    </div>
</div>
