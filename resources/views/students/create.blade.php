
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout._club_master')
@section('main_content')

<h2 class="text-danger mt-3">Create Student</h2>
    <div class="container mt-5 ">


        <form action="{{route('create')}}" method="post" >
        @csrf       
            
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="department" class="form-label">Department:</label>
                <input type="text" name="department" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="address" class="form-label">Address:</label>
                <input type="text" name="address" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile:</label>
                <input type="text" name="mobile" class="form-control" required>
            </div>

    

            <button type="submit" class="btn btn-primary ">Submit</button>
        </form>
    </div>
    <br>
    <br>
    <br>
@endsection
