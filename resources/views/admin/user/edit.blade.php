
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->

@extends('admin._master')


@section('main')



       <!-- resources/views/students/create.blade.php -->



       <div class="container mt-5">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card bg-dark">
                    <div class="card-body">
                        <h2 class="text-info text-center mb-3">Edit Admin Information</h2>

                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form action="{{ route('update', $admin->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="name" class="text-white">Name</label>
                                <input type="text" class="form-control" name="name" required>
                                <input type="hidden" class="form-control" value="user" name="role" required>
                            </div>

                            <div class="form-group">
                                <label for="name"class="text-white">Email</label>
                                <input type="email" class="form-control" name="email" required>
                                <input type="hidden" class="form-control" value="user" name="role" required>
                            </div>

                            <div class="form-group">
                                <label for="" class="text-white">Password</label>
                                <input type="password" class="form-control" name="password" required>
                                <input type="hidden" class="form-control" value="user" name="role" required>
                            </div>
                            <br>
                            <br>

                            <button type="submit" class="btn btn-primary btn-block">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <br>
@endsection
