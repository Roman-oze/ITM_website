
@extends('frontend.committee_style')
@extends('layout._club_master')

<br>
<br>
<br>
@section('main_content')
<br>
<section id="Committee">
    <div class=" headdiv" >
      <h1 class="text-muted">Our ITM Club Committee</h1>
    </div>
    <br>
    <br>
    <div class="container">
      <!-- First Line: Single Card at the Top -->
      <div class="row ">
        <div class="col-md-12">
          <div class="faculty-card">
            <div class="circular-image">
              <img src="{{asset('frontend/image/teacher/nusratjahan.png')}}" class="card-img-top" alt="Circular Image">
            </div>
            <div class="card-body">
              <!-- Content for the second card in the second line -->
              <h4>Ms.Nusrat Jahan</h4>
            <h5 class="text-warning">Convener</h5>
            <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-facebook icon"></i></a>
            <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-linkedin icon1"></i></a>
            <a href="nusrat.swe@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
            <a href="+8801847334996"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-md-4">
          <div class="faculty-card ">
            <div class="circular-image">
              <img src="/model/teacher/ashik.jpg" class="card-img-top" alt="Circular Image">          </div>
            <div class="card-body">
            
              <h4>Dr.Ashikur Rahman</h4>
                  <h5>Lecturer (Senior Scale) </h5>
                  <a href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-facebook icon"></i></a>
                  <a href="https://www.facebook.com/ashik.rahman.370515"><i class="fa-brands fa-linkedin icon"></i></a>
                  <a href="ashikur.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon"></i></a>
                  <a href="01312075927"><i class="fa-solid fa-square-phone icon"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="faculty-card">
            <div class="circular-image">
              <img src="/model/teacher/nafees.png" class="card-img-top" alt="Circular Image">
            </div>
            <div class="card-body">                 
              <h4>Mr.Nafees Imran</h4>
                  <h5>Lecturer </h5>
                  <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-facebook icon"></i></a>
            <a href="https://www.facebook.com/nafees.imran.7"><i class="fa-brands fa-linkedin icon"></i></a>
            <a href="nafees.itm@diu.edu.bd"><i class="fa-solid fa-envelope icon"></i></a>
            <a href="01880829404"><i class="fa-solid fa-square-phone icon"></i></a>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="faculty-card">
            <div class="circular-image">
              <img src="/model/teacher/raisul.png" class="card-img-top" alt="Circular Image">
            </div>
            <div class="card-body">
              <h4>Raisul Kabir News</h4>
              <h5>Lecturer</h5>
              <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-facebook icon"></i></a>
            <a href="https://www.facebook.com/raisul.kabir.31"><i class="fa-brands fa-linkedin icon"></i></a>
            <a href="raisul.itm0007.c@diu.edu.bd"><i class="fa-solid fa-envelope icon"></i></a>
            <a href="01402052440"><i class="fa-solid fa-square-phone icon"></i></a>
            </div>
          </div>
        </div>
      </div>
  </div> -->

<br>

      <div class="row">
        <div class="col-md-4">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/sajeed.jpg')}}"class="photo">
          </div>
        </div>

        <div class="col-md-4">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/sakib.jpg')}}"class="photo">

          </div>
        </div>
  
        <div class="col-md-4">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/roman.jpg')}}"class="photo">
          </div>
        </div>
        </div>

        <br>
      
        
<div class="container-fluid">
   <div class="row p-3">
        <div class="col-md-3">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/maisha.jpg')}}"class="photo">
          </div>
        </div>
         
      
        <div class="col-md-3">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/elias.jpg')}}"class="photo">
          </div>
        </div>
        
  
        <div class="col-md-3">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/kawsar.jpg')}}"class="photo">
          </div>
        </div>

        <div class="col-md-3">
          <div class="student-card">
            <img src="{{asset('frontend/image/committee/sumaiya.jpg')}}"class="photo">
          </div>
        </div>
  </div>
   <div class="row p-3">
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/efti.jpg"class="photo">
          </div>
        </div>
         
      
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/akash.jpg"class="photo">
          </div>
        </div>
        
  
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/elahi.jpg"class="photo">
          </div>
        </div>

        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/shariful.jpg"class="photo">
          </div>
        </div>
  </div>
   <div class="row p-3">
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/tonima.jpg"class="photo">
          </div>
        </div>
         
      
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/tonne.jpg"class="photo">
          </div>
        </div>
        
  
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/nahin.jpg"class="photo">
          </div>
        </div>

        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/mifta.jpg"class="photo">
          </div>
        </div>
  </div>

   <div class="row p-3">
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/roshni.jpg"class="photo">
          </div>
        </div>
         
      
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/kashfia.jpg"class="photo">
          </div>
        </div>
        
  
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/bushra.jpg"class="photo">
          </div>
        </div>

        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/anika.jpg"class="photo">
          </div>
        </div>
  </div>
   <div class="row p-3">
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/athay.jpg"class="photo">
          </div>
        </div>
         
      
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/ashraf.jpg"class="photo">
          </div>
        </div>
        
  
        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/nafiz.jpg"class="photo">
          </div>
        </div>

        <div class="col-md-3">
          <div class="student-card">
            <img src="frontend/image/committee/mong.jpg"class="photo">
          </div>
        </div>
  </div>
   <div class="row p-3">
        <div class="col-md-6">
                <div class="student-card">
                  <img src="frontend/image/committee/masum.jpg"class="photo">
                </div>
              </div>
        <div class="col-md-6">
                <div class="student-card">
                  <img src="frontend/image/committee/ovi.jpg"class="photo">
                </div>
              </div>
         
  </div>
  </div>
  <br>
  <br>
  <br>

</section>
@endsection