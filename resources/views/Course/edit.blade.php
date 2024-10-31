@extends('layout.dashboard')

@section('main')

<main>

<div class="container mt-5">

    <a href="{{route('Courses.index')}} " class="btn btn-outline-success text-left"><h5>Back</h5></a>

    <form action="{{ route('Courses.update',$course->course_id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="day" class="form-label">Course name</label>
            <input type="text" name="course_name" class="form-control" id="day" value="{{ $course->course_name }}" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Course Code</label>
            <input type="text" name="course_code" class="form-control" value="{{ $course->course_code }}"  id="day" required>
        </div>

        <div class="form-group mb-3">
            <label for="batch" class="form-label text-white">Semester Choose :</label>
            <select name="batch_id" id="batch" class="form-select">
                @foreach($semesters as $semesters)
                    <option value="{{ $semesters->semester_id }}">{{ $semesters->semester_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="day" class="form-label">Credit</label>
            <input type="number" name="credit" class="form-control" value="{{ $course->credit }}" id="day" required>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
    </form>
</div>
</main>
@endsection
