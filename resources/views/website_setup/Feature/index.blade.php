@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>
    <div class="container-fluid px-4">
        <div class="d-flex justify-content-between align-items-center mt-4 mb-4">
            <h2 class="">Features Management</h2>
            <a href="{{ route('feature.create') }}" class="btn btn-dark rounded-pill shadow">
                <i class="fas fa-plus-circle"></i> Add Feature
            </a>
        </div>

        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Features List</li>
        </ol>

        <div class="row g-4">
            @forelse ($features as $feature)
                <div class="col-md-6 col-lg-4 col-xl-3">
                    <div class="card feature-card shadow-sm rounded-lg position-relative overflow-hidden">
                        <div class="feature-image position-relative">
                            <img src="{{ asset($feature->image) }}" alt="{{ $feature->title }}" class="card-img-top">
                            <div class="overlay d-flex align-items-center justify-content-center">
                                <h5 class="text-white fw-bold">{{ $feature->title }}</h5>
                            </div>
                        </div>
                        <div class="card-body">
                            <h6 class="card-title text-truncate" title="{{ $feature->title }}">{{ $feature->title }}</h6>
                            <p class="card-text text-muted">{{ Str::limit($feature->description, 80) }}</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <span class="badge bg-primary">Feature</span>
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
                                            <form action="{{ route('feature.delete', $feature->id) }}" method="POST" class="d-inline">
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
            @empty
                <div class="col-12">
                    <p class="text-center text-muted">No features available. Please add some features.</p>
                </div>
            @endforelse
        </div>
    </div>
</main>
@endsection

<style>
    .feature-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .feature-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
    }

    .feature-image {
        position: relative;
        height: 200px;
        overflow: hidden;
    }

    .feature-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .feature-image:hover .overlay {
        opacity: 1;
    }
</style>
