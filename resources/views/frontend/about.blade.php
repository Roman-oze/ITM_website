@extends('layout.master')
@section('headerpage')
<br>
<br>
<div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
    <div class="col-lg-8 align-self-end">
        <h1 class="text-muted  font-weight-bold">Our Campus</h1>





    </div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="col-lg-8 align-self-baseline d-flex">
        <p class="text-white-75 mb-5">""Daffodil International University, situated in the vibrant heart of Dhaka, Bangladesh, offers a dynamic learning environment. Nestled in the midst of cultural richness and urban energy, our campus provides students with an inspiring backdrop to pursue their academic endeavors. Explore the fusion of education and culture as you navigate your learning journey at Daffodil International University."</p>
    </div>
    {{-- <img src="{{asset('frontend/image/diu_admission.jpg')}}" class="w-50 h-50"> --}}
    <img src="{{asset('frontend/image/diuwinter.webp')}}" class="w-50 h-50">


</div>
@endsection





{{-- <x-header>
    <h1>header compoent</h1>
</x-header> --}}



@section('content')
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
            <img src="{{asset('frontend/image/printbg2.png')}}" class="twopartbg mt-1">
               </div>

        <div class="col-md-6 ">
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
