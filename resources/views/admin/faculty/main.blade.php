

@include('frontend.faculty_style')


@extends('layout.master')

@section('content')
<br>
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
<div class="facilty ">
  <br>
  <br>
  <div class="container main_div">
    <!-- First Line: Single Card at the Top -->
    {{-- <div class="row ">
      <div class="col-md-12">
        <div class="faculty-card1">
            <img src="{{asset($teacher->image)}}" class="card-img-top" alt="Circular Image">
            <div class="faculty-card-content">
                <div class="head"><p> Head of ITM  Department</p></div>
                <h2>{{($teacher->name)}}</h2>
                <h5>{{($teacher->designation)}}</h5>
                <a href="{{($teacher->fb)}}"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="{{($teacher->linked)}}"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="{{($teacher->email)}}"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="{{($teacher->phone)}}"><i class="fa-solid fa-square-phone icon1"></i></a>

            </div>
        </div>
      </div>
    </div> --}}

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

        @foreach ($teachers as $teacher)

        <div class="col-md-4 ">
           <div class="circular">
                <img src="{{asset($teacher->image)}}"  class="mx-auto rounded-circle" alt="Circular Image">
                <h4 class="p-2 text-muted">{{($teacher->name)}}</h4>
                <p class="text-muted">{{($teacher->designation)}}</p>
                <a href="{{($teacher->fb)}}"><i class="fa-brands fa-facebook icon1"></i></a>
                <a href="{{($teacher->linked)}}"><i class="fa-brands fa-linkedin icon1"></i></a>
                <a href="{{($teacher->email)}}"><i class="fa-solid fa-envelope icon1"></i></a>
                <a href="{{($teacher->phone)}}"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
      @endforeach

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
