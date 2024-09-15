

@extends('layout.dashboard')

@section('main')
    <div class="container mt-5">
        <h1 class="mb-4">Create Schedule</h1>


        <form action="{{ route('schedules.update',$schedule->schedule_id) }}" method="PUT">
            @csrf
            <div class="mb-3">

            </div>
            <div class="row mb-3">
                <label for="course_id" class="col-sm-2 col-form-label">Course</label>
                <div class="col-sm-10">
                    <select name="course_id" id="course_id"  class="form-select" required>
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
                    <input type="text" name="room_no" id="room_no" value="{{$schedule->room_no}}" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="day" class="col-sm-2 col-form-label">Day</label>
                <div class="col-sm-10">
                    <input type="text" name="day" id="day" value="{{$schedule->day}}"class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="start_time" class="col-sm-2 col-form-label">Start Time</label>
                <div class="col-sm-10">
                    <input type="time" name="start_time" id="start_time" value="{{$schedule->start_time}}" class="form-control" required>
                </div>
            </div>
            <div class="row mb-3">
                <label for="end_time" class="col-sm-2 col-form-label">End Time</label>
                <div class="col-sm-10">
                    <input type="time" name="end_time" id="end_time" value="{{$schedule->end_time}}" class="form-control" required>
                </div>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>
    </div>
@endsection
