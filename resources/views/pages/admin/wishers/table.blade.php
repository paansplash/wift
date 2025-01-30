<div class="card-body p-0">
    <div class="table-responsive">
        <table class="table" id="wishers-table">
            <thead>
            <tr>
                <th>User Id</th>
                <th>Name</th>
                <th>Phone No</th>
                <th>Addr1</th>
                <th>Addr2</th>
                <th>Addr3</th>
                <th>Postcode</th>
                <th>City</th>
                <th>State</th>
                <th colspan="3">Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($wishers as $wisher)
                <tr>
                    <td>{{ $wisher->user_id }}</td>
                    <td>{{ $wisher->name }}</td>
                    <td>{{ $wisher->phone_no }}</td>
                    <td>{{ $wisher->addr1 }}</td>
                    <td>{{ $wisher->addr2 }}</td>
                    <td>{{ $wisher->addr3 }}</td>
                    <td>{{ $wisher->postcode }}</td>
                    <td>{{ $wisher->city }}</td>
                    <td>{{ $wisher->state }}</td>
                    <td  style="width: 120px">
                        {!! Form::open(['route' => ['wishers.destroy', $wisher->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('wishers.show', [$wisher->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('wishers.edit', [$wisher->id]) }}"
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
