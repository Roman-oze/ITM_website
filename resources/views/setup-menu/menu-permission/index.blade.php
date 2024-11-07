@extends('layout.dashboard')

@section('main')
<main>
    <div class="container">
        <h1 class="mt-4">Menu Permissions</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Menu Permissions</li>
        </ol>

        <div class="card mt-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <span class="h5 mb-0">Manage Permissions</span>
                <div>
                    <a href="{{ route('menus.create') }}" class="btn btn-info mr-2">Create Menu</a>
                    <a href="{{ route('menu-permissions.create') }}" class="btn btn-success">Create Menu Permission</a>
                </div>
            </div>
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
                                    @can('edit')
                                        <a href="{{ route('menu-permission.edit', $permission->id) }}" class="btn btn-sm btn-outline-primary mr-1">
                                            <i class="fa fa-edit"></i>
                                        </a>
                                    @endcan
                                    @can('delete')
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
