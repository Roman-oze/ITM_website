
@extends('club.layout.club_master')

@section('club_header')
@include('club.layout.header')



@section('main_content')



<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-center">
      <div class="section-title">
        <h3>Club <span>Event</span></h3>
        <span class="line"></span>
                <div class="row d-flex justify-content-center">
                    @foreach ($events as $event)
                    <div class="col-md-4 ">
                            <div class="event-card box-shadow mt-2{{ $event->created_at->diffInDays(now()) <= 7 ? 'new-event' : 'old-event' }}">
                                <!-- Badge for New/Old Event -->
                                    <!-- Badge positioned in top-left corner -->
                                    @if ($event->created_at->diffInDays(now()) <= 7)
                                        <span class="badge bg-success text-white position-absolute top-right-badge p-2">New Event</span>
                                    @else
                                        <span class="badge bg-secondary text-white position-absolute top-right-badge p-2">Old Event</span>
                                    @endif
                            <img src="{{asset($event->image)}}" alt="Event Image" class="img">
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
