@extends('layout.dashboard')
 <!-- Sweet alert -->
 @include('include.alerts')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4 text-dark   ">Schedules Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-decoration-none text-secondary">Dashboard</a></li>
            <li class="breadcrumb-item active">Schedules List</li>
        </ol>

        <!-- Add Button -->
        @can('manage-user')
        <div class="d-flex justify-content-start mb-3">
            <a href="{{ route('schedules.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Schedule
            </a>
        </div>
        @endcan

        <!-- Search Form -->
        <div class="d-flex justify-content-between mb-3">
            <form action="" method="GET" class="d-flex" style="max-width: 500px; width: 100%;">
                <input class="form-control me-2 rounded-pill shadow-lg border-0 animated-card" id="searchInput" type="text" name="search" placeholder="Search by course name or faculty..." onkeyup="searchTable()" aria-label="Search">
            </form>
        </div>

        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover table-striped table-bordered shadow-sm">
                <thead class="thead-light bg-info text-white">
                    <tr>
                        <th>Course Code</th>
                        <th>Course Name</th>
                        <th>Faculty</th>
                        <th>Room No</th>
                        <th>Day</th>
                        <th>Start Time</th>
                        @can('manage-user')
                        <th>Actions</th>
                        @endcan
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
                            <td>{{ \Carbon\Carbon::parse($schedule->start_time)->format('h:i A') }}</td>
                            @can('manage-user')
                            <td class="d-flex justify-content-center">
                                <!-- Edit Button -->
                                @can('update user')
                                <a href="{{ route('schedules.edit', $schedule->schedule_id) }}" class="btn btn-warning btn-sm me-2">
                                    <i class="fas fa-edit"></i>
                                </a>
                                @endcan
                                <!-- Delete Form -->
                                @can('delete user')
                                    <form action="{{ route('schedules.delete', $schedule->schedule_id) }}" method="POST" style="display:inline;">
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

        <!-- Pagination -->
            {{ $schedules->links('pagination::bootstrap-4') }}
    </div>
</main>


<script>
    function searchTable() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const table = document.querySelector('table tbody');
        const rows = table.querySelectorAll('tr');

        rows.forEach(row => {
            const cells = row.querySelectorAll('td');
            const courseCode = cells[0].textContent.toLowerCase(); // course_code
            const courseName = cells[1].textContent.toLowerCase(); // course_name
            const facultyName = cells[2].textContent.toLowerCase(); // name
            const roomNo = cells[3].textContent.toLowerCase(); // room_no
            const day = cells[4].textContent.toLowerCase(); // day

            // Check if input matches any of the relevant fields
            if (courseCode.includes(input) ||
                courseName.includes(input) ||
                facultyName.includes(input) ||
                roomNo.includes(input) ||
                day.includes(input)) {
                row.style.display = ''; // Show row
            } else {
                row.style.display = 'none'; // Hide row
            }
        });
    }
</script>


@endsection
