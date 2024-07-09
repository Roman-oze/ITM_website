
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('admin.Admin layout._master')


@section('main')




       <!-- resources/views/students/create.blade.php -->



       <div class="container mt-5" style="width: 60%; margin: auto;">
        <div class="card ">
            <div class="card-body">
                <h2 class="text-danger mt-3">Edit Student Information</h2>
                <div class=" text-left">
                    <a href="{{ route('index') }}"><button class="btn btn-outline-info">Back</button></a>

                </div>
                <br>
                <br>
                <form action="{{ route('update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" required>
                        <input type="hidden" class="form-control" value="user" name="role" required>
                    </div>

                    <div class="form-group">
                        <label for="name">Email</label>
                        <input type="email" class="form-control" name="email" required>
                        <input type="hidden" class="form-control" value="user" name="role" required>
                    </div>

                    <div class="form-group">
                        <label for="department">Department:</label>
                        <input type="text" class="form-control" name="department" required>
                        <input type="hidden" class="form-control" value="user" name="role" required>
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
                          <br>
                          <br>
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
@endsection
