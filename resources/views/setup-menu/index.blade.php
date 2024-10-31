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
                <td>
                        @can('edit')
                        <a href="{{ route('menu-permission.edit', $permission->id) }}" class="btn btn-info">
                            <i class="fa fa-edit"></i>
                            </a>
                        @endcan

                        @can('delete')
                            <a href="{{ route('menu-permissions.destroy', $permission->id) }}" class="btn btn-danger " onclick="return confirm('Are you sure!')">
                                <i class="fa fa-trash "></i>
                            </a>
                        @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

{{-- <div class="row">
    @foreach($permissions as $permission)
        <div class="col-md-4 mb-4"> <!-- Adjust the column size as needed -->
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{ $permission->role->name }}</h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted">{{ $permission->menu?->name }}</h6>
                    <p class="card-text">
                        <strong>Create:</strong> {{ $permission->can_create ? 'Yes' : 'No' }}<br>
                        <strong>Edit:</strong> {{ $permission->can_edit ? 'Yes' : 'No' }}<br>
                        <strong>Update:</strong> {{ $permission->can_update ? 'Yes' : 'No' }}<br>
                        <strong>Delete:</strong> {{ $permission->can_delete ? 'Yes' : 'No' }}
                    </p>
                </div>
                <div class="card-footer">
                    <a href="{{ route('menu-permission.edit', $permission->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('menu-permission.destroy', $permission->id) }}" method="post" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    @endforeach
</div> --}}



</main>
@endsection
