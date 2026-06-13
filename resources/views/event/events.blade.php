@extends('layout.app')

@section('content')
    <section class="event-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="section-badge">
                    <i class="fa-solid fa-calendar-days"></i> Upcoming Events
                </span>

                <h2 class="section-title">
                    Join Our Latest Events &
                    <span class="gradient-text">Workshops</span>
                </h2>

                <p class="section-subtitle">
                    Discover exciting events, seminars, workshops, and networking opportunities.
                </p>
            </div>

            <div class="row g-4">

                @foreach ($events as $event)
                    <div class="col-lg-4 col-md-6">

                        <div class="modern-event-card">

                            <!-- Event Image -->
                            <div class="event-image">

                                <img src="{{ asset($event->image) }}" alt="{{ $event->name }}">

                                @if ($event->created_at->diffInDays(now()) <= 7)
                                    <span class="event-status new">
                                        New
                                    </span>
                                @else
                                    <span class="event-status old">
                                        Previous
                                    </span>
                                @endif

                            </div>

                            <!-- Event Content -->
                            <div class="event-content">

                                <h4 class="event-title">
                                    {{ $event->name }}
                                </h4>

                                <p class="event-description">
                                    {{ \Illuminate\Support\Str::limit($event->description, 120) }}
                                </p>

                                <div class="event-meta">

                                    <div class="meta-item">
                                        <i class="fa-regular fa-calendar"></i>
                                        <span>{{ $event->date }}</span>
                                    </div>

                                    <div class="meta-item">
                                        <i class="fa-regular fa-clock"></i>
                                        <span>{{ $event->time }}</span>
                                    </div>

                                    <div class="meta-item">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <span>{{ $event->location }}</span>
                                    </div>

                                </div>

                                <a href="#" class="event-btn" data-bs-toggle="modal"
                                    data-bs-target="#eventModal{{ $event->id }}">
                                    View Details
                                </a>

                            </div>

                        </div>

                    </div>
                    <!-- Event Details Modal -->
                    <div class="modal fade" id="eventModal{{ $event->id }}" tabindex="-1"
                        aria-labelledby="eventModalLabel{{ $event->id }}" aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">
                            <div class="modal-content border-0 shadow">

                                <div class="modal-header">
                                    <h5 class="modal-title fw-bold" id="eventModalLabel{{ $event->id }}">
                                        {{ $event->name }}
                                    </h5>

                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                        aria-label="Close"></button>
                                </div>

                                <div class="modal-body">

                                    <img src="{{ asset($event->image) }}" class="img-fluid rounded mb-4 w-100"
                                        style="max-height:350px; object-fit:cover;" alt="{{ $event->name }}">

                                    <div class="row g-3 mb-4">

                                        <div class="col-md-4">
                                            <div class="border rounded p-3 text-center">
                                                <i class="fa-solid fa-calendar-days text-primary mb-2"></i>
                                                <h6 class="mb-1">Date</h6>
                                                <small>
                                                    {{ \Carbon\Carbon::parse($event->event_date)->format('d M Y') }}
                                                </small>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="border rounded p-3 text-center">
                                                <i class="fa-solid fa-clock text-success mb-2"></i>
                                                <h6 class="mb-1">Time</h6>
                                                <small>{{ $event->time }}</small>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <div class="border rounded p-3 text-center">
                                                <i class="fa-solid fa-location-dot text-danger mb-2"></i>
                                                <h6 class="mb-1">Location</h6>
                                                <small>{{ $event->location }}</small>
                                            </div>
                                        </div>

                                    </div>

                                    <h6 class="fw-bold mb-3">Event Description</h6>

                                    <p class="text-muted">
                                        {!! nl2br(e($event->description)) !!}
                                    </p>

                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                        Close
                                    </button>

                                    @if (isset($event->registration_link))
                                        <a href="{{ $event->registration_link }}" target="_blank" class="btn btn-primary">
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
    .event-section {
        background: #f8fafc;
    }

    .section-badge {
        display: inline-block;
        background: rgba(71, 178, 228, .1);
        color: #47B2E4;
        padding: 8px 18px;
        border-radius: 30px;
        font-weight: 600;
        margin-bottom: 15px;
    }

    .section-title {
        font-size: 2.5rem;
        font-weight: 700;
    }

    .gradient-text {
        color: #47B2E4;
    }

    .section-subtitle {
        max-width: 650px;
        margin: auto;
        color: #6c757d;
    }

    .modern-event-card {
        background: #fff;
        border-radius: 20px;
        overflow: hidden;
        transition: .4s;
        height: 100%;
        box-shadow: 0 10px 35px rgba(0, 0, 0, .08);
    }

    .modern-event-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 45px rgba(0, 0, 0, .12);
    }

    .event-image {
        position: relative;
        overflow: hidden;
    }

    .event-image img {
        width: 100%;
        height: 240px;
        object-fit: cover;
        transition: .5s;
    }

    .modern-event-card:hover .event-image img {
        transform: scale(1.08);
    }

    .event-status {
        position: absolute;
        top: 15px;
        right: 15px;
        padding: 7px 15px;
        border-radius: 50px;
        font-size: 13px;
        font-weight: 600;
    }

    .event-status.new {
        background: #22c55e;
        color: white;
    }

    .event-status.old {
        background: #64748b;
        color: white;
    }

    .event-content {
        padding: 25px;
    }

    .event-title {
        font-size: 1.3rem;
        font-weight: 700;
        margin-bottom: 12px;
        color: #1e293b;
    }

    .event-description {
        color: #64748b;
        line-height: 1.7;
        margin-bottom: 20px;
    }

    .event-meta {
        margin-bottom: 25px;
    }

    .meta-item {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 10px;
        color: #475569;
    }

    .meta-item i {
        color: #47B2E4;
        width: 20px;
    }

    .event-btn {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 12px 22px;
        border-radius: 10px;
        background: #47B2E4;
        color: white;
        text-decoration: none;
        transition: .3s;
    }

    .event-btn:hover {
        background: #2196d3;
        color: white;
    }
</style>
