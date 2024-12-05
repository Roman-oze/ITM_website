{{-- @extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Event Management Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
        <li class="breadcrumb-item active">Events</li>
    </ol>

    <br>
    <div class="d-flex justify-content-center align-items-center min-vh-85">

        <form action="{{ route('event_update', $event->id) }}" enctype="multipart/form-data" method="POST" class="p-4 shadow-lg rounded bg-light w-50">
            @csrf
            @method('PUT')

            <!-- Image Upload -->
            <div class="mb-3">
                <label for="image" class="form-label fw-semibold">Event Image</label>
                @if ($event->image)
                    <div class="mb-2">
                        <img src="{{ asset($event->image) }}" alt="Event Image" class="img-thumbnail" style="width: 120px; height: auto;">
                    </div>
                @endif
                <input type="file" class="form-control shadow-sm" id="image" name="image">
                <small class="text-danger">@error('image'){{ $message }}@enderror</small>
            </div>

            <!-- Event Name -->
            <div class="mb-3">
                <label for="nameInput" class="form-label fw-semibold">Event Name</label>
                <input type="text" class="form-control shadow-sm" id="nameInput" name="name" value="{{ $event->name }}" required>
                <small class="text-danger">@error('name'){{ $message }}@enderror</small>
            </div>

            <!-- Date -->
            <div class="mb-3">
                <label for="dateInput" class="form-label fw-semibold">Date</label>
                <input type="date" class="form-control shadow-sm" id="dateInput" name="date" value="{{ $event->date }}" required>
                <small class="text-danger">@error('date'){{ $message }}@enderror</small>
            </div>

            <!-- Time -->
            <div class="mb-3">
                <label for="timeInput" class="form-label fw-semibold">Time</label>
                <input type="time" class="form-control shadow-sm" id="timeInput" name="time" value="{{ $event->time }}" required>
                <small class="text-danger">@error('time'){{ $message }}@enderror</small>
            </div>

            <!-- Location -->
            <div class="mb-3">
                <label for="locationInput" class="form-label fw-semibold">Location</label>
                <input type="text" class="form-control shadow-sm" id="locationInput" name="location" value="{{ $event->location }}" required>
                <small class="text-danger">@error('location'){{ $message }}@enderror</small>
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="descriptionInput" class="form-label fw-semibold">Description</label>
                <textarea class="form-control shadow-sm" id="descriptionInput" name="description" rows="3" required>{{ $event->description }}</textarea>
                <small class="text-danger">@error('description'){{ $message }}@enderror</small>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <button type="submit" class="btn btn-dark px-4 py-2 shadow-sm">Update Event</button>
            </div>
        </form>
    </div>
</div>

@endsection --}}


@extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Event Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
        <li class="breadcrumb-item active"> Event Edit</li>
    </ol>

    <!-- Compact Card Layout -->
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
            <div class="card shadow rounded-4 border-0">
                <div class="card-header bg-dark text-white text-center">
                    <h5 class="mb-0">Add New Event</h5>
                </div>
                <div class="card-body p-4">
                    <form action="{{route('event_update',$event->id)}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')


                        <!-- Image Upload -->
                        <div class="mb-4 text-center">
                            @if ($event->image)
                                <img src="{{ asset($event->image) }}" alt="Event Picture" width="150" height="120" class="rounded mb-3">
                                <p class="mb-0"><label for="image" class="badge bg-secondary">Current Profile</label></p>
                            @endif
                            <input type="file" class="form-control rounded-pill shadow-sm" id="imageInput" name="image">
                            <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                        </div>

                        <!-- Event Name -->
                        <div class="mb-3">
                            <label for="nameInput" class="form-label">Event Name</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" id="nameInput" value="{{$event->name}}" name="name" placeholder="Enter event name" required>
                            <span class="text-danger small">@error('name'){{ $message }}@enderror</span>
                        </div>

                        <!-- Date & Time -->
                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="date" class="form-label">Date</label>
                                <input type="date" class="form-control rounded-pill shadow-sm" id="date" value="{{$event->date}}" name="date" required>
                                <span class="text-danger small">@error('date'){{ $message }}@enderror</span>
                            </div>
                            <div class="col-md-6">
                                <label for="time" class="form-label">Time</label>
                                <input type="time" class="form-control rounded-pill shadow-sm" id="time" value="{{$event->time}}" name="time" required>
                                <span class="text-danger small">@error('time'){{ $message }}@enderror</span>
                            </div>
                        </div>

                        <!-- Location -->
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" class="form-control rounded-pill shadow-sm" id="location" value="{{$event->location}}" name="location" placeholder="Enter location" required>
                            <span class="text-danger small">@error('location'){{ $message }}@enderror</span>
                        </div>

                        <!-- Description -->
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control rounded shadow-sm" id="description"  name="description" rows="3" placeholder="Enter event description" required>{{ $event->description }}</textarea>
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
