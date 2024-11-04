@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h3 class="mt-4">Alumni</h3>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alumni List</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('create.alumni') }}" class="btn btn-dark text-white">Add Alumni</a>
        </div>

        <div class="row">
            @foreach($alumns as $alumn)
                <div class="col-md-3 col-sm-6 mb-4">
                    <div class="card alumni-card border-0 shadow-sm">
                        <div class="card-body p-3">
                            <div class="alumni-img-container text-center">
                                <img src="{{ asset($alumn->image) }}" alt="Profile Image" class="alumni-img rounded-circle">
                            </div>
                            <div class="text-center mt-2">
                                <h6 class="card-title text-primary mb-1">{{ $alumn->name }}</h6>
                                <p class="text-muted small mb-0">Batch: {{ $alumn->batch }} | Year: {{ $alumn->pass_year }}</p>
                                <p class="text-muted small mb-1">ID: {{ $alumn->roll }}</p>
                            </div>

                            <p class="card-text text-center mt-2 small">
                                <strong>Organization:</strong> {{ $alumn->organization }}<br>
                                <strong>Designation:</strong> {{ $alumn->designation }}
                            </p>

                            <div class="alumni-contact text-center mt-2">
                                <span class="badge bg-light text-dark small"><i class="fa-solid fa-phone"></i> {{ $alumn->phone }}</span><br>
                                <span class="badge bg-light text-dark small mt-1"><i class="fa-solid fa-envelope"></i> {{ $alumn->email }}</span>
                            </div>

                            <div class="d-flex justify-content-center mt-2">
                                @can('edit')
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('edit.alumni', $alumn->id) }}">
                                                    <i class="fa-solid fa-user-pen"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                @can('delete')
                                                <form action="{{ route('delete.alumni', $alumn->id) }}" method="POST" class="d-inline">
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
                                @endcan
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="d-flex justify-content-center mt-4">
                {{ $alumns->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</main>
@endsection
