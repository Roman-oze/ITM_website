@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>

    <div class="container-fluid px-4">
        <h2 class="mt-4">Student Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Student List </li>
        </ol>

        <!-- Add Button -->
    <div class="d-flex mb-3">
        <a href="{{ route('create') }}" class="btn btn-dark rounded-pill shadow">
            <i class="fas fa-plus-circle"></i> Add Student
        </a>
    </div>

    <!-- Search Bar -->
    <div class="mb-3 d-flex justify-content-between">
        <input type="text" id="searchInput" class="form-control" placeholder="Search by name, roll, or email..." onkeyup="searchStudents()">
    </div>

    <!-- Student Cards -->
    <div class="row" id="studentList">
        @foreach($students as $student)
            <div class="col-md-4 col-sm-6 mb-3 student-card" data-name="{{ $student->name }}" data-roll="{{ $student->roll }}" data-batch="{{ $student->batch->batch_name ?? 'No Batch Assigned' }}" data-email="{{ $student->email }}">
                <div class="card h-100 border-light shadow-sm">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <h6 class="card-title mb-0">{{ $student->name }}</h6>
                            @if($student->type == 'inactive')
                                 <a href="{{ route('admin.students.activate', $student->id) }}"><span class="badge bg-success" >Active</span></a>
                            @else
                             <a href="{{ route('admin.students.deactivate', $student->id) }}"><span class="badge bg-danger" >Inactive</span></a>
                            @endif

                        </div>
                        <p class="small mb-1"><strong>Roll:</strong> {{ $student->roll }}</p>
                        <p class="small mb-1"><strong>Batch:</strong> {{ $student->batch->batch_name ?? 'No Batch Assigned' }}</p>
                        <p class="small mb-1"><strong>Email:</strong> {{ $student->email }}</p>

                        <div class="d-flex justify-content-center mt-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                    @can('update user')
                                        <li>
                                            <a class="dropdown-item" href="{{ route('student.edit', $student->id) }}">
                                                <i class="fa-solid fa-user-pen"></i> Edit
                                            </a>
                                        </li>
                                    @endcan
                                    <li>
                                        @can('delete user')
                                            <form action="{{ route('delete', $student->id) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item text-danger">
                                                    <i class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        @endcan
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{ $students->links('pagination::bootstrap-4') }}
</div>

</main>

<script>
    // Search Function
    function searchStudents() {
        var input, filter, studentList, studentCards, name, roll, batch, email, i, txtValue;
        input = document.getElementById('searchInput');
        filter = input.value.toLowerCase();
        studentList = document.getElementById('studentList');
        studentCards = studentList.getElementsByClassName('student-card');

        for (i = 0; i < studentCards.length; i++) {
            name = studentCards[i].getAttribute('data-name');
            roll = studentCards[i].getAttribute('data-roll');
            batch = studentCards[i].getAttribute('data-batch');
            email = studentCards[i].getAttribute('data-email');

            // Combine all data (name, roll, batch, email) into one string for searching
            txtValue = name + " " + roll + " " + batch + " " + email;

            // Check if the search term exists in the combined text
            if (txtValue.toLowerCase().indexOf(filter) > -1) {
                studentCards[i].style.display = "";
            } else {
                studentCards[i].style.display = "none";
            }
        }
    }
</script>

@endsection
