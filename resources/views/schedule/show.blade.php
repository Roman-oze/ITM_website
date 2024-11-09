{{-- resources/views/schedules/show.blade.php --}}
@extends('layout.dashboard')

@section('main')
<div class="container px-3 py-4">
    <h2 class="text-primary mb-3">Schedule Edit</h2>
    <ol class="breadcrumb mb-3">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-primary">Dashboard</a></li>
        <li class="breadcrumb-item active text-secondary">Schedule Show</li>
    </ol>

    <div class="card small-card shadow-sm border-0 rounded-lg mb-3">
        <div class="card-header bg-primary text-white text-center py-2">
            <h5 class="mb-0"><i class="fas fa-calendar-check me-2"></i>Schedule Details</h5>
        </div>
        <div class="card-body p-3">
            <div class="row mb-2">
                <div class="col-5 text-muted small">Course Code:</div>
                <div class="col-7 text-end small">{{ $schedule->course->course_code }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-5 text-muted small">Course Name:</div>
                <div class="col-7 text-end small">{{ $schedule->course->course_name }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-5 text-muted small">Faculty:</div>
                <div class="col-7 text-end small">{{ $schedule->teacher->name }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-5 text-muted small">Room No:</div>
                <div class="col-7 text-end small">{{ $schedule->room_no }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-5 text-muted small">Day:</div>
                <div class="col-7 text-end small">{{ $schedule->day }}</div>
            </div>
            <div class="row mb-2">
                <div class="col-5 text-muted small">Time:</div>
                <div class="col-7 text-end small">{{ $schedule->start_time }} - {{ $schedule->end_time }}</div>
            </div>
        </div>
        <div class="card-footer text-center py-2 bg-light">
            <a href="{{ route('schedules.index') }}" class="btn btn-sm btn-outline-primary">
                <i class="fa fa-arrow-left"></i> Back
            </a>
        </div>
    </div>
</div>
@endsection
