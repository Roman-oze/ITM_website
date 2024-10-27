



@extends('layout.app')

@section('content')
<section id="hero" class="d-flex align-items-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <h1 class="text-white-50 welcome">Welcome!</h1>
                <h2>{{ $hero->title }}</h2>
                <h1>
                    {{ $hero->description }}
                    <img src="{{ asset('frontend/image/verifi.png') }}" class="verify" alt="Verification Icon">
                </h1>
                <div class="d-flex justify-content-center justify-content-lg-start">
                    <a href="{{ $hero->link }}" class="btn-get-started scrollto bn5">
                        <i class="fa-solid fa-house-circle-check"></i> ITM Club
                    </a>
                </div>
            </div>
            <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <img src="{{ asset($hero->image) }}" class="img-fluid animated" alt="Hero Image">
            </div>
        </div>
    </div>
</section>

{{-- <section id="Feature" class="section-p1 " style="background-color: rgb(213, 217, 234);">
    <div class="container d-flex justify-content-evenly">
        <div class="fe-box ">
        <img src="{{asset('frontend/image/hunderd.png')}}" alt="" class="imgslide">
        <h6 class="btn1">Waiver</h6>
    </div>
    <div class="fe-box ">
        <img src="{{asset('frontend/image/laptop.png')}}" alt="" class="imgslide">
        <h6 class="btn2">Free Laptop</h6>
    </div>
    <div class="fe-box ">
        <img src="{{asset('frontend/image/hall.png')}}" alt="" class="imgslide">
        <h6 class="btn3">Hall</h6>
    </div>

    <div class="fe-box ">
        <img src="{{asset('frontend/image/innovation.png')}}" alt="" class="imgslide">
        <h6 class="btn4">Innovation</h6>
    </div>
    <div class="fe-box ">
        <img src="{{asset('frontend/image/clubimage.png')}}" alt="" class="imgslide">
        <h6 class="btn5">35+ Club</h6>
    </div>
    <div class="fe-box ">
        <img src="{{asset('frontend/image/life_insurance.png')}}" alt="" class="imgslide">
        <h6 class="btn6">Life-Insurance</h6>
    </div>
    <div class="fe-box ">
        <img src="{{asset('frontend/image/buss.png')}}" alt="" class="imgslide">
        <h6 class="btn1">Transport</h6>
    </div>
    </div>
</section> --}}

{{--
<div class="">
    <button class="btn btn-block" onclick="openForm()"> <i class="fa-solid fa-comment-dots  fa-4x  open-button"></i></button>
 <div class="chat-popup" id="myForm">
    <form action="{{route('viwer.store')}}" method="POST" class="form-container">
         @csrf
         <h1>Chat</h1>

           <label for="msg"><b>Message</b></label>
          <textarea  placeholder="Type message.." name="message" required></textarea>

         <button type="submit" class="btn btn-outline-success"><i class="fa-regular fa-paper-plane fa-2x plane"></i></button>
         <button type="button" class="btn cancel" onclick="closeForm()"><i class="fa-solid fa-circle-xmark text-danger  fa-3x"></i></button>
    </form>
 </div>
 </div> --}}

 <div class="live-chat-container" id="liveChatPopup">
    <div class="live-chat-header">
        <h4>Chat with Us</h4>
        <button type="button" onclick="closeLiveChat()">X</button>
    </div>
    <div class="live-chat-body">
        <div class="live-chat-messages" id="liveChatMessages">
            <!-- Messages will be appended here -->
        </div>
        <form action="{{ route('viwer.store') }}" method="POST" class="form-container">
            @csrf
            <textarea id="liveChatInput" name="message" placeholder="Type your message..."></textarea>
            {{-- <button type="submit" class="live-chat-send-button">Send</button> --}}
            <button type="submit" class="btn btn-outline-success"><i class="fa-regular fa-paper-plane fa-2x plane"></i></button>

        </form>
    </div>
</div>

<div class="chat-container">
    <div class="chat-header">
        <h2>Live Chat</h2>
        <button id="close-chat">X</button>
    </div>
    <div class="chat-box" id="chat-box">
        <div class="messages" id="messages"></div>
    </div>
    <div class="chat-input">
        <input type="text" id="liveChatInput" placeholder="Type your message..." />
        <button id="send-btn">Send</button>
    </div>
</div>

<!-- Chat icon -->
{{-- <i class="fa-solid fa-comments  fa-4x  live-chat-icon" onclick="openLiveChat()"></i> --}}

 {{-- collapse sidebar --}}
 <div color="#ffffff" class="sc-kgUAyh bIyeJp"><svg width="29" height="30" viewBox="0 0 29 30" fill="none" onclick="openLiveChat()" xmlns="http://www.w3.org/2000/svg"><path d="M20.5002 10.1999H22.9002C24.2257 10.1999 25.3002 11.2744 25.3002 12.5999V19.7999C25.3002 21.1254 24.2257 22.1999 22.9002 22.1999H20.5002V26.9999L15.7002 22.1999H10.9002C10.2375 22.1999 9.63745 21.9313 9.20314 21.497M9.20314 21.497L13.3002 17.3999H18.1002C19.4257 17.3999 20.5002 16.3254 20.5002 14.9999V7.7999C20.5002 6.47442 19.4257 5.3999 18.1002 5.3999H6.1002C4.77471 5.3999 3.7002 6.47442 3.7002 7.7999V14.9999C3.7002 16.3254 4.77471 17.3999 6.1002 17.3999H8.5002V22.1999L9.20314 21.497Z" stroke="#ffffff" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg></div>

<button class="open-button" onclick="openForm()"><i class="fa-solid fa-arrow-right-arrow-left p-1 text-white"></i></button>

<div class="calpse-bar p-2" id="myForm">
<form action="" method="POST" class="form-container">

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
                            <div class="dash-count bg-color  text-center p-1">
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
</form>
</div>
</div>



<section id="Feature" class="section-p1 " style="background-color: rgb(213, 217, 234);">
    <div class="inner ">
        <div class="col">
            <img src="{{asset('frontend/image/hunderd.png')}}" alt="" class="imgslide">
            <p class="col-btn">Waiver</p>
        </div>
        <div class="col">
            <img src="{{asset('frontend/image/laptop.png')}}" alt="" class="imgslide">
            <p class="col-btn">Free Laptop</p>
        </div>
        <div class="col">
            <img src="{{asset('frontend/image/hall.png')}}" alt="" class="imgslide">
            <p class="col-btn">Hall</p>
        </div>
        <div class="col">
            <img src="{{asset('frontend/image/innovation.png')}}" alt="" class="imgslide">
            <p class="col-btn">innovation</p>
        </div>
        <div class="col">
            <img src="{{asset('frontend/image/clubimage.png')}}" alt="" class="imgslide">
            <p class="col-btn">
                <a href="{{route('club')}}" class="text-white">Club</a>
            </p>
        </div>
        <div class="col">
            <img src="{{asset('frontend/image/buss.png')}}" alt="" class="imgslide">
            <p class="col-btn">Transport</p>
        </div>
        </div>
</section>



<section id="services" class="services section-bg text-left" >
    <div class="container aos-init aos-animate text-left" data-aos="fade-up">
      <div class="section-title ">
        <h3 class=" " style="color: #37517e;">Features</h3>
        <h2 class="text-muted why"> Why Choose ITM</h2>
            <div class="row p-3">
                @foreach ($features as $feature)
                    <div class="col-md-3 p-3">
                        <div class="flip-card flip-shadow">
                            <div class="flip-card-inner">
                                <div class="flip-card-front flip-custom-2" style="background: #37517e;">
                                    <div class="child-div-2" style="background: rgb(237, 240, 240);">
                                        <img src="{{ asset($feature->image) }}" alt="Feature Image" class="img-fluid-custom"><br>
                                        <h4 class="text-white p-2">{{ $feature->title }}</h4>
                                    </div>
                                </div>
                                <div class="flip-card-back p-3 text-left" style="line-height:22px;">
                                    <h5>{{ $feature->title }}</h5>
                                    <hr>
                                    <p style="font-size: small">{{ $feature->description }}</p>
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






 <div class="container-fluid mt-5 p-4">

     <div class="section-title">
         <h2><i class="fa-brands fa-elementor "></i> Department of  I T M</h2>
         </div>


        <div class="row justify-content-center   mt-5 ">

        {{-- <div class="row justify-content-center covepage  mt-5 "> --}}
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image: url('/public/frontend/image/diugate.jpg);">
                    <div class="video justify-content-center">
                        {{-- <a href="https://www.facebook.com/share/v/PRtyYekzGpyqkezy/" class="icon-video popup-vimeo d-flex justify-content-center align-items-center"> --}}
                            {{-- <image src="{{asset('frontend/image/student4.png')}}" class="img-fluid-custom manual-shadow "  > --}}
                                <img src="{{asset('frontend/image/why-us.png')}}" class="image1 img-fluid-custom      animate__animated animate__fadeInDown">

                                {{-- <iframe width="640" height="450" src="#">
                                </iframe> --}}

                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6  p-3 itm-card">



                {{-- <h2 class="mb-4 text-warning itm p-2">Information Technology and Management (ITM)</h4> --}}
                    <h1 class="text-white itm">Information Technology and Management (ITM)</h1>

                     <div class="content">
            <h3>Why Choose Us?</h3>
            <p class="why_itm">
               "Education is the most powerful weapon which you can use to change the world."
                 provides you a unique opportunity to have BSc. in Information Technology and Management.
                 In the field of Information Technology and Management, the job possibilities are almost endless.
                 "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on cloud...
            </p>
          </div>

                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                          <h2 class="accordion-header">
                            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Information
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse show mt-2" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <i class="ri-check-double-line text-success fa-lg"></i> <strong>"Innovative Curriculum: "</strong>
                           Our program integrates cutting-edge information technologies and prepares students for the latest industry trends
                           <br>
                           <br>
                           <i class="ri-check-double-line text-success fa-lg"></i> <strong>"Hands-On Experience:"</strong>
                          Engage in real-world projects, internships, and practical training with information systems and data management.
                          </div>
                        </div>
                        <div class="accordion-item ">
                          <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              Technology
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse p-3 mt-2" data-bs-parent="#accordionExample">
                            <div class="accordion-body  ">

                                <i class="ri-check-double-line text-success fa-lg"></i><strong>  "State-of-the-Art Facilities":</strong>
                                {{-- <a target="_blank" class="down-btn" href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Course List  <i class="fa-solid fa-circle-down conic fa-lg"></i></a> --}}
                                Modern labs, high-tech equipment, and the latest software tools for advanced learning and research.
                                <br>
                                <br>
                                <i class="ri-check-double-line text-success fa-lg"></i><strong>  "Industry Partnerships: "</strong>
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
                                {{-- <div class="d-flex justify-content-evenly">
                                    <a target="_blank" href="https://www.facebook.com/islamfull.5" class="face"><i class="fa-brands fa-facebook"></i> Facebook </a></i>
                                     <br>
                                     <br>
                                    <a target="_blank" href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i>
                                  </div> --}}
                                  <i class="ri-check-double-line text-success fa-lg"></i><strong>" Leadership Skills: "</strong>
                                    Develop essential management skills such as project management, strategic planning, and organizational behavior.
                                    <br>
                                <br>
                                <i class="ri-check-double-line text-success fa-lg"></i><strong>"Career Advancement: "</strong>
                                     Success stories of alumni who have achieved significant career milestones and leadership positions.
                                </div>
                          </div>
                        </div>
                      </div>

        </div>
    </div>
    </div>
</div>
</div>
</div>
<br>
<br>
<br>

{{-- <a href="#" class="back-to-top d-flex align-items-center justify-content-center active"><i class="fa-solid fa-arrow-up"></i></a> --}}
<div class="container mt-5">
    <div class="row mt-5 d-flex justify-content-between">

        <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3 container_design text-center p-5">
                <span data-purecounter-start="0" data-purecounter-end="{{ $studentCount }}" data-purecounter-duration="0" class="purecounter">{{ $studentCount }}</span>
                <p class="pure-text">Student</p>
            </div>
        </div>

        <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3 container_design text-center p-5">
                <span data-purecounter-start="0" data-purecounter-end="{{ $facultyCount }}" data-purecounter-duration="0" class="purecounter">{{ $facultyCount }}</span>
                <p class="pure-text">Faculty</p>
            </div>
        </div>

        <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3 container_design text-center p-5">
                <span data-purecounter-start="0" data-purecounter-end="{{ $alumniCount }}" data-purecounter-duration="0" class="purecounter">{{ $alumniCount }}</span>
                <p class="pure-text">Alumni</p>
            </div>
        </div>

        <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3 container_design text-center p-5">
                <span data-purecounter-start="0" data-purecounter-end="{{ $scholarshipCount }}" data-purecounter-duration="0" class="purecounter">{{ $scholarshipCount }}</span>
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
            <div class="col-md-8 text-center mb-3">
                <img src="{{ asset('frontend/image/student2.png') }}" class="scholarpic animate__animated animate__fadeInLeft" alt="Student">
            </div>

            <div class="col-md-4 text-center p-4 scholar">
                <h4 class="aboard animate__animated animate__fadeInRight mt-1">Facilities List</h4><br>

                <div class="link-list">
                    <a href="https://daffodilvarsity.edu.bd/scholarship" class="item1 d-block p-2 text-transition">
                        <i class="fa-solid fa-check-double text-info"></i> Scholarship
                    </a><br>
                    <a href="https://internship.daffodilvarsity.edu.bd/?app=home" class="item1 d-block p-2 text-transition">
                        <i class="fa-solid fa-check-double text-info"></i> Internship
                    </a><br>
                    <a href="https://daffodilvarsity.edu.bd/international/exchange-program" class="item1 d-block p-2 text-transition">
                        <i class="fa-solid fa-check-double text-info"></i> Job
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
    <h2 class="text-blue highlight">Recent Scholarship</h2>
    <div>
        <span class="elementor-divider-separator"></span>
    </div>
</div>

<div class="container-fluid mt-5">
    <div class="row d-flex p-5">
        @foreach ($scholars as $scholar)
            <div class="col-md-3 p-2">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front flip-custom">
                            <div class="child-div">
                                <div class="mb-4">
                                    <img src="{{ asset($scholar->image) }}" alt="Image" class="alumni-custom">
                                </div>
                                <div class="text p-1">
                                    <h2 class="text-white">{{ $scholar->name }}</h2>
                                    <p class="h5 text-white-50">{{ $scholar->country }}</p>
                                    <h4 class="text-warning"><i class="fa-solid fa-hands-bubbles"></i> Congratulations!</h4>
                                </div>
                            </div>
                        </div>
                        <div class="flip-card-back text-left" style="line-height:22px;">
                            <h4>{{ $scholar->name }}</h4>
                            <hr>
                            <p>Student ID: {{ $scholar->roll }}</p>
                            <p>Batch: {{ $scholar->batch }}</p>
                            <p>Duration: {{ $scholar->duration }}</p>
                            <p>Email: <br>{{ $scholar->email }}</p>
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
                    <div class="icon-box">
                        <img src="{{asset($service->image)}}" class="card-img-top img-decorate " alt="Blc">
                        <h4><a target="_blank" href="{{ $service->link}}" class="btn btn-outline-info text-dark mt-3">{{ $service->link_name}}</a></h4>
                    <p>{{ $service->description}}
                    </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section id="cta" class="cta">
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
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="section-title">
            <h2>Experience</h2>
            <p>Gather practical experiences from each course</p>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-book-open-reader"></i></div>
                    <h4><a href="#">Leadership</a></h4>
                    <p>I know how to lead in the organization.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                    <h4><a href="#">FinTech</a></h4>
                    <p>When suddenly needing to innovate something.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                    <h4><a href="#">IT Support</a></h4>
                    <p>Technical tools and techniques that I use on a daily basis.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-person-rays"></i></div>
                    <h4><a href="#">Human Resource</a></h4>
                    <p>Talent, performance, and innovation for each organization.</p>
                </div>
            </div>
        </div>
    </div>
</section>

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
<div class="section-border" data-controller="SectionDivider" style="clip-path: url(#section-divider-64ab4a69a3c6fa011e19653c);" data-controllers-bound="SectionDivider">
    <div class="section-background"></div>
</div>
<div class="section-title">
    <h2>Specialist</h2>
    <p>Nowaday make your bright future with technology</p>
</div>

<div class="container-fluid mt-3">
    <div class="row text-center">
        <div class="col-md-12 col-sm-12 text-center rounded">
            <div class="rounded-3">
                <p class="listitem1 p-2 text-transition">
                    <i class="fa-regular fa-circle-check text-white"></i> Web Application
                </p><br>
                <p class="listitem1 p-2 text-transition">
                    <i class="fa-regular fa-circle-check text-white"></i> Mobile Application
                </p><br>
                <p class="listitem1 p-2 text-transition">
                    <i class="fa-regular fa-circle-check text-white"></i> Business & Management
                </p><br>
            </div>
        </div>
    </div>

    <div class="row p-2">
        <div class="col-md-12 col-sm-12 text-center rounded text-box mt-5">
            <p class="smooth-text text-dark text-200">
                As a web developer, I excel in creating user-friendly interfaces and efficient code. I specialize in crafting responsive designs, optimizing performance, and leveraging emerging technologies. With a dedication to innovation and ongoing learning, I deliver impactful solutions that enhance online experiences and propel business growth.
            </p>
        </div>
    </div>
</div>

<section id="services" class="services section-bg">
    <div class="container aos-init aos-animate" data-aos="fade-up">
        <div class="row">
            <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-laptop-code"></i></div>
                    <h4><a href="">Web application</a></h4>
                    <p>I know how to lead in the organizational context.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                    <h4><a href="">Mobile application</a></h4>
                    <p>When suddenly need to innovate something.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                    <h4><a href="">Management</a></h4>
                    <p>Technical tools and techniques that I use on a daily basis.</p>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="fa-solid fa-business-time"></i></div>
                    <h4><a href="">Business</a></h4>
                    <p>Talent, performance, and innovation for each organization.</p>
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
          Ready to take your financial management to the next level? Contact
          us today for personalized consultation and discover how our
          expertise can empower your business growth. Let's navigate your
          financial journey together towards success.
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
          <form action="{{route('contact_store')}}" method="post" role="form" class="php-email-form">
            @csrf
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required="">
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required="">
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required="">
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required=""></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">
                Your message has been sent. Thank you!
              </div>
            </div>
            <div class="text-center">
              <button type="submit"><i class="fa-regular fa-paper-plane fa-lg plane text-white"></i> Send Message</button>
            </div>
          </form>


        </div>
      </div>
    </div>
  </section>



@endsection
