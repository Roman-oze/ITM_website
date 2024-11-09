@extends('layout.dashboard')

@section('main')

<main>
    <div class="container-fluid px-4">
        <h2 class="mt-4">Staff Create</h2>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Staff create</li>
        </ol>



<div class="d-flex justify-content-center align-items-center min-vh-85">
    <div class="row p-3 shadow broder-1 rounded">
        <form action="{{route('staff.store')}}" enctype="multipart/form-data"  method="POST">
            @csrf

            @if (session('success'))
              <div class=" alert alert-success">
                {{ session('success') }}
              </div>
            @endif
            @if (session('error'))
            <div class=" alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

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


          <button type="submit" class="btn btn-success">Save</button>
        </form>
      </div>
    </div>
</div>

</main>
@endsection

