@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Alumni</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Alumni List</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('create.alumni') }}" class="btn btn-dark text-white">Add Alumni</a>
        </div>

        <div class="row">
            @foreach($alumns as $alumn)
                <div class="col-md-4 mb-4">
                    <div class="card alumni-card border-0 shadow-sm">
                        <div class="card-body">
                            <div class="alumni-img-container">
                                <img src="{{ asset($alumn->image) }}" alt="Profile Image" class="alumni-img">
                            </div>
                            <div class="text-center mt-3">
                                <h5 class="card-title text-primary">{{ $alumn->name }}</h5>
                                <p class="text-muted small">Batch: {{ $alumn->batch }} | Year: {{ $alumn->pass_year }}</p>
                                <p class="text-muted small">ID: {{ $alumn->roll }}</p>
                            </div>

                            <hr class="my-3">

                            <p class="card-text text-center">
                                <strong>Organization:</strong> {{ $alumn->organization }}<br>
                                <strong>Designation:</strong> {{ $alumn->designation }}<br>
                            </p>

                            <div class="alumni-contact text-center">
                                <span class="badge bg-light text-dark"><i class="fa-solid fa-phone"></i> {{ $alumn->phone }}</span><br>
                                <span class="badge bg-light text-dark mt-1"><i class="fa-solid fa-envelope"></i> {{ $alumn->email }}</span>
                            </div>


                            <div class="d-flex justify-content-center">
                                @can('edit')
                                    <div class="dropdown">
                                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
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
        </div>
    </div>
</main>
@endsection
