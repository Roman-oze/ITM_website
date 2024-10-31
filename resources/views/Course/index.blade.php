@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">

        <h1 class="mt-4">Course</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Course List List</li>
        </ol>
        <br>


        <!-- Flexbox container for centering the card -->
        <div class="d-flex justify-content-center">
            <div class="card w-100" style="max-width: 900px;">
                <div class="card-header">
                    <h3 class="d-flex justify-content-between align-items-center">
                        <!-- Search Form -->
                        <form action="{{ route('course.search')}}" class="d-none d-md-inline-block form-inline" method="GET">
                            <div class="input-group">
                                <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                                <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </form>

                        <!-- Add New Course Button -->
                        <a href="{{ route('Courses.create') }}" class="btn btn-primary float-end">Add New Course</a>
                    </h3>
                </div>

                <div class="card-body">
                    <!-- If no results are found -->
                    {{-- @if($courses->isEmpty())
                        <p class="text-center">No results found.</p>
                    @else
                        <ul>
                            @foreach($courses as $course)
                                <li>{{ $course->course_name }} ({{ $course->course_code }})</li>
                            @endforeach
                        </ul>
                    @endif --}}

                    <!-- Table for course data -->
                    {{-- <div class="table-responsive">
                        <table class="table table-striped text-center">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course Code</th>
                                    <th>Course Name</th>
                                    <th>Credit</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{ $course->course_id }}</td>
                                        <td>{{ $course->course_code }}</td>
                                        <td>{{ $course->course_name }}</td>
                                        <td>{{ $course->credit }}</td>
                                        <td>
                                            <!-- Edit Button -->
                                            <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">
                                                <i class="fa-solid fa-user-pen"></i>
                                            </a>

                                            <!-- Delete Form -->
                                            <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure !')">
                                                    <i class="fa fa-trash"></i>
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> --}}

                    <div class="container">
                        @foreach($courses as $semesterId => $semesterCourses)
                            <h3>Semester {{ $semesterId }}</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Course Code</th>
                                        <th>Course Name</th>
                                        <th>Credit </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($semesterCourses as $course)
                                        <tr>
                                            <td>{{ $course->course_code }}</td>
                                            <td>{{ $course->course_name }}</td>
                                            <td>{{ $course->credit }}</td>
                                            <td>
                                                <td>


                                                    <!-- Edit Button -->

                                                    <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">
                                                        <i class="fa-solid fa-user-pen"></i>
                                                    </a>


                                                    <!-- Delete Form -->
                                                    @can('delete')
                                                    <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger btn-sm" onclick=" return confirm('Are you sure !')">
                                                            <i class="fa fa-trash"></i>
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </td>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @endforeach
                    </div>

                    <!-- Pagination (if needed) -->
                    {{-- {{ $courses->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
