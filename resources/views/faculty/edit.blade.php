@extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Faculty Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Faculty Edit</li>
    </ol>

    <div class="container d-flex justify-content-center align-items-center min-vh-85">
        <div class="card shadow-lg p-4 border-0 rounded-3" style="max-width: 600px; width: 100%; background: #f9f9f9;">
            <form action="{{ route('update.faculty', $teacher->teacher_id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                {{-- Success and Error Alerts --}}
                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('error') }}
                    </div>
                @endif

                {{-- Current Profile Picture --}}
                <div class="mb-4 text-center">
                    @if ($teacher->image)
                        <div class="mb-3">
                            <img src="{{ asset($teacher->image) }}" alt="Teacher Image" class="rounded-circle shadow" width="120" height="120">
                            <p class="badge bg-secondary mt-2">Current Profile Picture</p>
                        </div>
                    @endif
                    <label for="image" class="form-label fw-bold">Upload New Profile Picture</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                {{-- Name Input --}}
                <div class="mb-4">
                    <label for="nameInput" class="form-label fw-bold">Full Name</label>
                    <input type="text" class="form-control" id="nameInput" name="name" value="{{ $teacher->name }}" placeholder="Enter full name">
                </div>

                {{-- Designation Input --}}
                <div class="mb-4">
                    <label for="designationInput" class="form-label fw-bold">Designation</label>
                    <input type="text" class="form-control" id="designationInput" name="designation" value="{{ $teacher->designation }}" placeholder="Enter designation">
                </div>

                {{-- Facebook and LinkedIn Inputs --}}
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="facebookInput" class="form-label fw-bold">Facebook URL</label>
                        <input type="url" class="form-control" id="facebookInput" name="fb" value="{{ $teacher->fb }}" placeholder="e.g., https://facebook.com/profile">
                    </div>
                    <div class="col-md-6">
                        <label for="linkedinInput" class="form-label fw-bold">LinkedIn URL</label>
                        <input type="url" class="form-control" id="linkedinInput" name="linked" value="{{ $teacher->linked }}" placeholder="e.g., https://linkedin.com/in/profile">
                    </div>
                </div>

                {{-- Email and Phone Inputs --}}
                <div class="row g-3 mt-4">
                    <div class="col-md-6">
                        <label for="emailInput" class="form-label fw-bold">Email Address</label>
                        <input type="email" class="form-control" id="emailInput" name="email" value="{{ $teacher->email }}" placeholder="Enter email address">
                    </div>
                    <div class="col-md-6">
                        <label for="phoneInput" class="form-label fw-bold">Phone Number</label>
                        <input type="text" class="form-control" id="phoneInput" name="phone" value="{{ $teacher->phone }}" placeholder="Enter phone number">
                    </div>
                </div>

                {{-- Submit Button --}}
                <div class="text-center mt-5">
                    <button type="submit" class="btn btn-primary w-100 py-2">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
