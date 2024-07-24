
@extends('layout.app')

@section('content')
<br>
<br>
<br>

    <div class="text-center"><h1 class="  text-white p-2 rounded">Academic Events</h1></div>
    {{-- <div class="divider-custom-icon"><h1 class="text-danger">Upcoming Event</h1></div> --}}
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-circle"></i></div>
        <div class="divider-custom-line"></div>
    </div>

  <div class="container mt-5">

    <div class="row">
       @foreach ($event as $event)
       {{-- <div class="col-md-4 ">
        <div class="card">
            <h2 class="card-title text-white bg-dark p-2">{{$event->id}} . {{$event->name}}</h2>
            <img src="{{$event->image}}" class="img-fluid" alt="ITM EVENT">
            <div class="card-body">
              <p class="card-text"> <strong> Date: </strong><span class="card-text">{{$event->date}}</span></p>
              <p class="card-text"> <strong> Time: </strong><span class="card-text">{{$event->time}}</span></p>
              <p class="card-text"> <strong> Location: </strong><span class="card-text">{{$event->location}}</span></p>
              <p class="card-text"> <strong> Description: </strong><span class="card-text">{{$event->description}}</span></p>
              <a href="#" class="btn btn-dark text-white">View Event</a>
            </div>
          </div>
        </div> --}}
        <div class="col-lg-3 col-md-6 mb-4 p-2">
            <div class="card img-fluid bg-black shadow">
                <div class="item-bg rounded">
                    <h2 class="card-title text-white bg-dark p-2">{{$event->id}} . {{$event->name}}</h2>
                    <img src="{{$event->image}}" class="card-img-top " alt="ITM EVENT">
                </div>
                <div class="card-body ">
                    <p class="card-text"> <strong> Date: </strong><span class="card-text">{{$event->date}}</span></p>
                    <p class="card-text"> <strong> Time: </strong><span class="card-text">{{$event->time}}</span></p>
                    <p class="card-text"> <strong> Location: </strong><span class="card-text">{{$event->location}}</span></p>
                    <p class="card-text"> <strong> Description: </strong><span class="card-text">{{$event->description}}</span></p>
                </div>
            </div>
        </div>
        @endforeach
        </div>
        
        </div>



        {{-- <div class="container mt-5">
            <div class="row">
                <!-- Card 1 -->
                @foreach ($event as $event)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <h5 class="card-title">{{$event->id}}</h5>
                        <img src="{{$event->image}}" class="card-img-top" alt="Event Image 1">
                        <div class="card-body">
                            <p class="card-text"><strong>Date:{{$event->date}}</strong> July 7, 2024</p>
                            <p class="card-text"><strong>Time:{{$event->time}}</strong> 10:00 AM</p>
                            <p class="card-text"><strong>Location:{{$event->location}}</strong> Event Location 1</p>
                            <p class="card-text">Description :{{$event->description}}</p>
                            <a href="#" class="btn btn-primary btn-sm">More Info</a>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
        </div> --}}

  @endsection

