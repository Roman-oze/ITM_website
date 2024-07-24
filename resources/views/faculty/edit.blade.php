@extends('layout.dashboard')


@section('main')


<div class="container-fluid mt-3">
    <div class=" text-center">
        <h2 class="btn btn-dark">Edit</h2>
    </div>
    <br>
    <form  action="{{route('update.faculty',$teacher->teacher_id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

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

    <div class="row p-4 col-6 d-block m-auto card">

 <div class="mb-3">
    <label for="image" class="form-label">Image URL</label>
    <input type="file" class="form-control" id="imageInput" name="image" value="{{asset($teacher->image)}}" >
  </div>
  <div class="mb-3">
    <label for="nameInput" class="form-label">Name</label>
    <input type="text" class="form-control" id="nameInput" name="name" value="{{$teacher->name}}">
  </div>
  <div class="mb-3">
    <label for="designationInput" class="form-label">Designation</label>
    <input type="text" class="form-control" id="designationInput" name="designation" value="{{$teacher->designation}}">
  </div>
  <div class="mb-3">
    <label for="facebookInput" class="form-label">Facebook URL</label>
    <input type="text" class="form-control" id="facebookInput" name="fb" value="{{$teacher->fb}}" >
  </div>
  <div class="mb-3">
    <label for="linkedinInput" class="form-label">LinkedIn URL</label>
    <input type="text" class="form-control" id="linkedinInput" name="linked"  value="{{$teacher->linked}}">
  </div>
  <div class="mb-3">
    <label for="emailInput" class="form-label">Email</label>
    <input type="email" class="form-control" id="emailInput" name="email" value="{{$teacher->email}}">
  </div>
  <div class="mb-3">
    <label for="phoneInput" class="form-label">Phone</label>
    <input type="text" class="form-control"  name="phone" value="{{$teacher->phone}}">
  </div>
  <button type="submit" class="btn btn-primary">Update Profile</button>
</form>



</div>
</div>



@endsection
