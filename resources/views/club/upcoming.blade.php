
@extends('club._club_master')

@section('club_header')
 <div class="container-fluid ">
<br>
<br>
<br>
<br>
     <div class="row">
          <div class="col-md-6 col-sm-12  text-center">
            <img src="{{asset('frontend/image/itmclub.png')}}" class="images animate__animated animate__fadeInLeft">
            </div>
           <div class="col-md-6 paragh col-sm-12  text-center">
           <h3 class="btnn animate__animated animate__bounce">Join Our Club</h3><br>
           <img src="{{asset('frontend/image/qr.png')}}" class="QR">
          <b><p class="p-3"> Department of Information Technology & Management and ITM Club Facebook page here do like follow and share </p></b>
          <a href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a></i>
          <a href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i><br>
        </div>
        </div>
      </div>
      <br>
@endsection

@section('main_content')
<div class="divider-custom">
    <div class="divider-custom-line"></div>
    <div class="divider-custom-icon"><h1 class=" bg-outline-info text-dark p-2 rounded">Academic Events</h1></div>
    {{-- <div class="divider-custom-icon"><h1 class="text-danger">Upcoming Event</h1></div> --}}
    <div class="divider-custom-line"></div>
  </div>
<div class="container-fluid mt-5">

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

      <br>
      <br>
      <br>


    </div>
    </div>
    <br>
    <br>
    <br>
    <br>
  @endsection
