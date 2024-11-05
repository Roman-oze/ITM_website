@extends('layout.dashboard')

@section('main')
    @include('role-permission.nav-links')

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white d-flex justify-content-between align-items-center">
                        <h3 class="text-primary mb-0">User Management</h3>
                        <a href="{{ url('users/create') }}" class="btn btn-outline-primary">
                            <i class="fas fa-plus-circle"></i> Add User
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Roles</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" class="text-center">Actions</th>
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
                                            <td class="text-center">
                                                @can('edit')
                                                    <a href="{{ url('users/' . $user->id . '/edit') }}" class="btn btn-sm btn-outline-primary me-2">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                @endcan

                                                @can('delete')
                                                    <button onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('users/' . $user->id . '/delete') }}' }"
                                                        class="btn btn-sm btn-outline-danger">
                                                        <i class="fas fa-trash-alt"></i> Delete
                                                    </button>
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
    </div>
@endsection
