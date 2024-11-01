@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Students</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Students List</li>
        </ol>

        <div class="row mb-4">
            <div class="col-md-10">
                <form action="{{ route('student.search') }}" method="GET" class="form-inline ms-auto d-flex">
                    <input class="form-control me-2" type="text" name="search" placeholder="Search for..." aria-label="Search">
                    <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i></button>
                </form>
                <a href="{{ route('create') }}" class="btn btn-outline-dark ms-3">New Add</a>
            </div>
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
                            <div class="d-flex mt-2">
                                <a href="{{ route('student.edit', $student->id) }}" class="btn btn-outline-info btn-sm me-2"><i class="fa-solid fa-pen"></i> Edit</a>
                                @can('delete')
                                    <form action="{{ route('delete', $student->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" onclick="return confirm('Are you sure?')" class="btn btn-outline-danger btn-sm"><i class="fa-solid fa-trash"></i> Delete</button>
                                    </form>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center mt-4">
            {{ $students->links('pagination::bootstrap-5') }}
        </div>
    </div>
</main>
@endsection
