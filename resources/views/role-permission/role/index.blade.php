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
                            <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Add Role</a>
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
                                @foreach ($roles as $role)
                                    <tr>
                                        <td>{{ $role->id }}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>
                                            <a href="{{ url('roles/' . $role->id . '/give-permission') }}" class="btn btn-info">
                                                Add/Edit Role permission
                                            </a>

                                            @can('update role')
                                                <a href="{{ url('roles/' . $role->id . '/edit') }}" class="btn btn-primary">
                                                    <i class="fa fa-edit"></i>
                                                </a>
                                            @endcan

                                            @can('delete role')
                                                <a href="{{ url('roles/' . $role->id . '/delete') }}" class="btn btn-danger" onclick="return confirm('Are you sure!')">
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
