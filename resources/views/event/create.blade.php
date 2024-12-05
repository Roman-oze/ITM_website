@extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Event Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Event</li>
    </ol>

    <!-- Compact Card Layout -->
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white text-center">
                    <h5 class="mb-0">Add New Event</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{ url('event_store') }}" enctype="multipart/form-data" method="POST">
                        @csrf

                        <!-- Event Name -->
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Event Name</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" id="nameInput" name="name" placeholder="Enter event name" required>
                            <span class="text-danger small">@error('name'){{ $message }}@enderror</span>
                        </div>

                        <!-- Image Upload -->
                        <div class="mb-3">
                            <label for="imageInput" class="form-label">Upload Image</label>
                            <input type="file" class="form-control rounded-pill shadow-sm" id="imageInput" name="image">
                            <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                        </div>

                        <!-- Date & Time -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control rounded-pill shadow-sm" id="date" name="date" required>
                                <span class="text-danger small">@error('date'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <label for="time" class="form-label">Time</label>
                                <input type="time" class="form-control rounded-pill shadow-sm" id="time" name="time" required>
                                <span class="text-danger small">@error('time'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" id="location" name="location" placeholder="Enter location" required>
                            <span class="text-danger small">@error('location'){{ $message }}@enderror</span>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control rounded shadow-sm" id="description" name="description" rows="3" placeholder="Enter event description" required></textarea>
                            <span class="text-danger small">@error('description'){{ $message }}@enderror</span>
                        </div>

                        <!-- Submit Button -->
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark rounded-pill shadow-sm px-4">Save Event</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
