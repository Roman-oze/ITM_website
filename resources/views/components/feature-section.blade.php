

    <section id="feature" class="section-p1 team-section ">
        <div class="row ">
            @foreach ($features as $feature)
                <div class="col-md-3 mt-4">
                    <div class="flip-card">
                        <div class="flip-card-inner">

                            <!-- Front Side -->
                            <div class="flip-card-front">
                                <div class="card-graphic-area">
                                    <!-- Replace this div with an <img src="path_to_image" alt="Mobile App"> tag as shown in image_68969c.png -->
                                    <img src="{{ asset($feature->image) }}" alt="Feature Image"
                                        class="img-fluid-custom"><br>

                                </div>
                                <div class="card-text-area">
                                    <h2>{{ $feature->title }}</h2>
                                </div>
                            </div>

                            <!-- Back Side -->
                            <div class="flip-card-back">
                                <h2>{{ $feature->title }}</h2>
                                <hr>
                                <p>
                                    {{ $feature->description }}
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
