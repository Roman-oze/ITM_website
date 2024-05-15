
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
    <div class="row">
        <!-- Card 1 -->
        <div class="col-md-4">
          <div class="card">
            <h2 class="card-title text-white bg-info p-2">Orientation</h2>
            <img src="{{asset('frontend/image/event_photo/orient.jpg')}}" class="card-img-top" alt="Event Image 1">
            <div class="card-body">
              <p>Date: <span class="card-text">Feburary 7th, 2024</span></p>
              <p>Location: <span class="card-text">Animul Hoque Hall</span></p>
              <p>Description: <span class="card-text">Recap of the symposium on artificial intelligence and its applications in various fields.</span></p>
              <a href="#" class="btn btn-info">View Event</a>
            </div>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4">
          <div class="card">
            <h2 class="card-title text-white bg-info p-2">ITM Summit</h2>
            <img src="{{asset('frontend/image/event_photo/itmsummit.jpg')}}" class="card-img-top" alt="Event Image 2">
            <div class="card-body">
              <p>Date: <span class="card-text">July 7th, 2024</span></p>
              <p>Location: <span class="card-text">Auditorium</span></p>
              <p>Description: <span class="card-text">Ayman Sadik came to our ITM Summit Departmental program, providing a lot of knowledge.</span></p>
              <a href="#" class="btn btn-info">View Event</a>
            </div>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4">
          <div class="card">
            <h2 class="card-title text-white bg-info p-2">FinTech Summit</h2>
            <img src="{{asset('frontend/image/event_photo/fin.jpg')}}" class="card-img-top" alt="Event Image 3">
            <div class="card-body">
              <p>Date: <span class="card-text">September 16th, 2024</span></p>
              <p>Location: <span class="card-text"> Animul Hoque Hall</span></p>
              <p>Description: <span class="card-text">Learned lots of things from this program, Recap of the symposium on artificial intelligence.</span></p>
              <a href="#" class="btn btn-info">View Event</a>
            </div>
          </div>
        </div>

      </div>
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card">
          <h2 class="card-title  text-white bg-info p-2">Iftar Party</h2>
          <img src="{{asset('frontend/image/roja.avif')}}" class="card-img-top" alt="Event Image 1">
          <div class="card-body bg-light">
            <p>Date: <span class="card-text"> March 25th, 2024</span></p>
            <p>Location: <span class="card-text">Food Court</span></p>
            <p>Description: <span class="card-text">Departmental Ramadan Iftar Party for all current students. Must participate.</span></p>
            <a href="#" class="btn btn-info">Registration</a>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card">
          <h2 class="card-title  text-white bg-info p-2">Empty</h2>
          <img src="{{asset('frontend/image/upcoming.avif')}}" class="card-img-top" alt="Event Image 3">
          <div class="card-body">
            <p>Date: <span class="card-text">..........</span></p>
            <p>Location: <span class="card-text">.........</span></p>
            <p>Description: <span class="card-text">............</span></p>
            <a href="#" class="btn btn-info">View Event</a>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card">
          <h2 class="card-title text-white bg-info p-2">Empty</h2>
          <img src="{{asset('frontend/image/upcoming.avif')}}" class="card-img-top" alt="Event Image 3">
          <div class="card-body">
            <p>Date: <span class="card-text">.........</span></p>
            <p>Location: <span class="card-text"> ..........</span></p>
            <p>Description: <span class="card-text">............</span></p>
            <a href="#" class="btn btn-info">View Event</a>
          </div>
        </div>
      </div>

    </div>
    <br>
    <br>
    <br>

    </div>
    <br>
    <br>
    <br>
    <br>
@endsection
