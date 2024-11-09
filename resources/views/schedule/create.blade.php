

@extends('layout.dashboard')

@section('main')
<div class="container-fluid px-4">
    <h2 class="mt-4">Course Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Course create</li>
    </ol>

    <!-- Card Layout -->
    <div class="row d-flex justify-content-center">
        <div class="col-md-6">
    <div class="card">
        <div class="card-body">

            @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if(session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif
        <form action="{{ route('schedules.store') }}" method="POST">
            @csrf
            <div class="mb-3">

            </div>
            <div class="row mb-3">
                <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                <div class="col-sm-10">
                    <select name="course_id" id="course_id" class="form-select" required>
                        @foreach($courses as $course)
                            <option value="{{ $course->course_id }}">  {{$course->course_code }} -- {{ $course->course_name}} </option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-4">
                <label for="faculty_id" class="col-sm-2 col-form-label">Faculty</label>
                <div class="col-sm-10">
                    <select name="teacher_id" id="teacher_id" class="form-select" required>
                        @foreach($teachers as $teacher)
                            <option value="{{ $teacher->teacher_id }}">{{ $teacher->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <label for="room_no" class="col-sm-2 col-form-label">Room No</label>
                <div class="col-sm-10">
                    <input type="text" name="room_no" id="room_no" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="day" class="col-sm-2 col-form-label">Day</label>
                <div class="col-sm-10">
                    <input type="text" name="day" id="day" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="start_time" class="col-sm-2 col-form-label">Start Time</label>
                <div class="col-sm-10">
                    <input type="time" name="start_time" id="start_time" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="end_time" class="col-sm-2 col-form-label">End Time</label>
                <div class="col-sm-10">
                    <input type="time" name="end_time" id="end_time" class="form-control" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-dark">Create</button>
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
@endsection
