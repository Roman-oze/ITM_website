
{{-- @include('layout._footer', ['footers' => $footers]) --}}
@extends('layout.app')
@include('include.alerts')




@section('content')

<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 animate__animated animate__fadeInLeft" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-white-50 welcome">Welcome!</h1>
                <h2>{{ $hero->title }}</h2>
                <h1>
                    {{ $hero->description }}
                    <img src="{{ asset('frontend/image/verifi.png') }}" class="verify" alt="Verification Icon">
                </h1>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ $hero->link ?? '#' }}" style="cursor: pointer" class="btn-get-started scrollto bn5">
                        <i class="fa-solid fa-house-circle-check"></i> ITM Club
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img animate__animated animate__fadeInRight" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset($hero->image) }}" class="img-fluid animated" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

<div class="inbox-icon" id="inboxIcon">
   <!-- Use the comment dots icon -->
    <div color="#ffffff" class="sc-kgUAy♂h bIyeJp"><svg width="29" height="30" viewBox="0 0 29 30" fill="none"  xmlns="http://www.w3.org/2000/svg"><path d="M20.5002 10.1999H22.9002C24.2257 10.1999 25.3002 11.2744 25.3002 12.5999V19.7999C25.3002 21.1254 24.2257 22.1999 22.9002 22.1999H20.5002V26.9999L15.7002 22.1999H10.9002C10.2375 22.1999 9.63745 21.9313 9.20314 21.497M9.20314 21.497L13.3002 17.3999H18.1002C19.4257 17.3999 20.5002 16.3254 20.5002 14.9999V7.7999C20.5002 6.47442 19.4257 5.3999 18.1002 5.3999H6.1002C4.77471 5.3999 3.7002 6.47442 3.7002 7.7999V14.9999C3.7002 16.3254 4.77471 17.3999 6.1002 17.3999H8.5002V22.1999L9.20314 21.497Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>
</div>

{{-- messenger icon --}}
{{-- <div class="inbox-icon" id="inboxIcon">
    <!-- Use the comment dots icon -->
     <div color="#ffffff" class="sc-kgUAy♂h bIyeJp">
         <i class="fa-brands fa-facebook-messenger fa-2x"></i>
     </div>
 </div> --}}


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
        <button id="send-btn" class="btn btn-block"><i class="fa-regular fa-paper-plane fa-2x plane live-chat-icon"></i></button>
    </div>

    <!-- Messenger Button -->
    <a href="https://www.messenger.com/t/61550662863232/" target="_blank" class="sc-bYwyHq hNYHKM" style="text-decoration: none;">
        <div class="messenger-body">
            <img src="https://static.xx.fbcdn.net/rsrc.php/yd/r/hlvibnBVrEb.svg" alt="Messenger Icon" style="width: 24px; height: 24px; margin-right: 5px;">
            <span>Messenger</span>
        </div>
    </a>
</div>




<!-- Chat icon -->
{{-- <i class="fa-solid fa-comments  fa-4x  live-chat-icon" onclick="openLiveChat()"></i> --}}

 {{-- collapse sidebar --}}

<button class="open-button" onclick="openForm()"><i class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

<div class="calpse-bar p-2" id="myForm">
    <div id="map-widgets-holder" class="my-3 my-md-0 mx-3 mx-md-0 text-center text-md-left bg-white">
        <div class="info--card-holder mt-5 mt-md-0 ">
            <aside class="mb-3">
                <h4 class="h4 mb-0 font-weight-bold heading-font text-blue p-1">Information Technology & Management</h4>
                <div class="mb-3">
                    <div>

                    </div>
                </div>

                <div class="border p-1 ">
                    <div class="row mb-3">
                        <div class="col-12 col-md-6 mb-3 mb-md-0 ">
                            <div class="dash-count bg-color text-center p-1">
                                <span data-purecounter-start="0" data-purecounter-end="549" data-purecounter-duration="0" class="purecounter">{{$studentCount}}</span>
                                <p class="pure-text">
                                    <a href="" class="text-white-50">Student</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 rounded">
                            <div class="dash-count bg-color  text-center p-1 ">
                                <span data-purecounter-start="0" data-purecounter-end="{{$facultyCount}}" data-purecounter-duration="0" class="purecounter">{{$facultyCount}}</span>
                                <p class="pure-text">
                                    <a href="{{route('faculty.member')}}" class="text-white-50">Faculty</a>
                                </p>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6 mb-3 mb-md-0">
                            <div class="dash-count bg-color  text-center p-1">
                                <span data-purecounter-start="0" data-purecounter-end="{{$alumniCount}}" data-purecounter-duration="0" class="purecounter">{{$alumniCount}}</span>
                                <p class="pure-text">
                                    <a href="{{route('alumni')}}" class="text-white-50">Alumni</a>
                                </p>

                            </div>
                        </div>
                        <div class="col-12 col-md-6 ">
                            <div class="dash-count bg-color  text-center p-1">
                                <span data-purecounter-start="0" data-purecounter-end="{{$scholarshipCount}}" data-purecounter-duration="0" class="purecounter">{{$scholarshipCount}}</span>
                                <p class="pure-text">
                                    <a href="{{route('scholarship')}}" class="text-white-50">Scholars</a>
                                </p>

                            </div>
                        </div>
                    </div>
                </div>

            </aside>
        </div>
  <button type="button" class="open-button" onclick="closeForm()"><i class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

</div>
</div>



<section id="Feature" class="section-p1" style="background-color: rgb(213, 217, 234);">
    <div class="inner d-flex flex-wrap justify-content-center text-center">
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/hunderd.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="https://daffodilvarsity.edu.bd/tuition-fee-calculator" class="text-white" target="_blank">Waiver</a>
            </p>
        </div>
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/laptop.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="https://laptop.daffodilvarsity.edu.bd/index.php/apply-and-instruction/instruction-for-laptop-receive" class="text-white" target="_blank">Free Laptop</a>
            </p>
        </div>
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/hall.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="https://hall.daffodilvarsity.edu.bd/" class="text-white" target="_blank">Hall</a>
            </p>
        </div>
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/buss.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="https://daffodilvarsity.edu.bd/article/transport" class="text-white" target="_blank">Transport</a>
            </p>
        </div>
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/lightbulb-icon.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="" class="text-white" target="_blank">Innovation</a>
            </p>

        </div>
        <div class="col p-3 avatar-container" onclick="toggleMenu()">
            <img src="{{asset('frontend/image/clubimage.png')}}" alt="" class="imgslide avatar-image">
            <p class="col-btn">
                <a href="{{route('club')}}" class="text-white" target="_blank">Club</a>
            </p>
        </div>
    </div>
</section>




<section id="services" class="services section-bg text-left" >
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
                                        <img src="{{ asset($feature->image) }}" alt="Feature Image" class="img-fluid-custom"><br>
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


    <div class="container-fluid mt-5 p-4 ">
            <div class="section-title">
                <h2><i class="fa-brands fa-elementor"></i> Department of ITM</h2>
            </div>
        <div class="row justify-content-center mt-5">
                <div class="col-md-6 align-items-stretch d-flex">
                    <div class="img img-video d-flex align-items-center" >
                        <div class=" justify-content-center">
                            <img src="{{asset('frontend/image/why-us.png')}}" class="image1 img-fluid animate__animated animate__fadeInDown">
                            {{-- <img src="https://www.signulu.com/images/latest/it_banner_img.png" class="image1 img-fluid-custom animate__animated animate__fadeInDown"> --}}
                            <span class="ion-ios-play"></span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 p-3 itm-card">
                    <h1 class="text-white itm">Information Technology and Management (ITM)</h1>
                    <div class="content">
                        <h3>Why Choose Us?</h3>
                        <p class="why_itm">
                            "Education is the most powerful weapon which you can use to change the world."
                            This program provides you with a unique opportunity to earn a BSc in Information Technology and Management.
                            In the field of Information Technology and Management, the job possibilities are almost endless.
                            "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on the cloud...
                        </p>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Information
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show mt-2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <i class="ri-check-double-line text-success fa-lg"></i> <strong>Innovative Curriculum:</strong>
                                    Our program integrates cutting-edge information technologies and prepares students for the latest industry trends.
                                    <br><br>
                                    <i class="ri-check-double-line text-success fa-lg"></i> <strong>Hands-On Experience:</strong>
                                    Engage in real-world projects, internships, and practical training with information systems and data management.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Technology
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse p-3 mt-2" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <i class="ri-check-double-line text-success fa-lg"></i><strong> State-of-the-Art Facilities:</strong>
                                    Modern labs, high-tech equipment, and the latest software tools for advanced learning and research.
                                    <br><br>
                                    <i class="ri-check-double-line text-success fa-lg"></i><strong> Industry Partnerships:</strong>
                                    Collaborations with tech companies providing exposure to the industry and potential job placements.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Management
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <i class="ri-check-double-line text-success fa-lg"></i><strong> Leadership Skills:</strong>
                                    Develop essential management skills such as project management, strategic planning, and organizational behavior.
                                    <br><br>
                                    <i class="ri-check-double-line text-success fa-lg"></i><strong> Career Advancement:</strong>
                                    Success stories of alumni who have achieved significant career milestones and leadership positions.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <br><br><br>


{{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="fa-solid fa-arrow-up"></i></a> --}}
<div class="container mt-5">
    <div class="row mt-5 d-flex justify-content-center justify-content-md-between">
        <div class="col-md-3 col-6 text-center p-2">
            <div class="circle-design text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $studentCount }}" data-purecounter-duration="3" class="purecounter">{{ $studentCount }}</span>
                <p class="pure-text">Student</p>
            </div>
        </div>
        <div class="col-md-3 col-6 text-center p-2">
            <div class="circle-design text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $facultyCount }}" data-purecounter-duration="3" class="purecounter">{{ $facultyCount }}</span>
                <p class="pure-text">Faculty</p>
            </div>
        </div>
        <div class="col-md-3 col-6 text-center p-2">
            <div class="circle-design text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $alumniCount }}" data-purecounter-duration="3" class="purecounter">{{ $alumniCount }}</span>
                <p class="pure-text">Alumni</p>
            </div>
        </div>
        <div class="col-md-3 col-6 text-center p-2">
            <div class="circle-design text-center">
                <span data-purecounter-start="0" data-purecounter-end="{{ $scholarshipCount }}" data-purecounter-duration="3" class="purecounter">{{ $scholarshipCount }}</span>
                <p class="pure-text">Research</p>
            </div>
        </div>
    </div>
</div>



<br><br><br><br>

<section id="services" class="services section-bg text-left">
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title">
            <h2 style="color: #37517e;">Study Abroad</h2>
        </div>

        <div class="row text-center aboardpage">
            <div class="col-md-8 col-12 text-center mb-3">
                <img src="{{ asset('frontend/image/student2.png') }}" class="img-fluid scholarpic animate__animated animate__fadeInLeft" alt="Student">
            </div>

            <div class="col-md-4 text-center p-4 scholar">
                <h4 class="aboard animate__animated animate__fadeInRight mt-1">Facilities List</h4><br>

                <div class="link-list">
                    <a href="https://daffodilvarsity.edu.bd/scholarship" class="item1 d-block p-2 text-transition">
                        <i class="fa-regular fa-circle-check"></i> Scholarship
                    </a><br>
                    <a href="https://internship.daffodilvarsity.edu.bd/?app=home" class="item1 d-block p-2 text-transition">
                        <i class="fa-regular fa-circle-check"></i> Internship
                    </a><br>
                    <a href="https://daffodilvarsity.edu.bd/international/exchange-program" class="item1 d-block  text-transition">
                        <i class="fa-regular fa-circle-check"></i> Job
                    </a><br>
                    <a target="_blank" href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" class="bn5">Apply</a>
                </div>
            </div>

        </div>
    </div>
</section>

<br>
<br>
<br>

<div class="highlight mt-5">
    <h3 class="mt-2">Recent Scholarship</h3>
</div>


<div class="container mt-5">
    <div class="row justify-content-center">
        @foreach ($scholars as $scholar)
            <div class="col-md-3 p-2 ">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flip-custom">
                            <div class="child-div">
                                <div class="scholarship-label d-flex align-items-center" data-country="{{ $scholar->country }}">
                                    <span class="country-icon me-2"></span> <!-- Placeholder for the country icon -->
                                    <span class="country-label"></span> <!-- Placeholder for the country label -->
                                </div>
                                <div class="mb-4">
                                    <img src="{{ asset($scholar->image) }}" alt="Image" class="alumni-custom img-fluid">
                                </div>
                                <div class="text p-3">
                                    <h3 class="text-white">{{ $scholar->name }}</h3>
                                    <span class="text-white">{{ $scholar->country }}</span>
                                    <h4 class="congratulations-message text-warning" role="alert" aria-live="polite">
                                        <i class="fa-solid fa-hands-bubbles" aria-hidden="true"></i> Congratulations!
                                    </h4>
                                </div>
                            </div>
                        </div>

                        <div class="flip-card-back p-3 text-right" style="line-height: 22px;">
                            <h4 class="text-white">{{ $scholar->name }}</h4>
                            <hr>
                            <div class="p-1">
                                <span class="d-block"><i class="fa-solid fa-id-card"></i> Student ID: {{ $scholar->roll }}</span>
                                <span class="d-block"><i class="fa-solid fa-calendar-alt"></i> Batch: {{ $scholar->batch }}</span>
                                <span class="d-block"><i class="fa-solid fa-calendar-check"></i> Duration: Year: {{ $scholar->duration }}</span>
                                <br>
                                <span class="badge bg-light text-dark mt-1"><i class="fa-solid fa-envelope"></i> {{ $scholar->email }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<br>
<br>
<br>
<br>

<div id="cta" class="cta">
    <div class=" mt-5">
        <h1 class="fac_text text-center">Our Facilities</h1>

    </div>
    <div class="container aos-init aos-animate" data-aos="zoom-in">
      <div class="row">
        <div class="col-lg-12 text-center text-lg-start">
            {{-- grid-bg --}}
                   <div class="grid-container  mt-5" >
                    <div class="grid-item ">
                        <img src="{{asset('frontend/image/hunderd.png')}}" alt="Waiver">
                        <span>Waiver</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/laptop.png')}}" alt="Free Laptop">
                        <span>Free Laptop</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/hall.png')}}" alt="Hall">
                        <span>Hall</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/latest.png')}}" alt="Latest Curriculum">
                        <span>Latest Curriculum</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/innovation.png')}}" alt="Innovation">
                        <span>Innovation</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/clubimage.png')}}" alt="35+ Club">
                        <span>35+ Club</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/diubus.png')}}" alt="Transport">
                        <span>Transport</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/oncampus.png')}}" alt="DIU Recruitment">
                        <span>DIU Recruitment</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/e-library.png')}}" alt="E-Library">
                        <span>E-Library</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/Rover Scout.png')}}" alt="Rover Scout">
                        <span>Rover Scout</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/global network.png')}}" alt="Global Networking">
                        <span>Global Networking</span>
                    </div>
                    <div class="grid-item">
                        <img src="{{asset('frontend/image/life_insurance.png')}}" alt="Life Insurance">
                        <span>Life Insurance</span>
                    </div>
                </div>
        </div>
      </div>
    </div>
  </div>
<br>
<br>
<br>
<br>

<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
        <div class="section-title text-left">
            <h2 class=" service_head">Service <i class="fa-solid fa-universal-access"></i></h2>
            <p class="text-dark m-3">Our service 24 hours open for our Student</p>
            <div class="row ">
                @foreach ($services as $service)
                <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate p-2" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon-box avatar-container" onclick="toggleMenu()">
                        <img src="{{asset($service->image)}}" class="card-img-top img-decorate avatar-image" alt="Blc">
                        <h4><a target="_blank" href="{{ $service->link}}" class="btn btn-outline-dark  mt-3">{{ $service->link_name}}</a></h4>
                    <p>{{ $service->description}}
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
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





  <div class="container-fluid bg-light py-5">
    <!-- Expertise Section -->
    <div class="row justify-content-center text-center">
        <div class="col-lg-10 col-md-12">
            <div class="expertise-section p-5 rounded shadow-lg text-white">
                <div class="section-title">
                    <h2>Specialist</h2>
                    <p class="text-dark">Nowadays, make your bright future with technology</p>
                </div>
                <div class="row">
                    <!-- Web Applications -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="expertise-item">
                            <div class="expertise-icon"><i class="fas fa-desktop"></i></div>
                            <h4 class="expertise-title">Web Development</h4>
                            <p class="expertise-desc">Build cool websites and apps, and shape the future of the internet with in-demand tech skills!</p>
                        </div>
                    </div>
                    <!-- Mobile Applications -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="expertise-item ">
                            <div class="expertise-icon"><i class="fas fa-mobile-alt"></i></div>
                            <h4 class="expertise-title">Mobile Applications</h4>
                            <p class="expertise-desc">Create the next hit mobile app and change the world with your innovative ideas!</p>
                        </div>
                    </div>
                    <!-- Business & Management -->
                    <div class="col-md-6 col-lg-4 mb-4">
                        <div class="expertise-item">
                            <div class="expertise-icon"><i class="fas fa-briefcase"></i></div>
                            <h4 class="expertise-title">Business & Management</h4>
                            <p class="expertise-desc">Master leadership and business skills to become a future leader or entrepreneur!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- About Section -->
                <div class="row justify-content-center mt-5">
                    <div class="col-lg-10 col-md-12">
                        <div class="about-section p-5 bg-light rounded shadow-lg text-center text-dark">
                            <h3 class="about-title mb-3">About Us!</h3>
                            <p class="about-text lead">
                                A dedicated web developer focused on building efficient, user-friendly applications.
                                I combine modern design principles, emerging technologies, and meticulous attention
                                to detail to create impactful solutions for clients across industries.
                            </p>
                            <a href="{{ route('about') }}" class="btn btn-outline-dark mt-4">Get in Touch</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid mt-5">
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
<br>
<br>
<br>
<br>
<br>


<section id="services" class="services section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Experience</h2>
            <p>Gather practical experiences from each course</p>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box avatar-container" onclick="toggleMenu()">
                    <div class="icon "><i class="fa-solid fa-book-open-reader avatar-image "></i></div>
                    <h4><a href="#">Project Management</a></h4>
                    <p>Master the art of planning, executing, and overseeing successful projects.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box avatar-container" onclick="toggleMenu()">
                    <div class="icon"><i class="fa-solid fa-lightbulb avatar-image "></i></div>
                    <h4><a href="#">FinTech</a></h4>
                    <p>Explore the innovative intersection of finance and technology for a modern digital economy.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box avatar-container" onclick="toggleMenu()">
                    <div class="icon"><i class="fa-solid fa-circle-info avatar-image "></i></div>
                    <h4><a href="#">IT Support</a></h4>
                    <p>Build expertise in troubleshooting, maintaining, and managing IT systems effectively.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box avatar-container" onclick="toggleMenu()">
                    <div class="icon"><i class="fa-solid fa-person-rays avatar-image"></i></div>
                    <h4><a href="#">Human Resource</a></h4>
                    <p>Develop skills to manage, recruit, and enhance organizational talent strategically.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<br><br><br><br><br>


             <section id="contact" class="contact">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                  <div class="section-title">
                    <h2>Contact</h2>
                    <p>
                        Connect with our department for inquiries, support, or collaboration opportunities. We are here to assist with academic, administrative, or program-specific concerns.
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd" style="border: 0; width: 100%; height: 290px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                      </div>
                    </div>

                    <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

                        @if (session('success')){
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                             }
                        @endif
                        @if (session('error')){
                            <div class="alert alert-success">
                                {{session('error')}}
                            </div>
                             }
                        @endif

                        <form action="{{ route('notifications.store') }}" method="post" role="form" class="php-email-form">
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
                                <div class="alert alert-success d-none sent-message">Your message has been sent. Thank you!</div>
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
