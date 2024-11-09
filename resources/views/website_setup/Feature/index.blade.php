@extends('layout.dashboard')
@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Features</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Feature</li>
        </ol>

        <div class="card mb-4">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h3 class="m-0">Manage Features</h3>
                <a href="{{ route('feature.create') }}" class="btn btn-outline-dark"><i class="fas fa-plus-circle"></i> Create New Feature</a>
            </div>
        </div>

        <div class="row p-3">
            @foreach ($features as $feature)
            <div class="col-md-4 col-lg-3 p-3">
                <div class="card shadow-sm rounded-lg overflow-hidden">
                    <div class="position-relative">
                        <!-- Fixed Image Size -->
                        <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="card-img-top" style="height: 200px; object-fit: cover;">
                        <div class="card-overlay">
                            <h5 class="text-white">{{ $feature->title }}</h5>
                        </div>
                    </div>
                    <div class="card-body">
                        <h6 class="card-title">{{ $feature->title }}</h6>
                        <p class="card-text">{{ Str::limit($feature->description, 70) }}</p>
                        <div class="d-flex justify-content-end">
                            <!-- Action Dropdown Button -->
                            <div class="dropdown">
                                <button class="btn btn-sm btn-secondary dropdown-toggle" type="button" id="actionDropdown{{ $feature->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="actionDropdown{{ $feature->id }}">

                                    <li>
                                        <a class="dropdown-item" href="{{ route('feature.edit', $feature->id) }}">
                                            <i class="fas fa-edit me-2"></i>Edit
                                        </a>
                                    </li>
                                    <li>
                                        <form action="{{ route('feature.delete', $feature->id) }}" method="POST" class="d-inline" style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="dropdown-item text-danger" onclick="return confirm('Are you sure you want to delete this feature?')">
                                                <i class="fas fa-trash-alt me-2 text-danger"></i>Delete
                                            </button>
                                        </form>
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
