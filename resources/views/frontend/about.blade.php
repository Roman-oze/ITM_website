@extends('layout.master')

@section('content')
<br>
<br>
<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
    <div class="col-lg-8 align-self-end">
        <h1 class="text-success  font-weight-bold">Our Campus</h1>
    </div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="col-lg-8 align-self-baseline d-flex">
        <p class="text-white-50 mb-5">""Daffodil International University, situated in the vibrant heart of Dhaka, Bangladesh, offers a dynamic learning environment. Nestled in the midst of cultural richness and urban energy, our campus provides students with an inspiring backdrop to pursue their academic endeavors. Explore the fusion of education and culture as you navigate your learning journey at Daffodil International University."</p>
    </div>
    {{-- <img src="{{asset('frontend/image/diu_admission.jpg')}}" class="w-50 h-50"> --}}
    <img src="{{asset('frontend/image/ab-four-building.png')}}" class="w-50 h-60">
</div>
<br>
<br>
<br>
{{-- <div class="row justify-content-center mb-5">

  </div>
<div class="container">
    <div class="row">
        <div class="col-4 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
            <div class="staff text-center">
              <div class="mb-4"><img src="{{asset('frontend/image/jobfair.png')}}" alt="Image" class="img-fluid"></div>
              <div class="staff-body">
                <h3 class="staff-name">Job Fair</h3>
                <span class="d-block position mb-4">FOR ALL OF STUDENTS</span>
                <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                <div class="social">
                  <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
                  <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
                  <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
                </div>
              </div>
            </div>
          </div>

      <div class="col-4 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        <div class="staff text-center">
          <div class="mb-4"><img src="{{asset('frontend/image/visite.jpg')}}" alt="Image" class="img-fluid"></div>
          <div class="staff-body">
            <h3 class="staff-name">Industry Visits</h3>
            <span class="d-block position mb-4">FOR ALL OF STUDENTS</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social">
              <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-4 col-sm-6 col-md-6 mb-4 mb-lg-0 col-lg-4 aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
        <div class="staff text-center">
          <div class="mb-4"><img src="{{asset('frontend/image/internship3.png')}}" alt="Image" class="img-fluid"></div>
          <div class="staff-body">
            <h3 class="staff-name">Internship</h3>
            <span class="d-block position mb-4">FOR ALL OF STUDENTS</span>
            <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social">
              <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  {{-- <div class="container"> --}}
    <div class="text-center aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        <h2 class="line-bottom text-warning text-center mb-4">Why Choose ITM!</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      </div>
      <br>
      <br>
      <br>
    <div class="container">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card mb-4  p-3 jobfair_bg">
          <div class="mb-4">
            <div class="mb-4"><img src="{{asset('frontend/image/jobfair2.png')}}" alt="Image" class="img-fluid"></div>
        </div>
          <div class="staff-body ">
            <h3 class="staff-name text-info">Job Fair</h3>
            <span class="text-white-50 d-block position mb-4">FOR ALL OF STUDENTS</span>
            <p class="mb-4 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social">
              <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card mb-4  p-3 bg-dark">
          <div class="mb-4">
            <div class="mb-4"><img src="{{asset('frontend/image/visite.jpg')}}" alt="Image" class="img-fluid"></div>
        </div>
          <div class="staff-body">
            <h3 class="staff-name text-info">Industry Visits</h3>
            <span class="d-block position mb-4 text-white-50">FOR ALL OF STUDENTS</span>
            <p class="mb-4 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social">
              <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2"><span class="icon-twitter"></span></a>
              <a href="#" class="mx-2"><span class="icon-linkedin"></span></a>
            </div>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card mb-4 p-3 bg-black">
          <div class="mb-4">
            <div class="mb-4"><img src="{{asset('frontend/image/internship3.png')}}" alt="Image" class="img-fluid"></div>
        </div>
          <div class="staff-body">
            <h3 class="staff-name text-info">Internship</h3>
            <span class="d-block position mb-4 text-white-50">FOR ALL OF STUDENTS</span>
            <p class="mb-4 text-white">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
            <div class="social">
              <a href="#" class="mx-2"><span class="icon-facebook"></span></a>
              <a href="#" class="mx-2"></a>
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
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>


<div class ="container-fluid">
    <div class="gy-4">
        <h1 class="header1 ">Our Location <i class="fa-solid fa-location-dot icon1 text-danger"></i></h1>
        </div>
        <br>
        <br>
    <div class="row">
        <div class="col-md-6 ">
            <div class="item">
              <div class="imagee">
                <img src="{{asset('frontend/image/campus.jpeg')}}" class="imgg">
              </div>
              <div class="description">
                <p  class="pp">Main Campus</p>
                <button class="baton p-2">View</button>
              </div>
            </div>
            <div class="item">
                <div class="imagee">
                   <img src="{{asset('frontend/image/ab4building.jpeg')}}" class="imgg">
                </div>
                <div class="description">
                    <p class="pp">AB4 Building </p>
                    <button class="baton p-2">View</button>
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
            <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d29187.16159450864!2d90.320302!3d23.875601!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c23dd12bbc75%3A0x313d214552eabe56!2sDaffodil%20Smart%20City!5e0!3m2!1sen!2sbd!4v1702204472544!5m2!1sen!2sbd" width="100%" height="450px" style="border: 1px;"></iframe>
        </div>
    </div>
</div>

@endsection
