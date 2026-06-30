@extends('layout.app')
@include('include.alerts')
@section('content')
    <section class="team-section">

        <div class="container">

            <div class="section-title text-center mb-5">

                <h2>Company <span>Achievements</span></h2>

                <p class="text-white">
                    Every milestone reflects our commitment to innovation,
                    quality, and customer satisfaction.
                </p>

            </div>

            <div class="row justify-content-center">

                <!-- Achievement -->

                @forelse($achievements as $achievement)
                    <div class="col-lg-4 col-md-6">

                        <div class="achievement-card {{ $achievement->featured ? 'featured' : '' }}">

                            @if ($achievement->featured)
                                <div class="featured-ribbon">

                                    Featured

                                </div>
                            @endif

                            @if ($achievement->image)
                                <img src="{{ asset($achievement->image) }}" alt="{{ $achievement->title }}"
                                    class="achievement-image">
                            @else
                                <img src="{{ asset('frontend/images/default-achievement.jpg') }}" class="achievement-image">
                            @endif

                            <div class="achievement-body">

                                <span
                                    class="achievement-badge
                @if ($achievement->type == 'Certification') certificate
                @elseif($achievement->type == 'Recognition')
                    recognition @endif">

                                    @switch($achievement->type)
                                        @case('Award')
                                            <i class="fas fa-award"></i>
                                        @break

                                        @case('Certification')
                                            <i class="fas fa-certificate"></i>
                                        @break

                                        @case('Recognition')
                                            <i class="fas fa-medal"></i>
                                        @break

                                        @default
                                            <i class="fas fa-star"></i>
                                    @endswitch

                                    {{ $achievement->type }}

                                </span>

                                <h4>

                                    {{ $achievement->title }}

                                </h4>

                                <div class="achievement-meta">

                                    <span>

                                        <i class="fas fa-building"></i>

                                        {{ $achievement->organization }}

                                    </span>

                                    <span>

                                        <i class="fas fa-calendar"></i>

                                        {{ \Carbon\Carbon::parse($achievement->achievement_date)->format('d M Y') }}

                                    </span>

                                </div>

                                <p>

                                    {{ Str::limit($achievement->description, 120) }}

                                </p>

                                @if ($achievement->certificate)
                                    <a href="{{ asset($achievement->certificate) }}" target="_blank"
                                        class="achievement-btn">

                                        View Certificate

                                    </a>
                                @endif

                            </div>

                        </div>

                    </div>

                    @empty

                        <div class="col-12 text-center">

                            <h5 class="text-muted">

                                No Achievement Available

                            </h5>

                        </div>
                    @endforelse



                </div>

            </div>

        </section>
    @endsection

    <style>
        /* ===========================
           COMPANY ACHIEVEMENT SECTION
        =========================== */

        .achievement-section {
            padding: 100px 0;
            position: relative;
        }

        .achievement-section .section-title h2 {
            color: #fff;
            font-size: 42px;
            font-weight: 700;
            margin-bottom: 15px;
            text-transform: uppercase;
        }

        .achievement-section .section-title span {
            color: #47b2e4;
        }

        .achievement-section .section-title p {
            color: #cbd5e1;
            max-width: 650px;
            margin: auto;
            line-height: 1.8;
        }


        /* ===========================
              CARD
        =========================== */

        .achievement-card {

            position: relative;
            overflow: hidden;

            background: rgba(255, 255, 255, .03);

            border: 1px solid rgba(71, 178, 228, .25);

            border-radius: 18px;

            transition: .4s;

            height: 100%;

            backdrop-filter: blur(10px);

        }

        .achievement-card:hover {

            transform: translateY(-8px);

            border-color: #47b2e4;

            box-shadow: 0 15px 40px rgba(71, 178, 228, .25);

        }


        /* ===========================
              IMAGE
        =========================== */

        .achievement-image {

            width: 100%;

            height: 240px;

            object-fit: cover;

            transition: .5s;

        }

        .achievement-card:hover .achievement-image {

            transform: scale(1.05);

        }


        /* ===========================
              BODY
        =========================== */

        .achievement-body {

            padding: 25px;

        }

        .achievement-body h4 {

            color: #fff;

            font-size: 22px;

            font-weight: 700;

            margin: 18px 0;

        }

        .achievement-body p {

            color: #cbd5e1;

            line-height: 1.8;

            margin-top: 18px;

        }


        /* ===========================
              BADGES
        =========================== */

        .achievement-badge {

            display: inline-flex;

            align-items: center;

            gap: 8px;

            padding: 8px 18px;

            background: #47b2e4;

            color: #fff;

            border-radius: 30px;

            font-size: 13px;

            font-weight: 600;

        }

        .certificate {

            background: #16a34a;

        }

        .recognition {

            background: #f59e0b;

        }


        /* ===========================
              META
        =========================== */

        .achievement-meta {

            display: flex;

            justify-content: space-between;

            flex-wrap: wrap;

            gap: 12px;

            margin-top: 18px;

        }

        .achievement-meta span {

            color: #cbd5e1;

            font-size: 14px;

        }

        .achievement-meta i {

            color: #47b2e4;

            margin-right: 6px;

        }


        /* ===========================
              BUTTON
        =========================== */

        .achievement-btn {

            display: inline-block;

            margin-top: 25px;

            padding: 12px 28px;

            border-radius: 10px;

            background: #47b2e4;

            color: #fff;

            text-decoration: none;

            font-weight: 600;

            transition: .3s;

        }

        .achievement-btn:hover {

            background: #2196d2;

            color: #fff;

            transform: translateY(-2px);

        }


        /* ===========================
             FEATURED RIBBON
        =========================== */

        .featured-ribbon {

            position: absolute;

            top: 20px;

            right: -45px;

            width: 180px;

            background: #f59e0b;

            color: #fff;

            text-align: center;

            padding: 8px 0;

            transform: rotate(45deg);

            font-size: 13px;

            font-weight: 700;

            letter-spacing: 1px;

            box-shadow: 0 8px 20px rgba(0, 0, 0, .25);

            z-index: 20;

        }


        /* ===========================
              RESPONSIVE
        =========================== */

        @media(max-width:991px) {

            .achievement-section {

                padding: 70px 0;

            }

            .achievement-section .section-title h2 {

                font-size: 34px;

            }

        }

        @media(max-width:767px) {

            .achievement-body {

                padding: 20px;

            }

            .achievement-body h4 {

                font-size: 20px;

            }

            .achievement-image {

                height: 220px;

            }

            .achievement-meta {

                flex-direction: column;

            }

            .featured-ribbon {

                right: -55px;

                width: 170px;

                font-size: 12px;

            }

        }
    </style>
