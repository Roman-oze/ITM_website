@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h2 class="mt-5 text-center text-primary">Schedules Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Schedules List</li>
        </ol>

        <div class="m-3 d-flex flex-column flex-md-row justify-content-between align-items-center">
            <a href="{{ route('schedules.create') }}" class="btn btn-dark mb-3 mb-md-0"><i class="fas fa-plus-circle"></i> Add Schedule</a>
            <form action="" method="GET" class="d-flex" style="width: 100%; max-width: 400px;">
                <input class="form-control me-2" id="searchInput" type="text" name="search" placeholder="Search by course code, name, room no, or day..." onkeyup="searchTable()" aria-label="Search">
            </form>
        </div>

        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered rounded shadow-sm">
                <thead class="thead-light">
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
                            <td class="d-flex">
                                <a href="{{ route('schedules.show', $schedule->schedule_id) }}" class="btn btn-info btn-sm me-1">Show</a>
                                <a href="{{ route('schedules.edit', $schedule->schedule_id) }}" class="btn btn-warning btn-sm me-1">Edit</a>
                                @can('delete')
                                <form action="{{ route('schedules.delete', $schedule->schedule_id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this schedule?')" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                                @endcan
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $schedules->links('pagination::bootstrap-4') }}
        </div>
    </div>

    <script>
        function searchTable() {
            const input = document.getElementById('searchInput');
            const filter = input.value.toLowerCase();
            const table = document.querySelector('.table tbody');
            const rows = table.getElementsByTagName('tr');

            for (let i = 0; i < rows.length; i++) {
                const cells = rows[i].getElementsByTagName('td');
                let found = false;

                // Check relevant columns for matching text
                for (let j = 0; j < cells.length; j++) {
                    const cell = cells[j];
                    // Search in specific columns: course code, course name, faculty name, room number, and day
                    if (j === 0 || j === 1 || j === 2 || j === 3 || j === 4) {
                        if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
                            found = true;
                            break;
                        }
                    }
                }
                rows[i].style.display = found ? '' : 'none'; // Show or hide row based on match
            }
        }
    </script>
</main>

@endsection
