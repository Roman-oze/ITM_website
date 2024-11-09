{{-- resources/views/schedules/show.blade.php --}}
@extends('layout.dashboard')

@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Schedule Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Schedule edit</li>
    </ol>
    <div class="card shadow-lg">
        <div class="card-header bg-dark text-white text-center">
            <h3 >Schedule Details</h3>
        </div>


        <div class="card-body">
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Course Code:</div>
                <div class="col-6 text-right">{{ $schedule->course->course_code }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Course Name:</div>
                <div class="col-6 text-right">{{ $schedule->course->course_name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Faculty:</div>
                <div class="col-6 text-right">{{ $schedule->teacher->name }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Room No:</div>
                <div class="col-6 text-right">{{ $schedule->room_no }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Day:</div>
                <div class="col-6 text-right">{{ $schedule->day }}</div>
            </div>
            <div class="row mb-3">
                <div class="col-6 font-weight-bold">Time:</div>
                <div class="col-6 text-right">{{ $schedule->start_time }} - {{ $schedule->end_time }}</div>
            </div>
        </div>

        <div class="card-footer text-center">
            <a href="{{ route('schedules.index') }}" class="btn btn-outline-dark">Back to Schedule List</a>
        </div>
    </div>
</div>

@endsection
