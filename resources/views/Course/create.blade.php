@extends('layout.dashboard')

@section('main')

<main>

<div class="container mt-5">

    <a href="{{route('Courses.index')}} " class="btn btn-outline-success text-left"><h5>Back</h5></a>

    <form action="{{ route('Courses.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="day" class="form-label">Course name</label>
            <input type="text" name="course_name" class="form-control" id="day" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Course Code</label>
            <input type="text" name="course_code" class="form-control" id="day" required>
        </div>
        <div class="mb-3">
            <label for="day" class="form-label">Credit</label>
            <input type="number" name="credit" class="form-control" id="day" required>
        </div>

        <button type="submit" class="btn btn-success">Save</button>
    </form>
</div>
</main>
@endsection
