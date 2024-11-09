@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Features Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Features create</li>
    </ol>

        <div class="row justify-content-center">
            <div class="col-7 shadow rounded p-5">

                <form action="{{ route('feature.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if (session('error'))
                <div class=" alert alert-danger">
                    {{ session('error') }}
                </div>

                @endif

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{ old('description') }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" placeholder="Description" name="description" rows="3" required {{ old('description') }}></textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <input type="file" class="form-control-file P-2" id="image" placeholder="Image" name="image" accept="image/*" required>
                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Upload</button>
                </form>
            </div>
        </div>
    </div>

</div>

@endsection

