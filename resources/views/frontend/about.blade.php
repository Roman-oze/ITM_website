@extends('layout.app')

@section('content')
    <section class="team-section">

        <div class="section-title mt-5">
            <h2 class=""> Our Department</h2>
            <div class="C">
                <p class="modern-text">
                    Ready to take your financial management to the next level? Contact us today for personalized
                    consultation and discover how our expertise can empower your business growth. Let's navigate your
                    financial journey together towards success.
                </p>
            </div>

            <img src="{{ asset($photo->image) }}" class="department-group-image mt-1">
        </div>

        <div class="container">
            <div class="section-heading mt-5">
                <h2>Software Giant company staff</h2>
                <p>Meet Our staff</p>
            </div>

            <div class="row justify-content-center">
                @foreach ($staffs as $officer)
                    <div class="col-lg-3 col-md-4 col-sm-6 mb-4" data-bs-aos="fade-up">

                        <div class="team-card staff-card">

                            <div class="team-image">

                                <img src="{{ asset($officer->image) }}" alt="{{ $officer->name }}">

                            </div>

                            <div class="team-content">

                                <h5>{{ $officer->name }}</h5>

                                <span>
                                    <div class="position-badge">
                                        <i class="fa-solid fa-user-tie me-1"></i>
                                        {{ $officer->position }}
                                    </div>
                                </span>

                                <div class="staff-contact mt-3">

                                    @if ($officer->mobile)
                                        <a href="tel:{{ $officer->mobile }}" class="staff-icon">
                                            <i class="fas fa-phone-alt"></i>
                                        </a>
                                    @endif

                                    @if ($officer->email)
                                        <a href="mailto:{{ $officer->email }}" class="staff-icon">
                                            <i class="fas fa-envelope"></i>
                                        </a>
                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>
            <div class="section-heading mt-3">
                <h2>Gallery</h2>
                <p>
                    EXPLORE OUR MEMORIES
                </p>
            </div>
            <div class="row justify-content-center">
                @foreach ($gallery as $photo)
                    <div class="col-md-4 mt-4">
                        <!-- Image Card -->
                        <div class="card shadow-sm rounded border-0 overflow-hidden">
                            <!-- Image Container -->
                            <div class="image-container position-relative">
                                <img src="{{ asset($photo->image) }}" class="img-fluid rounded" alt="Photo">
                                <!-- Hover Text -->
                                <div
                                    class="overlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center justify-content-center">
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
    </section>
@endsection
<style>
    /* Position Badge */
.position-badge{
    display:inline-flex;
    align-items:center;
    justify-content:center;
    gap:6px;
    margin:12px auto 18px;
    padding:8px 18px;
    background:linear-gradient(135deg,#209DD8,#167cb0);
    color:#fff;
    font-size:13px;
    font-weight:600;
    border-radius:30px;
    transition:all .35s ease;
}

.team-card:hover .position-badge{
    transform:translateY(-2px);
}

.position-badge i{
    font-size:12px;
}
    .image-container {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        width: 100%;
        /* Responsive width */
        height: 250px;
        /* Fixed height for uniformity */
    }

    .image-container img {
        transition: transform 0.5s ease;
        width: 100%;
        height: 100%;
        /* Fills the container */
        object-fit: cover;
        /* Ensures proper cropping without distortion */
        display: block;
    }

    .image-container:hover img {
        transform: scale(1.1);
    }

    .overlay {
        background: rgba(0, 0, 0, 0.7);
        /* Semi-transparent black overlay */
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
