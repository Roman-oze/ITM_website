@extends('layout.dashboard')

@section('main')

    @include('role-permission.nav-links')


<div class="container mt-5">
    <div class="row">
        <div class="col-md-12">


            @if (session('status'))
                <div class="alert alert-success">{{session('status')}}</div>
            @endif


            <div class="card">
                <div class="card-header">
                    <h4>User
                        <a href="{{url('users/create')}}" class="btn btn-primary float-end">Add User</a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Roles</th>
                                <th>Email</th>
                                <th>Tools</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>
                                    @foreach ($user->roles as $role)
                                    <span class="badge bg-success">{{ $role->name }}</span>
                                    @endforeach
                                </td>
                                <td>{{ $user->email }}</td>
                                <td>
                        {{-- <a href="{{url('roles/'.$role->id.'/give-permission')}}" class="btn btn-info">
                            Add/Edit Role permission
                            </a> --}}
                        <a href="{{url('users/'.$user->id.'/edit')}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                            </a>
                            <a href="{{url('users/'.$user->id.'/delete')}}" class="btn btn-danger">

                                <i class="fa fa-trash"></i>
                                </a>
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
