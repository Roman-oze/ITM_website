@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4 text-primary">Hero Section</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" class="text-secondary">Dashboard</a></li>
            <li class="breadcrumb-item active">Hero Section</li>
        </ol>

        <div class="text-end mb-4">
            <a href="{{ route('herosection.create') }}" class="btn btn-outline-primary">
                <i class="fas fa-plus-circle"></i> Create New Section
            </a>
        </div>

        <div class="card shadow-sm border-0 bg-light">
            <div class="card-body">
                @foreach ($herosections as $hero)
                    <div class="row mb-5 p-4 align-items-center border-bottom">
                        <!-- Image Column -->
                        <div class="col-md-6 text-center">
                            <img src="{{ asset($hero->image) }}" class="img-fluid rounded shadow" alt="Hero Image" style="max-height: 300px; object-fit: cover;">
                        </div>
                        <!-- Content Column -->
                        <div class="col-md-6">
                            <h2 class="card-title text-dark">{{ $hero->title }}</h2>
                            <p class="card-text text-muted">{{ $hero->description }}</p>
                            <a href="{{ $hero->link }}" class="btn btn-primary mt-3" target="_blank">Learn More</a>

                            <div class="d-flex justify-content-start mt-3">

                                    <div class="dropdown">
                                        <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" id="actionMenu" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="fas fa-cog"></i> Actions
                                        </button>
                                        <ul class="dropdown-menu" aria-labelledby="actionMenu">
                                                <li>
                                                    <a class="dropdown-item" href="{{ route('herosection.edit', $hero->id)}}">
                                                        <i class="fas fa-edit"></i> Edit
                                                    </a>
                                                </li>
                                                <li>
                                                    @can('manage-user')
                                                    <form action="{{ route('herosection.destroy', $hero->id) }}" method="POST" class="d-inline">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" onclick="return confirm('Are you sure you want to delete this item?')" class="dropdown-item text-danger">
                                                            <i class="fas fa-trash"></i> Delete
                                                        </button>
                                                    </form>
                                                    @endcan
                                                </li>
                                        </ul>
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
