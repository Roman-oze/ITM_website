@extends('layout.dashboard')

@section('main')
<main>
<div class="container">
    <h1>Create New Menu Item</h1>

    <!-- Display Validation Errors -->
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
    <!-- Menu Form -->
    {{-- <form action="{{ route('menu.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">Menu Name</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">URL</label>
            <input type="text" name="link" id="link" class="form-control"  value="{{ old('link') }}" >
        </div>

        <div class="mb-3">
            <label for="icon" class="form-label">Icon (optional)</label>
            <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon') }}">
        </div>

        <button type="submit" class="btn btn-primary">Create Menu Item</button>
    </form> --}}

    <!-- resources/views/create_menu.blade.php -->

<div class="container">
    <form action="{{ route('menu.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="icon">Icon</label>
            <input type="text" class="form-control" id="icon" name="icon" placeholder="Enter icon class (e.g., fa-solid fa-user)">
        </div>

        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter menu name" required>
        </div>

        <div class="form-group">
            <label for="link">Link</label>
            <input type="text" class="form-control" id="link" name="link" placeholder="Enter menu link (e.g., /dashboard/alumni)">
        </div>

        <div class="form-group">
            <label for="parent_id">Parent Menu</label>
            <select class="form-control p-1" id="parent_id" name="parent_id">
                <option value="">No Parent (Top-level menu)</option>
                @foreach($menus as $menu)
                    <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Create Menu</button>
    </form>
</div>


</div>
</main>
@endsection
