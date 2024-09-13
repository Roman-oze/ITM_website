@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2>Schedules</h2>
        <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">Add New Schedule</a>

        @if (session()->has('success'))

        <div class="alert alert-success">
            {{ session()->get('success') }}
            </div>

        @endif

        @if (session()->has('error'))

        <div class="alert alert-danger">
            {{ session()->get('error') }}
            </div>

        @endif


        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Course</th>
                    <th>Faculty</th>
                    <th>Room No</th>
                    <th>Day</th>
                    <th>Start Time</th>
                    <th>End Time</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($schedules as $schedule)
                    <tr>
                        <td>{{ $schedule->course->course_name }}</td>
                        <td>{{ $schedule->teacher->name }}</td>
                        <td>{{ $schedule->room_no }}</td>
                        <td>{{ $schedule->day }}</td>
                        <td>{{ $schedule->start_time }}</td>
                        <td>{{ $schedule->end_time }}</td>
                        <td>
                            <a href="{{ route('schedules.edit', $schedule->schedule_id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('schedules.delete', $schedule->schedule_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>


</main>
@endsection

{{-- @extends('layout.dashboard')

@section('main')
    <h1>Schedules</h1>
    <a href="{{ route('schedules.create') }}">Create New Schedule</a>
    <table>
        <thead>
            <tr>
                <th>Room No</th>
                <th>Day</th>
                <th>Start Time</th>
                <th>End Time</th>
                <th>Course</th>
                <th>Faculty</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($schedules as $schedule)
                <tr>
                    <td>{{ $schedule->room_no }}</td>
                    <td>{{ $schedule->day }}</td>
                    <td>{{ $schedule->start_time }}</td>
                    <td>{{ $schedule->end_time }}</td>
                    <td>{{ $schedule->course->course_name }}</td>
                    <td>{{ $schedule->faculty->faculty_name }}</td>
                    <td>
                        <a href="">Edit</a>
                        <form action="" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
 --}}
