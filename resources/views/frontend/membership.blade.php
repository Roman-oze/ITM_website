@extends('layout._club_master')

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
<div class="container mt-5">
    <div class="text-center d-block m-auto mt-1">
    <h2 class="d-block m-auto text-muted ">Club Members</h2>
</div>
    <div class="divider-custom">
        <div class="divider-custom-line"></div>
        <div class="divider-custom-icon"><i class="fa-solid fa-star"></i></div>
        <div class="divider-custom-line"></div>
    </div>
    <div class="row mt-5 p-5">


        <div class="col-lg-4 col-6 text-center p-5">
            <span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="0" class="purecounter"></span>
            <p class="text-color">Committee</p>
          </div>

        <div class="col-lg-4 col-6 text-center  p-5">
          <span data-purecounter-start="0" data-purecounter-end="421" data-purecounter-duration="0" class="purecounter"></span>
          <p class="text-color">Memebers</p>
        </div>


        <div class="col-lg-4 col-6 text-center p-5">
          <span data-purecounter-start="0" data-purecounter-end="10000" data-purecounter-duration="0" class="purecounter"></span>
          <p class="text-color">Budget</p>
        </div>

      </div>
    <div class="row mt-5">
        <!-- Member Card 1 -->
        @foreach ($student as $student)
            <div class="col-md-4 mb-4">
                <div class="card p-2 rounded">
                    <div class="card-body">
                        <h5 class="card-title text-muted">Member ID: <span class="text-dark">{{ $student->id }}</span></h5>
                        <h4 class="card-text text-white bg-info rounded p-2">{{ $student->name }}</h4>
                        <p class="card-text">Department: {{ $student->department }}</p>
                        <p class="card-text">Mobile: {{ $student->mobile }}</p>
                        <p class="card-text">Address: {{ $student->address }}</p>
                    </div>
                </div>

            </div>
        @endforeach
    </div>
</div>

@endsection
