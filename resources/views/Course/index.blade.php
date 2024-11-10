@extends('layout.dashboard')
 <!-- Sweet alert -->
 @include('include.alerts')
@section('main')
<main>

        <div class="container-fluid px-4">
            <h2 class="mt-4">Course Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Course List</li>
            </ol>

            <!-- Add Button -->
    @can('manage-user')
        <div class="d-flex  mb-3">
            <a href="{{ route('Courses.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Course
            </a>
        </div>
    @endcan

        <div class="d-flex justify-content-center">
            <div class="card w-100 shadow-lg" style="max-width: 900px;">
                <div class="card-body">
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
                                                @can('manage-user')
                                                <th>Actions</th>
                                                @endcan
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($semesterCourses as $course)
                                                <tr>
                                                    <td>{{ $course->course_code }}</td>
                                                    <td>{{ $course->course_name }}</td>
                                                    <td>{{ $course->credit }}</td>
                                                    @can('manage-user')
                                                    <td class="d-flex justify-content-center">
                                                        <!-- Edit Button -->
                                                        @can('update user')
                                                        <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm me-2">
                                                            <i class="fas fa-edit"></i>
                                                        </a>
                                                        @endcan
                                                        <!-- Delete Form -->
                                                        @can('delete user')
                                                            <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this course?')">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </button>
                                                            </form>
                                                        @endcan
                                                    </td>
                                                    @endcan
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- Pagination Links -->
                        {{ $coursePage->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
