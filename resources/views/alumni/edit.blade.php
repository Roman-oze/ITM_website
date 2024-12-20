<!-- resources/views/students/create.blade.php -->

@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Alumni Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Alumni Edit </li>
    </ol>

<div class="container">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card shadow-lg border-0 rounded p-3">
                                <div class="card-body">
                                    <form action="{{ route('update.alumni', $alumni->id) }}" enctype="multipart/form-data" method="POST">
                                        @csrf
                                        @method('PUT')

                                        <!-- Image Upload Field -->
                                        <div class="form-group mb-3">
                                            @if ($alumni->image)
                                                <img src="{{ asset($alumni->image) }}" alt="Current Image" width="100">
                                            @endif
                                            <input type="file" class="form-control" name="image" placeholder="Image">
                                            <span class="text-danger">@error('image'){{ $message }}@enderror</span>
                                        </div>

                                        <!-- Other Form Fields -->
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="name" value="{{ $alumni->name }}" required placeholder="Name">
                                            <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="roll" value="{{ $alumni->roll }}" required placeholder="ID">
                                            <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="batch" value="{{ $alumni->batch }}" required placeholder="Batch">
                                            <span class="text-danger">@error('batch'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="pass_year" value="{{ $alumni->pass_year }}" required placeholder="Passing Year">
                                            <span class="text-danger">@error('pass_year'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="organization" value="{{ $alumni->organization }}" required placeholder="Organization">
                                            <span class="text-danger">@error('organization'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="designation" value="{{ $alumni->designation }}" required placeholder="Designation">
                                            <span class="text-danger">@error('designation'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="phone" value="{{ $alumni->phone }}" required placeholder="Phone">
                                            <span class="text-danger">@error('phone'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="email" class="form-control" name="email" value="{{ $alumni->email }}" required placeholder="Email">
                                            <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                        </div>
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="address" value="{{ $alumni->address }}" required placeholder="Address">
                                            <span class="text-danger">@error('address'){{ $message }}@enderror</span>
                                        </div>

                                        <!-- Submit Button -->
                                        <div class="text-center">
                                            <button type="submit" class="btn btn-success ">
                                                <i class="fas fa-paper-plane"></i> Update
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
</div>
</div>

@endsection
