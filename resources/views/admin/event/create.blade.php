@extends('admin._master')

@section('main')


<div class="container p-3">
    <h2 class="text-danger">Create Event</h2>
    <br>
    <br>
    <a href="{{route('event/create')}}" class="btn btn-dark text-white">Back</a>
    <br>


    <form action="{{url('event_store')}}" enctype="multipart/form-data" method="POST">
        @csrf

        <div class="mb-3">
            <label for="nameInput" class="form-label">Event Name</label>
            <input type="text" class="form-control" id="nameInput" name="name" >
            <span>@error('name'){{$message}}@enderror</span>
          </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" id="imageInput" name="image" >
       <span>@error('image'){{$message}}@enderror</span>
      </div>


      <div class="mb-3">
        <label for="designationInput" class="form-label">Date</label>
        <input type="date" class="form-control" id="date" name="date">
        <span>@error('date'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="facebookInput" class="form-label">Time</label>
        <input type="time" class="form-control" id="time"  name="time" >
        <span>@error('time'){{$message}}@enderror</span>

      </div>

      <div class="mb-3">
        <label for="linkedinInput" class="form-label">Location</label>
        <input type="text" class="form-control" id="address" name="location" >
        <span>@error('address'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="text" class="form-label">Desciption</label>
        <input type="text" class="form-control" id="description" name="description" >
        <span>@error('description'){{$message}}@enderror</span>
      </div>



      <button type="submit" class="btn btn-primary">Save</button>
    </form>
  </div>
@endsection

