@extends('layout.dashboard')

@section('main')
<main>


        <div class="container-fluid px-4">
            <h2 class="mt-4">Service Management</h2>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Service List </li>
            </ol>
        <div class="row justify-content-center">
            <div class="col-6 border-0 shadow p-5">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label for="image" class="form-label">Image</label>
                        <input type="file" class="form-control p-2" placeholder="image" id="image" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link Name</label>
                        <input class="form-control" id="link" placeholder="Link Name" name="link_name" rows="3">
                    </div>

                    <div class="mb-3">
                        <label for="link" class="form-label">Link</label>
                        <input class="form-control" id="link" placeholder="Link / URL " name="link" rows="3">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <textarea class="form-control" id="description" placeholder="Description" name="description" rows="3"></textarea>
                    </div>

                    <button type="submit" class="btn btn-success">Save</button>
                </form>
            </div>
        </div>
    </div>
</main>
@endsection
