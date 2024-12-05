<!-- resources/views/scholarship/create.blade.php -->

@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Create Scholarship</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Scholarship Create</li>
    </ol>

    <div class="container d-flex justify-content-center align-items-center min-vh-85">
        <div class="card shadow-lg border-0 rounded-lg w-50">
            <div class="card-header bg-dark text-white text-center">
                <h4 class="fw-bold">Add Scholarship Details</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('store.scholarship') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="image" class="form-label">Student Photo</label>
                        <input type="file" class="form-control" name="image" required>
                        <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Student Name</label>
                        <select name="name" id="name" class="form-select">
                            <option value="" disabled selected>Select a student</option>
                            @foreach($students as $student)
                                <option value="{{ $student->name }}">{{ $student->name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="roll" class="form-label">Student Roll</label>
                        <select name="roll" id="roll" class="form-select">
                            @foreach($students as $student)
                                <option value="{{ $student->roll }}">{{ $student->roll }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="batch" class="form-label">Batch</label>
                        <select name="batch" id="batch" class="form-select">
                            <option value="" disabled selected>Select a batch</option>
                            @foreach($batches as $batch)
                                <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                            @endforeach
                        </select>
                        <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email Address</label>
                        <input type="email" class="form-control" name="email" required placeholder="example@student.com">
                        <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="duration" class="form-label">Scholarship Duration (in month/Years)</label>
                        <input type="text" class="form-control" name="duration" required placeholder="Enter duration">
                        <span class="text-danger">@error('duration'){{ $message }}@enderror</span>
                    </div>

                    <div class="mb-3">
                        <label for="country" class="form-label">Country</label>
                        <input type="text" class="form-control" name="country" required placeholder="Enter country">
                        <span class="text-danger">@error('country'){{ $message }}@enderror</span>
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-dark px-4">
                            <i class="fas fa-paper-plane"></i> Submit
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
