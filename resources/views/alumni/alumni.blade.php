@extends('layout.app')

@section('content')

<section id="services" class="services section-bg text-left mt-5">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-center">
            <h2 class="text-dark">Alumni</h2>
        </div>
    </div>
</section>

<div class="container mt-5">
    <div class="row">
        @foreach($alumns as $alumn)
            <div class="col-sm-6 col-md-4 col-lg-3 p-2 m-3"> <!-- Adjusting column sizes for responsiveness -->
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flip-custom">
                            <div class="child-div">
                                <div class="graduated-label d-flex align-items-center">
                                    <i class="fa-solid fa-graduation-cap me-2"></i> <!-- Graduation cap icon -->
                                    Graduated
                                </div> 
                                <div class="mb-4">
                                    <img src="{{ asset($alumn->image) }}" alt="Image" class="alumni-custom img-fluid"> <!-- Make the image responsive -->
                                </div>
                                <div class="text p-3">
                                    <h3 class="text-white">{{ $alumn->name }}</h3>
                                    <p class="text-white">{{ $alumn->designation }}</p>
                                </div>
                            </div>
                        </div>

                        <div class="flip-card-back p-3 text-right" style="line-height: 22px;">
                            <h4 class="text-white">{{ $alumn->name }}</h4>
                            <hr>
                            <div class="p-1">
                                <span class="d-block"><i class="fa-solid fa-id-card"></i> Student ID: {{ $alumn->roll }}</span>
                                <span class="d-block"><i class="fa-solid fa-calendar-alt"></i> Batch: {{ $alumn->batch }}</span>
                                <span class="d-block"><i class="fa-solid fa-calendar-check"></i> Passing Year: {{ $alumn->pass_year }}</span>
                                <span class="d-block"><i class="fa-solid fa-building"></i> Organization: {{ $alumn->organization }}</span>
                                <span class="d-block"><i class="fa-solid fa-briefcase"></i> Designation: {{ $alumn->designation }}</span>
                                
                                <div class="alumni-contact text-center mt-2">
                                    <span class="badge bg-light text-dark"><i class="fa-solid fa-phone"></i> {{ $alumn->phone }}</span>
                                    <br>
                                    <span class="badge bg-light text-dark mt-1"><i class="fa-solid fa-envelope"></i> {{ $alumn->email }}</span>
                                </div>

                                <span class="d-block mt-2"><i class="fa-solid fa-map-marker-alt"></i> Office Address: {{ $alumn->address }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

@endsection

<style>
    .flip-card {
        background-color: transparent;
        width: 100%;
        height: 100%;
        perspective: 1000px;
    }

    .flip-card-inner {
        position: relative;
        width: 100%;
        height: 100%;
        transition: transform 0.6s;
        transform-style: preserve-3d;
    }

    .flip-card-front, .flip-card-back {
        position: absolute;
        width: 100%;
        height: 100%;
        backface-visibility: hidden;
    }

    .flip-card-back {
        transform: rotateY(180deg);
    }

    .flip-card:hover .flip-card-inner {
        transform: rotateY(180deg);
    }

    .graduated-label {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: rgba(0, 123, 255, 0.8); /* Bootstrap primary color with opacity */
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        display: flex;
        align-items: center;
    }
    
    .alumni-custom {
        max-width: 100%;
        height: auto;
    }
</style>
