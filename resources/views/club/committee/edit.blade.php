{{-- resources/views/faculty/create.blade.php --}}
@extends('layout.dashboard')
<!-- Sweet alert -->
@include('include.alerts')

@section('main')
<main>

<div class="container-fluid px-4">
    <h2 class="mt-4">Committee Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">create</li>
    </ol>

    <div class="container d-flex justify-content-center align-items-center min-vh-85">
        <div class="card shadow-lg p-5 border-0 rounded-3" style="max-width: 700px; width: 100%; background: #f9f9f9;">
            <h4 class="text-center mb-4">Update Committee</h4>
            <form action="{{ route('committee.update',$committees->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-4">
                    @if($committees->image)
                        <img src="{{ asset($committees->image) }}" alt="image" width="100" height="100">
                        <label for="imageInput" class="form-label fw-bold">Profile Picture</label>
                        <input type="file" class="form-control" id="imageInput" name="image">
                        <span class="text-danger small">@error('image'){{ $message }}@enderror</span>
                    @endif
                </div>

                <div class="mb-4">
                    <label for="imageInput" class="form-label fw-bold">Name</label>
                    <input type="text" class="form-control" id="name" value="{{$committees->name}}" name="name">
                    <span class="text-danger small">@error('name'){{ $message }}@enderror</span>
                </div>
                <div class="mb-4">
                    <label for="imageInput" class="form-label fw-bold">Position</label>
                    <input type="text" class="form-control" id="position" value="{{$committees->position}}" name="position">
                    <span class="text-danger small">@error('position'){{ $message }}@enderror</span>
                </div>


                <div class="text-center mt-4">
                    <button type="submit" class="btn btn-primary w-100 py-2">Update Committee</button>
                </div>
            </form>
        </div>
    </div>
</div>
</main>
@endsection
