
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout._club_master')
@section('main_content')




       <!-- resources/views/students/create.blade.php -->



           <div class="container mt-5">
            <h2 class="text-danger mt-3">Create Student</h2>

            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form method="post" action="{{route('store')}}">
                @csrf
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" required>
                    <input type="hidden" class="form-control" value="user" name="role" required>
                </div>

                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" name="email"  required>
                    <input type="hidden" class="form-control" value="user" name="role" required>

                </div>

                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" name="department" required>

                </div>

                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" name="address" required>
                    <input type="hidden" class="form-control" value="user" name="role" required>

                </div>

                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" name="mobile" required>
                    <input type="hidden" class="form-control" value="user" name="role" required>

                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" name="password" required>
                    <input type="hidden" class="form-control" value="user" name="role" required>

                </div>
                <div class="form-group">
                    <label for="">password confirm</label>
                    <input type="password" class="form-control" name="password_confirm" required>
                    <input type="hidden" class="form-control" value="user" name="role" required>

                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>


    <br>
    <br>
    <br>
@endsection
