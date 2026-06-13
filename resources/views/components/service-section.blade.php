    <section id="services" class="services-section py-5">
        <div class="container">

            <!-- Section Header -->
            <div class="text-center mb-5">
                <h2 class="section-title">
                    Our Services
                </h2>

                <p class="section-subtitle">
                    We provide modern software solutions designed to help businesses
                    grow, automate workflows, and improve efficiency 24/7.
                </p>
            </div>

            <!-- Services Grid -->
            <div class="row g-4">

                @foreach ($services as $service)
                    <div class="col-xl-3 col-md-6">

                        <div class="service-card">

                            <!-- Image -->
                            <div class="service-image">
                                <img src="{{ asset($service->image) }}" alt="service image">
                            </div>

                            <!-- Content -->
                            <div class="service-content">

                                <h4 class="service-title">
                                    {{ $service->link_name }}
                                </h4>

                                <p class="service-text">
                                    {{ $service->description }}
                                </p>

                                <a target="_blank" href="{{ $service->link }}" class="service-btn">
                                    Learn More →
                                </a>

                            </div>

                        </div>

                    </div>
                @endforeach

            </div>

        </div>
    </section>
