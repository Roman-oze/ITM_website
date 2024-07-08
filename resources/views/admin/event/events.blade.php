
@extends('layout.master')

@section('content')
<br>
<br>
<br>
<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><h1 class=" bg-dark text-white p-2 rounded">Academic Events</h1></div>
    {{-- <div class="divider-custom-icon"><h1 class="text-danger">Upcoming Event</h1></div> --}}
    <div class="divider-custom-line"></div>
  </div>

  <div class="container mt-5">
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><h1 class=" bg-dark text-white p-2 rounded">Academic Events</h1></div>
        {{-- <div class="divider-custom-icon"><h1 class="text-danger">Upcoming Event</h1></div> --}}
        <div class="divider-custom-line"></div>
      </div>
    <div class="row">
        <!-- Card 1 -->
       @foreach ($event as $event)
        <div class="col-md-4">
          <div class="card">
            <h2 class="card-title text-white bg-info p-2">{{$event->name}}</h2>
            <img src="{{$event->image}}" class="card-img-top" alt="Event Image 1">
            <div class="card-body">
              <p>Date: <span class="card-text">{{$event->date}}</span></p>
              <p>Date: <span class="card-text">{{$event->time}}</span></p>
              <p>Location: <span class="card-text">{{$event->location}}</span></p>
              <p>Description: <span class="card-text">{{$event->description}}</span></p>
              <a href="#" class="btn btn-info">View Event</a>
            </div>
          </div>
        </div>
        @endforeach
        </div>


  @endsection
