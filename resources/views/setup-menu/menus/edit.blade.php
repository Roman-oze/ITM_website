@extends('layout.dashboard')

@section('main')
<main>
<div class="container my-5 d-flex justify-content-center">
    <div class="card" style="max-width: 500px; width: 100%;">
        <div class="card-body">
            <h5 class="card-title">Edit Menu</h5>

            <!-- Display Success and Error Messages -->
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

            <!-- Form Starts Here -->
            <form action="{{ route('menus.update', $menu->id) }}" method="POST">
                @csrf
                @method('PUT')

                <!-- Menu Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Menu Name</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Course" value="{{ $menu->name }}">
                </div>

                <!-- Icon -->
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon (Font Awesome class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="fa-solid fa-user" value="{{ $menu->icon }}">
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="/dashboard" value="{{ $menu->link }}">
                </div>

                <!-- Parent Menu (for dropdowns) -->
                <div class="mb-3">
                    <label for="parent_id" class="form-label">Parent Menu</label>
                    <select class="form-select" id="parent_id" name="parent_id">
                        <option value="">No Parent (Top-level menu)</option>
                        @foreach($menus as $parentMenu)
                            <option value="{{ $parentMenu->id }}" {{ $parentMenu->id == $menu->parent_id ? 'selected' : '' }}>
                                {{ $parentMenu->name }}
                            </option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Select a parent menu if this menu is a submenu.</small>
                </div>

                <!-- Sort Order -->
                <div class="mb-3">
                    <label for="order" class="form-label">Sort Order</label>
                    <input type="number" class="form-control" id="order" name="order" value="{{ $menu->order }}">
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Update Menu</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
