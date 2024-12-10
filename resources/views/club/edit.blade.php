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
        <div class="col-lg-6 col-md-8 col-12 mx-auto">
            <div class="card shadow-lg p-5 border-0 rounded-3" style="background: #f9f9f9;">
                <h4 class="text-center mb-4">Add Photo</h4>
                <form action="{{ route('photo.update',$photo->id) }}" enctype="multipart/form-data" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        @if ($photo->image)
                        <img src="{{ asset($photo->image) }}" alt="Photo" width="100" width="100">
                        <label for="imageInput" class="form-label fw-bold">Profile Picture</label>
                        <input type="file" class="form-control" id="imageInput"  name="image" >
                        @endif

                    </div>

                    <div class="mb-4">
                        <label for="title" class="form-label fw-bold">Title</label>
                        <input type="text" class="form-control" id="title" value="{{$photo->title}}" name="title" required>
                        <span class="text-danger small">@error('title'){{ $message }}@enderror</span>
                    </div>

                    <div class="text-center mt-4">
                        <button type="submit" class="btn btn-primary w-100 py-2">Update Gallery</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

</main>
@endsection
