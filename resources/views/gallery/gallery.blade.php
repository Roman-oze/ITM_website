@extends('layout.app')
@include('include.alerts')




@section('content')
    <!-- Welcome Section -->


    <!-- Gallery Section -->



            <section class="team-section">

                <div class="section-title mt-5">
                    <h2 class=""> Software Giant <span>Gallery</span></h2>

                        <span class="line"></span>

                  
                </div>

                <div class="container">

                    <div class="row justify-content-center">
                        @foreach ($photos as $photo)
                            <div class="col-md-4 mt-4">
                                <!-- Image Card -->
                                <div class="card shadow-sm rounded border-0 overflow-hidden">
                                    <!-- Image Container -->
                                    <div class="image-container position-relative">
                                        <img src="{{ asset($photo->image) }}" class="img-fluid rounded" alt="Photo">
                                        <!-- Hover Text -->
                                        <div class="overlay position-absolute top-50 start-50 translate-middle text-center">
                                            <div class="overlay-content">
                                                <h4>{{ $photo->title }}</h4> <!-- Dynamic title text -->
                                            </div>
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
            .card {
                position: relative;
                border-radius: 12px;
                overflow: hidden;
                height: 100%;
                background-color: #f8f9fa;
                box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }

            .card:hover {
                transform: translateY(-10px);
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            /* Image Container */
            .image-container {
                position: relative;
                overflow: hidden;
                height: 250px;
                /* Fixed height for uniformity */
                border-radius: 12px;
                transition: transform 0.3s ease;
            }

            .image-container img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                transition: transform 0.3s ease;
            }

            .image-container:hover img {
                transform: scale(1.1);
                /* Zoom effect on hover */
            }

            /* Overlay Text */
            .overlay {
                opacity: 0;
                transition: opacity 0.3s ease;
                background: rgba(8, 68, 136, 0.619);
                /* Dark transparent background */
                color: white;
                padding: 20px;
                border-radius: 12px;
                text-align: center;
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .overlay-content {
                transform: translateY(20px);
                transition: transform 0.3s ease;
            }

            .image-container:hover .overlay {
                opacity: 1;
                /* Show overlay text on hover */
            }

            .image-container:hover .overlay-content {
                transform: translateY(0);
                /* Slide up text on hover */
            }

            /* Card Body */
            .card-body {
                padding: 16px;
                background-color: #fff;
                border-top: 1px solid #ddd;
            }

            .card-body p {
                font-size: 14px;
                line-height: 1.5;
                color: #6c757d;
            }

            /* Ensure the carousel images are properly sized */
            .carousel-inner {
                position: relative;
                height: 500px;
                /* Set the height for the carousel */
            }

            .carousel-item-background {
                position: relative;
                height: 100%;
            }

            .carousel-item-background img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                /* Ensures images cover the area */
            }

            .carousel-caption {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                text-align: center;
                color: white;
                background-color: rgba(0, 0, 0, 0.5);
                /* Semi-transparent background */
                padding: 20px;
                border-radius: 10px;
                width: 80%;
            }

            .carousel-caption h1 {
                font-size: 2.5rem;
                font-weight: bold;
            }

            .carousel-caption p {
                font-size: 1.25rem;
                font-weight: lighter;
            }

            /* Make the text size responsive */
            @media (max-width: 768px) {
                .carousel-caption h1 {
                    font-size: 1.8rem;
                }

                .carousel-caption p {
                    font-size: 1rem;
                }
            }

            .card-club {
                position: relative;
                background: #fff;
                width: 300px;
                padding: 20px;
                border-radius: 20px;
                box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
                text-align: center;
                overflow: hidden;
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .card-club:hover {
                transform: translateY(-10px);
                box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
            }

            .card-club::before {
                content: "";
                position: absolute;
                top: -50%;
                left: -50%;
                width: 200%;
                height: 200%;
                background: radial-gradient(circle, rgba(252, 84, 4, 0.3), transparent 60%);
                z-index: -1;
                transition: transform 0.6s;
            }

            .card-club:hover::before {
                transform: scale(1.2);
            }

            .card-club h1 {
                font-size: 1.8rem;
                font-weight: bold;
                color: #F8BE3F;
                margin-bottom: 10px;
                text-transform: uppercase;
                letter-spacing: 3px;
            }

            .card-club h2 {
                font-size: 1.2rem;
                font-weight: 600;
                color: #4b5563;
                margin-bottom: 20px;
            }

            .profile-img {
                width: 150px;
                height: 150px;
                border-radius: 50%;
                margin: 10px auto;
                border: 5px solid #088178;
                box-shadow: 0 0 15px rgba(252, 84, 4, 0.6);
                transition: transform 0.3s, box-shadow 0.3s;
            }

            .card-club:hover .profile-img {
                transform: scale(1.1);
                box-shadow: 0 0 25px rgba(5, 138, 78, 0.9);
            }

            .name {
                font-size: 1.1rem;
                color: #F8BE3F;
                font-weight: bold;
                margin: 15px 0;
                background-color: #088178;
                padding: 5px 10px;
            }

            .position {
                font-size: 1.1rem;
                color: #0b1371;
                font-weight: bold;
                margin: 15px 0;
            }

            .footer p {
                display: inline-block;
                margin-top: 15px;
                font-size: 0.9rem;
                color: #1d4ed8;
                text-decoration: none;
                font-weight: bold;
                border: 2px solid #1d4ed8;
                padding: 8px 15px;
                border-radius: 8px;
                transition: all 0.3s;
            }

            .footer p:hover {
                background: #1d4ed8;
                color: #fff;
            }

            .circle {
                position: absolute;
                border-radius: 50%;
                background: rgba(252, 84, 4, 0.15);
                z-index: -1;
                animation: float 5s infinite ease-in-out;
            }

            .circle.small {
                width: 80px;
                height: 80px;
                top: -20px;
                right: -20px;
                animation-delay: 0.5s;
            }

            .circle.large {
                width: 150px;
                height: 150px;
                bottom: -50px;
                left: -50px;
                animation-delay: 1s;
            }

            @keyframes float {

                0%,
                100% {
                    transform: translateY(0);
                }

                50% {
                    transform: translateY(-20px);
                }
            }

            /* Responsive Layout */
            @media (max-width: 1200px) {
                .card-club {
                    width: 280px;
                    /* Slightly smaller cards for medium screens */
                }
            }

            @media (max-width: 992px) {
                .card-club {
                    width: 250px;
                    /* Even smaller cards for tablet-sized screens */
                }

                .container {
                    justify-content: flex-start;
                }
            }

            @media (max-width: 768px) {
                .card-club {
                    width: 220px;
                    /* Smaller cards for mobile screens */
                }

                .container {
                    justify-content: center;
                }
            }

            @media (max-width: 576px) {
                .card-club {
                    width: 100%;
                    /* Full width for smaller screens */
                }

                .card-club {
                    justify-content: center;
                    gap: 15px;
                }
            }
        </style>

        <script>
            const container = document.querySelector('.container');
            const card = document.querySelector('.card');

            container.addEventListener('mousemove', (e) => {
                const rect = container.getBoundingClientRect();
                const x = (e.clientX - rect.left) / rect.width - 0.5;
                const y = (e.clientY - rect.top) / rect.height - 0.5;

                card.style.transform = `
          rotateY(${x * 30}deg)
          rotateX(${y * -30}deg)
        `;
            });

            container.addEventListener('mouseleave', () => {
                card.style.transform = `rotateY(0deg) rotateX(0deg)`;
            });
        </script>
