
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

    {{-- <div class="container">
        <div class="row">
            @foreach ($event as $event)
          <div class="col-md-4">
            <div class="event-card">
              <img src="{{$event->image}}" alt="Event Image">
              <div class="event-card-body">
                <h2 class="event-card-title">{{$event->name}}</h2>
                <p class="event-card-text">{{$event->description}}</p>
                <p class="card-text"> <strong> Date: </strong><span class="card-text">{{$event->date}}</span></p>
                    <p class="card-text"> <strong> Time: </strong><span class="card-text">{{$event->time}}</span></p>
                    <p class="card-text"> <strong> Location: </strong><span class="card-text">{{$event->location}}</span></p>
                <div class="event-card-footer">
                  <a href="#">Read More</a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div> --}}


      <h2 class=" text-white-50 text-left p-5">Upcoming</h2>

      <div class="container">
        <div class="row">
            @foreach ($upcoming as $upcome)
            <div class="col-md-4 ">
                <div class="event-card box-shadow">
                    <img src="{{$upcome->image}}" alt="Event Image" class="img">
                    <h1 class="event-card-title text-center text-success bg-light p-2">{{$upcome->name}}</h1>
                    <div class="event-card-body">
                      <p class="event-card-text text-white">{{$upcome->description}}</p>
                    <p class="card-text"> <strong> <i class="fa-regular fa-clock text-light"></i> </strong><span class="badge badge-success text-success ">{{$upcome->time}}</span></p>
                    <p class="card-text"> <i class="fa-solid fa-calendar-days text-light"></i> <span class="badge badge-success text-success ">{{$upcome->date}}</span></p>
                    <p class="card-text"> <strong> <i class="fa-solid fa-location-dot text-white"></i> </strong><span class="badge badge-success text-success bt">{{$upcome->location}}</span></p>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>

      </div>











        <div class="container">
            <div class="row">
                @foreach ($event as $event)
                <div class="col-md-4 ">
                    <div class="event-card box-shadow">
                        <img src="{{$event->image}}" alt="Event Image" class="img">
                        <h1 class="event-card-title text-center text-success bg-light p-2">{{$event->name}}</h1>

                        <div class="event-card-body">

                          <p class="event-card-text text-white">{{$event->description}}</p>
                        <p class="card-text"> <strong> <i class="fa-regular fa-clock text-light"></i> </strong><span class="badge badge-success text-success ">{{$event->time}}</span></p>
                        <p class="card-text"> <i class="fa-solid fa-calendar-days text-light"></i> <span class="badge badge-success text-success ">{{$event->date}}</span></p>
                        <p class="card-text"> <strong> <i class="fa-solid fa-location-dot text-white"></i> </strong><span class="badge badge-success text-success bt">{{$event->location}}</span></p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>

          </div>




  @endsection

