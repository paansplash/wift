<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="subcategories-table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Category</th>
                <th>Description</th>
                <th>Status</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($subcategories as $subcategory)
                <tr>
                    <td>{{ $subcategory->name }}</td>
                    <td>{{ $subcategory->category->name }}</td>
                    <td>{{ $subcategory->description }}</td>
                    <td>{{ $subcategory->status->name }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['subcategories.destroy', $subcategory->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('subcategories.show', [$subcategory->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('subcategories.edit', [$subcategory->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $subcategories])
        </div>
    </div>
</div>
