
@extends('layout.app')

@section('content')
<br>
<br>
<br>


<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title text-left">

      <h2 class=" text-dark text-left">Upcoming</h2>

        <div class="container">
            <div class="row d-flex justify-content-center">
                @foreach ($events as $event)
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

{{-- 

  @extends('layout.app')

@section('content')
<br>
<br>
<br>

<section id="services" class="services section-bg text-left">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-left">
            <h2 class="text-dark text-left">Upcoming Events</h2>

            <div class="container">
                <div class="row d-flex justify-content-center">
                    @foreach ($events as $event)
                        <div class="col-md-4">
                            <div class="card p-2 position-relative {{ $event->created_at->diffInDays(now()) <= 7 ? 'new-event' : 'old-event' }}">
                                <!-- Badge positioned in top-left corner -->
                                @if ($event->created_at->diffInDays(now()) <= 7)
                                    <span class="badge bg-success position-absolute top-right-badge">New Notice</span>
                                @else
                                    <span class="badge bg-secondary position-absolute top-right-badge">Old Notice</span>
                                @endif

                                <div class="event-card box-shadow">
                                    <img src="{{ $event->image }}" alt="Event Image" class="img">
                                    <marquee behavior="" direction="">
                                        <h1 class="event-card-title text-center text-success bg-light p-2">{{ $event->name }}</h1>
                                    </marquee>

                                    <div class="event-card-body">
                                        <p class="event-card-text text-white">{{ $event->description }}</p>
                                        <p class="card-text">
                                            <strong><i class="fa-regular fa-clock text-light"></i></strong>
                                            <span class="badge badge-white text-white">{{ $event->time }}</span>
                                        </p>
                                        <p class="card-text">
                                            <i class="fa-solid fa-calendar-days text-light"></i>
                                            <span class="badge badge-success text-white">{{ $event->date }}</span>
                                        </p>
                                        <p class="card-text">
                                            <strong><i class="fa-solid fa-location-dot text-white"></i></strong>
                                            <span class="badge badge-white text-white">{{ $event->location }}</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .new-event {
    border: 2px solid #28a745;
}

.old-event {
    border: 2px solid #6c757d;
}

.top-right-badge {
    top: 10px;
    right: 10px;
}

</style>
@endsection --}}

