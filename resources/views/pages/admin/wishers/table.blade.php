<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="wishers-table">
            <thead>
            <tr>
                <th>User</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Address</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wishers as $wisher)
                <tr>
                    <td>{{ $wisher->user->name }}</td>
                    <td>{{ $wisher->name }}</td>
                    <td>{{ $wisher->phone_no }}</td>
                    <td>{{ implode(', ', array_filter([$wisher->addr1, $wisher->addr2, $wisher->addr3, $wisher->postcode, $wisher->city, $wisher->state])) }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['wishers.destroy', $wisher->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('admin.wishers.show', [$wisher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('admin.wishers.edit', [$wisher->id]) }}"
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
            @include('adminlte-templates::common.paginate', ['records' => $wishers])
        </div>
    </div>
</div>
