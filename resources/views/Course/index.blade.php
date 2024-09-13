@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2>Course List</h2>


        <div class="card">
            <div class="card-header">
                <h3>
                    <form action="{{ route('course.search')}}"  class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET">
                        <div class="input-group">
                            <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </form>





                    {{-- <form action="{{ route('course.search') }}" method="GET">
                        <div class="form-group">
                            <input type="text" name="search" class="form-control" placeholder="Search by course or teacher" value="{{ request('search') }}">
                        </div>
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form> --}}


                    <a href="{{ route('Courses.create') }}" class="btn btn-primary float-end">Add New Course</a>
                </h3>
            </div>
            @if($courses->isEmpty())
            <p>No results found.</p>
            @else
            <ul>
                @foreach($courses as $course)
                    <li>{{ $course->course_name }} ({{ $course->course_code }})</li>
                @endforeach
            </ul>
            @endif

            <div class="table-responsive">
                <table class="table table-striped">
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
                @foreach( $courses as $course)
                    <tr>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->credit }}</td>
                        <td>
                            <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">   <i class="fa-solid fa-user-pen"></i></a>
                            <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">                                <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>

                    </tr>
                @endforeach

            </tbody>
        </table>
        {{-- {{ $courses->links('pagination::bootstrap-4') }} --}}

    </div>
    </div>

    </div>

</main>

@endsection
