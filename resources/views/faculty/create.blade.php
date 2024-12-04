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
        <div class="card shadow-lg p-5 border-0 rounded-3" style="max-width: 700px; width: 100%; background: #f9f9f9;">
            <h4 class="text-center mb-4">Add New Faculty</h4>
            <form action="{{ route('faculty.store') }}" enctype="multipart/form-data" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="imageInput" class="form-label fw-bold">Profile Picture</label>
                    <input type="file" class="form-control" id="imageInput" name="image">
                    <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">
                    <label for="nameInput" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="nameInput" name="name" placeholder="Enter full name">
                    <span class="text-danger small">@error('name'){{ $message }}@enderror</span>
                </div>

                <div class="mb-4">
                    <label for="designationInput" class="form-label fw-bold">Designation</label>
                    <input type="text" class="form-control" id="designationInput" name="designation" placeholder="Enter designation">
                    <span class="text-danger small">@error('designation'){{ $message }}@enderror</span>
                </div>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="facebookInput" class="form-label fw-bold">Facebook URL</label>
                        <input type="url" class="form-control" id="facebookInput" name="fb" placeholder="e.g., https://facebook.com/profile">
                        <span class="text-danger small">@error('fb'){{ $message }}@enderror</span>
                    </div>
                    <div class="col-md-6">
                        <label for="linkedinInput" class="form-label fw-bold">LinkedIn URL</label>
                        <input type="url" class="form-control" id="linkedinInput" name="linked" placeholder="e.g., https://linkedin.com/in/profile">
                        <span class="text-danger small">@error('linked'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="row g-3 mt-4">
                    <div class="col-md-6">
                        <label for="emailInput" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" id="emailInput" name="email" placeholder="Enter email">
                        <span class="text-danger small">@error('email'){{ $message }}@enderror</span>
                    </div>
                    <div class="col-md-6">
                        <label for="phoneInput" class="form-label fw-bold">Phone Number</label>
                        <input type="text" class="form-control" id="phoneInput" name="phone" placeholder="Enter phone number">
                        <span class="text-danger small">@error('phone'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary w-100 py-2">Save Faculty</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
