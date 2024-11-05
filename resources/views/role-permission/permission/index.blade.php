@extends('layout.dashboard')

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

                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center">
                        <h3 class="text-primary mb-2 mb-md-0">Permissions Management</h3>
                        <a href="{{ url('permissions/create') }}" class="btn btn-outline-primary btn-sm">
                            <i class="fas fa-plus-circle"></i> Add Permission
                        </a>
                    </div>

                    <div class="card-body p-3 p-md-4">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-primary">
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col" class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td class="text-center">
                                                <div class="d-flex justify-content-center flex-wrap gap-1">
                                                    @can('update permission')
                                                        <a href="{{ url('permissions/' . $permission->id . '/edit') }}" class="btn btn-sm btn-outline-primary">
                                                            <i class="fa fa-edit"></i> Edit
                                                        </a>
                                                    @endcan

                                                    @can('delete permission')
                                                        <button onclick="if(confirm('Are you sure?')) { window.location.href='{{ url('permissions/' . $permission->id . '/delete') }}' }"
                                                            class="btn btn-sm btn-outline-danger">
                                                            <i class="fa fa-trash"></i> Delete
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

@endsection
