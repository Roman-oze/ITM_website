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
    <div class="row mt-5">
        <!-- Member Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 001</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <!-- Member Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 002</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 003</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <!-- Add more member cards as needed -->
    </div>
    <div class="row mt-5">
        <!-- Member Card 1 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 004</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <!-- Member Card 2 -->
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 005</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-danger">Member ID: 006</h4>
                    <h5 class="card-text text-muted bg-info p-2 rounded">Name: John Doe</h5>
                    <p class="card-text">Department: Computer Science</p>
                    <p class="card-text">Mobile: +88017*******</p>
                    <p class="card-text">Address: Mohammadpur ,Dhaka </p>
                </div>
            </div>
        </div>

        <!-- Add more member cards as needed -->
    </div>
</div>

@endsection