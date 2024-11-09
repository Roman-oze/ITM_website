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

                        <div class="mb-3 d-flex justify-content-evenly">
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
                        <div class="d-flex justify-content-center mt-2">
                            <div class="dropdown">
                                <button class="btn btn-sm btn-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                @can('update user')
                                    <li>
                                        <a class="dropdown-item" href="{{ route('footer.edit', $institute->id) }}">
                                            <i class="fa-solid fa-user-pen"></i> Edit
                                        </a>
                                    </li>
                                @endcan
                                    <li>
                                @can('delete user')
                                        <form action="{{ route('footer.destroy', $institute->id) }}" method="POST" class="d-inline">
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
    </div>
</main>
@endsection
