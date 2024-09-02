@extends('layout.dashboard')

@section('main')
<main>
<div class="container">
    <h1>Assign Menu Permission</h1>

    <form action="{{ route('menu-permission.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="user_id" class="form-label">User ID</label>
            <input type="number" name="user_id" id="user_id" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="menu_id" class="form-label">Menu ID</label>
            <input type="number" name="menu_id" id="menu_id" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Assign Permission</button>
    </form>
</div>
</main>
@endsection
