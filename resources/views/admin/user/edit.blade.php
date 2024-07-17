
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->

@extends('admin.Admin layout._master')


@section('main')



       <!-- resources/views/students/create.blade.php -->



       <div class="container mt-5">
        <div class="row justify-content-center" >
            <div class="col-md-6">
                <div class="card ">
                    <div class="card-body">
                        <h2 class="text-info text-center mb-3">Edit Admin Information</h2>



                        <form action="{{ route('update.user', $users->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif
                        @if(session('error'))
                        <div class="alert alert-danger" role="alert">
                            {{ session('error') }}
                            </div>
                            @endif

                            <div class="form-group">
                                <label for="name" class="text-white">Name</label>
                                <input type="text" class="form-control" name="name" value="{{$users->name}}" required>
                            </div>

                            <div class="form-group">
                                <label for="name"class="text-white">Email</label>
                                <input type="email" class="form-control" name="email"  value="{{$users->email}}" required>
                            </div>

                            <div class="form-group">
                                <label for="" class="text-white">Password</label>
                                <input type="password" class="form-control" name="password" value="{{$users->password}}" required>
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
