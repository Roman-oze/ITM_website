@extends('layout.dashboard')

@section('main')
<main>
    <div class="container-fluid">
        <h1 class="mt-4">Service</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Service Edit</li>
        </ol>

       <!-- Display success or error messages -->
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
                <form action="{{ route('services.update',$service->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        @if ($service->image)
                            <div>
                                <img src="{{ asset($service->image) }}" alt="Service Image" width="100">
                            </div>
                        @endif
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link Name</label>
                        <input class="form-control" id="link" name="link_name" rows="3" value="{{ $service->link_name}}">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input class="form-control" id="link" name="link" rows="3" value="{{ $service->link}}">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $service->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-success">update</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
