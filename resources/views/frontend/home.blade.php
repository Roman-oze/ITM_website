
{{-- @push('head')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
@endpush --}}



@extends('layout.app')


@section('headerpage')

<div class="container-fluid mt-5">
    <div class="row ">
      <div class="col-md-6 intro">
        <div class="top">
          <h1 class="text-white-50">Welcome!</h1>
         <h3 class="department">Department of</h3>
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
        <!-- <img src="black-jacket.png" class="dp"> -->
        <!-- <img src="diu-3.png" class="dp"> -->
        <img src="{{asset('frontend/image/student3.png')}}" class="image1 img-fluid-custom  animate__animated animate__fadeInDown">
        {{-- <img src="{{asset('frontend/image/student4.png')}}" class="image1 img-fluid "> --}}
      </div>
      </div>

    </div>
</div>

   {{-- <button class="open-button" onclick="openForm()"><img src="{{asset('frontend/image/logo.png')}}" alt="" class="pop-img "></button> --}}

    {{-- <button type="submit" ><img class="pop-img open-button" src="{{asset('frontend/image/ITM.jpg')}}" alt="" onclick="openForm()" ></button> --}}

   {{-- <button class="" onclick="openForm()"> <i class="fa-regular fa-comment-dots text-success fa-4x open-button"></i></button> --}}

   <button class="" onclick="openForm()"> <i class="fa-solid fa-comment-dots text-white fa-4x open-button"></i></button>
</div>

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

@endsection





@section('content')

<section id="Feature" class="section-p1 " style="background-color: rgb(213, 217, 234);">
    <div class="container d-flex justify-content-evenly">
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/hunderd.png')}}" alt="" class="imgslide">
        <h6 class="btn2">Waiver</h6>
    </div>
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/laptop.png')}}" alt="" class="imgslide">
        <h6 class="btn1">Free Laptop</h6>
    </div>
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/hall.png')}}" alt="" class="imgslide">
        <h6 class="btn3">Hall</h6>
    </div>

    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/innovation.png')}}" alt="" class="imgslide">
        <h6 class="btn6">Innovation</h6>
    </div>
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/clubimage.png')}}" alt="" class="imgslide">
        <h6 class="btn1">35+ Club</h6>
    </div>
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/life_insurance.png')}}" alt="" class="imgslide">
        <h6 class="btn2">Life-Insurance</h6>
    </div>
    <div class="fe-box img-fluid-custom">
        <img src="{{asset('frontend/image/buss.png')}}" alt="" class="imgslide">
        <h6 class="btn3">Transport</h6>
    </div>
    </div>
</section>

<br>
<br>

<div class="container-fluid text-center mt-5 ">
    <div  class="">
    <h3 class="text-warning">Features</h3>
        <h1 class="text-white"> Why Choose ITM</h1>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h2 class=" text-white">Special Course </h2>
</div>


</div>
<div class="container-fluid text-center mt-5 ">

    <div class="row p-3">
              <div class="col-md-3 p-3 ">
                <div class="flip-card flip-shadow ">
                 <div class="flip-card-inner ">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/web.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Web Developer</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h4>web development</h4>
                         <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/app.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Mobile App Developer</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h4>Mobile App Developer</h4>
                         <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/business.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Entrepreneur</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                         <h4>Entrepreneur</h4>
                         <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/cybersec.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white ">Cyber Security</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p- text-left " style="line-height:22px;">
                         <h4>Cyber Security</h4>
                         <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

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

        </div>
    <div class="row p-3">
              <div class="col-md-3 p-3 ">
                <div class="flip-card flip-shadow ">
                 <div class="flip-card-inner ">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/HR.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Human Resource</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                    <h4 style="text-white">Human Resource</h4>
                    <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/MIS.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Management Information</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                    <h4 style="text-white">Management Information</h4>
                    <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3 ">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/database.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Database Management</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left " style="line-height:22px;">
                    <h4 style="text-white">Database Management</h4>
                    <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
              <div class="col-md-3 p-3">
                <div class="flip-card  flip-shadow">
                 <div class="flip-card-inner">
                   <div class="flip-card-front flip-custom-2">
             <div class="child-div-2">
                <img src="{{asset('frontend/image/sqa.png')}}" alt="" class="img-fluid-custom"><br>
                <h4 style="text-white">Software Quality Testing</h4>

                 </div>
                 </div>
                   <div class="flip-card-back p- text-left " style="line-height:22px;">
                    <h4 style="text-white p-3">Software Quality Testing</h4>
                    <hr>
                         <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ad eius aperiam sunt magni.
                             Expedita ipsam molestiae dolorum incidunt porro, mollitia voluptas quos assumenda
                             quae molestias velit quasi, impedit beatae commodi.</p>

                             <div class="social-links text-center">

                             </div>
                   </div>
                 </div>
               </div>
               </div>
               </div>




        <br>
        <br>
        <br>
        <div class="mt-5">
            <h1 class="fac_text text-center"><i class="fa-brands fa-elementor "></i>Department of </h1>
        </div>
 <div class="container-fluid mt-5 p-4">
        <div class="row justify-content-center covepage  mt-5 ">
            <div class="col-md-6 align-items-stretch d-flex">
                <div class="img img-video d-flex align-items-center" style="background-image: url('/public/frontend/image/diugate.jpg);">
                    <div class="video justify-content-center">
                        {{-- <iframe class="embed-responsive-item" src="https://annisulhuq.daffodil.university/vt/" frameborder="0" allow="accelerometer; autoplay" allowfullscreen width="100%" height="100%"></iframe> --}}
                        {{-- <a href="https://www.facebook.com/share/v/PRtyYekzGpyqkezy/" class="icon-video popup-vimeo d-flex justify-content-center align-items-center"> --}}
                            <image src="{{asset('frontend/image/student4.png')}}" class="img-fluid-custom manual-shadow "  >
                                {{-- <iframe width="640" height="450" src="#">
                                </iframe> --}}

                            <span class="ion-ios-play"></span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="col-md-6 heading_section p-5 ">

                <h2 class="mb-4 text-warning">Information Technology and Management (ITM)</h4>


                    <p class="text-white-50 h5 "> provides you a unique opportunity to have BSc. in Information Technology and Management. In the field of Information Technology and Management, the job possibilities are almost endless. "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on cloud...<p>

<br>
<br>
                        <a target="_blank" class="read" href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Course List  <i class="fa-solid fa-circle-down conic fa-lg"></i></a>
                        <br>
                   <div class="fb">
                      <a target="_blank" href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a></i>
                       <br>
                       <br>
                      <a target="_blank" href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i>
                    </div>

        </div>
    </div>
</div>
<br>
<br>
<br>
    <div class="container mt-5">
        <div class="row mt-5  d-flex justify-space-bewteen">
          <div class="col-md-3 col-6 text-center p-2 ">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="549" data-purecounter-duration="0" class="purecounter">549</span>
            <p class="text-color">Student</p>
          </div>
          </div>
          <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="20" data-purecounter-duration="0" class="purecounter">50</span>
            <p class="text-color">Faculty</p>
          </div>
          </div>
          <div class="col-md-3 col-6 text-center p-2">
            <div class="border rounded-3  container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="30" data-purecounter-duration="0" class="purecounter">40</span>
            <p class="text-color">Alumni</p>
          </div>
          </div>

          <div class="col-md-3 col-6 text-center p-2">
          <div class="border rounded-3 container_design text-center p-5 ">
            <span data-purecounter-start="0" data-purecounter-end="29" data-purecounter-duration="0" class="purecounter">29</span>
            <p class="text-color">Research</p>
            </div>
            </div>
            </div>
            </div>
                <br>
                <br>
                <br>
                <br>

<div class="mt-5">
    <h1 class="about_itm text-center text-white">Study Abroad</h1>
</div>

<div class="container-fluid mt-5 p-5">
    <div class="row text-center aboardpage">
        <div class="col-md-8 text-center mb-4 ">
            <img src="{{asset('frontend/image/student2.png')}}" class="scholarpic animate__animated animate__fadeInLeft " alt="Student">
            </div>
            <div class="col-md-4 text-center p-2 scholar">
            <h4 class="aboard animate__animated animate__fadeInRight">Facilities List</h4><br>
            <a href="https://daffodilvarsity.edu.bd/scholarship" class="item1 d-block p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Scholarship</a><br>
            <a href="https://internship.daffodilvarsity.edu.bd/?app=home" class="item2 d-block p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Internship</a><br>
            <a href="https://daffodilvarsity.edu.bd/international/exchange-program" class="item3 d-block p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Exchange Program</a><br>
            <a target="_blank" href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" class="bn5">Apply</a>
        </div>
    </div>
</div>

<br>
<br>
<br>

<div class="highlight mt-5">
 <h2 class="text-white highlight">Scholarship</h2>
 <div class=" ">
     <span class="elementor-divider-separator"></span>
 </div>
</div>



<div class="container mt-5 ">
    <div class="row d-flex ">

@foreach ($scholars as $scholar)
      <div class="col-md-3 p-2">
      <div class="flip-card  ">
       <div class="flip-card-inner">
         <div class="flip-card-front flip-custom">
   <div class="child-div">
           <div class="mb-4 "><img src="{{asset($scholar->image)}}" alt="Image" class="alumni-custom"></div>
           <div class="text p-3">
           <h2>{{$scholar->name}}</h2>
           <p class="h5 text-muted">{{$scholar->country}}</p>
           <h4 class="text-warning">Contratulations!</h4>
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
        <div class=" mt-5">
            <h1 class="fac_text text-center">Our Facilities</h1>
        </div>

               <div class="grid-container grid-bg mt-5" >
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
                <br>
                <br>
                <br>
                <br>
               <div class="container-fluid mt-5 ">
                <div class="text-dark text-center  service_text">
                    <h1 class="text-white ">Service <i class="fa-solid fa-universal-access"></i></h1>
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <p class="text-info m-3">Our service 24 hours open for our Student</p>

                </div>



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

               <section id="skill" class="section-p2 ">
                <div class="container-fluid mt-5">
                    <div class="row p-5">
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card img-fluid-custom bg-black shadow">
                                <div class="item-bg rounded">
                                <img src="{{asset('frontend/image/blc.png')}}" class="card-img-top img-decorate" alt="Blc">
                                </div>
                                <div class="card-body ">
                                    <a target="_blank" href="https://elearn.daffodilvarsity.edu.bd/" class="btn btn-outline-info btn-block">Blc</a>
                                    <p class="text-white-50 mt-2">course enrollment get feature  study roadmap with quiz assignments presentations, and PDF</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card img-fluid-custom  bg-black shadow">
                                <div class="item-bg rounded">
                                <img src="{{asset('frontend/image/portal.png')}}" class="card-img-top img-decorate" alt="Student Portal">
                                </div>
                                <div class="card-body">
                                    <a target="_blank" href="http://studentportal.diu.edu.bd/" class="btn btn-outline-info btn-block">Student Portal</a>
                                    <p class="text-white-50 mt-2">Payment, result, transport, clearance, and all services are provided by the student portal.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card  img-fluid-custom bg-black shadow">
                                <div class="item-bg rounded">
                                <img src="{{asset('frontend/image/1card.png')}}" class="card-img-top img-decorate" alt="1card">
                               </div>
                                <div class="card-body">
                                    <a target="_blank" href="https://1card.com.bd/" class="btn btn-outline-info btn-block">1card</a>
                                    <p class="text-white-50 mt-2">Download the 1card Android app and iOS app. All services are available within this app.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card  img-fluid-custom bg-black shadow">
                                <div class="item-bg rounded">
                                <img src="{{asset('frontend/image/blue-bus-png.png')}}" class="card-img-top img-decorate" alt="Transport">
                                </div>
                                <div class="card-body">
                                    <a target="_blank" href="https://daffodilvarsity.edu.bd/article/transport" class="btn btn-outline-info btn-block">Transport</a>
                                    <p class="text-white-50 mt-2">Firstly apply for transport card then use transport service for several card for eachsemester </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
             </section>



               </div>

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

             <section id="academic">
                <div class="text-center mt-5">
                  <h2 class="text-warning p-1">Experience</h2>
                  <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                    <div class="divider-custom-line"></div>

                </div>
                <p class="text-center text-light ">Gather practical experiences from each course</p>

                </div>
              <div class="container-fluid mt-5">
                <div class="row mt-5 d-flex justify-content-center p-5">

               <div class="col-md-3 text-center p-2 ">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-book-open-reader iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white"><strong>Leadership</strong></h4>
                    <p class="text-white-50 p-2">I know how lead in the  organizational</p>
                  </div>
                </div>
               </div>


               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-lightbulb iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">Creativity</h4>
                    <p class="text-white-50 p-2">When Suddenly need to innovation something </p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-circle-info iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">IT Support</h4>
                    <p class="text-white-50 p-2">Technical tool and technique thats i do daily basis</p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom ">
                  <i class="fa-solid fa-person-rays iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white">Human Resource</h4>
                    <p class="text-white-50 p-2 ">Talent,performance.innovation for each organizational</p>
                  </div>
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

               <br>
               <br>
               <br>
               <br>
               <br>
               <div class="text-center mt-5">
                <h2 class="text-center text-light">Specialist</h2>
                <div class="divider-custom">
                  <div class="divider-custom-line"></div>
                  <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                  <div class="divider-custom-line"></div>
              </div>
              </div>
                <div class="container mt-3">
                  <div class="row text-center p-5">

                  <div class="col-md-12 text-center rounded">
                        <div class=" rounded-3 p-3 shadow-lg manual-shadow2 border-900 box">
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Web Aplication</p><br>
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Mobile Application</p><br>
                          <p class="listitem1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Business & Management</p><br>

                        </div>
                      </div>
                      <div class=" text-box mt-5">
                        <p class="smooth-text text-white text-200">
                          As a web developer, I excel in creating user-friendly interfaces and efficient code. I specialize in crafting responsive designs, optimizing performance, and leveraging emerging technologies. With a dedication to innovation and ongoing learning, I deliver impactful solutions that enhance online experiences and propel business growth.
                        </p>
                      </div>

              </div>
              </div>
              <div class="container-fluid mt-5">
                <div class="row mt-5 d-flex justify-content-center p-3 ">

               <div class="col-md-3 text-center  p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                    <i class="fa-solid fa-laptop-code iconic fa-3x"></i>
                  <div class="card-content">
                    <h4 class="p-2 text-white"><strong>Web application</strong></h4>
                    <p class="text-white-50 p-2">I know how lead in the  organizational</p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-mobile-screen-button iconic fa-3x"></i>
                  <div class="card-content">

                    <h4 class="p-2 text-white"><strong>Mobile application</strong></h4>

                    <p class="text-white-50 p-2">When Suddenly need to innovation something </p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom">
                  <i class="fa-solid fa-circle-info iconic fa-3x"></i>
                  <div class="card-content">

                    <h4 class="p-2 text-white"><strong>Management</strong></h4>

                    <p class="text-white-50 p-2">Technical tool and technique thats i do daily basis</p>
                  </div>
                </div>
               </div>
               <div class="col-md-3 text-center p-2">
                <div class="card p-2 bg-black custom-box img-fluid-custom ">

                  <i class="fa-solid fa-business-time iconic fa-3x"></i>
                  <div class="card-content">

                    <h4 class="p-2 text-white"><strong>Business</strong></h4>

                    <p class="text-white-50 p-2 ">Talent,performance.innovation for each organizational</p>
                  </div>
                </div>
               </div>

              </div>
              </div>



              <div class="container-fluid mt-5">
                <div class="row ">
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

               <br>
               <br>
               <br>

               <div class="highlight mt-5">
                <h2 class="text-white highlight">Hightlights</h2>
                <div class=" ">
                    <span class="elementor-divider-separator"></span>
                </div>
               </div>

               <div class="container mt-5">
                <div class="row">
                  <!-- Card 1 -->
                  <div class="col-md-3">
                    <div class="card mb-4  p-3 bg-black shadow">
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
                    <div class="card mb-4  p-3 bg-black shadow" >
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
                    <div class="card mb-4 p-3 bg-black shadow">
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


        <div class="container  mt-5">

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
          </div>

<br>
<br>
<br>
<br>
<br>





@endsection
