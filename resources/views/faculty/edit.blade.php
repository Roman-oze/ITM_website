@extends('layout.dashboard')


@section('main')


<div class="container-fluid px-4">
    <h2 class="mt-4">Faculty Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Faculty edit</li>
    </ol>
    <br>

    <div class="container-fluid px-4">
        <div class="d-flex justify-content-center">
            <div class="card shadow-lg col-12 col-md-6 p-4">
                <form action="{{ route('update.faculty', $teacher->teacher_id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    @if (session('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                        </div>
                    @endif

                    <div class="mb-3 text-center">
                        @if ($teacher->image)
                            <div class="mb-2">
                                <img src="{{ asset($teacher->image) }}" alt="Teacher Image" class="rounded-circle" width="100" height="100">
                                <label for="image" class="form-label badge badge-dark">Current Profile </label>

                            </div>
                        @endif
                        <input type="file" class="form-control" id="image" name="image">
                    </div>

                    <div class="mb-3">
                        <label for="nameInput" class="form-label">Name</label>
                        <input type="text" class="form-control" id="nameInput" name="name" value="{{ $teacher->name }}">
                    </div>

                    <div class="mb-3">
                        <label for="designationInput" class="form-label">Designation</label>
                        <input type="text" class="form-control" id="designationInput" name="designation" value="{{ $teacher->designation }}">
                    </div>

                    <div class="mb-3">
                        <label for="facebookInput" class="form-label">Facebook URL</label>
                        <input type="text" class="form-control" id="facebookInput" name="fb" value="{{ $teacher->fb }}">
                    </div>

                    <div class="mb-3">
                        <label for="linkedinInput" class="form-label">LinkedIn URL</label>
                        <input type="text" class="form-control" id="linkedinInput" name="linked" value="{{ $teacher->linked }}">
                    </div>

                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Email</label>
                        <input type="email" class="form-control" id="emailInput" name="email" value="{{ $teacher->email }}">
                    </div>

                    <div class="mb-3">
                        <label for="phoneInput" class="form-label">Phone</label>
                        <input type="text" class="form-control" name="phone" value="{{ $teacher->phone }}">
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Update Profile</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<br>
<br>
@endsection
