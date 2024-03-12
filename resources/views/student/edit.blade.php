
 <!-- resources/views/students/create.blade.php -->

<!-- resources/views/students/create.blade.php -->
@extends('layout._club_master')
@section('main_content')

   


       <!-- resources/views/students/create.blade.php -->

      
       
           <div class="container mt-5">
            <h2 class="text-danger mt-3">Edit Student Information</h2>
    
            @if(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
    
            <form action="{{route('update',$student->id)}}"  method="post">
                @csrf
                @method('PUT')
    
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" class="form-control" value="{{ $student->name }}" name="name" required>
                </div>
    
                <div class="form-group">
                    <label for="department">Department:</label>
                    <input type="text" class="form-control" value="{{ $student->department }}" name="department" required>
                </div>
    
                <div class="form-group">
                    <label for="address">Address:</label>
                    <input type="text" class="form-control" value="{{ $student->address }}" name="address" required>
                </div>
    
                <div class="form-group">
                    <label for="mobile">Mobile:</label>
                    <input type="text" class="form-control" value="{{ $student->mobile }}" name="mobile" required>
                </div>
    
                <button type="submit" class="btn btn-primary">update</button>
            </form>
        </div>
  
       
    <br>
    <br>
    <br>
@endsection
