
@include('frontend.faculty_style')


@extends('layout.master')
@section('headerpage')
<br>
<div class="row gx-4 gx-lg-5 align-items-center bg-light justify-content-center text-center">
    <div class="col-lg-8 align-self-end">
        <h1 class="faculty-section-heading text-uppercase">Faculty</h1>
    </div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <br>
    <div class="col-lg-8 align-self-baseline">
        <p class="text-white-75 p-4">Become a catalyst for transformation at Daffodil International University. As a faculty member, you'll inspire minds, foster innovation, and contribute to academic excellence. Join us in shaping the leaders of tomorrow and experiencing a fulfilling journey of professional growth and impact."
 </p>
</div>
</div>
@endsection


@section('content')
<br>
<br>
<div class="facilty ">
  <br>
  <br>
  <div class="container main_div">
    <!-- First Line: Single Card at the Top -->
    <div class="row ">
      <div class="col-md-12">
        <div class="faculty-card1">
            <img src="{{asset('frontend/image/teacher/nusratjahan.png')}}" class="card-img-top" alt="Circular Image">
            <div class="faculty-card-content">
                <div class="head"><p> Head of ITM  Department</p></div>
                <h2>Ms. Nusrat Jahan</h2>
                <h5>Assistant Professor </h5>
                <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="nusrat.swe@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="+8801847334996"><i class="fa-solid fa-square-phone icon1"></i></a>
                
            </div>
        </div>
      </div>
    </div>
    <br>

    <!-- Second Line: Three Cards -->
    <div class="container mt-5">
    <div class="row">

      <div class="col-md-4 ">
        <div class="circular">
            <img src="{{asset('frontend/image/teacher/ashik.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">
            <br> 
            <h4 class="p-2 text-muted">Ashik Rahman</h4>
            <p class="text-muted">Lecturer (Senior Scale) </p>
            <a href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-facebook icon1"></i></a>
            <a  href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-linkedin icon1"></i></a>
            <a   href="ashikur.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
            <a  href="01312075927"><i class="fa-solid fa-square-phone icon1"></i></a>
        </div>
        </div>
        
        <div class="col-md-4 ">
          <div class="circular">
              <img src="{{asset('frontend/image/teacher/nafees.png')}}" class="mx-auto rounded-circle" alt="Circular Image">
              <h4 class="p-2 text-muted">Mr. Nafees Imran</h4>
              <p class="text-muted">Lecturer</p>
              <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-facebook icon1"></i></a>
              <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-linkedin icon1"></i></a>
              <a href="nafees.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="01880829404"><i class="fa-solid fa-square-phone icon1"></i></a>
          </div>
          </div>
        <div class="col-md-4 ">
          <div class="circular">
            <img src="{{asset('frontend/image/teacher/raisul.png')}}" class="mx-auto rounded-circle" alt="Circular Image">
              <h4 class="p-2 text-muted">Raisul Kabir News</h4>
              <p class="text-muted">Lecturer</p>
              <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="raisul.itm0007.c@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="01402052440"><i class="fa-solid fa-square-phone icon1"></i></a>
          </div>
          </div>
    </div>
    </div>




    <div class="container mt-5">
        <div class="row">
    
            <div class="col-md-4 ">
                <div class="circular">
                    <img src="{{asset('frontend/image/teacher/female.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">       
                    <h4 class="p-2 text-muted">Ms. Moni Akter</h4>
                    <p class="text-muted">Lecturer</p>   
                    <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                    <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                    <a href="akter.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                    <a href="8801617378602"><i class="fa-solid fa-square-phone icon1"></i></a>
                </div>
                </div>
            
                <div class="col-md-4 ">
                    <div class="circular">
                        <img src="{{asset('frontend/image/teacher/male.png')}}" class="mx-auto rounded-circle" alt="Circular Image">
                        <h4 class="p-2 text-muted">name :</h4>
                        <p class="text-muted">Designation</p>
                        <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                          <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                          <a href="akter.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                          <a href="8801617378602"><i class="fa-solid fa-square-phone icon1"></i></a>
                    </div>
                    </div>
              <div class="col-md-4 ">
                <div class="circular">
                    <img src="{{asset('frontend/image/teacher/female.jpg')}}" class="mx-auto rounded-circle" alt="Circular Image">       
                    <h4 class="p-2 text-muted">name :</h4>
                    <p class="text-muted">Designation</p>
                    <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                      <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                      <a href="akter.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                      <a href="8801617378602"><i class="fa-solid fa-square-phone icon1"></i></a>
                </div>
                </div>
        </div>
        </div>
    

<br>
<br>
{{--  
    <div class="row">
        <div class="col-md-4">
          <div class="faculty-card">
            <div class="circular-image">
              <img src="{{asset('frontend/image/teacher/female.jpg')}}" class="card-img-top" alt="Circular Image">         
            <div class="card-body">
              <!-- Content for the first card in the second line -->
              <h3>Ms. Moni Akter</h3>
                  <h4>Lecturer</h4>    
                <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="akter.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="8801617378602"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="faculty-card">
            <div class="circular-image">
              <img src="{{asset('frontend/image/teacher/male.png')}}" class="card-img-top" >
            </div>
            <div class="card-body">
              <!-- Content for the second card in the second line -->
              <h3>Name :</h3>
                  <h4>Designation</h4>
                  
                <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="#"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="#"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
            <div class="faculty-card">
              <div class="circular-image">
                <img src="{{asset('frontend/image/teacher/male.png')}}" class="card-img-top" >
              </div>
              <div class="card-body">
                <!-- Content for the second card in the second line -->
                <h3>Name :</h3>
                    <h4>Designation</h4>
                    
                  <a href="#"><i class="fa-brands fa-facebook icon1"></i></a>
                  <a href="#"><i class="fa-brands fa-linkedin icon1"></i></a>
                  <a href="#"><i class="fa-solid fa-envelope icon1"></i></a>
                  <a href="#"><i class="fa-solid fa-square-phone icon1"></i></a>
              </div>
            </div>
          </div>
      </div>
  </div>
  <br> --}}
  <br>
  <br>
</div>
@endsection