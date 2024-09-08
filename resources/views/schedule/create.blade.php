@extends('layout.dashboard')

@section('main')

<main>

<div class="container mt-5">

    <a href="{{route('schedules.index')}}"><h2>Back</h2></a>

    <form action="{{ route('schedules.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="day" class="form-label">Day</label>
            <input type="text" name="Day" class="form-control" id="day" required>
        </div>
        {{-- <div class="mb-3">
            <label for="course_id" class="form-label">User ID</label>
            <select name="user_id" id="course_id" class="form-select" required>
                <option value="" disabled selected>Select User</option>
                @foreach($users as $user)
                    <option value="{{ $user->user_id }}">{{ $user->name }}</option>
                @endforeach
            </select>
        </div> --}}
        <div class="mb-3">
            <label for="course_id" class="form-label">Course</label>
            <select name="course_id" id="course_id" class="form-select" required>
                <option value="" disabled selected>Select Course</option>
                @foreach($courses as $course)
                    <option value="{{ $course->course_id }}">{{ $course->course_name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="teacher_id" class="form-label">Teacher</label>
            <select name="teacher_id" id="teacher_id" class="form-select" required>
                <option value="" disabled selected>Select Teacher</option>
                @foreach($teachers as $teacher)
                    <option class="text-dark" value="{{ $teacher->teacher_id }}">{{ $teacher->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-success">Save Schedule</button>
    </form>
</div>
</main>
@endsection
