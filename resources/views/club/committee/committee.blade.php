
  @extends('club.committee.committee_style')
  @extends('club.layout.club_master')

  <br>
  <br>
  <br>
  @section('main_content')
  <br>
  <section id="Committee">

      <div class="col-lg-7 text-center mx-auto">
          <div class="section-title">
              <h3>Our<span> ITM Club Committee</span></h3>
              <span class="line"></span>
              <p>The ITM Academic Club promotes student engagement, skills development, and leadership through events and industry-focused initiatives. </p>
          </div>
      </div>
      <div class="container">
        <!-- Display Committee with ID 1 (Top) -->
        @if ($committee_hd)
            <div class="card card-top">
                <div class="circle small"></div>
                <div class="circle large"></div>
                <h1>WELCOME</h1>
                <h2>To the Club</h2>
                <img src="{{ asset($committee_hd->image) }}" alt="Profile Picture" class="profile-img">
                <h5 class="name rounded-pill shadow">{{ $committee_hd->name }}</h5>
                <div class="footer">
                    <p class="position">{{ $committee_hd->position }}</p>
                </div>
            </div>
        @endif

        <!-- Display Committee with ID 2 (Top) -->
        @if ($committee_con)
            <div class="card card-top">
                <div class="circle small"></div>
                <div class="circle large"></div>
                <h1>WELCOME</h1>
                <h2>To the Club</h2>
                <img src="{{ asset($committee_con->image) }}" alt="Profile Picture" class="profile-img">
                <h5 class="name rounded-pill shadow">{{ $committee_con->name }}</h5>
                <div class="footer">
                    <p class="position">{{ $committee_con->position }}</p>
                </div>
            </div>
        @endif

        <!-- Display All Other Committees Below -->
        <div class="row ">
            @foreach ($committees as $committee)
                @if ($committee->id != 1 && $committee->id != 2) <!-- Exclude ID 1 and 2 -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-3">
                        <div class="card">
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
                @endif
            @endforeach
        </div>
    </div>



  </section>
  @endsection
  <style>
.container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 20px;
    padding: 10px;
}

.card {
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

.card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
}

.card::before {
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

.card:hover::before {
    transform: scale(1.2);
}

.card h1 {
    font-size: 1.8rem;
    font-weight: bold;
    color: #F8BE3F;
    margin-bottom: 10px;
    text-transform: uppercase;
    letter-spacing: 3px;
}

.card h2 {
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

.card:hover .profile-img {
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
    .card {
        width: 280px; /* Slightly smaller cards for medium screens */
    }
}

@media (max-width: 992px) {
    .card {
        width: 250px; /* Even smaller cards for tablet-sized screens */
    }

    .container {
        justify-content: flex-start;
    }
}

@media (max-width: 768px) {
    .card {
        width: 220px; /* Smaller cards for mobile screens */
    }

    .container {
        justify-content: center;
    }
}

@media (max-width: 576px) {
    .card {
        width: 100%; /* Full width for smaller screens */
    }

    .container {
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

