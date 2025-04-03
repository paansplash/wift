@extends('layouts.admin.app')

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>
                    User Details
                </h1>
            </div>
            <div class="col-sm-6">
                <a class="btn btn-default float-right"
                    href="{{ route('admin.users.index') }}">
                    Back
                </a>
            </div>
        </div>
    </div>
</section>

<div class="content px-3">
    <div class="card">
        <div class="card-body">
            <div class="row">
                @include('pages.admin.users.show_fields')
            </div>
        </div>
    </div>
</div>
@endsection