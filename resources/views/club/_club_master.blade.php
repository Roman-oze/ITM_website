
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Academic Club</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="{{asset('frontend/css/styles.css')}}">
  
</head>

    <nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top p-2">
        <img src="{{asset('frontend/image/clubimage.png')}}" class="logo" href="#">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="text-muted border-bottom" href="{{route('homepage')}}">ITM Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="" href="{{route('club')}}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{route('committee')}}">Committee</a>
                </li>
                <li class="nav-item">
                    <a class="" href="{{route('membership')}}">Membership</a>
                </li>
                <li class="nav-item">
                    {{-- <a class="" href="{{route('events')}}">Upcoming Events</a> --}}
                    <a class="" href="{{route('upcoming')}}">Upcoming Events</a>
                </li>
                <li class="nav-item">
                    <a class="" href="#contact">Contact</a>
                </li>
                <li class="nav-item p-2">
                  <li><a href="{{route('create')}}" class="link">Registration</a></li>
    
                </li>
            </ul>
        </div>
        
    </nav>

<header>
      <br>
      <br>
      @yield('club_header')
      <br>
      <br>
</header>

<div class="container">
    @yield('main_content')
</div>

<footer>
    <section id="contact">
        <div class="row text-center bgcolor">
          <div class="contact-header">
            <h1 class="text-dark bg-light ">Contact Us</h1>
        </div>
            <div class="col-md-3 text-center">
                <img src="{{asset('frontend/image/clubimage.png')}}" class="img0">
                <div class="fb text-center">
      
                  <a href="https://www.facebook.com/islamfull.5" class="face">Facebook <i class="fa-brands fa-facebook"></i></a></i>
                  <a href="https://www.youtube.com/channel/UClBIz9HlgUBfzYvnj-xX2-w" class="tube">Youtube <i class="fa-brands fa-youtube"></i></a></i><br>
                     </div>
                     <br>
                </div>
            
            <div class="col-md-3 text-center  rounded">
                <h3 class="lead bg-light p-2">Social Media</h3>
                    <p>Home</p>
                    <p>About</p>
                    <p>Service</p>
                   
            </div>
            <div class="col-md-3 text-center  rounded ">
              <h3 class="lead bg-light p-2">Support</h3>
                <p>FAQ</p>
                <p>How it</p>
                <p>Features</p>
            </div>
            <div class="col-md-3 text-center rounded">
              <h3 class="lead bg-light p-2 ">Contact</h3>
                <p>+8801759676488</p>
                <p>itmclub@diu.edu.bd</p>
                <p>Ashulia,savar,Dhaka</p>
                    </div>
                    
        </div>
      </section>
        <br>
      
        <div class="bg-light text-center">
           <p class="lead bg-primary text-white">copyright by design @RomanOze</p>
        </div>  
      

</footer>
<script>
@include('layout._script')
</script>
