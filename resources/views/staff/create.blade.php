@extends('layout.dashboard')

@section('main')

<main>
    <div class="container p-3">

        <h1 class="mt-4">Create Staff</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">create staff </li>
        </ol>
        <br>
        <a href="" class="btn btn-dark text-white">Back</a>
        <br>


        <form action="{{route('staff.store')}}" enctype="multipart/form-data"  method="POST">
            @csrf
            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="file" class="form-control" id="imageInput" name="image" >
               <span class="text-danger">@error('image'){{$message}}@enderror</span>
              </div>

            <div class="mb-3">
                <label for="nameInput" class="form-label"> Name</label>
                <input type="text" class="form-control" id="nameInput" name="name" >
                <span class="text-danger">@error('name'){{$message}}@enderror</span>
              </div>

          <div class="mb-3">
            <label for="position" class="form-label">Position</label>
            <input type="text" class="form-control" id="position" name="position">
            <span class="text-danger">@error('position'){{$message}}@enderror</span>
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email"  name="email" >
            <span class="text-danger">@error('email'){{$message}}@enderror</span>

          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="mobile" >
            <span class="text-danger">@error('mobile'){{$message}}@enderror</span>
          </div>


          <button type="submit" class="btn btn-primary">Save</button>
        </form>
      </div>
</main>
@endsection

