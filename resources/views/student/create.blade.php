
@extends('layout.dashboard')
@section('main')

<div class="container-fluid px-4">
    <h2 class="mt-4">Student Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Student Create </li>
    </ol>

        <div class="container bg-image ">
            <div id="layoutAuthentication">
                <div id="layoutAuthentication_content">
                    <main class="">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-4">
                                    <div class="card shadow-lg border-0 rounded-lg  bg-black">
                                        <div class="card-body">
                                            <form action="{{ route('student.store') }}"  method="POSt">
                                                @csrf

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


                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="name" required placeholder="Name">
                                                    <span class="text-danger">@error('name'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="roll" required placeholder="ID">
                                                    <span class="text-danger">@error('roll'){{ $message }}@enderror</span>
                                                </div>


                                                <div class="form-group mb-3">
                                                    <label for="batch" class="form-label text-white">Select Batch:</label>
                                                    <select name="batch_id" id="batch" class="form-select">
                                                        @foreach($batches as $batch)
                                                            <option value="{{ $batch->batch_id }}">{{ $batch->batch_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group mb-3">

                                                    <input type="email" class="form-control" name="email" required placeholder="Email">
                                                    <span class="text-danger">@error('email'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" name="blood" required placeholder="Blood">
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="address" required placeholder="Address">
                                                </div>
                                                <div class="form-group mb-3">

                                                    <input type="text" class="form-control" name="mobile" required placeholder="Mobile">
                                                </div>
                                                <div class="form-group mb-4">
                                                    <label for="type" class="text-white">Status</label>
                                                    <select name="type" class="form-select">
                                                        <option value="active">Active</option>
                                                        <option value="inactive">Inactive</option>
                                                    </select>
                                                    <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                                                </div>
                                                <div class="text-center">
                                                    <button type="submit" class="btn btn-dark">
                                                        <i class="fas fa-paper-plane"></i> Submit
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
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
@endsection
