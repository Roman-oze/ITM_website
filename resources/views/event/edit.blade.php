@extends('layout.dashboard')

@section('main')


<div class="container p-3">

    <h1 class="mt-4">Event</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Dashboard</a></li>
        <li class="breadcrumb-item active">event Edit</li>
    </ol>



    <form action="{{route('event_update',$event->id)}}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nameInput" class="form-label">Event Name</label>
            <input type="text" class="form-control" value="{{$event->name}}" name="name" >
            <span class="text-danger">@error('name'){{$message}}@enderror</span>
          </div>

      <div class="mb-3">
        <label for="image" class="form-label">Image URL</label>
        <input type="file" class="form-control" value="{{asset($event->image)}}" name="image" >
       <span class="text-danger">@error('image'){{$message}}@enderror</span>
      </div>


      <div class="mb-3">
        <label for="designationInput" class="form-label">Date</label>
        <input type="date" class="form-control" value="{{$event->date}}" name="date">
        <span class="text-danger">@error('date'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="facebookInput" class="form-label">Time</label>
        <input type="time" class="form-control" value="{{$event->time}}"  name="time" >
        <span class="text-danger">@error('time'){{$message}}@enderror</span>

      </div>

      <div class="mb-3">
        <label for="linkedinInput" class="form-label">Location</label>
        <input type="text" class="form-control" value="{{$event->location}}" name="location" >
        <span class="text-danger">@error('address'){{$message}}@enderror</span>
      </div>

      <div class="mb-3">
        <label for="text" class="form-label">Desciption</label>
        <input type="text" class="form-control" value="{{$event->description}}" name="description" >
        <span class="text-danger">@error('description'){{$message}}@enderror</span>
      </div>

      <button type="submit" class="btn btn-primary">Update</button>

      @if(session('success'))
      <div class="alert alert-success" role="alert">
          {{ session('success') }}
      </div>
  @endif

    </form>
  </div>
@endsection

