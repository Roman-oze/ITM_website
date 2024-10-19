
{{-- @push('head')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
@endpush --}}



@extends('layout.app')


{{-- <div class="container-fluid  mt-5">
    <div class="row ">
      <div class="col-md-6 intro">
        <div class="top">
          <h1 class="text-white-50">Welcome!</h1>
         <h3 class="department right aos-init aos-animate">Department of</h3>
         <!-- <h1>Web Developer</h1>    -->

         <div  class="  text-white animate__animated animate__fadeInLeft h2">
            Information Technology & Management<img src="{{asset('frontend/image/verifi.png')}}" class="verify">
          </div>


        <br>
        <br>
        <br>

        </div>
        <div class="club animate__animated animate__bounce animate__delay-2s">
            <a target="_blank" href="{{route('club')}}" class="bn5  "><i class="fa-solid fa-house-circle-check "></i>  ITM Club  </a>
        </div>
      </div>

      <div class="col-md-6  ">
        <div class="cover-border text-center ">

        <img src="{{asset('frontend/image/student3.png')}}" class="image1 img-fluid-custom  animate__animated animate__fadeInDown">

      </div>
      </div>

    </div>
</div> --}}

   {{-- <button class="open-button" onclick="openForm()"><img src="{{asset('frontend/image/logo.png')}}" alt="" class="pop-img "></button> --}}

    {{-- <button type="submit" ><img class="pop-img open-button" src="{{asset('frontend/image/ITM.jpg')}}" alt="" onclick="openForm()" ></button> --}}

   {{-- <button class="" onclick="openForm()"> <i class="fa-regular fa-comment-dots text-success fa-4x open-button"></i></button> --}}



@section('content')


{{-- <section id="main-10">
    <div id="left-10">
        <div class="headline">
        <h1 class="text-white-50 welcome">Welcome!</h1>
        <h3 class=" department aos-init aos-animate">Department of</h3>
        <div  class="itm  text-white animate__animated animate__fadeInLeft h2">
           Information Technology & Management<img src="{{asset('frontend/image/verifi.png')}}" class="verify">
         </div>
         </div>


         <div class="club animate__animated animate__bounce animate__delay-2s">
            <a target="_blank" href="{{route('club')}}" class="bn5  "><i class="fa-solid fa-house-circle-check "></i>  ITM Club  </a>
        </div>

    </div>
    <div id="right-10">
        <img src="{{asset('frontend/image/student3.png')}}" class="coverimage  image-shadow img-fluid-custom  animate">


        <div class="">
            <button class="btn btn-block" onclick="openForm()"> <i class="fa-solid fa-comment-dots text-white fa-4x open-button"></i></button>
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
         </div>
    </div>
</section> --}}
<section id="hero" class="d-flex align-items-center">
    <div class="container">

      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
            <h1 class="text-white-50 welcome">Welcome!</h1>

          <h2>{{ $hero->title }}</h2>

          <h1>{{ $hero->description }}<img src="{{asset('frontend/image/verifi.png')}}" class="verify"></h1>

          {{-- <div class="d-flex justify-content-center justify-content-lg-start">
            <div class=" animate__animated animate__bounce animate__delay-2s">
                <a target="_blank" href="{{route('club')}}" class="bn5  "><i class="fa-solid fa-house-circle-check "></i>  ITM Club  </a>
            </div>
          </div> --}}

          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="{{ $hero->link }}" class="btn-get-started scrollto bn5"><i class="fa-solid fa-house-circle-check "></i>  ITM Club  </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
          <img src="{{asset($hero->image)}}" class="img-fluid animated" alt="">


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
    {{-- <div class="row text-center mt-5 p-5">



        <h3 class=" " style="color: #37517e;">Features</h3>
        <h2 class="text-muted why"> Why Choose ITM</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h2 class=" section-title" style="color: #37517e;">Special Course </h2>
   </div> --}}
    <div class="row p-3">
              <div class="col-md-3 p-3 ">
                <div class="flip-card flip-shadow ">
                 <div class="flip-card-inner ">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/web.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Web Developer</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h5>web development</h5>
                         <hr>
                         <p style="font-size: small">Build beautiful, functional websites that inspire, inform, and connect.
                            With every line of code, you're shaping the digital world. \
                            Let your creativity and technical skills come together to create something truly remarkable.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/app.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Mobile App Developer</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h5>Mobile App Developer</h5>
                         <hr>
                         <p style="font-size: small">mobile apps can be incredibly rewarding,
                            offering the opportunity to create innovative solutions and reach a global audience.
                           chance to solve real-world problems, contribute to technological advancements,
                             and achieve professional growth.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/business.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white feature_title p-2">Entrepreneur</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h5 >Entrepreneur</h5>
                         <hr>
                         <p style="font-size: small">A person who organizes and operates a business,
                            taking on financial risks in hopes of profit.
                            They are often characterized by their innovative ideas,
                            risk-taking spirit, and determination to succeed.
                         </p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
             <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/cybersec.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Cyber Security</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p- text-left " style="line-height:22px;">
                         <h5>Cyber Security</h5>
                         <hr>
                         <p style="font-size: small">cybersecurity is to protect computer systems, networks, and data from cyberattacks. This involves safeguarding information from unauthorized access, modification, or deletion, and preventing disruptions to services. In essence, cybersecurity aims to ensure the confidentiality, integrity, and availability of digital assets.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
               </div>




{{--
            <div class="col-md-3 p-2">
            <div class="custom-box img-fluid-custom">
                <img src="{{asset('frontend/image/app.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Mobile App Developer</h4>
                    <a href="#" class="btn btn-outline-light">view</a>
              </div>
              </div> --}}

            {{-- <div class="col-md-3 p-2">
            <div class="custom-box img-fluid-custom">
                <img src="{{asset('frontend/image/business.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Entrepreneur</h4>
                    <a href="#" class="btn btn-outline-light">view</a>
              </div>
              </div>

            <div class="col-md-3 p-2">
            <div class="custom-box img-fluid-custom">
                <img src="{{asset('frontend/image/cybersec.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Cyber Security</h4>
                    <a href="#" class="btn btn-outline-light">view</a>
              </div>
            </div> --}}


    <div class="row p-3">
              <div class="col-md-3 p-3 ">
                <div class="flip-card flip-shadow ">
                 <div class="flip-card-inner ">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/HR.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Project Management</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                    <h5 style="text-white">Project Management</h5>
                    <hr>
                         <p style="font-size: small">What is project management?
                            Definition
                            Project management is the application of processes, methods, skills, knowledge and experience to achieve specific project objectives according to the project acceptance criteria within agreed parameters.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/MIS.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">M I S</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                    <h5 style="text-white">Management Information</h5>
                    <hr>
                         <p style="font-size: small">(MIS) uses technology to collect, process, and analyze data to help businesses make better decisions. It improves efficiency, communication, and competitiveness. Examples include CRM, ERP, SCM, and BI tools.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/database.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Database Management</h4>

                 </div>
                 </div>
                   <div class="flip-card-back text-left " style="line-height:22px;">
                    <h5 style="text-white">Database Management</h5>
                    <hr>
                         <p style="font-size: small">Organizing data efficiently. Key parts: modeling, storage, retrieval, security. Types: relational, NoSQL, object-oriented. Benefits: accuracy, decisions, efficiency, security, scalability, collaboration, analysis, integration, compliance. Popular DBMS: MySQL, Oracle, SQL Server, MongoDB, </p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                    <div class="flip-card-front flip-custom-2 " style="background: #37517e;">
                        <div class="child-div-2 " style="background: rgb(237, 240, 240)";>
                <img src="{{asset('frontend/image/sqa.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white p-2">Software Quality Testing</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p- text-left " style="line-height:22px;">
                    <h5 style="text-white ">Software Quality Testing</h5>
                    <hr>
                         <p style="font-size: small">Evaluating software to ensure it meets requirements. Includes planning, design, execution, tracking, and reporting. Types: unit, integration, system, acceptance. Benefits: improved quality, reduced costs, customer satisfaction, reliability. SQT is crucial for high-quality software.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
               </div>
               </div>
               </div>
               </div>
</section>





 <div class="container-fluid mt-5 p-4">

     <div class="section-title">
         <h2><i class="fa-brands fa-elementor "></i> Department of  I T M</h2>
         </div>
         {{-- <div class="rounded text-box mt-5"> --}}
            {{-- <h2 class="fac_text text-center text-dark"><i class="fa-brands fa-elementor "></i>Department of  I T M</h2> --}}
        {{-- </div> --}}
        {{-- <div class="content">
            <h3>Why Choose Us?</h3>
            <p>
                <strong>"Education is the most powerful weapon which you can use to change the world."</strong>
                 provides you a unique opportunity to have BSc. in Information Technology and Management.
                 In the field of Information Technology and Management, the job possibilities are almost endless.
                 "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on cloud...
            </p>
          </div> --}}

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

                    {{-- <p class="text-white-50 heading_section"> provides you a unique opportunity to have BSc. in Information Technology and Management. In the field of Information Technology and Management, the job possibilities are almost endless. "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on cloud...<p>

                    <br>
                    <br>
                        <a target="_blank" class="down-btn" href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Course List  <i class="fa-solid fa-circle-down conic fa-lg"></i></a>
                        <br>
                   <div class="fb">
                      <a target="_blank" href="https://www.facebook.com/islamfull.5" class="face"><i class="fa-brands fa-facebook"></i> Facebook </a></i>
                       <br>
                       <br>
                      <a target="_blank" href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i>
                    </div> --}}
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
        <div class="row mt-5  d-flex justify-space-bewteen">
          <div class="col-md-3 col-6  text-center p-2 ">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="549" data-purecounter-duration="0" class="purecounter">{{$studentCount}}</span>
            <p class="pure-text">Student</p>
          </div>
          </div>
          <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="{{$facultyCount}}" data-purecounter-duration="0" class="purecounter">50</span>
            <p class="pure-text" >Faculty</p>
          </div>
          </div>
          <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="{{$alumniCount}}" data-purecounter-duration="0" class="purecounter">40</span>
            <p class="pure-text">Alumni</p>
          </div>
          </div>

          <div class="col-md-3 col-6 text-center p-2">
          <div class="border rounded-3 container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="{{$scholarshipCount}}" data-purecounter-duration="0" class="purecounter">29</span>
            <p class="pure-text">Research</p>
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
      <div class="section-title ">
        <h2 class=" " style="color: #37517e;">Study Abroad</h2>
        {{-- <h2 class="text-muted why"> Why Choose ITM</h2>
<div class="mt-5">
    <h1 class="about_itm text-center text-white">Study Abroad</h1>
</div> --}}


    <div class="row text-center aboardpage">
        <div class="col-md-8 text-center mb-3 ">
            <img src="{{asset('frontend/image/student2.png')}}" class="scholarpic animate__animated animate__fadeInLeft " alt="Student">
            </div>
            <div class="col-md-4 text-center p-4 scholar">
                <h4 class="aboard animate__animated animate__fadeInRight mt-1">Facilities List</h4><br>

                <div class="link-list" >
            <a href="https://daffodilvarsity.edu.bd/scholarship" class="item1 d-block p-2 text-transition"><i class="fa-solid fa-check-double text-info"></i> Scholarship</a><br>
            <a href="https://internship.daffodilvarsity.edu.bd/?app=home" class="item1 d-block p-2 text-transition"><i class="fa-solid fa-check-double text-info"></i> Internship</a><br>
            <a href="https://daffodilvarsity.edu.bd/international/exchange-program" class="item1 d-block p-2 text-transition"><i class="fa-solid fa-check-double text-info"></i> Job</a><br>
            <a target="_blank" href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" class="bn5">Apply</a>
        </div>
        </div>
    </div>
</div>
</div>
</div>
</section>
{{-- <div class="container feature-section ">
    <div class="row align-items-center aboardpage">
      <div class="col-md-6 text-center p-3">
        <img src="{{asset('frontend/image/student2.png')}}" class="scholarpic animate__animated animate__fadeInLeft " alt="Student">
    </div>
      <div class="col-md-6 feature-content p-3 scholar">
        <h4 class="aboard animate__animated animate__fadeInRight">Facilities List</h4><br>
        <a href="https://daffodilvarsity.edu.bd/scholarship" class="item1 d-block p-1 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Scholarship</a><br>
        <a href="https://internship.daffodilvarsity.edu.bd/?app=home" class="item2 d-block p-1 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Internship</a><br>
        <a href="https://daffodilvarsity.edu.bd/international/exchange-program" class="item3 d-block p-1 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Job</a><br>
        <a target="_blank" href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" class="apply-btn p-1">Apply</a>
      </div>
    </div>
  </div> --}}


{{-- <div class="container feature-section">
    <div class="row align-items-center">
      <div class="col-md-6 text-center">
        <img src="{{asset('frontend/image/student2.png')}}" class="scholarpic animate__animated animate__fadeInLeft " alt="Student">
      </div>
      <div class="col-md-6 feature-content">
        <h2 class="aboard">Facilities List</h2>
        <button class="btn btn-primary btn-lg">Scholarship</button>
        <button class="btn btn-warning btn-lg">Internship</button>
        <button class="btn btn-danger btn-lg">Job</button>
        <button class="bn5">Apply</button>
      </div>
    </div>
  </div> --}}
<br>
<br>
<br>

<div class="highlight mt-5">
 <h2 class="text-blue highlight">Recent Scholarship</h2>
 <div class=" ">
     <span class="elementor-divider-separator"></span>
 </div>
</div>



<div class="container-fluid mt-5 ">
    <div class="row d-flex p-5">

@foreach ($scholars as $scholar)
      <div class="col-md-3 p-2">
      <div class="flip-card  ">
       <div class="flip-card-inner">
         <div class="flip-card-front flip-custom">
   <div class="child-div">
           <div class="mb-4 "><img src="{{asset($scholar->image)}}" alt="Image" class="alumni-custom"></div>
           <div class="text p-1">
           <h2 class="text-white">{{$scholar->name}}</h2>
           <p class="h5 text-white-50">{{$scholar->country}}</p>
           <h4 class="text-warning"><i class="fa-solid fa-hands-bubbles"></i> Congratulations!</h4>
       </div>
       </div>
       </div>
         <div class="flip-card-back text-left" style="line-height:22px;">
               <h4>{{$scholar->name}}</h4>
               <hr>


               <p>Student ID:{{$scholar->roll}}</p>
               <p>Batch:{{$scholar->batch}}</p>
               <p> Duration:{{$scholar->duration}}</p>
               <p>Email: <br>{{$scholar->email}}</p>

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
        {{-- <div class="col-lg-3 cta-btn-container text-center">
          <a class="cta-btn align-middle" href="#contact">Call To Action</a>
        </div> --}}
      </div>
    </div>
  </div>

                <br>
                <br>
                <br>
                <br>





            {{-- <div class="row text-center facilty">
               <div class="col-md-3 border ">
               <div>
                <img src="{{asset('frontend/image/blc.png')}}" class="img-decorate">
               </div>
               <div>
                <a target="_blank" href="https://elearn.daffodilvarsity.edu.bd/" class="view">BLC</a>
               </div>
               <div>
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>
               </div>
               </div>
               <div class="col-md-3 border ">
               <div>
                <img src="{{asset('frontend/image/portal.png')}}"class=" img-decorate">
            </div>
               <div>
                <a target="_blank" href="http://studentportal.diu.edu.bd/" class="view">Student Portal</a>
            </div>
               <div>
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

               </div>
               </div>


               <div class="col-md-3 border ">
               <div>
                <img src="{{asset('frontend/image/blue-bus-png.png')}}"class=" img-decorate">
            </div>
               <div>
                <a target="_blank" href="https://daffodilvarsity.edu.bd/article/transport" class="view  ">Transport</a>
            </div>
               <div>
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

               </div>
               </div>

               <div class="col-md-3 border ">
               <div>
                <img src="{{asset('frontend/image/1card.png')}}"  class=" img-decorate">
            </div>
               <div>
                <a target="_blank" href="https://1card.com.bd/ " class="view ">1Card</a>
            </div>
               <div>
                <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

               </div>
               </div>
               </div> --}}





            <section id="services" class="services section-bg text-left" >
                <div class="container aos-init aos-animate text-left" data-aos="fade-up">

                  <div class="section-title text-left">
                    <h2 class=" service_head">Service <i class="fa-solid fa-universal-access"></i></h2>
                    <p class="text-dark m-3">Our service 24 hours open for our Student</p>
                    <div class="row ">

                        {{-- <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">                            <div class="card bg-black custom-box img-fluid-custom">
                                <div class="item-bg">
                                <img src="{{asset('frontend/image/blc.png')}}" class="card-img-top img-decorate " alt="Blc">
                            </div>
                              <div class="card-content p-2">
                                <a target="_blank" href="https://elearn.daffodilvarsity.edu.bd/" class="btn btn-outline-info btn-block mt-3">Blc</a>
                                    <p class="text-white-50 p-2 service_text">course enrollment get feature  study roadmap with quiz assignments presentations</p>
                              </div>
                            </div>
                           </div> --}}
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


               {{-- <div class="container-fluid fourbg ">
                <div class="row text-center bg-light">

                     <div class="col-md-3 ">
                         <img src="{{asset('frontend/image/java.png')}}" class="imgslide transition">
                     </div>
                           <div class="col-md-3 ">
                               <img src="{{asset('frontend/image/js0.png')}}" class="imgslide transition">
                           </div>
                     <div class="col-md-3">
                         <img src="{{asset('frontend/image/node.png')}}" class="imgslide transition">
                     </div>
                           <div class="col-md-3">
                             <img src="{{asset('frontend/image/Flutter-App.png')}}" class="imgslide transition">
                           </div>

                 </div>
             </div> --}}

             {{-- <section id="academic">
                <div class="text-center mt-5">
                  <h2 class="text-warning p-1">Experience</h2>
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                    <div class="divider-custom-line"></div>

                </div>
                <p class="text-center text-light " >Gather practical experiences from each course</p>

                </div>
              <div class="container-fluid mt-5">
                <div class="row mt-5 d-flex justify-content-center p-5">

               <div class="col-md-3 text-center p-2 ">
                <div class="card bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-book-open-reader iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white"><strong>Leadership</strong></h4>
                    <p class="text-white-50 p-2">I know how lead in the  organizational</p>
                  </div>
                </div>
               </div>


               <div class="col-md-3 text-center p-2">
                <div class="card bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-lightbulb iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">Creativity</h4>
                    <p class="text-white-50 p-2">When Suddenly need to innovation something </p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-circle-info iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">IT Support</h4>
                    <p class="text-white-50 p-2">Technical tool and technique thats i do daily basis</p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card bg-black custom-box img-fluid-custom ">
                  <i class="fa-solid fa-person-rays iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">Human Resource</h4>
                    <p class="text-white-50 p-2 ">Talent,performance.innovation for each organizational</p>
                  </div>
                </div>
               </div>

              </div>
              </div>
              </section> --}}
              <section id="services" class="services section-bg">
                <div class="container aos-init aos-animate" data-aos="fade-up">
                  <div class="section-title">
                    <h2>Experience</h2>
                    <p>
                        Gather practical experiences from each course
                    </p>
                  </div>

                  <div class="row">
                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-book-open-reader"></i></div>
                        <h4><a href="">Leadership</a></h4>
                        <p>
                            I know how lead in the  organizational
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-lightbulb"></i></div>
                        <h4><a href="">FinTech</a></h4>
                        <p>
                            When Suddenly need to innovation something
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <h4><a href="">IT Support </a></h4>
                        <p>
                            Technical tool and technique thats i do daily basis
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-person-rays"></i></div>
                        <h4><a href="">Human Resource</a></h4>
                        <p>
                            Talent,performance.innovation for each organizational
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
               <!-- <div class="container-fluid ">
                   <div class="row  text-center d-flex justify-content-center">

                    <div class="col-md-3 p-2 skill_1">
                    <img class="imgslide1 p-2" src="/model/skill.png"><br>
                   <h3 class="bg-info p-2">Skill Develop</h3>
                  <p class="text-white p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                   Animi distinctio praesentium id amet deleniti expedita harum nostrum omnis
                .</p>
               </div>

               <div class="col-md-3 skill_2">
                <img class="imgslide1 p-2" src="/model/career.png"><br>
                <h3 class="bg-info p-2">Career</h3>
                   <p class="p-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                       Animi distinctio praesentium id amet deleniti expedita harum nostrum omnis
                    </p>
                   </div>

                   <div class="col-md-3 p-2 skill_3">
                    <img class="imgslide1 p-2" src="/model/inter00.jpg"><br>
                    <h3 class="bg-info p-2">Internship</h3>
                       <p class="p-3 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                           Animi distinctio praesentium id amet deleniti expedita harum nostrum omnis
                          </p>
                       </div>

                   <div class="col-md-3 p-2 skill_4">
                    <img class="imgslide1 p-2" src="/model/job.jpg"><br>
                    <h3 class="bg-info p-2">Job Opportunity</h3>
                       <p class="p-3 ">Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                           Animi distinctio praesentium id amet deleniti expedita harum nostrum omnis
                         </p>

                 </div>
               </div>
               </div> -->


               <div class="container-fluid mt-5">
                <div class="row  ">
                   <marquee class=" logos text-center mt-5 ">
                    <img src="{{asset('frontend/image/Flutter-App.png')}}" alt="">
                   <img src="{{asset('frontend/image/java.png')}}" alt="">
                   <img src="{{asset('frontend/image/fire.png')}}" alt="">
                   <img src="{{asset('frontend/image/html.png')}}" alt="">
                   <img src="{{asset('frontend/image/css.png')}}" alt="">
                   <img src="{{asset('frontend/image/bootstrap.png')}}" alt="">
                   <img src="{{asset('frontend/image/js0.png')}}" alt="">
                   <img src="{{asset('frontend/image/node.png')}}" alt="">
                   <img src="{{asset('frontend/image/php.png')}}" alt="">
                   <img src="{{asset('frontend/image/laravel.png')}}" alt="">
                   <img src="{{asset('frontend/image/database.png')}}" alt="">
                   <img src="{{asset('frontend/image/powerpoint.png')}}" alt="">
                   <img src="{{asset('frontend/image/bigml.png')}}" alt="">
                   <img src="{{asset('frontend/image/powerbi.png')}}" alt="">
                   <img src="{{asset('frontend/image/excel.png')}}" alt="">
                  </marquee>
                  </div>
               </div>
               <br>
               <br>
               <br>
               <br>
               <br>
               <div class="section-border" data-controller="SectionDivider" style="clip-path: url(#section-divider-64ab4a69a3c6fa011e19653c);" data-controllers-bound="SectionDivider">
                <div class="section-background">



                </div>
              </div>
               {{-- <div class="text-center mt-5">
                <h2 class="text-center text-muted">Specialist</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                  <div class="divider-custom-line"></div>
              </div>
              </div> --}}

              <div class="section-title">
                <h2>Specialist</h2>
                <p>
                    Nowaday make your bright future with technology
                </p>
              </div>


                <div class="container-fluid mt-3">
                  <div class="row text-center">
                  <div class="col-md-12 col-sm-12 text-center rounded">
                        <div class=" rounded-3  ">
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-white"></i> Web Aplication</p><br>
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-white"></i> Mobile Application</p><br>
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-white"></i> Business & Management</p><br>

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
                        <p>
                            I know how lead in the  organizational
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-md-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-mobile-screen-button"></i></div>
                        <h4><a href="">Mobile application</a></h4>
                        <p>
                            When Suddenly need to innovation something
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-circle-info"></i></div>
                        <h4><a href="">Management</a></h4>
                        <p>
                            Technical tool and technique thats i do daily basis
                        </p>
                      </div>
                    </div>

                    <div class="col-xl-3 col-md-6 d-flex align-items-stretch mt-4 mt-xl-0 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="400">
                      <div class="icon-box">
                        <div class="icon"><i class="fa-solid fa-business-time"></i></div>
                        <h4><a href="">Business</a></h4>
                        <p>
                            Talent,performance.
                            innovation for each organizational
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

               {{-- <section id="skill" class="section-p2 ">
                  <div class="container-fluid mt-5 justify-content-evenly">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fe-box img-fluid bg-info">
                                <img src="{{asset('frontend/image/skill.png')}}" alt="" class="iconslide">
                                <h3 class="btn4 text-dark p-3">Skill</h3>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.

                                 </p>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fe-box img-fluid  bg-info">
                                <img src="{{asset('frontend/image/job.png')}}" alt=""class="iconslide">
                                <h4 class="btn2 text-dark p-3">Job Opportunity</h4>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fe-box img-fluid bg-info">
                                <img src="{{asset('frontend/image/career.png')}}" alt="" class="iconslide"><br>
                                <h3 class="btn1 text-dark p-3">Career</h3>
                                 <p  class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.

                                  </p>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="fe-box img-fluid bg-info">
                                <img src="{{asset('frontend/image/inter00.png')}}" alt=""class="iconslide">
                                <h3 class="btn3 text-dark p-3">Internship</h3>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.

                                 </p>
                           </div>
                        </div>

            </div>
            </div>

               </section> --}}

               {{-- <div class="highlight mt-5">
                <h2 class="text-blue highlight">Hightlights</h2>
                <div class=" ">
                    <span class="elementor-divider-separator"></span>
                </div>
               </div>

               <div class="container-fluid mt-5">
                <div class="row d-flex  align-items-center  p-5">
                  <!-- Card 1 -->
                  <div class="col-md-3">
                    <div class="card mb-4  p-3 bg-blue shadow">
                      <div class="mb-4">
                        <div class="mb-4"><img src="{{asset('frontend/image/jobfair2.png')}}" alt="Image" class="img-fluid-custom"></div>
                    </div>
                      <div class="staff-body ">
                        <h2 class="staff-name text-white">Job Fair</h2>
                        <span class="d-block position mb-4 text-info">For all of students</span>
                        <p class="mb-4 text-white-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>


                        <div class="social">
                          <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                          <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                          <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 2 -->
                  <div class="col-md-3">
                    <div class="card mb-4  p-3 bg-blue shadow" >
                      <div class="mb-4">
                        <div class="mb-4"><img src="{{asset('frontend/image/visite.jpg')}}" alt="Image" class="img-fluid-custom"></div>
                    </div>
                      <div class="staff-body">
                        <h2 class="staff-name text-white">Industry Visits</h2>
                        <span class="d-block position mb-4 text-info">For all of students</span>
                        <p class="mb-4 text-white-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="social">
                          <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                          <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                          <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- Card 3 -->
                  <div class="col-md-3">
                    <div class="card mb-4 p-3 bg-blue shadow">
                      <div class="mb-4">
                        <div class="mb-4"><img src="{{asset('frontend/image/internship3.png')}}" alt="Image" class="img-fluid-custom"></div>
                    </div>
                      <div class="staff-body">
                        <h2 class="staff-name text-white">Internship</h2>
                        <span class="d-block position mb-4 text-info">For all of students</span>
                        <p class="mb-4 text-white-50">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                        <div class="social">
                          <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                          <a href="#" class="mx-2"></a>
                          </div>
                        </div>
                    </div>

            </div>
        </div>
        </div> --}}


        {{-- <div class="container-fluid  mt-5">

            <!-- Dropdown Button -->
            <div class="dropdown h-70">
              <button class="btn btn-outline-info dropdown-toggle" type="button" id="tuitionFeesDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tuition Fees
              </button>
              <div class="dropdown-menu p-3" aria-labelledby="tuitionFeesDropdown">
                <div class="row pt-2 pb-2 bg-light">
                  <div class="col-md-5">Credit Hours</div>
                  <div class="col-md-7">142</div>
                </div>
                <div class="row pt-2 pb-2 mt-2 bg-light">
                  <div class="col-md-5">Program Duration</div>
                  <div class="col-md-7">4 Years</div>
                </div>
                <div class="row pt-2 pb-2 mt-2 bg-light">
                  <div class="col-md-5">Admission Fees (Tk)</div>
                  <div class="col-md-7">54500</div>
                </div>
                <div class="row pt-2 pb-2 mt-2 bg-light">
                  <div class="col-md-5">Semester Cost (Tk)</div>
                  <div class="col-md-7">85,000</div>
                </div>
                <div class="row pt-2 pb-2 mt-2 bg-light">
                  <div class="col-md-5">Total Tuition Fees (Tk)</div>
                  <div class="col-md-7">509,900</div>
                </div>
                <div class="row pt-2 pb-2 mt-2 bg-light">
                  <div class="col-md-5">Total Fees (Tk)</div>
                  <div class="col-md-7">727,100</div>
                </div>
              </div>
            </div>
          </div> --}}

<br>
<br>
<br>
<br>
<br>


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
