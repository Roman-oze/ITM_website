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
            @foreach($scholarship as $scholar)
                <div class="col-md-3 col-sm-6 mb-3">
                    <div class="card shadow-sm border-0 scholarship-card">
                        <div class="card-body p-2 text-center">
                            <img src="{{ asset($scholar->image) }}" alt="Profile Image" class="rounded-circle mb-2" width="60" height="60">
                            <h6 class="card-title text-primary mb-1">{{ $scholar->name }}</h6>
                            <p class="text-muted small mb-0">{{ $scholar->country }}</p>
                            <p class="text-muted small mb-1">Batch: {{ $scholar->batch }} | ID: {{ $scholar->roll }}</p>

                            <hr class="my-2">

                            <p class="small mb-2">
                                <strong>Duration:</strong> {{ $scholar->duration }}<br>
                                <strong>Email:</strong> {{ $scholar->email }}
                            </p>

                            <div class="d-flex justify-content-center">
                                @can('edit')
                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
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

            <div>
                {{ $scholarship->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</main>
@endsection
