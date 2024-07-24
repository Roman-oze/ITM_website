@extends('layout.dashboard')

@section('main')


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
<div class="container ">

    <h1 class="mt-4">Create Faculty Profile</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">Create Faculty </li>
    </ol>
    <br>


<div class="row p-3">
    <form action="{{route('faculty.store')}}" enctype="multipart/form-data" method="POST">
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
  </div>
@endsection

