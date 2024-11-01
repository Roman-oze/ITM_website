@extends('layout.dashboard')

@section('main')

<main>
    <div class="container mt-5">
        <h1 class="mt-4">Faculty</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Faculty List</li>
        </ol>

      

        <div class="card">
            <div class="card-header">
                <h4>
                    <a href="{{ route('create.faculty') }}" class="btn btn-primary float-end">Add Faculty</a>
                </h4>
            </div>
        </div>   

        <div class="row mt-5">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            @foreach($teachers as $teacher)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 transition-transform hover:scale-105 position-relative">
                        <span class="faculty-label">{{ $teacher->designation }}</span>
                        <div class="card-body text-center">
                            <img src="{{ asset($teacher->image) }}" width="100" height="100" class="rounded-circle mb-3" alt="Faculty Image">
                            <h5 class="card-title">{{ $teacher->name }}</h5>
                            <p class="card-text mt-2"><strong>Email:</strong> {{ $teacher->email }}</p>
                            <p class="card-text"><strong>Phone:</strong> {{ $teacher->phone }}</p>
                            <div class="mb-2">
                                <a href="{{ $teacher->fb }}" target="_blank" class="btn btn-link text-decoration-none">
                                    <i class="fa-brands fa-facebook-square text-info"></i> Facebook
                                </a>
                            </div>

                            <div class="d-flex justify-content-center">
                                @can('edit')
                                    <div class="dropdown">
                                        <button class="btn btn-outline-secondary dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('edit.faculty', $teacher->teacher_id) }}">
                                                    <i class="fa-solid fa-user-pen"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                <form action="{{ route('delete.faculty', $teacher->teacher_id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item text-danger">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </div>
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    </div>
</main>

@endsection

<style>
.card {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}
.card:hover {
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
}
.position-relative {
    position: relative;
}
.badge {
    background-color: #007bff; /* Bootstrap primary color */
    color: white; /* Text color */
}
</style>
