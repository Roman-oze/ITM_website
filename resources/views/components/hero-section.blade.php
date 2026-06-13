<section id="hero" class="d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 animate__animated animate__fadeInLeft"
                    data-aos="fade-up" data-aos-delay="200">
                    <h1 class="text-white-50 ">Welcome!</h1>
                    <h1>
                        {{ $hero->title }}
                        <img src="{{ asset('frontend/image/verifi.png') }}" class="verify" alt="Verification Icon">
                    </h1>
                    <h2>{{ $hero->description }}</h2>

                </div>
                <div class="col-lg-6 order-1 order-lg-2 hero-img animate__animated animate__fadeInRight" data-aos="zoom-in"
                    data-aos-delay="200">
                    <img src="{{ asset($hero->image) }}" class="img-fluid animated" alt="Hero Image">
                </div>
            </div>
        </div>
    </section>
