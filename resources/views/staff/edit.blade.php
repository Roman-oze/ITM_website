@extends('layout.dashboard')

@section('main')

<main>
<div class="container-fluid px-4">
        <h2 class="mt-4">Staff Edit</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Staff edit</li>
        </ol>
        <br>

<div class="d-flex justify-content-center align-items-center min-vh-85">
    <div class="row p-3 shadow broder-1 rounded">
        <form action="{{route('staff.update',$staff->id)}}" enctype="multipart/form-data"  method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                @if ($staff->image)
                <img src="{{asset($staff->image)}}" alt="" width="100" height="100" class="rounded-circle    ">
                <label for="image" class="form-label badge badge-dark">Current Profile </label>
                @endif
                <input type="file" class="form-control" id="imageInput" name="image" value="{{$staff->image}}" >
               <span class="text-danger">@error('image'){{$message}}@enderror</span>
              </div>

            <div class="mb-3">
                <label for="nameInput" class="form-label"> Name</label>
                <input type="text" class="form-control" id="nameInput" name="name" value="{{$staff->name}}">
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
              </div>

          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{$staff->position}}">
            <span class="text-danger">@error('position'){{$message}}@enderror</span>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" value="{{$staff->email}}">
            <span class="text-danger">@error('email'){{$message}}@enderror</span>

          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="mobile" value="{{$staff->mobile}}">
            <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
          </div>


          <button type="submit" class="btn btn-dark">Update Profile</button>
        </form>
      </div>
    </div>
</div>

</main>
@endsection

