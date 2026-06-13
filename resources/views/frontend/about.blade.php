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

            <img src="{{ asset($photo->image) }}" class="department-group-image">
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


@endsection
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
