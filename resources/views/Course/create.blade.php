@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">

        <!-- Back Button -->
        <a href="{{ route('Courses.index') }}" class="btn btn-outline-success mb-3">
            <h5>Back</h5>
        </a>

        <!-- Card Layout -->
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
        <div class="card">
            <div class="card-header bg-dark text-white">
                <h4 class="text-center">Create New Course</h4>
            </div>

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

                <form action="{{ route('Courses.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="semester_id">Semester</label>
                    <select name="semester_id" id="semester_id" class="form-control p-1" required>
                        <option value="">Select Semester</option>
                        {{-- @for ($i = 1; $i <= 8; $i++)
                            <option value="{{ $i }}">Semester {{ $i }}</option>
                        @endfor --}}
                        @foreach ($semesters as $semester)
                        <option value="{{ $semester->semester_id }}">{{ $semester->semester_name }}</option>
                        @endforeach
                    </select>
                    @error('semester_id')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="course_name">Course Name</label>
                    <input type="text" name="course_name" id="course_name" class="form-control" required>
                    @error('course_name')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="course_code">Course Code</label>
                    <input type="text" name="course_code" id="course_code" class="form-control" required>
                    @error('course_code')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="credit">Credit Hours</label>
                    <input type="number" name="credit" id="credit" class="form-control" required>
                    @error('credit')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Add Course</button>
                </form>

                <!-- Form Ends -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>

@endsection




