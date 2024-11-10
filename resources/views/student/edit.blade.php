
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout.dashboard')


@section('main')


<div class="container-fluid px-4">
    <h2 class="mt-4">Student Edit</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">Student edit </li>
    </ol>
       <div class="row d-flex justify-content-center mt-5" style="width: 60%; margin: auto;">
        <div class="card col-8">
            <div class="card-body">
                <form action="{{ route('student.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')

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
                        <select name="batch_id" id="" class="form-control p-2" >
                            @foreach ($batches as $batch)
                            <option value="{{$batch->batch_id}}">{{ $batch->batch_name }}</option>
                            @endforeach
                        </select>
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
</div>


    <br>
    <br>
    <br>
@endsection
