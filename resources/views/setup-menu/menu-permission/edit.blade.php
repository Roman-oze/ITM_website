@extends('layout.dashboard')

@section('main')
<main>
<div class="container">

    <h1 class="">Assign Menu Permission edit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Menu Permission edit </li>
    </ol>
    <br>

        <div class="container d-flex justify-content-center">
            <div class="card" style="width: 500px;"> <!-- Set a fixed width for a small card -->
                <div class="card-header text-center">
                    <h6 class="card-title">Edit Permission for {{ $permission->role->name }}</h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('menu-permissions.update', $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-2">
                            <label for="menuName" class="form-label">Menu Name</label>
                            <div class="alert alert-info mb-1" role="alert" style="font-size: 0.8rem;">
                                <span class="badge badge-dark">Current: {{ $permission->menu?->name }}</span>
                                <select name="" id="" class="form-control p-1">
                                    @foreach($menus as $menu)
                                    <option value="{{ $menu->id }}" {{ $permission->menu_id == $menu->
                                    id ? 'selected' : '' }}>
                                    {{ $menu->name }}
                                    </option>
                                    @endforeach
                                </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Create</label>
                            <div class="alert alert-info mb-1" role="alert" style="font-size: 0.8rem;">
                                Previous: {{ $permission->can_create ? 'Yes' : 'No' }}
                            </div>
                            <select class="form-select form-select-sm" name="can_create" required>
                                <option value="1" {{ old('can_create', $permission->can_create) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !old('can_create', $permission->can_create) ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Edit</label>
                            <div class="alert alert-info mb-1" role="alert" style="font-size: 0.8rem;">
                                Previous: {{ $permission->can_edit ? 'Yes' : 'No' }}
                            </div>
                            <select class="form-select form-select-sm" name="can_edit" required>
                                <option value="1" {{ old('can_edit', $permission->can_edit) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !old('can_edit', $permission->can_edit) ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Update</label>
                            <div class="alert alert-info mb-1" role="alert" style="font-size: 0.8rem;">
                                Previous: {{ $permission->can_update ? 'Yes' : 'No' }}
                            </div>
                            <select class="form-select form-select-sm" name="can_update" required>
                                <option value="1" {{ old('can_update', $permission->can_update) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !old('can_update', $permission->can_update) ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="mb-2">
                            <label class="form-label">Delete</label>
                            <div class="alert alert-info mb-1" role="alert" style="font-size: 0.8rem;">
                                Previous: {{ $permission->can_delete ? 'Yes' : 'No' }}
                            </div>
                            <select class="form-select form-select-sm" name="can_delete" required>
                                <option value="1" {{ old('can_delete', $permission->can_delete) ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ !old('can_delete', $permission->can_delete) ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-success btn-sm">Update</button>
                            <a href="{{ route('menu-permissions.index') }}" class="btn btn-secondary btn-sm">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</div>

<br>

</main>
@endsection
