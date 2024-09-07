@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2>Course</h2>
        <a href="{{ route('Courses.create') }}" class="btn btn-primary mb-3">Add New Course</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Course Name</th>
                    <th>Course Code</th>
                    <th>Credit</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach( $courses as $course)
                    <tr>
                        <td>{{ $course->course_id }}</td>
                        <td>{{ $course->course_name }}</td>
                        <td>{{ $course->course_code }}</td>
                        <td>{{ $course->credit }}</td>
                        <td>
                            <a href="{{ route('Courses.edit', $course->course_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('Courses.destroy', $course->course_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>
@endsection
