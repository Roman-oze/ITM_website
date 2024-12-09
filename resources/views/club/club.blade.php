@extends('club.layout.club_master')

<!-- Navigation -->
@section('club_header')
<div class="container-fluid">
    <br><br><br><br>
    <div class="row">
        <div class="col-md-6 col-sm-12 text-center">
            <img src="{{asset('frontend/image/itmclub.png')}}" class="img-fluid animate__animated animate__fadeInLeft">
        </div>
        <div class="col-md-6 paragh col-sm-12 text-center">
            <h3 class="btnn animate__animated animate__bounce">Join Our Club</h3><br>
            <img src="{{asset('frontend/image/qr.png')}}" class="QR">
            <b><p class="p-3">Department of Information Technology & Management and ITM Club Facebook page here do like, follow, and share</p></b>

            <div class="text-center">
                <a href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a>
                <a href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a><br>
            </div>
        </div>
    </div>
</div>
<br>
@endsection


@section('main_content')

<!-- Welcome Section -->
<section class="welcome-section">
    <div class="container p-1">
        <div class="jumbotron text-center bgcolorpic animate__animated animate__fadeInLeft">
            <br><br><br><br><br>
            <h1 class="text-white text-center h1border">Welcome to the Academic Club</h1><br>
            <p class="lead text-dark text-center pborder">Explore the world of knowledge with us!</p>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 text-center mx-auto">
                <div class="section-title">
                    <h3>About <span>Our ITM Club</span></h3>
                    <span class="line"></span>
                    <p class="lead mt-4" style="text-align: justify">
                        The ITM Club is a vibrant community dedicated to fostering innovation, technology, and management skills among its members. Through workshops, seminars, and networking events, the club provides opportunities for students to explore cutting-edge trends, collaborate on projects, and develop leadership abilities. With a focus on empowering individuals in the rapidly evolving fields of information technology and management, the ITM Club serves as a catalyst for personal and professional growth, preparing its members for success in the digital age.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Committee Section -->
<div class="container mt-5">
    <div class="col-lg-7 text-center mx-auto">
        <div class="section-title">
            <h3>ITM <span>Club New Committee</span></h3>
            <span class="line"></span>
        </div>
    </div>

    <!-- Display All Other Committees Below -->
    <div class="row">
        @foreach ($committees as $committee)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
            <div class="card-club">
                <div class="circle small"></div>
                <div class="circle large"></div>
                <h1>WELCOME</h1>
                <h2>To the Club</h2>
                <img src="{{ asset($committee->image) }}" alt="Profile Picture" class="profile-img">
                <h5 class="name rounded-pill shadow">{{ $committee->name }}</h5>
                <div class="footer">
                    <p class="position">{{ $committee->position }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<br>

<!-- Gallery Section -->
<section id="gellary">
    <div class="col-lg-7 text-center mx-auto">
        <div class="section-title">
            <h3>Club <span>Gallery</span></h3>
            <span class="line"></span>
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mt-2">
            <img src="{{asset('frontend/image/event_photo/aymansadik.jpg')}}" class="img00 rounded">
        </div>
        <div class="col-md-4 mt-2">
            <img src="{{asset('frontend/image/event_photo/img0.jpg')}}" class="img00 rounded">
        </div>
        <div class="col-md-4 mt-2">
            <img src="{{asset('frontend/image/event_photo/img1.jpg')}}" class="img00 rounded">
        </div>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 mt-1">
            <img src="{{asset('frontend/image/event_photo/img2.jpg')}}" class="img00 rounded">
        </div>
        <div class="col-md-4 mt-2">
            <img src="{{asset('frontend/image/event_photo/img6.jpg')}}" class="img00 rounded">
        </div>
        <div class="col-md-4 mt-2">
            <img src="{{asset('frontend/image/event_photo/fintech.jpg')}}" class="img00 rounded">
        </div>
    </div>
</section>
<br>

@endsection

<style>

/* Ensure the carousel images are properly sized */
.carousel-inner {
    position: relative;
    height: 500px; /* Set the height for the carousel */
}

.carousel-item-background {
    position: relative;
    height: 100%;
}

.carousel-item-background img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures images cover the area */
}

.carousel-caption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
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
        0%, 100% {
            transform: translateY(0);
        }
        50% {
            transform: translateY(-20px);
        }
    }

    /* Responsive Layout */
    @media (max-width: 1200px) {
        .card-club {
            width: 280px; /* Slightly smaller cards for medium screens */
        }
    }

    @media (max-width: 992px) {
        .card-club {
            width: 250px; /* Even smaller cards for tablet-sized screens */
        }

        .container {
            justify-content: flex-start;
        }
    }

    @media (max-width: 768px) {
        .card-club {
            width: 220px; /* Smaller cards for mobile screens */
        }

        .container {
            justify-content: center;
        }
    }

    @media (max-width: 576px) {
        .card-club {
            width: 100%; /* Full width for smaller screens */
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

