@extends('layout.dashboard')

@section('main')
<main>
<div class="container">
    <h1>Create New Menu Item</h1>

    <!-- Display Validation Errors -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Menu Form -->
    <form action="{{ route('menus.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="icon" class="form-label">Icon</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon') }}" required>
        </div>

        <div class="mb-3">
            <label for="nav_name" class="form-label">Navigation Name</label>
            <input type="text" name="nav_name" id="nav_name" class="form-control" value="{{ old('nav_name') }}" required>
        </div>

        <div class="mb-3">
            <label for="nav_link" class="form-label">Navigation Link</label>
            <input type="text" name="nav_link" id="nav_link" class="form-control" value="{{ old('nav_link') }}" required>
        </div>

        <div class="mb-3">
            <label for="parent_id" class="form-label">Parent Menu</label>
            <select name="parent_id" id="parent_id" class="form-select">
                <option value="">-- None --</option>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}" {{ old('parent_id') == $menu->id ? 'selected' : '' }}>
                        {{ $menu->nav_name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Menu</button>
    </form>
</div>
</main>
@endsection
