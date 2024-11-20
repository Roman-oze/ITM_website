@extends('layout.dashboard')
 <!-- Sweet alert -->
 @include('include.alerts')
@section('main')
<main>

        <div class="container-fluid px-4">
            <h2 class="mt-4">Menu Permissions</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Permissions list</li>
            </ol>

            <!-- Add Button -->
        <div class="d-flex justify-content-between  mb-3">
            <a href="{{ route('menus.create') }}" class="btn btn-dark rounded-pill shadow float-right" id="upload-form">
                <i class="fas fa-plus-circle"></i> Add Menu
            </a>
            <a href="{{ route('menu-permissions.create') }}" class="btn btn-dark rounded-pill shadow float-end" id="upload-form">
                <i class="fas fa-plus-circle"></i> Add Permissions
            </a>
        </div>

        <div class="card mt-4">
            <div class="card-body">
                <table class="table table-striped table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Menu</th>
                            <th>Role</th>
                            <th>Can Create</th>
                            <th>Can Edit</th>
                            <th>Can Update</th>
                            <th>Can Delete</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($permissions as $permission)
                            <tr>
                                <td>{{ $permission->menu?->name }}</td>
                                <td>{{ $permission->role->name }}</td>
                                <td>{{ $permission->can_create ? 'Yes' : 'No' }}</td>
                                <td>{{ $permission->can_edit ? 'Yes' : 'No' }}</td>
                                <td>{{ $permission->can_update ? 'Yes' : 'No' }}</td>
                                <td>{{ $permission->can_delete ? 'Yes' : 'No' }}</td>
                                <td class="text-center">
                                    @can('update user')
                                        <a href="{{ route('menu-permission.edit', $permission->id) }}" class="btn btn-sm btn-outline-primary mr-1">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endcan
                                    @can('delete user')
                                        <form action="{{ route('menu-permissions.destroy', $permission->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this permission?');">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-outline-danger">
                                                <i class="fa fa-trash"></i>
                                            </button>
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
