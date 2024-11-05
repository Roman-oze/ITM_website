@extends('layout.dashboard')

@section('main')
<main>
    <div class="container mt-5">

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Footer</li>
        </ol>

        <div class="text-left mb-3">
            <a href="{{ route('footer.create') }}" class="btn btn-dark"><i class="fas fa-plus-circle"></i> Create New Footer</a>
        </div>

        <div class="row mb-3">
            @foreach($footers as $institute)
            <div class="col-md-4 mb-4">
                <div class="card shadow border-0 rounded">
                    <div class="position-relative">
                        @if ($institute->footer_logo)
                            <img src="{{ asset($institute->footer_logo) }}" class="card-img-top" alt="Institute Logo" style="height: 200px; object-fit: cover;">
                        @else
                            <div class="card-img-top d-flex justify-content-center align-items-center" style="height: 200px; background-color: #f8f9fa;">
                                <span class="text-muted">No Image Available</span>
                            </div>
                        @endif
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $institute->address }}</h5>
                        <p class="card-text">Phone: <strong>{{ $institute->phone }}</strong></p>
                        <p class="card-text">Email: <strong>{{ $institute->email }}</strong></p>

                        <div class="mb-3">
                            <a href="{{ $institute->tuition_fees }}" class="btn btn-success btn-sm" download>Download Tuition Fees</a>
                            <a href="{{ $institute->course_download }}" class="btn btn-secondary btn-sm" download>Download Course</a>
                        </div>

                        <div class="d-flex justify-content-center mb-3">
                            <a href="{{ $institute->facebook }}" target="_blank" class="me-2 text-primary">
                                <i class="fab fa-facebook-f fa-lg"></i>
                            </a>
                            <a href="{{ $institute->instagram }}" target="_blank" class="me-2 text-danger">
                                <i class="fab fa-instagram fa-lg"></i>
                            </a>
                            <a href="{{ $institute->linkedin }}" target="_blank" class="text-info">
                                <i class="fab fa-linkedin-in fa-lg"></i>
                            </a>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('footer.edit', $institute->id) }}" class="btn btn-outline-info">Edit</a>
                            @can('manage-user')
                            <form action="{{ route('footer.destroy', $institute->id) }}" method="POST" enctype="multipart/form-data" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                            @endcan
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</main>
@endsection
