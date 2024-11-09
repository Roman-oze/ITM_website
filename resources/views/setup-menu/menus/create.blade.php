@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Menu Create</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Menu create</li>
        </ol>

<div class="container my-5 d-flex justify-content-center">
    <div class="card shadow rounded" style="max-width: 500px; width: 100%;">
        <div class="card-body">

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
            <form action="{{ route('menu.store') }}" method="POST">
                @csrf

                <!-- Menu Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">Menu Name</label>
                    <input type="text" class="form-control" id="name" name="name" required placeholder="Course">
                </div>

                <!-- Icon -->
                <div class="mb-3">
                    <label for="icon" class="form-label">Icon (Font Awesome class)</label>
                    <input type="text" class="form-control" id="icon" name="icon" placeholder="fa-solid fa-user" required>
                </div>

                <!-- Link -->
                <div class="mb-3">
                    <label for="link" class="form-label">Link</label>
                    <input type="text" class="form-control" id="link" name="link" placeholder="/dashboard">
                </div>

                <!-- Parent Menu (for dropdowns) -->
                <div class="mb-3">
                    <label for="parent_id" class="form-label">Parent Menu</label>
                    <select class="form-select" id="parent_id" name="parent_id">
                        <option value="">No Parent (Top-level menu)</option>
                        @foreach($menus as $menu)
                            <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                        @endforeach
                    </select>
                    <small class="form-text text-muted">Select a parent menu if this menu is a submenu.</small>
                </div>

                <!-- Sort Order -->
                <div class="mb-3">
                    <label for="order" class="form-label">Sort Order</label>
                    <input type="number" class="form-control" id="order" name="order">
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Create Menu</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</main>
@endsection
