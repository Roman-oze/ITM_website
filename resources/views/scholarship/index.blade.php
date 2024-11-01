@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Scholarship</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Scholarship List</li>
        </ol>

        <div class="mb-4">
            <a href="{{ route('create.scholarship') }}" class="btn btn-dark text-white">Add Scholars</a>
        </div>

        <div class="row">
            @foreach($scholars as $scholar)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 scholarship-card">
                        <div class="card-body">
                            <div class="text-center">
                                <img src="{{ asset($scholar->image) }}" alt="Profile Image" class="rounded-circle mb-3" width="80" height="80">
                                <h5 class="card-title text-primary">{{ $scholar->name }}</h5>
                                <p class="text-muted mb-1">{{ $scholar->country }}</p>
                                <p class="text-muted small">Batch: {{ $scholar->batch }} | ID: {{ $scholar->roll }}</p>
                            </div>
                            <hr>
                            <p class="text-center">
                                <strong>Duration:</strong> {{ $scholar->duration }}<br>
                                <strong>Email:</strong> {{ $scholar->email }}
                            </p>

                            <div class="d-flex justify-content-center">
                                @can('edit')
                                    <div class="dropdown">
                                        <button class="btn btn-outline-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                            Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                            <li>
                                                <a class="dropdown-item" href="{{ route('edit.scholarship', $scholar->id) }}">
                                                    <i class="fa-solid fa-user-pen"></i> Edit
                                                </a>
                                            </li>
                                            <li>
                                                @can('delete')
                                                <form action="{{ route('delete.scholarship', $scholar->id) }}" method="POST" class="d-inline">
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
