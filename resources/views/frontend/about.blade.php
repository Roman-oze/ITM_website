@extends('layout.app')

@section('content')
<br><br>

<section id="services" class="services section-bg text-left mt-5">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title">
            <h2 class="text-primary">Our Department</h2>
        </div>

        <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-baseline d-flex">
                <p class="text-dark-50 mb-5 heading_section">
                    "Daffodil International University, situated in the vibrant heart of Dhaka, Bangladesh, offers a dynamic learning environment. Nestled in the midst of cultural richness and urban energy, our campus provides students with an inspiring backdrop to pursue their academic endeavors. Explore the fusion of education and culture as you navigate your learning journey at Daffodil International University."
                </p>
            </div>
            {{-- <img src="{{ asset('frontend/image/diu_admission.jpg') }}" class="w-50 h-50"> --}}
            <img src="{{ asset('frontend/image/event_photo/fin.jpg') }}" class="department-group-image">
        </div>
    </div>
</section>

<br><br><br>

<div class="container">
    <div class="row text-left">
        <h3 class="mt-2">Recently</h3>
        <div class="col-12 col-sm-6 col-md-4 mb-1">
            <div class="text-center p-2">
                <div class="mb-4">
                    <img src="{{ asset('frontend/image/event_photo/aymansadik.jpg') }}" class="department-single-image img-fluid" alt="Circular Image rounded">
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-1">
            <div class="text-center p-2">
                <div class="mb-4">
                    <img src="{{ asset('frontend/image/event_photo/fundation.jpg') }}" class="department-single-image img-fluid" alt="Circular Image rounded">
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-md-4 mb-1">
            <div class="text-center p-2">
                <div class="mb-4">
                    <img src="{{ asset('frontend/image/event_photo/itmsummit.jpg') }}" class="department-single-image img-fluid" alt="Circular Image rounded">
                </div>
            </div>
        </div>
    </div>
</div>

<br><br><br><br><br>

<div class="row mt-3">
    <div class="section-title">
        <h2 class="p-2 text-dark text-center">Faculty of Science and Information Technology</h2>
    </div>
</div>

<div class="container mt-5">

    <div class="row text-left mt-4">
        @foreach ($officers as $officer)
        <div class="col-md-4 col-sm-6 mb-4" data-bs-aos="fade-up" data-bs-aos-delay="500">
            <div class="card shadow-sm rounded border-0 bg-light">
                <!-- Profile Image -->
                <img src="{{ asset($officer->image) }}" alt="Staff Image" class="img-fluid   rounded-circle" style="height: 200px; width: 185px; object-fit: cover; margin-top: -50px; border: 5px solid #fff; box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);">

                <div class="card-body text-center">
                    <!-- Name and Position -->
                    <h5 class="card-title text-dark">{{ $officer->name }}</h5>
                    <p class="card-text text-muted">{{ $officer->position }}</p>

                    <!-- Contact Information -->
                    <div class="contact-wrap mb-2 d-flex justify-content-center">

                        <a class="text-muted p-3 " href="tel:{{$officer->mobile}}"> <i class="fas fa-phone-alt fa-2x"></i> </a>

                        <a class="text-muted p-3 " href="mailto:{{ $officer->email }}"><i class="fas fa-envelope fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<div class="container-fluid  mt-5">
    <div class="row mt-3">
        <div class="section-title">
            <h2 class="text-success text-center border-1">Staff of the Department</h2>
        </div>
    </div>

    <div class="row mt-5 bg-light d-flex justify-content-center">
        @foreach ($staffs as $staff)
        <div class="col-md-4">
            <div class="text-center p-2">
                <div class="mb-4">
                    <img src="{{ asset($staff->image) }}" class="staff-image" alt="Circular Image rounded">
                </div>
                <div class="text-left">
                    <h2 class="staff-name text-dark">{{ $staff->name }}</h2>
                    <span class="d-block position mb-4 text-dark-50">{{ $staff->position }}</span>
                    <a href="mailto:{{ $staff->email }}" class="text-dark">
                        <i class="fa-solid fa-envelope text-dark fa-lg p-2"></i>
                    </a>
                    <a href="tel:{{ $staff->mobile }}" class="text-dark">
                        <i class="fa-solid fa-square-phone text-dark fa-lg p-2"></i>
                    </a>
                </div>
            </div>
        </div>
    @endforeach

    </div>
</div>


<br><br>

{{-- <h2 class="p-2 text-dark text-center">Faculty of Science and Information Technology Staff</h2> --}}

<section id="contact" class="contact">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Our Campus <i class="fa-solid fa-location-dot text-danger"></i></h2>
        </div>

        <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
                <div class="info">
                    <div class="address">
                        <i class="fa-solid fa-map-location-dot"></i>
                        <h4>Location:</h4>
                        <p>AB4-Building-Khagan, Ashulia, Dhaka</p>
                    </div>
                    <div class="email">
                        <i class="fa-regular fa-envelope"></i>
                        <h4>Email:</h4>
                        <p>itmoffice@daffodilvarsity.edu.bd</p>
                    </div>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Call:</h4>
                        <p>01847140039</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd" style="border: 0; width: 100%; height: 290px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/campus.jpeg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">Main Campus</p>
                        <button class="baton p-2">View</button>
                    </div>
                </div>
                <br>
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/ab4building.jpeg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">AB4 Building</p>
                        <button class="baton p-2">View</button>
                    </div>
                </div>
                <br>
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/old_building.jpg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">AB Building</p>
                        <button class="baton p-2">View</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
