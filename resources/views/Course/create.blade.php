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

                <!-- Form Starts -->
                <form action="{{ route('Courses.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="course_name" class="form-label">Course Name</label>
                        <input type="text" name="course_name" class="form-control" id="course_name" required>
                    </div>
                    <div class="mb-3">
                        <label for="course_code" class="form-label">Course Code</label>
                        <input type="text" name="course_code" class="form-control" id="course_code" required>
                    </div>
                    <div class="mb-3">
                        <label for="credit" class="form-label">Credit</label>
                        <input type="number" name="credit" class="form-control" id="credit" required>
                    </div>

                    <!-- Save Button -->
                    <div class="text-center">

                        <button type="submit" class="btn bg-dark text-white ">Save</button>
                    </div>
                </form>
                <!-- Form Ends -->
            </div>
        </div>
    </div>
    </div>
    </div>
</main>

@endsection
