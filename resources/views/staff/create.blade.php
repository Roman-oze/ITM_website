@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Officer & Staff Management</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Create</li>
        </ol>

    <div class="d-flex justify-content-center align-items-center min-vh-85 ">
        <form action="{{route('staff.store')}}" enctype="multipart/form-data"  method="POST" class="border shadow rounded p-3">
            @csrf

            <div class="mb-3">
                <label for="image" class="form-label">Image URL</label>
                <input type="file" class="form-control p-2" id="imageInput" name="image" >
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
</div>
</main>
<br>
<br>
@endsection

