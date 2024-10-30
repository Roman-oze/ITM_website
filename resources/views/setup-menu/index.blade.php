@extends('layout.dashboard')

@section('main')
<main>

<div class="container">
    <h1 class="mt-4">Menu Permissions</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu Permissions </li>
    </ol>
    <br>

  <div class="card mt-3">
    <div class="card-header">
        <h2 class="card-title"></h2>
        <a href="{{route('menu.create')}}" class="btn btn-info">Create Menu</a>
        <a href="{{route('menu-permissions.create')}}" class="btn btn-success float-end">Create Menu Permission</a>
    </div>
  </div>

  <table class="mt-3
  table table-striped table-bordered">
    <thead>
        <tr>
            <th>Menu</th>
            <th>Role</th>
            <th>Can Create</th>
            <th>Can Edit</th>
            <th>Can Update</th>
            <th>Can Delete</th>
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
            </tr>
        @endforeach
    </tbody>
</table>

  {{-- <h2>Permissions List</h2>

  <div class="container mt-5">
    <h2 class="mb-4">Permissions List</h2>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="">
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
                        <td>{{ $permission->menu->name }}</td> <!-- Assumes relation exists -->
                        <td>{{ ucfirst($permission->role) }}</td>
                        <td>{{ $permission->can_create ? 'Yes' : 'No' }}</td>
                        <td>{{ $permission->can_edit ? 'Yes' : 'No' }}</td>
                        <td>{{ $permission->can_update ? 'Yes' : 'No' }}</td>
                        <td>{{ $permission->can_delete ? 'Yes' : 'No' }}</td>
                        <td>
                            <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div> --}}

{{-- <div class="container">
    <h2>Menu Permissions</h2>
    <form method="POST" action="{{ route('menu.permissions') }}">
        @csrf

        @foreach($roles as $role)
            <h3>{{ ucfirst($role->name) }} Permissions</h3>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Menu</th>
                        <th>View</th>
                        <th>Create</th>
                        <th>Edit</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($menus as $menu)
                        <tr>
                            <td>{{ $menu->name }}</td>

                            @foreach(['view', 'create', 'edit', 'delete'] as $action)
                                <td>
                                    <input type="checkbox" name="permissions[{{ $role->id }}][{{ $menu->id }}][{{ $action }}]"
                                           value="1"
                                           {{ $role->hasPermissionTo("{$action} {$menu->name}") ? 'checked' : '' }}>
                                </td>
                            @endforeach
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endforeach

        <button type="submit" class="btn btn-primary">Save Permissions</button>
    </form>
</div> --}}
</main>
@endsection
