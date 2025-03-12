<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="wishlists-table">
            <thead>
            <tr>
                <th>Wisher</th>
                <th>Title</th>
                <th>Description</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wishlists as $wishlist)
                <tr>
                    <td>{{ $wishlist->wisher->name }}</td>
                    <td>{{ $wishlist->title }}</td>
                    <td>{{ $wishlist->description }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['wishlists.destroy', $wishlist->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.wishlists.show', [$wishlist->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.wishlists.edit', [$wishlist->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $wishlists])
        </div>
    </div>
</div>
