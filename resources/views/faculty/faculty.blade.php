@extends('layout.app')

@include('faculty.faculty_style')

@section('content')
    <section class="team-section">

        <div class="section-title mt-5">
            <h2 class=""> Team</h2>
            <div class="C">
                <p class="modern-text">
                    Meet our dynamic team of experts, dedicated to delivering innovative solutions<br>
                    tailored to your needs. With passion and expertise, we're here to empower your success journey.
                </p>
            </div>
        </div>

        <div class="container">

            <div class="section-heading">
                <h2>Board of Directors</h2>
                <p>Meet The Leadership Team</p>
            </div>


            <div class="row justify-content-center">
                @foreach ($boardOfDirectors as $teacher)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                        <div class="team-card">

                            <div class="team-image">
                                <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}">
                            </div>

                            <div class="team-content">

                                <h5>{{ $teacher->name }}</h5>

                                <span>
                                    {{ $teacher->designation }}
                                </span>

                                <button class="team-btn" data-bs-toggle="modal"
                                    data-bs-target="#facultyModal{{ $teacher->teacher_id }}">
                                    View Profile
                                </button>

                            </div>

                        </div>

                    </div>
                @endforeach
            </div>


            <div class="section-heading mt-5">
                <h2>Technical Team</h2>
                <p>Meet Our Expert Developers</p>
            </div>

            <div class="row justify-content-center">
                @foreach ($technicalTeam as $teacher)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">

                        <div class="team-card">

                            <div class="team-image">
                                <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}">
                            </div>

                            <div class="team-content">

                                <h5>{{ $teacher->name }}</h5>

                                <span>
                                    {{ $teacher->designation }}
                                </span>

                                <button class="team-btn" data-bs-toggle="modal"
                                    data-bs-target="#facultyModal{{ $teacher->teacher_id }}">
                                    View Profile
                                </button>

                            </div>

                        </div>

                    </div>
                @endforeach
                @foreach ($teachers as $teacher)
                    <div class="modal fade team-modal" id="facultyModal{{ $teacher->teacher_id }}" tabindex="-1"
                        aria-labelledby="facultyModalLabel{{ $teacher->teacher_id }}" aria-hidden="true">

                        <div class="modal-dialog modal-lg modal-dialog-centered">

                            <div class="modal-content custom-modal">

                                <div class="modal-header border-0">

                                    <h5 class="modal-title" id="facultyModalLabel{{ $teacher->teacher_id }}">
                                        Team Member Profile
                                    </h5>

                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal">
                                    </button>

                                </div>

                                <div class="modal-body">

                                    <div class="row align-items-center">

                                        <div class="col-md-4 text-center">

                                            <div class="modal-profile-wrapper">
                                                <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}"
                                                    class="modal-profile-img">
                                            </div>

                                        </div>

                                        <div class="col-md-8">

                                            <h3 class="member-name">
                                                {{ $teacher->name }}
                                            </h3>

                                            <div class="member-role">
                                                {{ $teacher->designation }}
                                            </div>

                                            <div class="info-box">
                                                <i class="fa-solid fa-envelope"></i>
                                                <span>{{ $teacher->email }}</span>
                                            </div>

                                            <div class="info-box">
                                                <i class="fa-solid fa-phone"></i>
                                                <span>{{ $teacher->phone }}</span>
                                            </div>

                                            @if ($teacher->fb)
                                                <a href="{{ $teacher->fb }}" target="_blank" class="social-btn">
                                                    <i class="fa-brands fa-facebook-f"></i>
                                                    Visit Facebook
                                                </a>
                                            @endif

                                        </div>

                                    </div>

                                    @if (!empty($teacher->bio))
                                        <div class="bio-section">

                                            <h5>About</h5>

                                            <p>
                                                {{ $teacher->bio }}
                                            </p>

                                        </div>
                                    @endif

                                </div>

                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <script>
        const container = document.querySelector('.container')
        const card = document.querySelector('.card')

        container.addEventListener('mousemove', (e) => {
            const rect = container.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            card.style.transform =
                rotateY($ {
                        x * 30
                    }
                    deg)
            rotateX($ {
                    y * -30
                }
                deg)
        });

        container.addEventListener('mouseleave', () => {
            card.style.transform = rotateY(0 deg) rotateX(0 deg)
        })

        function confirmDelete() {
            return confirm('Are you sure you want to delete this faculty member?')
        }
    </script>
@endsection
