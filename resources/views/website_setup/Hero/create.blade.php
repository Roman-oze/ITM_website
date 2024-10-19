@extends('layout.dashboard')


@section('main')
<main>
<div class="container-fluid ">
    <!-- Hero Section Card -->
    {{-- <div class="card mb-4" style="max-width: 100%; background-color: #f8f9fa; border: none;">
        <div class="row g-0 align-items-center">
            <!-- Image Column -->
            <div class="col-md-6">
                @if($hero->image)
                    <img src="{{ asset('storage/' . $hero->image) }}" class="img-fluid rounded-start" alt="Hero Image">
                @else
                    <img src="https://via.placeholder.com/600x400" class="img-fluid rounded-start" alt="Hero Image">
                @endif
            </div>
            <!-- Content Column -->
            <div class="col-md-6">
                <div class="card-body">
                    <h2 class="card-title">{{ $hero->title }}</h2>
                    <p class="card-text">
                        {{ $hero->description }}
                    </p>
                    <a href="#more-info" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Update Hero Section -->
    {{-- <form action="{{ route('hero-section.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $hero->title }}" required>
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $hero->description }}</textarea>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-success">Update Hero Section</button>
    </form> --}}
    <h1 class="mt-4">Hero Section </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Hero Section </li>
    </ol>

    @if (session()->has('success'))
    <div class="alert alert-success">
        {{ session()->get('success') }}
        </div>
    @endif

    @if (session()->has('error'))
    <div class="alert alert-danger">
        {{ session()->get('error') }}
        </div>
    @endif


    <div class="row justify-content-center">
        <div class="col-6">
    <form action="{{ route('herosection.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('POST')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" >
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" ></textarea>
        </div>

        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input class="form-control" id="link" name="link" rows="3" >
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
        </div>

        <button type="submit" class="btn btn-success">Update Hero Section</button>
    </form>
        </div>
        </div>

</div>
</main>
@endsection
