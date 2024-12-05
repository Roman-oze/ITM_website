@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Officer & Staff Edit</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Edit</li>
        </ol>
        <br>

        <div class="d-flex justify-content-center align-items-center min-vh-85">
            <form action="{{ route('staff.update', $staff->id) }}" enctype="multipart/form-data" method="POST" class="border shadow rounded p-4 w-50 bg-light">
                @csrf
                @method('PUT')

                <!-- Profile Picture -->
                <div class="mb-4 text-center">
                    @if ($staff->image)
                        <img src="{{ asset($staff->image) }}" alt="Profile Picture" width="120" height="120" class="rounded-circle mb-3">
                        <p class="mb-0"><label for="image" class="badge bg-secondary">Current Profile</label></p>
                    @endif
                    <label for="imageInput" class="form-label fw-bold">Upload New Profile</label>
                    <input type="file" class="form-control form-control-lg" id="imageInput" name="image">
                    <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                </div>

                <!-- Form Fields -->
                <div class="row mb-3">
                    <label for="nameInput" class="col-sm-4 col-form-label text-end fw-bold">Name</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="nameInput" name="name" value="{{ $staff->name }}">
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="position" class="col-sm-4 col-form-label text-end fw-bold">Position</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="position" name="position" value="{{ $staff->position }}">
                        <span class="text-danger">@error('position'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="email" class="col-sm-4 col-form-label text-end fw-bold">Email</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="email" name="email" value="{{ $staff->email }}">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="phone" class="col-sm-4 col-form-label text-end fw-bold">Phone</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="phone" name="mobile" value="{{ $staff->mobile }}">
                        <span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                    <button type="submit" class="btn btn-dark px-4 rounded-pill">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</main>

@endsection
