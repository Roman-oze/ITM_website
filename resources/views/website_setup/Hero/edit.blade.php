@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Hero Section create</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Hero Section create</li>
        </ol>

        <div class="row justify-content-center">
            <div class="col-6 shadow rounded p-5">
                <form action="{{ route('herosection.update', $herosection->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="title" class="form-label">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $herosection->title }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $herosection->description }}</textarea>
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input type="url" class="form-control" id="link" name="link" value="{{ $herosection->link }}" placeholder="https://example.com">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        @if ($herosection->image)
                            <div class="mb-2">
                                <img src="{{ asset($herosection->image) }}" alt="Current Image" width="120" class="border rounded">
                            </div>
                        @endif
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <button type="submit" class="btn btn-success">Update Hero Section</button>
                </form>
            </div>
        </div>

    </div>
</main>
@endsection
