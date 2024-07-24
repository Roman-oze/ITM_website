
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout.dashboard')


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
                <form action="{{ route('student.update', $student->id) }}" method="post">
                    @csrf
                    @method('PUT')

                    @if (session()->has('sucess'))
                    <div class="alert alert-success">
                        {{session()->get('success')}}
                    </div>
                    @endif

                    @if (session()->has('error'))
                    <div class="alert alert-danger">
                        {{session()->get('error')}}
                    </div>
                    @endif


                    <div class="form-group">
                        <label for="name">Name: </label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
                    </div>

                    <div class="form-group">
                        <label for="name">ID: </label>
                        <input type="text" class="form-control" name="roll" value="{{ $student->roll }}" required>
                    </div>

                    <div class="form-group">
                        <label for="department">Batch: </label>
                        <input type="text" class="form-control" name="batch"  value="{{ $student->batch }}"required>
                    </div>

                    <div class="form-group">
                        <label for="address">Email: </label>
                        <input type="text" class="form-control" name="email" value="{{ $student->email }}" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Blood: </label>
                        <input type="text" class="form-control" name="blood" value="{{ $student->blood }}" required>
                    </div>

                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control" name="mobile" value="{{ $student->mobile }}" required>
                    </div>
                    <div class="form-group">
                        <label for="mobile">Mobile:</label>
                        <input type="text" class="form-control" name="address" value="{{ $student->address }}" required>
                    </div>
                    <div class="form-group mb-4">
                        <label for="type" class="text-white" >Status</label>
                        <select name="type"  class="form-select">
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <span class="text-danger">@error('type'){{ $message }}@enderror</span>
                    </div>

                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>


    <br>
    <br>
    <br>
@endsection
