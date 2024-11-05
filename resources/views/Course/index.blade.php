@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">
        <h1 class="mt-4">Course Management</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Course List</li>
        </ol>

        <div class="d-flex justify-content-center">
            <div class="card w-100 shadow-lg" style="max-width: 900px;">
                <div class="card-header d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <!-- Search Form -->
                    <form action="{{ route('course.search') }}" method="GET" class="input-group mb-2 mb-md-0" style="max-width: 100%;">
                        <input type="text" class="form-control" name="search" placeholder="Search by course code or name..." aria-label="Search" />
                        <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                    </form>
                    <!-- Add New Course Button -->
                    <a href="{{ route('Courses.create') }}" class="btn btn-primary mt-2 mt-md-0">
                        <i class="fas fa-plus-circle"></i> Add New Course
                    </a>
                </div>

                <div class="card-body">
                    <!-- Session Alerts for Success and Error Messages -->
                    @if(session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    @if(session('error'))
                        <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

                    <!-- Filtered Courses by Semester -->
                    <div id="courseContainer">
                        @foreach($courses as $semesterId => $semesterCourses)
                            <div class="semester-section mb-4">
                                <h3 class="text-primary">Semester {{ $semesterId }}</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover table-bordered">
                                        <thead class="table-light">
                                            <tr>
                                                <th>Course Code</th>
                                                <th>Course Name</th>
                                                <th>Credit</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($semesterCourses as $course)
                                                <tr>
                                                    <td>{{ $course->course_code }}</td>
                                                    <td>{{ $course->course_name }}</td>
                                                    <td>{{ $course->credit }}</td>
                                                    <td class="d-flex justify-content-center">
                                                        <!-- Edit Button -->
                                                        @can('manage-user')
                                                            <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm me-2">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <!-- Delete Form -->
                                                            <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                    <div class="d-flex justify-content-center mt-4">
                        {{ $coursePage->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
