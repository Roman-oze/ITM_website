@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2>Schedules</h2>
        <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">Add New Schedule</a>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Schedule ID</th>
                    <th>Day</th>
                    <th>Course</th>
                    <th>Teacher</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->schedule_id }}</td>
                        <td>{{ $schedule->Day }}</td>
                        <td>{{ $schedule->course->course_name }}</td>
                        <td>{{ $schedule->teacher->name }}</td>
                        <td>
                            <a href="{{ route('schedules.edit', $schedule->schedule_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('schedules.destroy', $schedule->schedule_id) }}" method="POST" style="display:inline;">
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
