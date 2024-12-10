
@extends('layout.app')

@section('content')
<br>
<br>
<br>


<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-left">
            <h2 class="text-dark text-left">Upcoming</h2>
            <span class="line"></span>
            <div class="row d-flex justify-content-center">
                @foreach ($events as $event)
                <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
                    <div class="event-card box-shadow mt-2{{ $event->created_at->diffInDays(now()) <= 7 ? 'new-event' : 'old-event' }}">
                        <!-- Badge for New/Old Event -->
                            <!-- Badge positioned in top-left corner -->
                            @if ($event->created_at->diffInDays(now()) <= 7)
                                <span class="badge bg-success position-absolute top-right-badge p-2">New Event</span>
                            @else
                                <span class="badge bg-secondary position-absolute top-right-badge p-2">Old Event</span>
                            @endif

                        <img src="{{asset($event->image)}}" alt="Event Image" class="img">
                        <marquee behavior="" direction=""><h1 class="event-card-title text-center text-success bg-light p-2">{{$event->name}}</h1></marquee>
                        <div class="event-card-body">
                            <p class="event-card-text text-white">{{$event->description}}</p>
                            <p class="card-text"> <strong> <i class="fa-regular fa-clock text-light"></i> </strong>
                                <span class="badge badge-white text-white ">{{$event->time}}</span>
                            </p>
                            <p class="card-text"> <i class="fa-solid fa-calendar-days text-light"></i>
                                <span class="badge badge-success text-white ">{{$event->date}}</span>
                            </p>
                            <p class="card-text"> <strong> <i class="fa-solid fa-location-dot text-white"></i> </strong>
                                <span class="badge badge-white text-white">{{$event->location}}</span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>


</section>

@endsection
<style>
   /* Event Card Styles */
.event-card {
    background-color: #37517e;
    border-radius: 15px;
    overflow: hidden;
    margin: 20px 0;
    position: relative;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease;
}

/* Hover Effect: Elevate the card and add shadow */
.event-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.2);
}

/* Event Image Styling */
.event-img-wrapper {
    position: relative;
    overflow: hidden;
}

.event-img {
    width: 100%;
    height: 200px;
    object-fit: cover;
    transition: all 0.3s ease;
}

/* Hover effect for images */
.event-card:hover .event-img {
    transform: scale(1.1);
}

/* Event Title Styling */
.event-title-wrapper {
    background: linear-gradient(45deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.6));
    padding: 10px;
    position: absolute;
    top: 10px;
    left: 0;
    right: 0;
    z-index: 5;
}

.event-card-title {
    font-size: 1.8rem;
    font-weight: bold;
    color: white;
    margin-bottom: 10px;
    text-transform: uppercase;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
}

/* Event Description Styling */
.event-card-body {
    padding: 20px;
    color: #fff;
    text-align: left;
}

.event-card-text {
    margin-bottom: 15px;
    font-size: 1rem;
}

/* Event Info */
.event-info {
    display: flex;
    flex-direction: column;
}

.card-text {
    font-size: 0.9rem;
    color: #e4e4e4;
    margin-bottom: 8px;
}

/* Badge Styling (New/Old) */
.event-badge {
    position: absolute;
    top: 15px;
    left: 15px;
    padding: 8px 15px;
    font-size: 1rem;
    font-weight: bold;
    color: white;
    border-radius: 30px;
    text-transform: uppercase;
    background-color: rgba(0, 0, 0, 0.7);
    z-index: 10;
}

/* New event badge style */
.new-event {
    background-color: #28a745; /* Green for new events */
}

/* Old event badge style */
.old-event {
    background-color: #dc3545; /* Red for old events */
}

/* Responsive Design */
@media (max-width: 1199px) {
    .event-card-title {
        font-size: 1.6rem;
    }

    .event-card-body {
        padding: 15px;
    }
}

@media (max-width: 991px) {
    .event-card-title {
        font-size: 1.4rem;
    }

    .event-card-body {
        padding: 12px;
    }

    .event-card img {
        height: 180px;
    }
}

@media (max-width: 767px) {
    .event-card {
        margin-bottom: 30px;
    }

    .event-card img {
        height: 160px;
    }

    .event-card-title {
        font-size: 1.2rem;
    }

    .event-card-body {
        padding: 10px;
    }

    .event-card-text {
        font-size: 0.95rem;
    }
}

@media (max-width: 575px) {
    .event-card img {
        height: 140px;
    }

    .event-card-title {
        font-size: 1.1rem;
    }

    .event-card-body {
        padding: 8px;
    }

    .event-card-text {
        font-size: 0.9rem;
    }
}

</style>


