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
            <div class="m-3">
                <a href="{{route('schedules.create')}}" class="btn btn-dark float-left">Add Schedule</a>

                <form action="" method="GET" class="form-inline ms-auto d-flex float-end">
                    <input class="form-control me-2" id="searchInput" type="text" name="search" placeholder="Just Write here...." onkeyup="searchTable()" aria-label="Search">
                </form>
            </div>
            <br>
            <br>


          
        @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
            </div>

        @endif
    

      
<table class="table table-bordered m-3">
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
                    @can('delete')
                    <form action="{{ route('schedules.delete', $schedule->schedule_id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('Are You Sure?')" class="btn btn-danger">Delete</button>
                    </form>
                    @endcan
                </td>
            </tr>
        @endforeach
    </tbody>
</table>


    {{ $schedules->links('pagination::bootstrap-4') }}

</div>

{{-- <script>
    function searchTable() {
        const input = document.getElementById('searchInput');
        const filter = input.value.toLowerCase();
        const table = document.querySelector('.table tbody');
        const rows = table.getElementsByTagName('tr');
    
        // Loop through all table rows, except the header
        for (let i = 0; i < rows.length; i++) {
            const cells = rows[i].getElementsByTagName('td');
            let found = false;
    
            // Check each cell in the row
            for (let j = 0; j < cells.length; j++) {
                const cell = cells[j];
                // Only check relevant columns: Course Code, Course Name, and Faculty
                if (j === 0 || j === 1 || j === 2) { // indices for Course Code, Course Name, and Faculty
                    if (cell.textContent.toLowerCase().indexOf(filter) > -1) {
                        found = true;
                        break; // Stop searching this row if a match is found
                    }
                }
            }
    
            // Toggle the visibility of the row based on the search result
            rows[i].style.display = found ? '' : 'none';
        }
    }
    </script> --}}
 
        


</main>
@endsection

