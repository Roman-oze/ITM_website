@extends('layout.dashboard')

@section('main')

    @include('role-permission.nav-links')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>
                            Roles
                            <a href="{{ url('permissions/create') }}" class="btn btn-primary float-end">Add Permission</a>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Tools</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($permissions as $permission)
                                    <tr>
                                        <td>{{ $permission->id }}</td>
                                        <td>{{ $permission->name }}</td>
                                        <td>
                                            @can('update permission')
                                                <a href="{{ url('permissions/' . $permission->id . '/edit') }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            @endcan

                                            @can('delete permission')
                                                <a href="{{ url('permissions/' . $permission->id . '/delete') }}" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                                                    <i class="fa fa-trash"></i>
                                                </a>
                                            @endcan
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
