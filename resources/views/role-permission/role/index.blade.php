@extends('layout.dashboard')
@include('include.alerts')
@section('main')
@include('role-permission.nav-links')


    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>

                <div class="card shadow-lg border-0 rounded-4">
                    <div class="card-header bg-light d-flex flex-column flex-md-row justify-content-between align-items-center">
                        <h3 class="text-dark fw-bold mb-2 mb-md-0">Roles Management</h3>
                        <a href="{{ url('roles/create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus-circle"></i> Add Role
                        </a>
                    </div>

                    <div class="card-body p-4">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover align-middle text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Role Name</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($roles as $role)
                                        <tr>
                                            <td class="fw-bold">{{ $role->id }}</td>
                                            <td class="text-secondary">{{ $role->name }}</td>
                                            <td>
                                                <div class="d-flex justify-content-center align-items-center gap-2">
                                                    <a href="{{ url('roles/' . $role->id . '/give-permission') }}" class="btn btn-info btn-sm text-white d-flex align-items-center">
                                                        <i class="fas fa-key me-1"></i> <span>Permissions</span>
                                                    </a>

                                                    @can('update role')
                                                        <a href="{{ url('roles/' . $role->id . '/edit') }}" class="btn btn-secondary   btn-sm text-white d-flex align-items-center">
                                                            <i class="fa fa-edit me-1"></i> <span>Edit</span>
                                                        </a>
                                                    @endcan

                                                    @can('delete role')
                                                        <button onclick="if(confirm('Are you sure you want to delete this role?')) { window.location.href='{{ url('roles/' . $role->id . '/delete') }}' }"
                                                                class="btn btn-danger btn-sm text-white d-flex align-items-center">
                                                            <i class="fa fa-trash me-1"></i> <span>Delete</span>
                                                        </button>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-muted">No roles available.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
