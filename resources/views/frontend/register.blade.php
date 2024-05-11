
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout.master')
@section('content')




       <!-- resources/views/students/create.blade.php -->



           <div class="container mt-5">
            <h2 class="text-danger mt-3">Create Registration</h2>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="post" action="{{route('store')}}">
                @csrf

                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" name="name" required>
                </div>

                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" name="department" required>
                </div>

                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" name="address" required>
                </div>

                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" name="mobile" required>
                </div>
                <br>
                <br>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    <br>
    <br>
    <br>
@endsection
