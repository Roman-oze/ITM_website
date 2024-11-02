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
            <div class="col-md-3 p-2 mt-5">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flip-custom">
                            <div class="child-div">
                                <div class="graduated-label d-flex align-items-center">
                                    <i class="fa-solid fa-graduation-cap me-2"></i> Graduated
                                </div>
                                <div class="mb-4">
                                    <img src="{{ asset($alumn->image) }}" alt="Image" class="alumni-custom img-fluid"> <!-- img-fluid class makes image responsive -->
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
