@extends('layout.app')

@include('faculty.faculty_style')

@section('content')

<!-- Faculty Section -->
<section id="services" class="services section-bg text-left mt-5 py-5">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <!-- Section Title -->
        <div class="section-title text-center">
            <h2 class="text-dark">Faculty</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <strong class="text-dark ">
                        "Empowering innovation, inspiring success – Meet the visionary faculty of the <br>Department of Information Technology & Management at Daffodil International University!"
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- START SERVICE SECTION -->
<section id="services" class="section-padding">
    <div class="container mt-5">

        <div class="row g-4 d-flex justify-content-center ">

            <!-- Staff Member Card 1 -->
            @foreach ($teachers_new as $teacher)
            <div class="col-12 col-md-6 col-lg-3 single-faculty border rounded m-2">
                <img class="img-fluid" src="{{asset($teacher->image)}}" alt="Doctor Image" />
                <div class="single-faculty-info">
                    <h4>{{ $teacher->name }}</h4>
                    <span>{{ $teacher->designation }}</span>
                </div>
                <div class="single-faculty-mask">
                    <div class="single-faculty-mask-inner">
                        <h4>{{ $teacher->name }}</h4> <br>

                        <h5>{{ $teacher->designation }}</h5>
                        <p></p>
                        <ul>
                            <a href="{{ $teacher->linked }}">
                                <i class="fa-brands fa-linkedin icon1 p-2 "></i>
                            </a>
                            <a href="mailto:{{ $teacher->email }}">
                                <i class="fa-solid fa-envelope icon1 p-2"></i>
                            </a>
                            <a href="tel:{{ $teacher->phone }}">
                                <i class="fa-solid fa-square-phone icon1 p-2"></i>
                            </a>
                            <br>

                            <li><a href="{{ $teacher->fb }}">Facebook</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Staff Member Card 4 -->
        </div>
    </div>
    </section>
<!--- END Section -->

<!-- First Line: Single Card at the Top -->
{{-- <div class="container mt-5">
    <div class="row d-flex justify-content-evenly">
        @foreach ($teachers_new as $teacher)
            <div class="col-md-4 p-3 animate__animated animate__fadeInDown text-center">
                <div class="faculty-card1">
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
</div> --}}

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
                            <i class="fa-brands fa-facebook icon2" ></i>
                        </a>
                        <a href="{{ $teacher->linked }}" class="p-2">
                            <i class="fa-brands fa-linkedin icon2"></i>
                        </a>
                        <a href="mailto:{{ $teacher->email }}" class="p-2">
                            <i class="fa-solid fa-envelope icon2"></i>
                        </a>
                        <a href="tel:{{ $teacher->phone }}" class="p-2">
                            <i class="fa-solid fa-square-phone icon2"></i>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<br><br>


@endsection
