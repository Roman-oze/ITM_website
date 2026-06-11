{{-- @include('layout._footer', ['footers' => $footers]) --}}
@extends('layout.app')
@include('include.alerts')




@section('content')
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

    <div class="inbox-icon" id="inboxIcon">
        <!-- Use the comment dots icon -->
        <div color="#ffffff" class="sc-kgUAy♂h bIyeJp"><svg width="29" height="30" viewBox="0 0 29 30" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M20.5002 10.1999H22.9002C24.2257 10.1999 25.3002 11.2744 25.3002 12.5999V19.7999C25.3002 21.1254 24.2257 22.1999 22.9002 22.1999H20.5002V26.9999L15.7002 22.1999H10.9002C10.2375 22.1999 9.63745 21.9313 9.20314 21.497M9.20314 21.497L13.3002 17.3999H18.1002C19.4257 17.3999 20.5002 16.3254 20.5002 14.9999V7.7999C20.5002 6.47442 19.4257 5.3999 18.1002 5.3999H6.1002C4.77471 5.3999 3.7002 6.47442 3.7002 7.7999V14.9999C3.7002 16.3254 4.77471 17.3999 6.1002 17.3999H8.5002V22.1999L9.20314 21.497Z"
                    stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg></div>
    </div>




    <!-- Chat Container -->
    <div class="chat-container" id="chatContainer">
        <div class="chat-header">
            <h3 class="text-center">Live Chat <i class="fa-solid fa-circle live-icon"></i></h3>
        </div>
        <div class="chat-box" id="chat-box">
            <div class="messages" id="messages"></div>
        </div>
        <div class="chat-input">
            <input type="text" id="user-input" placeholder="Type your message...">
            <button id="send-btn" class="btn btn-block"><i
                    class="fa-regular fa-paper-plane fa-2x plane live-chat-icon"></i></button>
        </div>

        <!-- Messenger Button -->
        <a href="https://www.messenger.com/t/61550662863232/" target="_blank" class="sc-bYwyHq hNYHKM"
            style="text-decoration: none;">
            <div class="messenger-body">
                <img src="https://static.xx.fbcdn.net/rsrc.php/yd/r/hlvibnBVrEb.svg" alt="Messenger Icon"
                    style="width: 24px; height: 24px; margin-right: 5px;">
                <span>Messenger</span>
            </div>
        </a>
    </div>




    <!-- Chat icon -->
    {{-- <i class="fa-solid fa-comments  fa-4x  live-chat-icon" onclick="openLiveChat()"></i> --}}

    {{-- collapse sidebar --}}

    <button class="open-button" onclick="openForm()"><i
            class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

    <div class="calpse-bar p-2" id="myForm">
        <div id="map-widgets-holder" class="my-3 my-md-0 mx-3 mx-md-0 text-center text-md-left bg-white">
            <div class="info--card-holder mt-5 mt-md-0 ">
                <aside class="mb-3">
                    <h4 class="h4 mb-0 font-weight-bold heading-font text-blue p-1">Software Giant LTD</h4>
                    <div class="mb-3">
                        <div>

                        </div>
                    </div>

                    <div class="border p-1 ">
                        <div class="row mb-3">
                            <div class="col-12 col-md-6 mb-3 mb-md-0 ">
                                <div class="dash-count bg-color text-center p-1">
                                    <span data-purecounter-start="0" data-purecounter-end="549"
                                        data-purecounter-duration="0" class="purecounter">{{ $studentCount }}</span>
                                    <p class="pure-text">
                                        <a href="" class="text-white-50">Clients</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 rounded">
                                <div class="dash-count bg-color  text-center p-1 ">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $facultyCount }}"
                                        data-purecounter-duration="0" class="purecounter">{{ $facultyCount }}</span>
                                    <p class="pure-text">
                                        <a href="{{ route('faculty.member') }}" class="text-white-50">Project</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-3 mb-md-0">
                                <div class="dash-count bg-color  text-center p-1">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $alumniCount }}"
                                        data-purecounter-duration="0" class="purecounter">{{ $alumniCount }}</span>
                                    <p class="pure-text">
                                        <a href="{{ route('alumni') }}" class="text-white-50">Running</a>
                                    </p>

                                </div>
                            </div>
                            <div class="col-12 col-md-6 ">
                                <div class="dash-count bg-color  text-center p-1">
                                    <span data-purecounter-start="0" data-purecounter-end="{{ $scholarshipCount }}"
                                        data-purecounter-duration="0" class="purecounter">{{ $scholarshipCount }}</span>
                                    <p class="pure-text">
                                        <a href="{{ route('scholarship') }}" class="text-white-50">Draft</a>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>

                </aside>
            </div>
            <button type="button" class="open-button" onclick="closeForm()"><i
                    class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

        </div>
    </div>



    <section id="Feature" class="section-p1 feature-section">
        <div class="container">
            <div class="row justify-content-center text-center g-4">

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="https://hall.daffodilvarsity.edu.bd/" target="_blank" class="feature-link">
                        <div class="feature-card">
                            <img src="https://edge.gov.bd/wp-content/themes/edgewebsite/images/logo.png" alt="Hall">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="https://daffodilvarsity.edu.bd/article/transport" target="_blank" class="feature-link">
                        <div class="feature-card">
                            <img src="{{ asset('frontend/client/govt.png') }}" alt="Transport">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="#" target="_blank" class="feature-link">
                        <div class="feature-card">
                            <img src="https://dphe.s3.amazonaws.com/freap/media/logo/freap_mpyWKzS.png" alt="Innovation">
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6 col-6">
                    <a href="{{ route('club') }}" target="_blank" class="feature-link">
                        <div class="feature-card">
                            <img src="{{ asset('frontend/client/wecare-lged.png') }}" alt="Club">
                        </div>
                    </a>
                </div>

            </div>
        </div>
    </section>





    <section id="services" class="services section-bg text-left">
        <div class="container aos-init aos-animate text-left" data-aos="fade-up">
            <div class="section-title ">
                <h3 class=" " style="color: #37517e;">Features</h3>
                <h2 class="text-muted why"> Why Choose ITM</h2>
                <div class="row ">
                    @foreach ($features as $feature)
                        <div class="col-md-3 mt-4">
                            <div class="flip-card flip-shadow">
                                <div class="flip-card-inner">
                                    <div class="flip-card-front flip-custom-2" style="background: #37517e;">
                                        <div class="child-div-2" style="background: rgb(237, 240, 240);">
                                            <img src="{{ asset($feature->image) }}" alt="Feature Image"
                                                class="img-fluid-custom"><br>
                                            <h4 class="flip-text">{{ $feature->title }}</h4>
                                        </div>
                                    </div>
                                    <div class="flip-card-back  text-left" style="line-height:22px;">
                                        <h5>{{ $feature->title }}</h5>
                                        <hr>
                                        <p style="font-size:medium">{{ $feature->description }}</p>
                                        <div class="social-links text-center">
                                            <!-- Social links can go here if needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
    </section>


    <section class="why-choose-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="section-badge">
                    <i class="fa-solid fa-star"></i> Why Choose SoftwareGiant
                </span>

                <h2 class="display-5 fw-bold mt-3">
                    Transforming Ideas Into
                    <span class="gradient-text">Digital Excellence</span>
                </h2>

                <p class="section-subtitle">
                    Delivering innovative software solutions that help businesses scale,
                    automate processes, and achieve sustainable growth.
                </p>
            </div>

            <div class="row g-5 align-items-center">

                <!-- Left Side -->
                <div class="col-lg-6">

                    <div class="image-wrapper">

                        <div class="floating-shape shape-1"></div>
                        <div class="floating-shape shape-2"></div>

                        <img src="{{ asset('frontend/image/why-us.png') }}" class="img-fluid main-image">

                        <div class="experience-card">
                            <h3>5+</h3>
                            <span>Years Experience</span>
                        </div>

                        <div class="project-card">
                            <h3>10+</h3>
                            <span>Projects Delivered</span>
                        </div>

                    </div>

                </div>

                <!-- Right Side -->
                <div class="col-lg-6">

                    <div class="about-box">

                        <h3 class="about-title">
                            Trusted Technology Partner For Modern Businesses
                        </h3>

                        <p class="about-text">
                            At SoftwareGiant, we build intelligent software solutions
                            that simplify operations, improve productivity, and accelerate
                            business growth. Our team combines technical expertise,
                            innovation, and industry knowledge to deliver exceptional results.
                        </p>

                        <!-- Features -->
                        <div class="row g-3 mb-4">

                            <div class="col-md-6">
                                <div class="feature-card">
                                    <i class="fa-solid fa-lightbulb"></i>
                                    <h6>Innovation First</h6>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-card">
                                    <i class="fa-solid fa-headset"></i>
                                    <h6>24/7 Support</h6>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-card">
                                    <i class="fa-solid fa-shield-halved"></i>
                                    <h6>Secure Systems</h6>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="feature-card">
                                    <i class="fa-solid fa-rocket"></i>
                                    <h6>Fast Deployment</h6>
                                </div>
                            </div>

                        </div>

                        <!-- Accordion -->

                        <div class="accordion modern-accordion" id="accordionExample">

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne">

                                        Custom Software Solutions
                                    </button>
                                </h2>

                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        We design software tailored to your unique business
                                        requirements, ensuring maximum efficiency,
                                        scalability, and performance.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo">

                                        Dedicated Support Team
                                    </button>
                                </h2>

                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        Our experts provide continuous guidance,
                                        maintenance, and technical support to ensure
                                        uninterrupted business operations.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree">

                                        Continuous Innovation
                                    </button>
                                </h2>

                                <div id="collapseThree" class="accordion-collapse collapse"
                                    data-bs-parent="#accordionExample">

                                    <div class="accordion-body">
                                        We continuously improve our solutions with
                                        new technologies, features, and security updates
                                        to keep your business ahead of competitors.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>

    @include('faculty.faculty');


    <section class="stats-section py-5">
        <div class="container">

            <div class="text-center mb-5">
                <span class="stats-badge">
                    <i class="fa-solid fa-chart-line"></i> Our Impact
                </span>

                <h2 class="stats-title mt-3">
                    Driving Innovation Through
                    <span class="gradient-text">Technology</span>
                </h2>

                <p class="stats-subtitle">
                    We empower businesses with scalable software solutions,
                    helping them automate processes, improve efficiency, and accelerate digital transformation.
                </p>
            </div>

            <div class="row g-4">

                <!-- Clients -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">

                        <div class="stats-icon">
                            <i class="fa-solid fa-building"></i>
                        </div>

                        <h2 class="counter-number">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $studentCount }}"
                                data-purecounter-duration="3" class="purecounter">
                                {{ $studentCount }}
                            </span>+
                        </h2>

                        <p>Happy Clients</p>

                    </div>
                </div>

                <!-- Projects -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">

                        <div class="stats-icon">
                            <i class="fa-solid fa-diagram-project"></i>
                        </div>

                        <h2 class="counter-number">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $facultyCount }}"
                                data-purecounter-duration="3" class="purecounter">
                                {{ $facultyCount }}
                            </span>+
                        </h2>

                        <p>Projects Delivered</p>

                    </div>
                </div>

                <!-- Users / Systems -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">

                        <div class="stats-icon">
                            <i class="fa-solid fa-server"></i>
                        </div>

                        <h2 class="counter-number">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $alumniCount }}"
                                data-purecounter-duration="3" class="purecounter">
                                {{ $alumniCount }}
                            </span>+
                        </h2>

                        <p>Active Users</p>

                    </div>
                </div>

                <!-- Support / Uptime / Experience -->
                <div class="col-lg-3 col-md-6">
                    <div class="stats-card">

                        <div class="stats-icon">
                            <i class="fa-solid fa-headset"></i>
                        </div>

                        <h2 class="counter-number">
                            <span data-purecounter-start="0" data-purecounter-end="{{ $scholarshipCount }}"
                                data-purecounter-duration="3" class="purecounter">
                                {{ $scholarshipCount }}
                            </span>+
                        </h2>

                        <p>Support Cases Resolved</p>

                    </div>
                </div>

            </div>

        </div>
    </section>


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
                                <img src="https://edge.gov.bd/wp-content/themes/edgewebsite/images/logo.png"
                                    alt="Waiver">
                                <span>EDGE Govt</span>
                            </div>
                            <div class="grid-item">
                                <img src="https://lgcrrpmis.lged.gov.bd/images/bdgovtlogo.png" alt="Free Laptop">
                                <span>LGCRRP</span>
                            </div>
                            <div class="grid-item">
                                <img src="https://dphe.s3.amazonaws.com/freap/media/logo/freap_mpyWKzS.png"
                                    alt="Hall">
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


    <section id="services" class="services section-bg">
        <div class="expertise-section py-5">
            <div class="container">

                <!-- Header -->
                <div class="section-title">
                    <h2>Specialist</h2>
                    <p class="text-dark">Nowadays, Build your future with modern technology and professional software
                        solutions
                    </p>
                </div>

                <!-- Expertise Cards -->
                <div class="row g-4">

                    <!-- Web Development -->
                    <div class="col-md-6 col-lg-4">
                        <div class="expertise-card">

                            <div class="expertise-icon">
                                <i class="fas fa-desktop"></i>
                            </div>

                            <h4>Web Development</h4>
                            <p>
                                We build responsive, scalable, and modern web applications
                                using the latest technologies.
                            </p>

                        </div>
                    </div>

                    <!-- Mobile Apps -->
                    <div class="col-md-6 col-lg-4">
                        <div class="expertise-card">

                            <div class="expertise-icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>

                            <h4>Mobile Applications</h4>
                            <p>
                                Create powerful Android and iOS apps with smooth user experience
                                and strong performance.
                            </p>

                        </div>
                    </div>

                    <!-- Business -->
                    <div class="col-md-6 col-lg-4">
                        <div class="expertise-card">

                            <div class="expertise-icon">
                                <i class="fas fa-briefcase"></i>
                            </div>

                            <h4>Business Solutions</h4>
                            <p>
                                Smart business systems that improve productivity,
                                management, and decision-making.
                            </p>

                        </div>
                    </div>

                </div>

                <!-- About Section -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-9">

                        <div class="about-box">

                            <h3>About Us</h3>

                            <p>
                                We are a dedicated software development team focused on
                                delivering efficient, scalable, and user-friendly applications.
                                Our goal is to transform ideas into real digital solutions using
                                modern technologies and best development practices.
                            </p>

                            <a href="{{ route('about') }}" class="about-btn">
                                Get in Touch
                            </a>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    {{-- <div class="container-fluid mt-5">
        <div class="row">
            <marquee class="logos text-center mt-5">
                <img src="{{ asset('frontend/image/Flutter-App.png') }}" alt="Flutter App">
                <img src="{{ asset('frontend/image/java.png') }}" alt="Java">
                <img src="{{ asset('frontend/image/fire.png') }}" alt="Firebase">
                <img src="{{ asset('frontend/image/html.png') }}" alt="HTML">
                <img src="{{ asset('frontend/image/css.png') }}" alt="CSS">
                <img src="{{ asset('frontend/image/bootstrap.png') }}" alt="Bootstrap">
                <img src="{{ asset('frontend/image/js0.png') }}" alt="JavaScript">
                <img src="{{ asset('frontend/image/node.png') }}" alt="Node.js">
                <img src="{{ asset('frontend/image/php.png') }}" alt="PHP">
                <img src="{{ asset('frontend/image/laravel.png') }}" alt="Laravel">
                <img src="{{ asset('frontend/image/database.png') }}" alt="Database">
                <img src="{{ asset('frontend/image/powerpoint.png') }}" alt="PowerPoint">
                <img src="{{ asset('frontend/image/bigml.png') }}" alt="BigML">
                <img src="{{ asset('frontend/image/powerbi.png') }}" alt="Power BI">
                <img src="{{ asset('frontend/image/excel.png') }}" alt="Excel">
            </marquee>
        </div>
    </div>

    <br> --}}


    <section id="services" class="services section-bg">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Experience</h2>
                <p>Gather practical experiences from each course</p>
            </div>

            <div class="row">
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in"
                    data-aos-delay="100">
                    <div class="icon-box avatar-container" onclick="toggleMenu()">
                        <div class="icon "><i class="fa-solid fa-book-open-reader avatar-image "></i></div>
                        <h4><a href="#">Project Management</a></h4>
                        <p>Master the art of planning, executing, and overseeing successful projects.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate"
                    data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon-box avatar-container" onclick="toggleMenu()">
                        <div class="icon"><i class="fa-solid fa-lightbulb avatar-image "></i></div>
                        <h4><a href="#">FinTech</a></h4>
                        <p>Explore the innovative intersection of finance and technology for a modern digital economy.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate"
                    data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon-box avatar-container" onclick="toggleMenu()">
                        <div class="icon"><i class="fa-solid fa-circle-info avatar-image "></i></div>
                        <h4><a href="#">IT Support</a></h4>
                        <p>Build expertise in troubleshooting, maintaining, and managing IT systems effectively.</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate"
                    data-aos="zoom-in" data-aos-delay="400">
                    <div class="icon-box avatar-container" onclick="toggleMenu()">
                        <div class="icon"><i class="fa-solid fa-person-rays avatar-image"></i></div>
                        <h4><a href="#">Human Resource</a></h4>
                        <p>Develop skills to manage, recruit, and enhance organizational talent strategically.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section id="contact" class="contact">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>Contact</h2>
                <p>
                    Connect with our department for inquiries, support, or collaboration opportunities. We are here to
                    assist with academic, administrative, or program-specific concerns.
                </p>
            </div>

            <div class="row">
                <div class="col-lg-5 d-flex align-items-stretch">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-map-location-dot"></i>
                            <h4>Location:</h4>
                            <p>
                                AB4-Building-Khagan,Ashulia,Dhaka
                            </p>
                        </div>

                        <div class="email">
                            <i class="fa-regular fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>
                                itmoffice@daffodilvarsity.edu.bd</p>
                        </div>

                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            <h4>Call:</h4>
                            <p>01847140039</p>
                        </div>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd"
                            style="border: 0; width: 100%; height: 290px" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>

                <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                    @if (session('success'))
                        {
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                        }
                    @endif
                    @if (session('error'))
                        {
                        <div class="alert alert-success">
                            {{ session('error') }}
                        </div>
                        }
                    @endif

                    <form action="{{ route('notifications.store') }}" method="post" role="form"
                        class="php-email-form">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="name">Your Name</label>
                                <input type="text" name="name" class="form-control" id="name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Your Email</label>
                                <input type="email" class="form-control" name="email" id="email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" name="subject" id="subject" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" name="message" rows="5" required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading d-none">Loading...</div>
                            <div class="alert alert-danger d-none error-message"></div>
                            <div class="alert alert-success d-none sent-message">Your message has been sent. Thank you!
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-dark">
                                <i class="fa-regular fa-paper-plane fa-lg text-white"></i> Send Message
                            </button>
                        </div>
                    </form>


                </div>
            </div>
        </div>
    </section>
@endsection
