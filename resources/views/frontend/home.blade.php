
{{-- @push('head')
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
@endpush --}}

@extends('layout.master')


@section('headerpage')
<div class="container-fluid covepage">
    <div class="row ">
      <div class="col-md-7   text-center">
        <img src="{{asset('frontend/image/welcome.png')}}" class="images animate__animated animate__fadeInLeft">
        <h4 class="animate__animated animate__bounce animate__repeat-2">
            Department of Information Technology & Management <img src="{{asset('frontend/image/verify.png')}}" style="height: 28px;width: 30px;"></h4>
       
        
      </div>
      <div class="col-md-5 paragh   text-center p-2">
        <img src="{{asset('frontend/image/logo.png')}}" class="images2 animate__animated animate__fadeInRight">
    </div>
    


  <div class="club ">
    <a target="_blank" href="{{route('club')}}" class="bn5   "><i class="fa-solid fa-house-circle-check "></i>  ITM Club  </a>
</div>
<br>
<br>
</div>
</div>
   <br>
   <br>

@endsection
@section('content')

<section id="Feature" class="section-p1  ">
    <div class="fe-box img-fluid  ">
        <img src="{{asset('frontend/image/hunderd.png')}}" alt=""class="imgslide">
        <h6 class="btn2">Waiver</h6>

   </div>
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/laptop.png')}}" alt=""class="imgslide">
         <h6 class="btn1">Free Laptop</h6>

    </div>
    
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/hall.png')}}" alt=""class="imgslide ">
         <h6 class="btn3">Hall</h6>

    </div>
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/latest.png')}}" alt=""class="imgslide">
         <h6 class="btn4">Latest Curriculum</h6>

    </div>
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/innovation.png')}}" alt=""class="imgslide">
         <h6 class="btn6">Innovation</h6>

    </div>
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/clubicon.png')}}" alt=""class="imgslide">
         <h6 class="btn1">35+ Club</h6>

    </div>
    <div class="fe-box img-fluid ">
         <img src="{{asset('frontend/image/life_insurance.png')}}" alt=""class="imgslide">
         <h6 class="btn2">Life-Insurance</h6>

    </div>
        <div class="fe-box  img-fluid ">
            <img src="{{asset('frontend/image/diubus.png')}}" alt=""class="imgslide">
            <h6 class="btn3">Transport</h6>

       </div>
    
</section>
<br>
<br>
<br>


<div class="container-fluid text-center ">
    <div  class="">
    <h3 class="text-danger">Features</h3>
        <h1 class=""> Why Choose ITM</h1>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <h2 class=" text-dark">Special Course </h2>
</div>


</div>
<div class="container-fluid text-center mt-5 ">
    <div class="row ">
        <hr>
        <div class="col-md-3">
            <img src="{{asset('frontend/image/web.png')}}" class="img-fluid">
            <div class="t-center m-5">
            <h3 style="text-align: center;color: rgb(0, 0, 0);">Web Developer</h3>
                <button class=" btnn ">View</a></button>                   <hr>
            </div>   
                </div>

        <div class="col-md-3">
            <img src="{{asset('frontend/image/app.png')}}" class="img-fluid ">
            <div class="t-center m-5">
            <h3 style="text-align: center;color: rgb(0, 0, 0);">App Developer</h3>
            <button class=" btnn ">View</a></button> 
            <hr>
            </div>   
                </div>

                        <div class="col-md-3">
                          <img src="{{asset('frontend/image/owner.png')}}" class="img-fluid">
                          <div class="t-center m-5">
                          <h3 style="text-align: center;color: rgb(0, 0, 0);">Entrepreneur</h3>
                          <button class=" btnn ">View</a></button> 
                          <hr>
                          </div>   
                              </div>

                        <div class="col-md-3">
                            <img src="{{asset('frontend/image/cybersec.png')}}" class="img-fluid">
                            <div class="t-center m-5">
                            <h3 style="text-align: center;color: rgb(0, 0, 0);">Cyber Security</h3>
                            <button class=" btnn ">View</a></button> 
                            <hr>
                            </div>   
                                </div>
                                <div class="col-md-3">
                                    <img src="{{asset('frontend/image/HR.png')}}" class="img-fluid">
                                    <div class="t-center m-5">
                                    <h3 style="text-align: center;color: rgb(0, 0, 0);">Human Resource</h3>
                                    <button class=" btnn ">View</a></button> 
                                    <hr>
                                     </div>   
                                        </div>
                                        <div class="col-md-3">
                                            <img src="{{asset('frontend/image/MIS.png')}}" class="img-fluid">
                                            <div class="t-center m-5">
                                            <h3 style="text-align: center;color: rgb(0, 0, 0);">Management Information </h3>
                                            <button class=" btnn ">View</a></button> 
                                            <hr>
                                             </div>   
                                                </div>
                                        <div class="col-md-3">
                                            <img src="{{asset('frontend/image/database.png')}}" class="img-fluid">
                                            <div class="t-center m-5">
                                                <h3 style="text-align: center;color: rgb(0, 0, 0);">Database Management</h3>
                                                <button class=" btnn ">View</a></button>
                                                 <hr>                                             
                                            </div>   
                                       </div>
                                        <div class="col-md-3">
                                            <img src="{{asset('frontend/image/sqa.png')}}" class="img-fluid">
                                          <div class="t-center m-5">
                                            <h3 style="text-align: center;color: rgb(0, 0, 0);">Software Quality Testing</h3>
                                            <button class=" btnn ">View</a></button>
                                            <hr>                                             
                                         </div>   
                                     </div>
                                 </div>
                                 
                         </div>

        <br>
        <br>
        <br>                
    
 <div class="container-fluid mt-5">
    <div class="mt-5 ">
        <h1 class="fac_text text-center"><i class="fa-brands fa-elementor "></i>Department of ITM</h1>
    </div>      
    <br>                
    <br> 
    <div class="row text-center itmcard">
        {{-- <div class=" heading" >               
           <h1 class="font-family heading_text"><i class="fa-brands fa-elementor "></i>Department of ITM<h1>
        </div> --}}           
        <div class="col-md-5 itright mt-5">
            <img src="{{asset('frontend/image/IT3.png')}}" class="imagess" >
        </div>

        <div class="col-md-7 p-5 itleft text-center " >
                   <img src="{{asset('frontend/image/qr.png')}}" class="qr">
                   <br>
                    <p style=" font-size: larger; color: rgb(255, 255, 255);">Department of Information Technology and Management (ITM) provides you a unique opportunity to have BSc. in Information Technology and Management. In the field of Information Technology and Management, the job possibilities are almost endless. "The major goal of the discipline, which is now unique in our nation, is to integrate information technology with business intelligence. We also intend to secure financial systems on cloud...<p>
                       <br>
                      <br>
                       <button class="read "><a target="_blank" class="menucard" href="https://daffodilvarsity.edu.bd/images/prospectus/BSc-in-ITM.jpg">Program List<i class="fa-solid fa-download"></i></a></i></button> 
                       <br>
                  <div class="fb">
                     <a target="_blank" href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a></i>
                      <br>
                      <br>
                     <a target="_blank" href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i>

                  </div>
           
        </div>
     </div>
     <div class="row mt-5 p-5">

        <div class="col-lg-3 col-6 text-center p-5">
          <span data-purecounter-start="0" data-purecounter-end="349" data-purecounter-duration="0" class="purecounter">232</span>
          <p class="text-color">Students</p>
        </div>
      
        <div class="col-lg-3 col-6 text-center  p-5">
          <span data-purecounter-start="0" data-purecounter-end="156" data-purecounter-duration="0" class="purecounter">421</span>
          <p class="text-color">Teachers</p>
        </div>
      
        <div class="col-lg-3 col-6 text-center p-5">
          <span data-purecounter-start="0" data-purecounter-end="490" data-purecounter-duration="0" class="purecounter">1364</span>
          <p class="text-color">Alumni</p>
        </div>
      
        <div class="col-lg-3 col-6 text-center p-5">
          <span data-purecounter-start="0" data-purecounter-end="311" data-purecounter-duration="0" class="purecounter">42</span>
          <p class="text-color">Scholarship</p>
        </div>
      
      </div>
  </div>
                <br>
                <br>
                <div class="">
                    <h1 class="about_itm text-center text-info">Study Aboard </h1>
                </div>             
                <br>
                <br>
                <div class="container ">
                    <div class="row text-center">
                    
                    <div class="col-md-8 text-center">
                           <img src="{{asset('frontend/image/student2.png')}}" class="scholarpic animate__animated animate__fadeInLeft">
                        </div>
                        <div class="col-md-4  scholar text-center p-2">
                            <h4 class="aboard  animate__animated animate__fadeInRight">Study Aboard</h4><br>
                            <p class="item1  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Scholarship</p><br>
                            <p class="item2  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Exchange Program</p><br>
                            <p class="item3  p-2 text-transition"><i class="fa-regular fa-circle-check text-success"></i> Internship</p><br><br>
                            <a target="_blank" href="https://daffodilvarsity.edu.bd/int-scholarship/scholarship-int" class="bn5 ">Apply</i> </a>
    
                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
             <br>
                <br>
                <br>
                
              
              
        <div class="facilty mt-5">
            <h1 class="fac_text text-center">Our Facilities</h1>
        </div>
        <br>

                <section id="Feature" class="section-p1 ">
                    <div class="fe-box ">
                        <img src="{{asset('frontend/image/hunderd.png')}}" alt=""class="imgslide">
                        <h6 class="btn2">Waiver</h6>
         
                   </div>
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/laptop.png')}}" alt=""class="imgslide">
                        <h6 class="btn1">Free Laptop</h6>
          
                    </div>
                    
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/hall.png')}}" alt=""class="imgslide ">
                        <h6 class="btn3">Hall</h6>
          
                    </div>
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/latest.png')}}" alt=""class="imgslide">
                         <h6 class="btn4">Latest Curriculum</h6>
          
                    </div>
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/innovation.png')}}" alt=""class="imgslide">
                        <h6 class="btn6">Innovation</h6>
          
                    </div>
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/clubicon.png')}}" alt=""class="imgslide">
                        <h6 class="btn5">35+ Club</h6>
          
                    </div>
                    
                    
               </section>

                <section id="Feature" class="section-p1 ">
                    <div class="fe-box  ">
                        <img src="{{asset('frontend/image/diubus.png')}}" alt=""class="imgslide">
                        <h6 class="btn2">Transport</h6>
         
                   </div>
                    <div class="fe-box">
                         <img src="{{asset('frontend/image/oncampus.png')}}" alt=""class="imgslide">
                         <h6 class="btn1">DIU Recruitment</h6>
          
                    </div>
                    
                    <div class="fe-box">
                         <img src="{{asset('frontend/image/e-library.png')}}" alt=""class="imgslide">
                         <h6 class="btn3">E-Library</h6>
          
                    </div>
                    <div class="fe-box">
                         <img src="{{asset('frontend/image/Rover Scout.png')}}" alt=""class="imgslide">
                         <h6 class="btn4">Rover Scout</h6>
          
                    </div>
                    <div class="fe-box">                         
                        <img src="{{asset('frontend/image/global network.png')}}" alt=""class="imgslide">
                         <h6 class="btn5">Global Networking</h6>
          
                    </div>
                    <div class="fe-box">
                        <img src="{{asset('frontend/image/life_insurance.png')}}" alt=""class="imgslide">
                        <h6 class="btn1">Life- Insurance</h6>
          
                    </div>       
               </section>
                <br>
                <br>
                <br>
                <br>
               <div class="container-fluid mt-5 ">
                <div class="text-dark text-center  service_text">
                    <h1 class="text-dark text-center ">Service <i class="fa-solid fa-universal-access"></i></h1>
                    <div class="divider-custom">
                        <div class="divider-custom-line"></div>
                        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
                        <div class="divider-custom-line"></div>
                    </div>
                    <p class="text-dark">Our service 24 hours open for our Student</p>
                    
                </div>
            <div class="row text-center facilty mt-5">                         
               <div class="col-md-3 border ">
                     <img src="{{asset('frontend/image/blc.png')}}" class="img-decorate">    
                     <a target="_blank" href="https://elearn.daffodilvarsity.edu.bd/" class="view">BLC</a>

                    <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>
               </div>
               
                   <div class="col-md-3  border ">
                        <img src="{{asset('frontend/image/portal.png')}}"class=" img-decorate">  
                        <a target="_blank" href="http://studentportal.diu.edu.bd/" class="view ">Student Portal</a>
                        <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

                   </div>
               
                   <div class="col-md-3 border ">
                       <img src="{{asset('frontend/image/diubus.png')}}" class=" img-decorate ">
                       <a target="_blank" href="https://daffodilvarsity.edu.bd/article/transport" class="view  ">Transport</a>
                       <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

                       </div>
                 
                       <div class="col-md-3 border ">
                        <img src="{{asset('frontend/image/1card.png')}}"  class=" img-decorate">  
                         <a target="_blank" href="https://1card.com.bd/ " class="view ">1Card</a>
                        <p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptates perspiciatis velit fuga voluptatem quos amet!</p>

                   </div>
               </div>
               </div>
            
               <div class="container-fluid fourbg ">
                <div class="row text-center">
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
             </div>
             
               
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
               <section id="skill" class="section-p2 ">
                  <div class="container-fluid mt-5">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="fe-box img-fluid backgorund-color">
                                <img src="{{asset('frontend/image/skill.png')}}" alt="" class="iconslide">
                                <h3 class="btn4 text-dark p-3">Skill</h3>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                   
                                 </p>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fe-box img-fluid  backgorund-color">
                                <img src="{{asset('frontend/image/job.png')}}" alt=""class="iconslide">
                                <h4 class="btn2 text-dark p-3">Job Opportunity</h4>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
                           </div>
                        </div>
                        <div class="col-md-3">
                            <div class="fe-box img-fluid backgorund-color">
                                <img src="{{asset('frontend/image/career.png')}}" alt="" class="iconslide"><br>
                                <h3 class="btn1 text-dark p-3">Career</h3>
                                 <p  class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                    
                                  </p>
                            </div>
                        </div>
                        <div class="col-md-3 ">
                            <div class="fe-box img-fluid backgorund-color">
                                <img src="{{asset('frontend/image/inter00.png')}}" alt=""class="iconslide">
                                <h3 class="btn3 text-dark p-3">Internship</h3>
                                <p class="text-dark">Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
                                  
                                 </p>
                           </div>
                        </div>
            
            </div>
            </div>
               </section>
        

           
       


<section id="about">
      
    <br>
    <br>
    <br>
    <br>
    <div class="gy-4">
    <h1 class="header1">Our Location <i class="fa-solid fa-location-dot icon1 text-danger"></i></h1>
</div>

<div class="main">
   
    <div class="row">
        <div class="twopartbg">
            <img src="{{asset('frontend/image/printbg2.png')}}" class="twopartbg">
               </div>
               
        <div class="col-md-6">
            <div class="item">
              <div class="imagee">
                <img src="{{asset('frontend/image/campus.jpeg')}}" class="imgg">
              </div>
              <div class="description">
                <p  class="pp">Daffodil International University Main Campus</p>
                <button class="baton p-2">View</button>
              </div>
            </div>
            <div class="item">
                <div class="imagee">
                   <img src="{{asset('frontend/image/ab4building.jpeg')}}" class="imgg">
                </div>
                <div class="description">
                    <p class="pp">AB4 Building </p>
                    <button class="baton p-2"><a href=""> </a> View</button>
                </div>
              </div>
              <div class="item">
                <div class="imagee">
                    <img src="{{asset('frontend/image/old_building.jpg')}}" class="imgg">
                </div>
                <div class="description">
                    <p class="pp">AB Building</p>
                    <button class="baton p-2">View</button>
                </div>
              </div>
        </div>
        <div class="col-md-6 text-center">
            <iframe class="map"  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd" width="100%" height="450px" style="border: 1px;"></iframe>
        </div>
    </div>

</div>
    <br>
@endsection