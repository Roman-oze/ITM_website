

@include('faculty.faculty_style')


@extends('layout.app')

@section('headerpage')

<br>
<br>
<div class="contaienr">
<div class="row gx-4 gx-lg-5 align-items-center  justify-content-center text-center p-4">
    <div class="col-lg-8 align-self-end p-3">
        <h1 class="faculty-section-heading text-uppercase text-white">Faculty</h1>
    </div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-circle"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <br>
    <br>
    <div class="col-lg-8 mt-3 align-self-baseline  rounded-3 p-3 custom-box  border-900 box">
        <p class="text-white-50 p-4">Become a catalyst for transformation at Daffodil International University. As a faculty member, you'll inspire minds, foster innovation, and contribute to academic excellence. Join us in shaping the leaders of tomorrow and experiencing a fulfilling journey of professional growth and impact."
 </p>
</div>
</div>
</div>
@endsection

@section('content')
    <!-- First Line: Single Card at the Top -->
    <div class="container">
    <div class="row d-flex justify-content-evenly">
       @foreach ($teachers_new as $teacher)
        <div class="col-md-4 p-3">
        <div class="faculty-card1">

            <img src="{{asset($teacher->image)}}" class="card-img-top  " alt="Circular Image">
     
            <div class="faculty-card-content">
                <div class="head"><p> Head of ITM  Department</p></div>
                <h2 class="text-white">{{($teacher->name)}}</h2>
                <h5 class="text-white-50">{{($teacher->designation)}}</h5>
                <a href="{{($teacher->fb)}}"><i class="fa-brands fa-facebook icon1 p-2"></i></a>
                <a href="{{($teacher->linked)}}"><i class="fa-brands fa-linkedin icon1 p-2" ></i></a>
                <a href="{{($teacher->email)}}"><i class="fa-solid fa-envelope icon1 p-2"></i></a>
                <a href="{{($teacher->phone)}}"><i class="fa-solid fa-square-phone icon1 p-2"></i></a>

            </div>
        </div>
      </div>
      @endforeach
    </div>
    </div>

    <br>

    <div class="container mt-5">

        <div class="row d-flex justify-content-evenly ">
                @foreach ($teachers_new as $teacher)
                <div class="col-md-3 p-3">
                <div class="flip-card  ">
                 <div class="flip-card-inner">
                   <div class="flip-card-front ">
             <div class="child-div ">
                     <div class="mb-4 "><img src="{{asset($teacher->image)}}" alt="Image" class="faculty-custom"></div>
                     <div class="text">
                        <h3 class="text-dark">{{($teacher->name)}}</h3>
                     <p class="text-muted">{{($teacher->designation)}}</p>
                 </div>
                 </div>
                 </div>
                   <div class="flip-card-back p-3 text-left" style="line-height:22px;">
                         <h2>{{($teacher->name)}}</h2>
                         <hr>
                         <p class="text-white">{{($teacher->designation)}}</p>

                             <p>Khagan,Ashulia,Dhaka,1203</p>

                             <div class="social-links text-center ">
                                <a href="{{($teacher->fb)}}"><i class="fa-brands fa-facebook icon1 p-2"></i></a>
                                <a href="{{($teacher->linked)}}"><i class="fa-brands fa-linkedin icon1 p-2"></i></a>
                                <a href="{{($teacher->email)}}"><i class="fa-solid fa-envelope icon1  p-2"></i></a>
                                <a href="{{($teacher->phone)}}"><i class="fa-solid fa-square-phone icon1  p-2"></i></a>
                             </div>
                   </div>
                 </div>
               </div>
               </div>
               @endforeach
               </div>
               </div>



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


<div class="container-fluid bg-light p-5 mt-5">
    <div class="row mt-3">
        <div class="col-md-12 col-sm-12">
            <h5 class="heading_30 mb_50 h1 " data-bs-aos="fade-up" data-bs-aos-delay="100">Department of Information Technology &amp; Management</h5>
        </div>

    </div>







    <div class="row mt-5 text-center border-1 p-2 text-dark">
        @foreach ($staffs as $staff)
      <div class="col-md-3">
        <div class="card img-fluid-custom">
          <div class="card-body ">
            <div class="text-center ">
            <img src="{{ asset($staff->image) }}" class="faculty-custom rounded-circle" alt="Circular Image">
        </div>
        <div class="p-2">
            <h4 class="text-black">{{$staff->name}}</h4>
            <p class="text-black">{{$staff->position}}</p>
        </div>
            <div class="mt-2">
              <a href="{{$staff->email}}" class="text-black p-3"><i class="fa-solid fa-envelope icon2"></i></a>
              <a href="{{$staff->mobile}}" class="text-black p-3"><i class="fa-solid fa-square-phone icon2"></i></a>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </div>






            {{-- <div class="row mt-2">
            <div class="col-md-12 col-sm-12 col-sm-12">
                <h5 class="text_blue text_bold mb_30 h2 text-success" data-bs-aos="fade-up" data-bs-aos-delay="200">Head of the Department</h5>
            </div>
        </div>
        <div class="row">

                  <div class="contact_box mb_85 col-md-6 col-sm-12" data-bs-aos="fade-up" data-bs-aos-delay="400">
                     <p class="text_bold mb_12"><strong>Ms. Nusrat Jahan</strong></p>                                                                                            <p class="mb_30">Assistant Professor</p>
                           <div class="contact_wrap">
                            <i class="fas fa-phone-alt "></i>
                            <a class="text-muted" href="tel:+8801713493250">01847334996</a>
                        </div>
                            <div class="contact_wrap">
                            <i class="fas fa-envelope"></i>
                            <a   class="text-muted" href="mailto:deanfsit@daffodilvarsity.edu.bd">headitm@daffodilvarsity.edu.bd</a>
                        </div>
                         <div class="contact_wrap">
                        </div>
                             </div>
                          </div> --}}

           {{-- <div class="row mt-5">
            <div class="col-md-12 col-sm-12 ">
                <h5 class="text_blue text_bold mb_30 h2 text-success" data-bs-aos="fade-up" data-bs-aos-delay="200">Offices of the Department</h5>
            </div>
        </div>

        <div class="row">
            @foreach ($staffs as $staff)
                <div class="col-md-3">
                       <div class="contact_box mb_85 col-md-6 col-sm-12" data-bs-aos="fade-up" data-bs-aos-delay="500">
                     <p class="text_bold mb_12"><strong>{{$staff->name}}</strong></p>                                                                                            <p class="mb_30">Assistant Coordination Officer</p>
                             <div class="contact_wrap">
                            <i class="fas fa-phone-alt"></i>
                            <a class="text-muted" href="tel:+8801713493250">01847140039</a>
                        </div>
                            <div class="contact_wrap">
                            <i class="fas fa-envelope"></i>
                            <a  class="text-muted" href="mailto:deanfsit@daffodilvarsity.edu.bd">itmoffice@daffodilvarsity.edu.bd</a>
                        </div>
                         <div class="contact_wrap">
                        </div>
                        </div>
                         </div>
                    @endforeach
                            </div> --}}


  @endsection
