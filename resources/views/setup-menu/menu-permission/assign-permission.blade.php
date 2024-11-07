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

    <div class="card">
        <div class="card-header">

            <a href="{{route('menu-permission.index')}}" class="btn btn-dark "> <i class="fa-solid fa-list"></i>Menu Permission List</a>
            <a href="{{route('menu.display')}}" class="btn btn-dark  float-end   "> <i class="fa-solid fa-bars-staggered"></i> Display Menu</a>
        </div>
     </div>

    <div class="container ">


        <form action="{{ route('menu-permission.store') }}" method="POST" class="p-4 bg-light rounded shadow-sm">
            @csrf

            <!-- Menu Multi-select Dropdown -->
            <div class="form-group mb-4">
                <label for="menu_ids" class="font-weight-bold">Menu Name</label>
                <select name="menu_ids[]" id="menu_ids" class="form-control custom-select" multiple required>
                    @foreach($menus as $menu)
                        <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Select one or more menus for this role.</small>
            </div>

            <!-- Role Multi-select Dropdown -->
            <div class="form-group mb-4">
                <label for="role_ids" class="font-weight-bold">Roles</label>
                <select name="role_ids[]" id="role_ids" class="form-control custom-select" multiple required>
                    @foreach($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                </select>
                <small class="form-text text-muted">Select one or more roles for the permissions.</small>
            </div>

            <!-- Permissions Checkboxes -->
            <div class="form-group">
                <label class="font-weight-bold mb-3">Permissions</label>
                <div class="card p-3 border-0 shadow-sm rounded bg-white">
                    <div class="d-flex flex-wrap justify-content-start">
                        <!-- Create Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_create]" id="can_create" value="1">
                            <label class="form-check-label badge badge-secondary text-white" for="can_create">Create</label>
                        </div>
                        <!-- Edit Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_edit]" id="can_edit" value="1">
                            <label class="form-check-label badge badge-success text-white" for="can_edit">Edit</label>
                        </div>
                        <!-- Update Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_update]" id="can_update" value="1">
                            <label class="form-check-label badge badge-info text-white" for="can_update">Update</label>
                        </div>
                        <!-- Delete Permission -->
                        <div class="form-check mx-2 mb-2">
                            <input class="form-check-input" type="checkbox" name="permissions[can_delete]" id="can_delete" value="1">
                            <label class="form-check-label badge badge-danger text-white" for="can_delete">Delete</label>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center mt-4">
                <button type="submit" class="btn btn-dark px-5">Save Permissions</button>
            </div>
        </form>


    </div>

</div>
</main>
@endsection
