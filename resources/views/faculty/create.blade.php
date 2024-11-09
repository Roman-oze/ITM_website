{{-- resources/views/faculty/create.blade.php --}}
@extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Faculty Management</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Faculty List</li>
    </ol>

<div class="container d-flex justify-content-center align-items-center min-vh-85">
    <div class="card shadow p-4 border-0 rounded" style="max-width: 600px; width: 100%;">
        <form action="{{ route('faculty.store') }}" enctype="multipart/form-data" method="POST">
            @csrf

            @if (session('success'))
            <div class=" alert alert-success">
                {{ session('success')}}
            </div>
            @endif
            @if (session('error'))
            <div class=" alert alert-danger">
                {{ session('error')}}
            </div>
            @endif

            <div class="mb-3">
                <label for="imageInput" class="form-label">Image URL</label>
                <input type="file" class="form-control p-2" id="imageInput" name="image" >
                <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" name="name">
                <span class="text-danger small">@error('name'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="designationInput" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designationInput" name="designation">
                <span class="text-danger small">@error('designation'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="facebookInput" class="form-label">Facebook URL</label>
                <input type="text" class="form-control" id="facebookInput" name="fb">
                <span class="text-danger small">@error('fb'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="linkedinInput" class="form-label">LinkedIn URL</label>
                <input type="text" class="form-control" id="linkedinInput" name="linked">
                <span class="text-danger small">@error('linked'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email">
                <span class="text-danger small">@error('email'){{ $message }}@enderror</span>
            </div>

            <div class="mb-3">
                <label for="phoneInput" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phoneInput" name="phone">
                <span class="text-danger small">@error('phone'){{ $message }}@enderror</span>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary w-100">Save</button>
            </div>
        </form>
    </div>
</div>
</div>
<br>
<br>
@endsection
