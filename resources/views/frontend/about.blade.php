@extends('layout.app')

@section('content')

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
            @foreach ($photo as $photo)

            <img src="{{ asset($photo->image) }}" class="department-group-image">
            @endforeach
        </div>
    </div>
</section>

<br><br><br>

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

<div class="container">
    <div class="row text-left mt-5">
        <h3 class="mt-2">Recently</h3>
        <div class="row mt-2">
            @foreach ($gallery as $photo)
                <div class="col-md-4 mt-4">
                    <!-- Image Card -->
                    <div class="card shadow-sm rounded border-0 overflow-hidden">
                        <!-- Image Container -->
                        <div class="image-container position-relative">
                            <img src="{{ asset($photo->image) }}" class="img-fluid rounded" alt="Photo">
                            <!-- Hover Text -->
                            <div class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
                                <div class="overlay-content text-white text-center p-3">
                                    <h4 class="overlay-title">{{ $photo->title }}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

<style>
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        width: 100%; /* Responsive width */
        height: 250px; /* Fixed height for uniformity */
    }

    .image-container img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%; /* Fills the container */
        object-fit: cover; /* Ensures proper cropping without distortion */
        display: block;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    .overlay {
        background: rgba(0, 0, 0, 0.7); /* Semi-transparent black overlay */
        opacity: 0;
        transition: opacity 0.5s ease;
    }

    .image-container:hover .overlay {
        opacity: 1;
    }

    .overlay-content {
        color: #fff;
    }

    .overlay-title {
        font-size: 1.5rem;
        font-weight: bold;
    }
</style>


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
                        <p>{{$footers->address}}</p>
                    </div>
                    <div class="email">
                        <i class="fa-regular fa-envelope"></i>
                        <h4>Email:</h4>
                        <p>{{$footers->email}}</p>
                    </div>
                    <div class="phone">
                        <i class="fa-solid fa-phone"></i>
                        <h4>Call:</h4>
                        <p>{{$footers->phone}}</p>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd" style="border: 0; width: 100%; height: 290px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div class="col-lg-7  align-content-center">
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/campus.jpeg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">Main Campus</p>
                        <a class="baton p-2" href="https://www.google.com/maps/place/Admission+Office,+Daffodil+International+University/@23.8761751,90.320949,638m/data=!3m1!1e3!4m6!3m5!1s0x3755c23c2b610299:0xa5812fe6c1cec69f!8m2!3d23.8756205!4d90.3207632!16s%2Fg%2F11c1s8f1bj?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D">Visit</a>
                    </div>
                </div>
                <br>
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/ab4building.jpeg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">AB4 Building</p>
                        <a class="baton p-2" href="https://www.google.com/maps/place/Information+Technology+%26+Management+(ITM)+Club/@23.876693,90.3198752,47m/data=!3m1!1e3!4m6!3m5!1s0x3755c3004144093f:0x184a0902a97bafef!8m2!3d23.8766614!4d90.3198912!16s%2Fg%2F11vr5w94jr?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D">Visit</a>
                    </div>
                </div>
                <br>
                <div class="item img-fluid-custom">
                    <div class="imagee">
                        <img src="{{ asset('frontend/image/old_building.jpg') }}" class="imgg">
                    </div>
                    <div class="description">
                        <p class="pp text_color">AB Building</p>
                        <a class="baton p-2" href="https://www.google.com/maps/place/Department+of+Pharmacy/@23.8769036,90.3210446,95m/data=!3m1!1e3!4m6!3m5!1s0x3755c300370e4c9d:0xe2228c335ccd65d8!8m2!3d23.8769609!4d90.321455!16s%2Fg%2F11y341ppsp?entry=ttu&g_ep=EgoyMDI0MTIwNC4wIKXMDSoASAFQAw%3D%3D">Visit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
<style>

</style>
