@extends('layout.app')

@section('content')
    <section class="team-section">
        <div class="section-title mt-5">
            <h2 class=""> <i class="fa-solid fa-calendar-days"></i> Events</h2>
            <div class="C">
                <p class="section-subtitle">
                    Discover exciting events, seminars, workshops, and networking opportunities.
                </p>
            </div>
        </div>

        <div class="container">
            <div class="row justify-content-center">
                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="classic-event-card">

                            <div class="classic-event-image">

                                <img src="{{ asset($event->image) }}" alt="{{ $event->name }}">

                                @if ($event->created_at->diffInDays(now()) <= 7)
                                    <span class="event-badge bg-success">
                                        New
                                    </span>
                                @else
                                    <span class="event-badge bg-secondary">
                                        Previous
                                    </span>
                                @endif

                            </div>

                            <div class="classic-event-body">

                                <div class="event-date-box">

                                    <span class="day">
                                        {{ \Carbon\Carbon::parse($event->event_date)->format('d') }}
                                    </span>

                                    <span class="month">
                                        {{ \Carbon\Carbon::parse($event->event_date)->format('M') }}
                                    </span>

                                </div>

                                <div class="event-info">

                                    <h5>
                                        {{ $event->name }}
                                    </h5>

                                    <p>
                                        {{ \Illuminate\Support\Str::limit($event->description, 90) }}
                                    </p>

                                </div>

                            </div>

                            <div class="event-footer">

                                <div class="event-meta">

                                    <span>
                                        <i class="fa-regular fa-clock"></i>
                                        {{ $event->time }}
                                    </span>

                                    <span>
                                        <i class="fa-solid fa-location-dot"></i>
                                        {{ $event->location }}
                                    </span>

                                </div>

                                <button class="event-view-btn" data-bs-toggle="modal"
                                    data-bs-target="#eventModal{{ $event->id }}">
                                    View Details
                                </button>

                            </div>

                        </div>

                    </div>
                    <!-- Event Details Modal -->
                    <div class="modal fade event-modal" id="eventModal{{ $event->id }}" tabindex="-1">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content">

                                <div class="modal-header">

                                    <h5 class="modal-title">
                                        {{ $event->name }}
                                    </h5>

                                    <button class="btn-close" data-bs-dismiss="modal">
                                    </button>

                                </div>

                                <div class="modal-body">

                                    <img src="{{ asset($event->image) }}" class="img-fluid w-100 mb-4"
                                        style="height:350px;object-fit:cover;">

                                    <div class="row g-4">

                                        <div class="col-md-4">

                                            <div class="event-info-box">

                                                <i class="fa-solid fa-calendar-days"></i>

                                                <h6>Date</h6>

                                                <span>
                                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                                </span>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="event-info-box">

                                                <i class="fa-solid fa-clock"></i>

                                                <h6>Time</h6>

                                                <span>{{ $event->time }}</span>

                                            </div>

                                        </div>

                                        <div class="col-md-4">

                                            <div class="event-info-box">

                                                <i class="fa-solid fa-location-dot"></i>

                                                <h6>Location</h6>

                                                <span>{{ $event->location }}</span>

                                            </div>

                                        </div>

                                    </div>

                                    <h5 class="event-description-title">
                                        Event Description
                                    </h5>

                                    <p class="event-description">

                                        {!! nl2br(e($event->description)) !!}

                                    </p>

                                </div>

                                <div class="modal-footer">

                                    <button class="event-close-btn" data-bs-dismiss="modal">
                                        Close
                                    </button>

                                    @if ($event->registration_link)
                                        <a href="{{ $event->registration_link }}" target="_blank"
                                            class="event-register-btn">
                                            Register Now
                                        </a>
                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>
@endsection

<style>
    /*=========================
    EVENT CARD
==========================*/

.classic-event-card{
    background: transparent;
    border:2px solid #47B2E4;
    border-radius:18px;
    overflow:hidden;
    transition:.35s ease;
    height:100%;
    display:flex;
    flex-direction:column;
}

.classic-event-card:hover{
    transform:translateY(-8px);
    box-shadow:0 20px 45px rgba(71,178,228,.18);
    border-color:#209DD8;
}

.classic-event-image{
    position:relative;
    overflow:hidden;
}

.classic-event-image img{
    width:100%;
    height:220px;
    object-fit:cover;
    transition:.5s;
}

.classic-event-card:hover .classic-event-image img{
    transform:scale(1.08);
}

/* Badge */

.event-badge{
    position:absolute;
    top:15px;
    left:15px;
    background:#47B2E4;
    color:#fff;
    padding:7px 16px;
    border-radius:30px;
    font-size:12px;
    font-weight:600;
    letter-spacing:.4px;
}

.event-badge.bg-secondary{
    background:#6c757d !important;
}

.event-badge.bg-success{
    background:#20c997 !important;
}

/* Body */

.classic-event-body{
    padding:24px;
    display:flex;
    gap:18px;
    flex:1;
}

/* Date */

.event-date-box{
    width:72px;
    min-width:72px;
    height:80px;
    border:2px solid #47B2E4;
    border-radius:15px;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    background:transparent;
}

.event-date-box .day{
    font-size:30px;
    font-weight:700;
    color:#47B2E4;
    line-height:1;
}

.event-date-box .month{
    font-size:13px;
    font-weight:600;
    color:#777;
    text-transform:uppercase;
}

/* Info */

.event-info h5{
    font-size:20px;
    font-weight:700;
    margin-bottom:10px;
    color:#e9ebee;
}

.event-info p{
    color:#e2ddddd5;
    font-style:
    line-height:1.7;
    margin:0;
}

/* Footer */

.event-footer{
    border-top:1px solid rgba(71,178,228,.25);
    padding:18px 24px 24px;
}

.event-meta{
    display:flex;
    justify-content:space-between;
    margin-bottom:18px;
    font-size:14px;
    color:#666;
    flex-wrap:wrap;
    gap:10px;
}

.event-meta span{
    display:flex;
    align-items:center;
}

.event-meta i{
    color:#47B2E4;
    margin-right:7px;
}

/* Button */

.event-view-btn{
    width:100%;
    background:#0B1220;
    color:#fff;
    border:2px solid #47B2E4;
    border-radius:10px;
    padding:12px;
    font-weight:600;
    transition:.35s;
}

.event-view-btn:hover{
    background:#47B2E4;
    color:#fff;
}



/*=========================
      MODAL
==========================*/

.event-modal .modal-content{
    background:#0B1220;
    border:2px solid #47B2E4;
    border-radius:20px;
    overflow:hidden;
}

.event-modal .modal-header{
    border-bottom:1px solid rgba(71,178,228,.25);
    padding:22px 28px;
}

.event-modal .modal-title{
    color:#fff;
    font-size:24px;
    font-weight:700;
}

.event-modal .btn-close{
    filter:invert(1);
}

.event-modal .modal-body{
    padding:30px;
}

.event-modal img{
    border-radius:16px;
    border:2px solid #47B2E4;
}

.event-info-box{
    border:2px solid #47B2E4;
    border-radius:16px;
    padding:22px 15px;
    text-align:center;
    background:rgba(255,255,255,.02);
    height:100%;
    transition:.3s;
}

.event-info-box:hover{
    background:rgba(71,178,228,.08);
}

.event-info-box i{
    font-size:28px;
    color:#47B2E4;
    margin-bottom:12px;
}

.event-info-box h6{
    color:#fff;
    margin-bottom:8px;
    font-weight:600;
}

.event-info-box span{
    color:#bfc7d5;
    font-size:14px;
}

.event-description-title{
    margin-top:35px;
    margin-bottom:15px;
    color:#47B2E4;
    font-weight:700;
}

.event-description{
    color:#d6d9e0;
    line-height:1.9;
}

.event-modal .modal-footer{
    border-top:1px solid rgba(71,178,228,.25);
    padding:22px 28px;
}

.event-close-btn{
    background:transparent;
    border:2px solid #47B2E4;
    color:#47B2E4;
    border-radius:10px;
    padding:10px 22px;
    transition:.3s;
}

.event-close-btn:hover{
    background:#47B2E4;
    color:#fff;
}

.event-register-btn{
    background:#47B2E4;
    color:#fff;
    border:2px solid #47B2E4;
    border-radius:10px;
    padding:10px 22px;
    text-decoration:none;
    transition:.3s;
}

.event-register-btn:hover{
    background:#209DD8;
    border-color:#209DD8;
    color:#fff;
}
</style>
