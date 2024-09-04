
@extends('layout.app')

@section('content')
<br>
<br>
<br>


<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-left">
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


      <h2 class=" text-dark text-left">Upcoming</h2>

      <div class="container">
        <div class="row">
            @foreach ($upcoming as $upcome)
            <div class="col-md-4 ">
                <div class="event-card  ">
                    <img src="{{$upcome->image}}" alt="Event Image" class="img">
                    <h1 class="event-card-title text-center text-success  p-2">{{$upcome->name}}</h1>
                    <div class="event-card-body">
                      <p class="event-card-text text-white">{{$upcome->description}}</p>
                    <p class="card-text"> <strong> <i class="fa-regular fa-clock text-light"></i> </strong><span class="badge badge-success text-white ">{{$upcome->time}}</span></p>
                    <p class="card-text"> <i class="fa-solid fa-calendar-days text-light"></i> <span class="badge badge-success text-white ">{{$upcome->date}}</span></p>
                    <p class="card-text"> <strong> <i class="fa-solid fa-location-dot text-white"></i> </strong><span class="badge badge-success text-white ">{{$upcome->location}}</span></p>
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
                       <marquee behavior="" direction=""><h1 class="event-card-title text-center text-success bg-light p-2">{{$event->name}}</h1></marquee>

                        <div class="event-card-body">

                          <p class="event-card-text text-white">{{$event->description}}</p>
                        <p class="card-text"> <strong> <i class="fa-regular fa-clock text-light"></i> </strong><span class="badge badge-white text-white ">{{$event->time}}</span></p>
                        <p class="card-text"> <i class="fa-solid fa-calendar-days text-light"></i> <span class="badge badge-success text-white ">{{$event->date}}</span></p>
                        <p class="card-text"> <strong> <i class="fa-solid fa-location-dot text-white"></i> </strong><span class="badge badge-white text-white">{{$event->location}}</span></p>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>

          </div>
          </div>
          </div>
</section>




  @endsection

