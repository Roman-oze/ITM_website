@extends('layout.dashboard')

<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>

<div class="container-fluid px-4">
    <h2 class="mt-4">Committee Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create</li>
    </ol>

    <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mx-auto">
            <div class="card shadow-sm p-4 border-0 rounded-3" style="background: #f7f7f7;">
                <h4 class="text-center mb-3 text-primary">Edit Photo</h4>
                <form action="{{ route('photo.update', $photo->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Existing Image Preview -->
                    <div class="mb-3">
                        <img src="{{ asset($photo->image) }}" alt="Current Photo" class="img-thumbnail w-100">
                    </div>

                    <!-- Image Input -->
                    <div class="mb-3">
                        <label for="imageInput" class="form-label fw-bold">Upload New Image</label>
                        <input type="file" class="form-control" id="imageInput" name="image">
                        <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                    </div>

                    <!-- Title Input -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $photo->title }}">
                        <span class="text-danger small">@error('title'){{ $message }}@enderror</span>
                    </div>

                    <!-- Event Type -->
                    <div class="mb-3">
                        <label for="type" class="form-label">Event Type</label>
                        <select class="form-control rounded-pill shadow-sm p-2" id="type" name="type" required>
                            <option value="Departmental" {{ $photo->type == 'Departmental' ? 'selected' : '' }}>Departmental</option>
                            <option value="Club" {{ $photo->type == 'Club' ? 'selected' : '' }}>Club</option>
                        </select>
                        <span class="text-danger small">@error('type'){{ $message }}@enderror</span>
                    </div>

                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-success w-100 py-2 mt-3">
                            <i class="fas fa-save"></i> Update Gallery
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</div>

</main>
@endsection
