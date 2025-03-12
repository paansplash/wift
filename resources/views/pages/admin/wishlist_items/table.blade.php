<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="wishlist-items-table">
            <thead>
            <tr>
                <th>Wishlist</th>
                <th>Inventory</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wishlistItems as $wishlistItem)
                <tr>
                    <td>{{ $wishlistItem->wishlist->wisher->name }}</td>
                    <td>{{ $wishlistItem->inventory->name }}</td>
                    <td>{{ $wishlistItem->status->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['wishlistItems.destroy', $wishlistItem->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.wishlistItems.show', [$wishlistItem->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.wishlistItems.edit', [$wishlistItem->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $wishlistItems])
        </div>
    </div>
</div>
