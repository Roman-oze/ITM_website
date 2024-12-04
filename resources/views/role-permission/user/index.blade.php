@extends('layout.dashboard')
@include('include.alerts')
@section('main')
    @include('role-permission.nav-links')

    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                @if (session('status'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('status') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-light d-flex flex-column flex-md-row justify-content-between align-items-center p-4">
                        <h3 class="text-dark fw-bold mb-2 mb-md-0">User Management</h3>
                        <a href="{{ url('users/create') }}" class="btn btn-primary btn-sm">
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
                                                <div class="d-flex justify-content-center flex-wrap">
                                                    @can('update user')
                                                        <a href="{{ url('users/' . $user->id . '/edit') }}"
                                                           class="btn btn-sm btn-outline-primary p-2 me-1">
                                                            <i class="fas fa-edit text-info"></i>
                                                        </a>
                                                    @endcan

                                                    @can('delete user')
                                                        <button onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('users/' . $user->id . '/delete') }}' }"
                                                                class="btn btn-sm btn-outline-danger p-2 me-1">
                                                            <i class="fas fa-trash-alt "></i>
                                                        </button>
                                                    @endcan
                                                </div>
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

    <style>
        @media (max-width: 576px) {
            .card-header h3 {
                font-size: 1.25rem;
            }
            .btn-outline-primary {
                width: 100%;
                text-align: center;
            }
        }
    </style>
@endsection

