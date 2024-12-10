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
        <!-- Form to Add Photo -->
        <div class="col-lg-4 col-md-6 col-12 mx-auto">
            <div class="card shadow-sm p-4 border-0 rounded-3" style="background: #f7f7f7;">
                <h4 class="text-center mb-3 text-primary">Add Photo</h4>
                <form action="{{ route('photo.store') }}" enctype="multipart/form-data" method="POST">
                    @csrf

                    <!-- Image Input -->
                    <div class="mb-3">
                        <label for="imageInput" class="form-label fw-bold">Upload Image</label>
                        <input type="file" class="form-control" id="imageInput" name="image" required>
                        <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                    </div>

                    <!-- Title Input -->
                    <div class="mb-3">
                        <label for="title" class="form-label fw-bold">Title</label>
                        <input type="text" class="form-control" id="title" name="title" required>
                        <span class="text-danger small">@error('title'){{ $message }}@enderror</span>
                    </div>
                    <!-- Submit Button -->
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100 py-2 mt-3">
                            <i class="fas fa-save"></i> Save Gallery <!-- Save Icon -->
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- Display Photos Section -->
        <div class="col-12 mt-5">
            <h4 class="text-center mb-4">Gallery</h4>
            <div class="row">
                @foreach ($photos as $photo)
                    <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="{{ asset($photo->image) }}" class="img-fluid rounded" alt="Photo">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $photo->title }}</h5>

                                <!-- Actions Dropdown -->
                                <div class="dropdown">
                                    <button class="btn btn-sm btn-outline-dark dropdown-toggle" type="button" id="actionMenu{{ $photo->id }}" data-bs-toggle="dropdown" aria-expanded="false">
                                        Actions
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="actionMenu{{ $photo->id }}">
                                        <!-- Edit Action -->
                                        @can('update user')
                                            <li>
                                                <a class="dropdown-item" href="{{route('photo.edit',$photo->id)}}">
                                                    <i class="fa-solid fa-user-pen"></i> Edit
                                                </a>
                                            </li>
                                        @endcan

                                        <!-- Delete Action -->
                                        @can('delete user')
                                            <li>
                                                <form action="{{ route('photo.delete', $photo->id) }}" method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" onclick="return confirm('Are you sure?')" class="dropdown-item text-danger">
                                                        <i class="fa fa-trash"></i> Delete
                                                    </button>
                                                </form>
                                            </li>
                                        @endcan
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</main>
@endsection
