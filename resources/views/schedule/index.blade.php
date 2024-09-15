@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2 class="mt-5">Schedules</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">Schedules List </li>
        </ol>
        <div>
            <a href="{{ route('schedules.create') }}" class="btn btn-primary mb-3">Add New Schedule</a>


            <form action="{{route('schedule.search')}}" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0 float-end" method="GET">
                @csrf
                <div class="input-group">
                    <input class="form-control"   type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
                </div>
            </form>


        </div>
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
                    <th>Course Code</th>
                    <th>Course Name</th>
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
                        <td>{{ $schedule->course->course_code }}</td>
                        <td>{{ $schedule->course->course_name }}</td>
                        <td>{{ $schedule->teacher->name }}</td>
                        <td>{{ $schedule->room_no }}</td>
                        <td>{{ $schedule->day }}</td>
                        <td>{{ $schedule->start_time }}</td>
                        <td>{{ $schedule->end_time }}</td>
                        <td>
                            <a href="{{route('schedules.show', $schedule->schedule_id)}}" class="btn btn-info btn-sm">Show</a>
                            <a href="{{route('schedules.edit', $schedule->schedule_id)}}" class="btn btn-warning btn-sm">Edit</a>


                            <form action="{{ route('schedules.delete', $schedule->schedule_id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
                            </form>


                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $schedules->links('pagination::bootstrap-4') }}


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
