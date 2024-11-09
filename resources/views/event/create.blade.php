@extends('layout.dashboard')

@section('main')


<div class="container-fluid px-4">
    <h2 class="mt-4">Event Create</h2>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
        <li class="breadcrumb-item active">events create</li>
    </ol>

    <br>
<div class="d-flex justify-content-center align-items-center min-vh-85">
<div class="row p-3 shadow broder-1 rounded">

    @if (session('success'))
    <div class=" alert alert-success">
        {{ session('success')}}
    </div>
    @endif
    @if (session('error'))
    <div class=" alert alert-danger">
        {{ session('error')}}
    </div>
    @endif

    <form action="{{url('event_store')}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nameInput" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="nameInput" name="name" placeholder="Name">
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
          </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" id="imageInput" name="image" >
       <span class="text-danger">@error('image'){{$message}}@enderror</span>
      </div>


      <div class="mb-3">
        <label for="designationInput" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
        <span class="text-danger">@error('date'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="facebookInput" class="form-label">Time</label>
        <input type="time" class="form-control" id="time"  name="time" >
        <span class="text-danger">@error('time'){{$message}}@enderror</span>

      </div>

      <div class="mb-3">
        <label for="linkedinInput" class="form-label">Location</label>
        <input type="text" class="form-control" id="address" name="location" >
        <span class="text-danger">@error('address'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="text" class="form-label">Desciption</label>
        <input type="text" class="form-control" id="description" name="description" >
        <span class="text-danger">@error('description'){{$message}}@enderror</span>
      </div>



      <button type="submit" class="btn btn-success ">Save</button>
    </form>
  </div>
  </div>
  </div>
@endsection

