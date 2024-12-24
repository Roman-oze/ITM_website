@extends('layout.app')

@include('faculty.faculty_style')

@section('content')

<section id="services" class="services section-bg text-left mt-5 py-5">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <!-- Section Title -->
        <div class="section-title text-center">
            <h2 class="text-dark">Faculty</h2>
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <strong class="text-dark">
                        "Empowering innovation, inspiring success – Meet the visionary faculty of the <br>Department of Information Technology & Management at Daffodil International University!"
                    </strong>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- First Row: Dean and Head of Department -->
<div class="container aos-init aos-animate " data-aos="fade-up">
    <div class="row row d-flex justify-content-center mt-5">
        @foreach($teachers_new as $teacher)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-lg rounded-lg border-0">
                <div class="circle small"></div>
                <div class="circle large"></div>
                <div class="card-body text-center">
                    <img src="{{ asset($teacher->image) }}" width="200" height="200" class="profile-img" alt="Faculty Image">
                    <h5 class="card-title">{{ $teacher->name }}</h5>
                    <span class="badge  mb-3 designation">{{ $teacher->designation }}</span>
                    <br>
                    <button class="btn btn-bg-color mb-3" data-bs-toggle="modal" data-bs-target="#facultyModal{{ $teacher->teacher_id }}">Show Details</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <!-- Second Row: Other Teachers -->
    <div class="row row d-flex justify-content-center">
        @foreach($teachers as $teacher)
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
            <div class="card shadow-lg rounded-lg border-0">
                <div class="circle small"></div>
                <div class="circle large"></div>
                <div class="card-body text-center">
                    <img src="{{ asset($teacher->image) }}" width="200" height="200" class="profile-img" alt="Faculty Image">
                    <h5 class="card-title">{{ $teacher->name }}</h5>
                    <span class="badge badge-info mb-3 designation">{{ $teacher->designation }}</span>
                    <br>
                    <button class="btn btn-bg-color" data-bs-toggle="modal" data-bs-target="#facultyModal{{ $teacher->teacher_id }}">Show Details</button>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<!-- Modal for Faculty Details -->
@foreach($teachers as $teacher)
<div class="modal fade" id="facultyModal{{ $teacher->teacher_id }}" tabindex="-1" aria-labelledby="facultyModalLabel{{ $teacher->teacher_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="facultyModalLabel{{ $teacher->teacher_id }}">{{ $teacher->name }} - Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($teacher->image) }}" class="img-fluid rounded-circle" alt="Faculty Image">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Designation:</strong> {{ $teacher->designation }}</p>
                        <p><strong>Email:</strong> <a href="mailto:{{ $teacher->email }}" class="text-decoration-none">{{ $teacher->email }}</a></p>
                        <p><strong>Phone:</strong> <a href="tel:{{ $teacher->phone }}" class="text-decoration-none">{{ $teacher->phone }}</a></p>
                        <p><strong></strong> <a href="{{ $teacher->fb }}" target="_blank" class="text-decoration-none bi-facebook btn btn-primary">acebook</a></p>
                    </div>
                </div>
                <!--<div class="mt-4">-->
                <!--    <h5>Additional Information</h5>-->
                <!--    <p>{{ $teacher->bio }}</p>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
@endforeach

@foreach($teachers_new as $teacher)
<div class="modal fade" id="facultyModal{{ $teacher->teacher_id }}" tabindex="-1" aria-labelledby="facultyModalLabel{{ $teacher->teacher_id }}" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="facultyModalLabel{{ $teacher->teacher_id }}">{{ $teacher->name }} - Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ asset($teacher->image) }}" class="img-fluid rounded-circle" alt="Faculty Image">
                    </div>
                    <div class="col-md-8">
                        <p><strong>Designation:</strong> {{ $teacher->designation }}</p>
                        <p><strong>Email:</strong> <a href="mailto:{{ $teacher->email }}" class="text-decoration-none">{{ $teacher->email }}</a></p>
                        <p><strong>Phone:</strong> <a href="tel:{{ $teacher->phone }}" class="text-decoration-none">{{ $teacher->phone }}</a></p>
                        <p><strong></strong> <a href="{{ $teacher->fb }}" target="_blank" class="text-decoration-none bi-facebook btn btn-primary">acebook</a></p>
                    </div>
                </div>
                <!--<div class="mt-4">-->
                <!--    <h5>Additional Information</h5>-->
                <!--    <p>{{ $teacher->bio }}</p>-->
                <!--</div>-->
            </div>
        </div>
    </div>
</div>
@endforeach
</div>

<!-- JavaScript for Confirmation and Modal -->
<script>
function confirmDelete() {
    return confirm('Are you sure you want to delete this faculty member?');
}
</script>

<style>
.btn-bg-color{
    border: 2px solid #088178 ;
    border-radius: 6px;
    padding: 6px 16px;
    color:  #088178 ;
    font-size: 1rem;

}
.btn-bg-color:hover{
    background-color: #088178;
    color: white;
    font-size: 1rem;
}
.designation {
    font-size: 18px;
    font-weight: bold;
    color: #1e3256;
}


.badge {
    font-size: 1rem;
    padding: 0.5em;
}

.btn-outline-primary {
    font-size: 1rem;
    font-weight: 600;
}

.modal-body {
    font-size: 1rem;
}

.modal-footer .btn {
    font-size: 0.9rem;
}

.img-fluid {
    max-width: 120px;
    margin-bottom: 15px;
}

.modal-title {
    font-weight: 700;
}

.modal-content {
    border-radius: 15px;
}

.modal-footer {
    display: flex;
    justify-content: space-between;
}

.modal-body p {
    font-size: 1rem;
    line-height: 1.5;
}

.btn-close {
    background-color: transparent;
    border: none;
}

.btn-close:hover {
    background-color: #f1f1f1;
}

.details-link {
    text-decoration: none;
    font-weight: bold;
    color: #007bff;
}

.details-link:hover {
    color: #0056b3;
}

/* Responsive Design */
@media (max-width: 1199px) {
    .section-title h2 {
        font-size: 1.5rem;
    }
    .card-title {
        font-size: 1.1rem;
    }
}

@media (max-width: 768px) {
    .card-body {
        padding: 1.5rem;
    }
    .card-title {
        font-size: 1.2rem;
    }
    .img-fluid {
        max-width: 100%;
        height: auto;
    }
}

@media (max-width: 576px) {
    .card-title {
        font-size: 1rem;
    }
    .modal-dialog {
        max-width: 90%;
    }
}
img.img-fluid {
    max-width: 100%;
    height: auto;
}

/* Adjust column layout for tablets */
@media (max-width: 1024px) {
    .col-lg-3 {
        flex: 0 0 48%;
        max-width: 48%;
    }
    .col-md-4 {
        flex: 0 0 48%;
        max-width: 48%;
    }
}

/* For smaller devices like mobile */
@media (max-width: 768px) {
    .col-lg-3, .col-md-4 {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* Adjust text size in modals */
    .modal-body p {
        font-size: 0.9rem;
    }
}
.profile-img {
    width: 150px;
    height: 150px;
    border-radius: 50%;
    margin: 10px auto;
    border: 5px solid #088178;
    box-shadow: 0 0 15px rgba(26, 26, 27, 0.6);
    transition: transform 0.3s, box-shadow 0.3s;
}

.card:hover .profile-img {
    transform: scale(1.1);
    box-shadow: 0 0 25px rgba(5, 138, 78, 0.9);
}

.card {
    position: relative;
    background: #fff;
    width: auto;
    padding: 10px;
    border-radius: 14px;
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
    z-index: -1;
    transition: transform 0.6s;
  }

  .card:hover::before {
    transform: scale(1.2);
  }
  .circle {
    position: absolute;
    border-radius: 50%;
    background: rgba(14, 140, 136, 0.418);
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

</style>
<br><br>
<script>
    const container = document.querySelector('.container');
  const card = document.querySelector('.card');

  container.addEventListener('mousemove', (e) => {
    const rect = container.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;

    card.style.transform =
      rotateY(${x * 30}deg)
      rotateX(${y * -30}deg)
    ;
  });

  container.addEventListener('mouseleave', () => {
    card.style.transform = rotateY(0deg) rotateX(0deg);
  });
  </script>
@endsection
