{{-- @include('layout._footer', ['footers' => $footers]) --}}
@extends('layout.app')
@include('include.alerts')




@section('content')
    <x-hero-section :hero="$hero" />

    <div class="inbox-icon" id="inboxIcon">
        <!-- Use the comment dots icon -->
        <div color="#ffffff" class="sc-kgUAy♂h bIyeJp"><svg width="29" height="30" viewBox="0 0 29 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.5002 10.1999H22.9002C24.2257 10.1999 25.3002 11.2744 25.3002 12.5999V19.7999C25.3002 21.1254 24.2257 22.1999 22.9002 22.1999H20.5002V26.9999L15.7002 22.1999H10.9002C10.2375 22.1999 9.63745 21.9313 9.20314 21.497M9.20314 21.497L13.3002 17.3999H18.1002C19.4257 17.3999 20.5002 16.3254 20.5002 14.9999V7.7999C20.5002 6.47442 19.4257 5.3999 18.1002 5.3999H6.1002C4.77471 5.3999 3.7002 6.47442 3.7002 7.7999V14.9999C3.7002 16.3254 4.77471 17.3999 6.1002 17.3999H8.5002V22.1999L9.20314 21.497Z"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </div>
    </div>



    <!-- Chat Container -->
    <x-chat-widget />


    {{-- collapse sidebar --}}
    <button class="open-button" onclick="openForm()"><i
            class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

    <div class="calpse-bar" id="myForm">
        <div id="map-widgets-holder" class="my-3 my-md-0 mx-3 mx-md-0 text-center text-md-left">
            <div class="info--card-holder mt-5 mt-md-0 ">
                <aside class="mb-3">
                    <div class="info-dashboard-classic mt-4">


                        <div class="kpi-grid-classic">

                            <div class="kpi-box">
                                <div class="kpi-number">
                                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="">
                                        10
                                    </span>
                                </div>
                                <div class="kpi-label">Clients</div>
                            </div>

                            <div class="kpi-box">
                                <div class="kpi-number">
                                    <span class="purecounter" data-purecounter-start="0"
                                        data-purecounter-end="{{ $facultyCount }}">
                                        {{ $facultyCount }}
                                    </span>
                                </div>
                                <div class="kpi-label">Projects</div>
                            </div>

                            <div class="kpi-box">
                                <div class="kpi-number">
                                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="">
                                        6
                                    </span>
                                </div>
                                <div class="kpi-label">Running</div>
                            </div>

                            <div class="kpi-box">
                                <div class="kpi-number">
                                    <span class="purecounter" data-purecounter-start="0" data-purecounter-end="">
                                        3
                                    </span>
                                </div>
                                <div class="kpi-label">Draft</div>
                            </div>

                        </div>

                    </div>
                </aside>
            </div>
            <button type="button" class="open-button" onclick="closeForm()"><i
                    class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

        </div>
    </div>


    {{-- Clients Section --}}
    <x-client-section />

    {{-- Feature section --}}
    <x-feature-section :features="$features" />


    {{-- Why section --}}
    <x-why-choose-section />


    {{-- Team Member section --}}
    <x-team-section :board-of-directors="$boardOfDirectors" :technical-team="$technicalTeam" :teammembers="$teammembers" />

    {{-- price section --}}
    <x-pricing-section />


    {{-- client list section --}}
    <section class="stats-section py-5">
        <div id="cta" class="cta">
            <div class=" mt-5">
                <h1 class="fac_text text-center">Our Client</h1>

            </div>
            <div class="container aos-init aos-animate" data-aos="zoom-in">
                <div class="row">
                    <div class="col-lg-12 text-center text-lg-start">
                        {{-- grid-bg --}}
                        <div class="grid-container  mt-5">
                            <div class="grid-item ">
                                <img src="https://edge.gov.bd/wp-content/themes/edgewebsite/images/logo.png" alt="Waiver">
                                <span>EDGE Govt</span>
                            </div>
                            <div class="grid-item">
                                <img src="https://lgcrrpmis.lged.gov.bd/images/bdgovtlogo.png" alt="Free Laptop">
                                <span>LGCRRP</span>
                            </div>
                            <div class="grid-item">
                                <img src="https://dphe.s3.amazonaws.com/freap/media/logo/freap_mpyWKzS.png" alt="Hall">
                                <span>Freap</span>
                            </div>
                            <div class="grid-item">
                                <img src="{{ asset('frontend\client\wecare-lged.png') }}" alt="Latest Curriculum">
                                <span>WeCARE Phase-I LGED</span>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- Service Section --}}
    <x-service-section :services="$services" />



    {{-- Call section --}}
    <section id="cta" class="cta shadow border-0 ">
        <div class="container aos-init aos-animate" data-aos="zoom-in">
            <div class="row">
                <div class="col-lg-9 text-center text-lg-start">
                    <h3>Call To Action</h3>
                    <p>
                        Ready to transform your financial management? Contact us for a
                        personalized demo. Discover how our innovative solutions can
                        empower your business. Don't wait, unlock your full financial
                        potential today!
                    </p>
                </div>
                <div class="col-lg-3 cta-btn-container text-center">
                    <a class="cta-btn align-middle" href="tel:+8801847140039">Call To Action</a>
                </div>
            </div>
        </div>
    </section>

    {{-- Specialist Section --}}
    <x-special-section />


    {{-- Contact and location section --}}
    <x-contact-section :contact="$contact" />

    {{-- newsletter Section --}}
    {{-- <x-newsletter-section /> --}}
@endsection
