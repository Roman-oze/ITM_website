@extends('layout.app')

@include('faculty.faculty_style')

@section('content')

<!-- Faculty Section -->
<section id="services" class="services section-bg text-left mt-5">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-center">
            <h2 class="text-dark text-left">Faculty</h2>
            <div class="col-lg-12 mt-3 align-self-baseline rounded-3 p-3 custom-box border-600 box">
                <p class="text-dark-50 p-5">
                    Become a catalyst for transformation at Daffodil International University. As a faculty member,
                    you'll inspire minds, foster innovation, and contribute to academic excellence. Join us in shaping
                    the leaders of tomorrow and experiencing a fulfilling journey of professional growth and impact.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- First Line: Single Card at the Top -->
<div class="container mt-5">
    <div class="row d-flex justify-content-evenly">
        @foreach ($teachers_new as $teacher)
            <div class="col-md-4 p-3 animate__animated animate__fadeInDown text-center">
                <div class="faculty-card1">
                    <!-- Uncomment if needed -->
                    {{-- <img src="{{asset($teacher->image)}}" class="card-img-top shadow " alt="Circular Image"> --}}
                    <img src="{{asset($teacher->image)}}" class="faculty_profile" alt="Circular Image">
                    <div class="faculty-card-content">
                        <div class="head">
                            <p>{{ $teacher->designation }}</p>
                        </div>
                        <h3 class="text_color">{{ $teacher->name }}</h3>
                        <a href="{{ $teacher->fb }}">
                            <i class="fa-brands fa-facebook icon1 p-2"></i>
                        </a>
                        <a href="{{ $teacher->linked }}">
                            <i class="fa-brands fa-linkedin icon1 p-2"></i>
                        </a>
                        <a href="mailto:{{ $teacher->email }}">
                            <i class="fa-solid fa-envelope icon1 p-2"></i>
                        </a>
                        <a href="tel:{{ $teacher->phone }}">
                            <i class="fa-solid fa-square-phone icon1 p-2"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<br>

<!-- Second Line: Three Cards -->
<div class="container mt-5">
    <div class="row">
        @foreach ($teachers as $teacher)
            <div class="col-md-4 p-2 animate__animated animate__fadeInUp text-center">
                <div class="circular">
                    <div class="img-bg">
                        <img src="{{ asset($teacher->image) }}" class="mx-auto rounded-circle" alt="Circular Image">
                    </div>
                    <br>
                    <h4 class="p-2 text_color">{{ $teacher->name }}</h4>
                    <p class="text-dark">{{ $teacher->designation }}</p>
                    <div class="">
                        <a href="{{ $teacher->fb }}" class="p-2">
                            <i class="fa-brands fa-facebook icon1"></i>
                        </a>
                        <a href="{{ $teacher->linked }}" class="p-2">
                            <i class="fa-brands fa-linkedin icon1"></i>
                        </a>
                        <a href="mailto:{{ $teacher->email }}" class="p-2">
                            <i class="fa-solid fa-envelope icon1"></i>
                        </a>
                        <a href="tel:{{ $teacher->phone }}" class="p-2">
                            <i class="fa-solid fa-square-phone icon1"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<br><br>

<!-- Department Section -->
<div class="container-fluid bg-light p-5 mt-5">
    <div class="row mt-3">
        <div class="col-md-12 col-sm-12">
            <h5 class="heading_30 mb_50 h1" data-bs-aos="fade-up" data-bs-aos-delay="100">
                Department of Information Technology &amp; Management
            </h5>
        </div>
    </div>
</div>

@endsection
