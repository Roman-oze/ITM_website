@extends('admin.Admin layout._master')


@section('main')


<div class="container-fluid">
    <br>

    <form  action="{{route('faculty_update',$teacher->teacher_id)}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')


    <div class="row p-4 col-6 d-block m-auto card">
        <a href="{{route('showing')}}" class="btn btn-dark">Add</a>
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
  <button type="submit" class="btn btn-primary">Save</button>
</form>



</div>
</div>



@endsection
