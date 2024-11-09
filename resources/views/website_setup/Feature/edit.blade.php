@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Features Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Features edit</li>
    </ol>


        <div class="row justify-content-center">
            <div class="col-7 shadow rounded p-5">

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
                <form action="{{ route('feature.update',$feature->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $feature->title }}">
                        @error('title')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3">{{ ( $feature->description ) }}</textarea>
                        @error('description')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="image">Image</label>
                        <!-- Show current image if available -->
                        @if($feature->image)
                            <div class="mb-3">
                                <img src="{{ asset($feature->image) }}" alt="Current Image" style="width: 150px; height: auto;">
                            </div>
                        @endif

                        <input type="file" class="form-control-file" id="image" name="image" accept="image/*">

                        @error('image')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-dark">Update</button>
                </form>
            </div>
        </div>
    </div>

</div>
<br>

@endsection

