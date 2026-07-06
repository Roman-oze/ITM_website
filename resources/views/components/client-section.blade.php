    <section class="team-section ">
        <div id="cta" class="cta">
            <div class=" mt-5">
                <h1 class="fac_text text-center">Our Client</h1>

            </div>
            <div class="container aos-init aos-animate" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-12 text-center text-lg-start">
                        {{-- grid-bg --}}
                        <div class="grid-container  mt-5">
                             @foreach ($clients as $client)
                                <div class="grid-item">

                                    <a href="{{ $client->link }}" target="_blank" class="text-decoration-none">

                                        <img src="{{ $client->image ? asset('uploads/client/' . $client->image) : asset('admin/images/no-image.png') }}"
                                                alt="Hall">

                                        <span>{{ $client->title }}</span>

                                    </a>

                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
