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
    <div class="d-flex  mb-3">
        <a href="{{ route('create') }}" class="btn btn-dark rounded-pill shadow">
            <i class="fas fa-plus-circle"></i> Add Student
        </a>
    </div>

        <div class="row">
            @foreach($students as $student)
                <div class="col-md-4 col-sm-6 mb-3">
                    <div class="card h-100 border-light shadow-sm">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h6 class="card-title mb-0">{{ $student->name }}</h6>
                                @if($student->type == 'active')
                                    <span class="badge bg-success">Active</span>
                                @else
                                    <span class="badge bg-danger">Inactive</span>
                                @endif
                            </div>
                            <p class="small mb-1"><strong>ID:</strong> {{ $student->roll }}</p>
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
@endsection
