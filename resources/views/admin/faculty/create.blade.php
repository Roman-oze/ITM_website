@extends('admin._master')

@section('main')

<br>
<br>
<br>

{{-- <div class="container d-flex justify-content-center">
<div class="row border-1">
        <form action="{{url('faculty_store')}}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="file" class="form-control" id="imageInput" name="image">
            </div>
            <div class="mb-3">
                <label for="nameInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="nameInput" name="name">
            </div>
            <div class="mb-3">
                <label for="designationInput" class="form-label">Designation</label>
                <input type="text" class="form-control" id="designationInput" name="designation">
            </div>
            <div class="mb-3">
                <label for="facebookInput" class="form-label">Facebook URL</label>
                <input type="text" class="form-control" id="facebookInput" name="fb">
            </div>
            <div class="mb-3">
                <label for="linkedinInput" class="form-label">LinkedIn URL</label>
                <input type="text" class="form-control" id="linkedinInput" name="linked">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" name="email">
            </div>
            <div class="mb-3">
                <label for="phoneInput" class="form-label">Phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>

</div>
</div> --}}
<div class="container p-5">
    <h2 class="text-danger">Create Profile</h2>

    <a href="{{route('teacher_create')}}" class="btn btn-dark text-white">Back</a>
    <br>

    <form action="{{url('faculty_store')}}" enctype="multipart/form-data" method="POST">
        @csrf

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" id="imageInput" name="image" >
       <span>@error('image'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="nameInput" class="form-label">Name</label>
        <input type="text" class="form-control" id="nameInput" name="name" >
        <span>@error('name'){{$message}}@enderror</span>
      </div>


      <div class="mb-3">
        <label for="designationInput" class="form-label">Designation</label>
        <input type="text" class="form-control" id="designationInput" name="designation">
        <span>@error('designation'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="facebookInput" class="form-label">Facebook URL</label>
        <input type="text" class="form-control" id="facebookInput" name="fb" >
        <span>@error('fb'){{$message}}@enderror</span>

      </div>

      <div class="mb-3">
        <label for="linkedinInput" class="form-label">LinkedIn URL</label>
        <input type="text" class="form-control" id="linkedinInput" name="linked" >
        <span>@error('linked'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="emailInput" class="form-label">Email</label>
        <input type="email" class="form-control" id="emailInput" name="email" >
        <span>@error('email'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="phoneInput" class="form-label">Phone</label>
        <input type="text" class="form-control"  name="phone" >
        <span>@error('phone'){{$message}}@enderror</span>
      </div>

      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection

