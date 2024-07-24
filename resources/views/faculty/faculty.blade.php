

@include('faculty.faculty_style')


@extends('layout.app')

@section('headerpage')

<br>
<br>
<div class="row gx-4 gx-lg-5 align-items-center  justify-content-center text-center">
    <div class="col-lg-8 align-self-end">
        <h1 class="faculty-section-heading text-uppercase text-white">Faculty</h1>
    </div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-circle"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <br>
    <div class="col-lg-8 align-self-baseline  rounded-3 p-3 shadow-lg border-900 box">
        <p class="text-white-50 p-4">Become a catalyst for transformation at Daffodil International University. As a faculty member, you'll inspire minds, foster innovation, and contribute to academic excellence. Join us in shaping the leaders of tomorrow and experiencing a fulfilling journey of professional growth and impact."
 </p>
</div>
</div>    
@endsection

@section('content')
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

    <br>

    {{-- <div class="container">

        <div class="row ">
            <div class="col-md-6">
              <div class="faculty-card1">
                  <img src="{{asset('frontend/image/teacher/male.png')}}" class="card-img-top" alt="Circular Image">
                  <div class="faculty-card-content">
                      <div class="head"><p> Dean of ITM  Department</p></div>
                      <h2>Bimul chandra Das</h2>
                      <h5>Assistant Professor </h5>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-facebook icon1"></i></a>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-linkedin icon1"></i></a>
                      <a href="nusrat.swe@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                      <a href="+8801847334996"><i class="fa-solid fa-square-phone icon1"></i></a>

                  </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="faculty-card1">
                  <img src="{{asset('frontend/image/teacher/male.png')}}" class="card-img-top" alt="Circular Image">
                  <div class="faculty-card-content">
                      <div class="head"><p> Dean of ITM  Department</p></div>
                      <h2>Bimul chandra Das</h2>
                      <h5>Assistant Professor </h5>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-facebook icon1"></i></a>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-linkedin icon1"></i></a>
                      <a href="nusrat.swe@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                      <a href="+8801847334996"><i class="fa-solid fa-square-phone icon1"></i></a>

                  </div>
              </div>
            </div>
          </div>
    </div> --}}
    <br>
    <br>
    <br>
    {{-- <div class="container mt-5">

        <div class="row d-flex justify-content-evenly">
            <div class="col-md-6 ">
                <div class="faculty-card1 custom-box ">
                    <img src="{{ asset($teachers->image) }}" class="card-img-top " alt="Circular Image">
                    <div class="faculty-card-content">
                        <div class="head"><p>{{$teachers->designation}}</p></div>
                        <h4 class="text-white">{{$teachers->name}}</h4>
                        <h5 class="text-white-50">Associate Dean</h5>
                        <a href="{{$teachers->fb}}"><i class="fa-brands fa-facebook icon1"></i></a>
                        <a href="{{$teachers->linked}}"><i class="fa-brands fa-linkedin icon1"></i></a>
                        <a href="{{$teachers->phone}}"><i class="fa-solid fa-envelope icon1"></i></a>
                        <a href="{{$teachers->phone}}"><i class="fa-solid fa-square-phone icon1"></i></a>

                    </div>
                </div>
              </div>
            <div class="col-md-6">
              <div class="faculty-card1 custom-box ">
                  <img src="{{asset('frontend/image/teacher/nusratjahan.png')}}" class="card-img-top" alt="Circular Image">
                  <div class="faculty-card-content">
                      <div class="head"><p> Head of ITM  Department</p></div>
                      <h4 class="text-white">Ms. Nusrat Jahan</h4>
                      <h5 class="text-white-50">Assistant Professor </h5>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-facebook icon1"></i></a>
                      <a href="https://www.facebook.com/momo.nusrat"><i class="fa-brands fa-linkedin icon1"></i></a>
                      <a href="nusrat.swe@diu.edu.bd"><i class="fa-solid fa-envelope icon1"></i></a>
                      <a href="+8801847334996"><i class="fa-solid fa-square-phone icon1"></i></a>

                  </div>
              </div>
            </div>

          </div>
    </div> --}}

<br>
<br>
<br>
<br>
    <!-- Second Line: Three Cards -->
    <div class="container mt-5">
    <div class="row">

        @foreach ($teachers as $teacher)

        <div class="col-md-4 ">
            <div class="circular">
                <div class="img-bg">
                <img src="{{ asset($teacher->image) }}" class="mx-auto rounded-circle" alt="Circular Image">
                </div>
                <br>
                <h4 class="p-2 text-info">{{$teacher->name}}</h4>
                <p class="text-white">{{$teacher->designation}}</p>
                <div class="">
                    <a href="{{$teacher->fb}}" class="p-2"><i class="fa-brands fa-facebook icon1"></i></a>
                    <a href="{{$teacher->linked}}" class="p-2"><i class="fa-brands fa-linkedin icon1"></i></a>
                    <a href="mailto:{{$teacher->email}}" class="p-2"><i class="fa-solid fa-envelope icon1"></i></a>
                    <a href="{{$teacher->phone}}" class="p-2"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
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

{{--
<div class="mt-5 text-center">
    <h1 class="text-center border-1 p-2 bg-white text-info">Contractual Faculty</h1>
</div>

<div class="container mt-5">
    <div class="row">
      <div class="col-md-3">
        <div class="card">
          <div class="card-body bg-dark">

            <img src="{{asset('frontend/image/teacher/female.jpg')}}" class="mx-auto img-fluid mb-3" alt="Circular Image">
            <h4 class="text-white">name:</h4>
            <p class="text-white">{{$teacher->designation}}</p>
            <div class="mt-2">
              <a href="{{$teacher->fb}}" class="text-white"><i class="fa-brands fa-facebook icon1"></i></a>
              <a href="{{$teacher->linked}}" class="text-white"><i class="fa-brands fa-linkedin icon1"></i></a>
              <a href="mailto:{{$teacher->email}}" class="text-white"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="tel:{{$teacher->phone}}" class="text-white"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="card">
          <div class="card-body bg-dark">

            <img src="{{asset('frontend/image/teacher/female.jpg')}}" class="mx-auto img-fluid mb-3" alt="Circular Image">
            <h4 class="text-white">name:</h4>
            <p class="text-white">{{$teacher->designation}}</p>
            <div class="mt-2">
              <a href="{{$teacher->fb}}" class="text-white"><i class="fa-brands fa-facebook icon1"></i></a>
              <a href="{{$teacher->linked}}" class="text-white"><i class="fa-brands fa-linkedin icon1"></i></a>
              <a href="mailto:{{$teacher->email}}" class="text-white"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="tel:{{$teacher->phone}}" class="text-white"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> --}}


  {{-- <div class="mt-5 text-center">
    <h1 class="text-center border-1 p-2 bg-white text-dark">Offices Stafft</h1>
</div>

<div class="container mt-5">
    <div class="row">
        @foreach ($staffs as $staff)
      <div class="col-md-3">
        <div class="card">
          <div class="card-body bg-dark">
            <img src="{{ asset($staff->image) }}" class="mx-auto img-fluid mb-3" alt="Circular Image">
            <h4 class="text-white">{{$staff->name}}</h4>
            <p class="text-white">{{$staff->position}}</p>
            <div class="mt-2">
              <a href="{{$staff->email}}" class="text-white"><i class="fa-solid fa-envelope icon1"></i></a>
              <a href="{{$staff->mobile}}" class="text-white"><i class="fa-solid fa-square-phone icon1"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div> --}}

  <br>
  <br>

@endsection
