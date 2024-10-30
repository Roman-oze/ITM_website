@extends('layout.dashboard')

@section('main')
<main>
<div class="container">

    <h1 class="">Assign Menu Permission</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu Permission List </li>
    </ol>
    <br>

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
        </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
        </div>
    @endif

    <div class="container ">
        {{-- <form action="{{ route('menu-permission.store') }}" method="POST" class="p-4 bg-white rounded shadow">
            @csrf

            <!-- Menu Multi-select Dropdown -->
            <div class="form-group">
                <label for="menu_ids" class="font-weight-bold">Menu Name</label>
                <select name="menu_ids[]" id="menu_ids" class="form-control" multiple required>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">You can select multiple options.</small>
            </div>

            <!-- Role Multi-select Dropdown -->
            <div class="form-group">
                <label for="role_ids" class="font-weight-bold">Roles Name</label>
                <select name="role_ids[]" id="role_ids" class="form-control" multiple required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">You can select multiple options.</small>
            </div>

            <!-- Permissions Checkboxes -->
            <div class="form-group">
                <label class="font-weight-bold">Permissions</label>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_create]" id="can_create" value="1">
                        <label class="form-check-label badge badge-secondary text-white" for="can_create">Create</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_edit]" id="can_edit" value="1">
                        <label class="form-check-label badge badge-success text-white" for="can_edit">Edit</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_update]" id="can_update" value="1">
                        <label class="form-check-label badge badge-info text-white" for="can_update">Update</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_delete]" id="can_delete" value="1">
                        <label class="form-check-label badge badge-danger text-white" for="can_delete">Delete</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form> --}}
        <form action="{{ route('menu-permission.store') }}" method="POST" class="p-4 bg-white rounded shadow">
            @csrf

            <!-- Menu Multi-select Dropdown -->
            <div class="form-group">
                <label for="menu_ids" class="font-weight-bold">Menu Name</label>
                <select name="menu_ids[]" id="menu_ids" class="form-control" multiple required>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">You can select multiple options.</small>
            </div>

            <!-- Role Multi-select Dropdown -->
            <div class="form-group">
                <label for="role_ids" class="font-weight-bold">Roles Name</label>
                <select name="role_ids[]" id="role_ids" class="form-control" multiple required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">You can select multiple options.</small>
            </div>

            <!-- Permissions Checkboxes -->
            <div class="form-group">
                <label class="font-weight-bold">Permissions</label>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_create]" id="can_create" value="1">
                        <label class="form-check-label badge badge-secondary text-white" for="can_create">Create</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_edit]" id="can_edit" value="1">
                        <label class="form-check-label badge badge-success text-white" for="can_edit">Edit</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_update]" id="can_update" value="1">
                        <label class="form-check-label badge badge-info text-white" for="can_update">Update</label>
                    </div>
                    <div class="form-check mr-3">
                        <input class="form-check-input" type="checkbox" name="permissions[can_delete]" id="can_delete" value="1">
                        <label class="form-check-label badge badge-danger text-white" for="can_delete">Delete</label>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-dark">Submit</button>
            </div>
        </form>


    </div>

</div>
</main>
@endsection
