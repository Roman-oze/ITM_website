@extends('club._club_master')




  <!-- <div id="demo" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="/model/event_photo/fin.jpg" alt="Los Angeles" class="d-block carousel-img">
      </div>
      <div class="carousel-item">
        <img src="/model/event_photo/orient.jpg" alt="Chicago" class="d-block carousel-img">
      </div>
      <div class="carousel-item">
        <img src="/model/event_photo/fundation day.jpg" alt="New York" class="d-block carousel-img">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
    </button>
  </div>
   -->

<!-- Navigation -->
@section('club_header')
 <div class="container-fluid ">
<br>
<br>
<br>
<br>
        <div class="row">
          <div class="col-md-6 col-sm-12  text-center">
            <img src="{{asset('frontend/image/itmclub.png')}}" class="images animate__animated animate__fadeInLeft">
          </div>
          <div class="col-md-6 paragh col-sm-12  text-center">
           <h3 class="btnn animate__animated animate__bounce">Join Our Club</h3><br>


          <img src="{{asset('frontend/image/qr.png')}}" class="QR">
          <b><p class="p-3"> Department of Information Technology & Management and ITM Club Facebook page here do like follow and share </p></b>
          <a href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a></i>
          <a href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i><br>


        </div>
        </div>
      </div>
      <br>
@endsection

@section('main_content')

<!-- Welcome Section -->
<section class="welcome-section">
  <div class="container p-1">

        <div class="jumbotron text-center bgcolorpic animate__animated animate__fadeInLeft">
          <br>
          <br>
          <br>
          <br>
          <br>
          <h1 class="  text-white text-center h1border ">Welcome to the Academic Club</h1><br>
          <p class="lead text-dark  text-center pborder">Explore the world of knowledge with us!</p>
        </div>
    </div>
</section>


<!-- About Section -->

<section id="about" class="about-section">
  <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto  col-md-6  col-xs-12   bg-light ">
          <h1 class="text-center text-primary p-3 ">About Our ITM Club</h1>
          <p class="lead ">The ITM Club is a vibrant community dedicated to fostering innovation, technology, and management skills among its members. Through workshops, seminars, and networking events, the club provides opportunities for students to explore cutting-edge trends, collaborate on projects, and develop leadership abilities. With a focus on empowering individuals in the rapidly evolving fields of information technology and management, the ITM Club serves as a catalyst for personal and professional growth, preparing its members for success in the digital age.
          </p>

        </div>
      </div>
  </div>
</section>


     {{-- @include('frontend.upcoming') --}}


      <div class=" headdiv mt-5" >
        <h1 class="text-muted">Our ITM Club Committee</h1>
      </div>
      <br>
      <br>

      {{-- <div class="container">
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
   --}}
  <br>

      <div class="container mt-5">
        <div class="row">
          <div class="col-md-3">
            <div class="student-card">
              <h5 class="text-warning text-bold">Convener</h5>
              <img src="{{asset('frontend/image/teacher/imran.png')}}" class="img00 rounded">
            </div>
          </div>
          <div class="col-md-3">
            <div class="student-card">
              <h5 class="text-text-dark">President</h5>
              <img src="{{asset('frontend/image/committee/sajeed.jpg')}}"class="img00 rounded">
            </div>
          </div>
          <div class="col-md-3">
            <div class="student-card">
              <h5 class="text-text-dark">Vice-President</h5>
              <img src="{{asset('frontend/image/committee/sakib.jpg')}}"class="img00 rounded">

            </div>
          </div>
          <div class="col-md-3">
            <div class="student-card">
              <h5 class="text-dark">Vice-President</h5>
              <img src="{{asset('frontend/image//committee/roman.jpg')}}"class="img00 rounded">
            </div>
          </div>
          </div>
        </div>
          <br>



<br>
<br>
<br>
<br>
<br>
<section id="gellary">
  <div class="heading">
    <h1 class=" text-center">Club Gallary</h1>
    <div class="divider-custom">
      <div class="divider-custom-line"></div>
      <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
      <div class="divider-custom-line"></div>
  </div>
  </div>
  <div class="container">
    <div class="row mt-5">
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/aymansadik.jpg')}}" class="img00  rounded">

            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/img0.jpg')}}" class="img00  rounded">

            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/img1.jpg')}}" class="img00  rounded">

            </div>

          </div>

    <div class="row mt-5">
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/img2.jpg')}}" class="img00 rounded">

            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/img6.jpg')}}" class="img00 rounded">

            </div>
            <div class="col-md-4">
                <img src="{{asset('frontend/image/event_photo/img4.jpg')}}" class="img00  rounded">

            </div>

          </div>
    </div>

</section>
<br>

@endsection

