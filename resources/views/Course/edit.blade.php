@extends('layout.dashboard')

@section('main')

<main>
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
</div>
</div>
</div>
</div>

</main>
@endsection
