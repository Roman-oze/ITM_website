@extends('layout.dashboard')

@section('main')

<main>
        <div class="container-fluid px-4">
            <h2 class="mt-4">Faculty Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Faculty List</li>
            </ol>

            <!-- Add Button -->
        <div class="d-flex  mb-3">
            <a href="{{ route('create.faculty') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Faculty
            </a>
        </div>

        <div class="row mt-4">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }}</div>
            @endif

            <!-- First Row: Dean and Head of Department -->
            <div class="row">
                @foreach($teachers as $teacher)
                    @if($teacher->designation == 'Dean of ITM Department' || $teacher->designation == 'Head of ITM Department')
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card shadow-lg rounded-lg border-0">
                                <div class="card-body text-center">
                                    <img src="{{ asset($teacher->image) }}" width="120" height="120" class="rounded-circle mb-3" alt="Faculty Image">
                                    <h5 class="card-title">{{ $teacher->name }}</h5>
                                    <span class="badge badge-info mb-3">{{ $teacher->designation }}</span>
                                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#facultyModal{{ $teacher->teacher_id }}">Show Details</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>

            <!-- Second Row: Other Teachers -->
            <div class="row">
                @foreach($teachers as $teacher)
                    @if($teacher->designation != 'Dean of ITM Department' && $teacher->designation != 'Head of ITM Department')
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
                            <div class="card shadow-lg rounded-lg border-0">
                                <div class="card-body text-center">
                                    <img src="{{ asset($teacher->image) }}" width="120" height="120" class="rounded-circle mb-3" alt="Faculty Image">
                                    <h5 class="card-title">{{ $teacher->name }}</h5>
                                    <span class="badge badge-info mb-3">{{ $teacher->designation }}</span>
                                    <button class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#facultyModal{{ $teacher->teacher_id }}">Show Details</button>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>

        <!-- Modal for Faculty Details -->
        @foreach($teachers as $teacher)
            <div class="modal fade" id="facultyModal{{ $teacher->teacher_id }}" tabindex="-1" aria-labelledby="facultyModalLabel{{ $teacher->teacher_id }}" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="facultyModalLabel{{ $teacher->teacher_id }}">{{ $teacher->name }} - Details</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <img src="{{ asset($teacher->image) }}" class="img-fluid rounded-circle" alt="Faculty Image">
                                </div>
                                <div class="col-md-8">
                                    <p><strong>Designation:</strong> {{ $teacher->designation }}</p>
                                    <p><strong>Email:</strong> <a href="mailto:{{ $teacher->email }}" class="text-decoration-none">{{ $teacher->email }}</a></p>
                                    <p><strong>Phone:</strong> <a href="tel:{{ $teacher->phone }}" class="text-decoration-none">{{ $teacher->phone }}</a></p>
                                    <p><strong>Facebook:</strong> <a href="{{ $teacher->fb }}" target="_blank" class="text-decoration-none">{{ $teacher->fb }}</a></p>
                                </div>
                            </div>
                            <div class="mt-4">
                                <h5>Additional Information</h5>
                                <p>{{ $teacher->bio }}</p>
                            </div>
                        </div>
                        <div class="modal-footer">
                            @can('update user')
                            <a href="{{ route('edit.faculty', $teacher->teacher_id) }}" class="btn btn-warning">
                                <i class="fa-solid fa-user-pen"></i> Edit
                            </a>
                            @endcan
                            @can('delete user')
                                <form action="{{ route('delete.faculty', $teacher->teacher_id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirmDelete()" class="btn btn-danger">
                                        <i class="fa fa-trash"></i> Delete
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</main>

@endsection

<!-- JavaScript for Confirmation and Modal -->
<script>
    function confirmDelete() {
        return confirm('Are you sure you want to delete this faculty member?');
    }
</script>

<style>
    .card {
        border-radius: 15px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .card-body {
        text-align: center;
        background-color: #f8f9fa;
    }

    .card-title {
        font-size: 1.3rem;
        font-weight: bold;
    }

    .badge {
        font-size: 1rem;
        padding: 0.5em;
    }

    .btn-outline-primary {
        font-size: 1rem;
        font-weight: 600;
    }

    .modal-body {
        font-size: 1rem;
    }

    .modal-footer .btn {
        font-size: 0.9rem;
    }

    .img-fluid {
        max-width: 120px;
        margin-bottom: 15px;
    }

    .modal-title {
        font-weight: 700;
    }

    .modal-content {
        border-radius: 15px;
    }

    .modal-footer {
        display: flex;
        justify-content: space-between;
    }

    .modal-body p {
        font-size: 1rem;
        line-height: 1.5;
    }

    .btn-close {
        background-color: transparent;
        border: none;
    }

    .btn-close:hover {
        background-color: #f1f1f1;
    }

    .details-link {
        text-decoration: none;
        font-weight: bold;
        color: #007bff;
    }

    .details-link:hover {
        color: #0056b3;
    }
</style>
