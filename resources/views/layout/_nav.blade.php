
<img src="{{asset('frontend/image/IT3.PNG')}}" class="pf ">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
            <li class="nav-item p-1"></i><a href="{{route('homepage')}}"><i class="fa-solid fa-house s-4 homeicon"></i></a></li>
            <li class="nav-item p-1 navbar_text"> <a href="{{route('program')}}">Programs</a></li>
            <li class="nav-item p-1  navbar_text"><a href="{{route('faculty')}}">Faculty</a></li>
            <li class="nav-item p-1 navbar_text"><a href="{{route('events')}}">Upcoming Events</a></li>
            <li class="nav-item p-1 navbar_text"><div class="dropdown">
                <a href="#">Routine</a>
                    <div class="dropdown-content bg-info rounded">

                        <a target="_blank" href="{{asset('frontend/image/ITM-Spring-2024-Routine.pdf')}}" class="nav-link">Spring-2024</a>
                        <a target="_blank" href="#" >Fall-2024</a>
                    </div>
            </li>
            <li class="nav-item p-1 navbar_text"><a href="{{route('about')}}">About Us</a></li>
            <li > <div class="p-1">
                <a target="_blank" class="bn50 p-3 text-warning " href="https://pd.daffodilvarsity.edu.bd/admission/online">Apply</a>
            </div>
        </li>

            <div class="auth">
            <a  class="btn btn-outline btn-info" href="{{route('registration')}}" >Sign Up</a>
            <a class="btn btn-outline btn-danger" href="{{route('login')}}">Login</a>
            </div>


        </ul>
{{--
        <div class="container-fluid ">
            <div class="row  p-2">
        <div class="col-md-6 "> <a href="https://www.facebook.com/diu.itm"><i class="fa-brands fa-facebook "></i></a>
        <a href="https://www.facebook.com/itmclub.daffodilvarsity"><i class="fa-brands fa-linkedin "></i></a>
        <a href="itmoffice@daffodilvarsity.edu.bd"><i class="fa-solid fa-envelope"></i></a>
        <a href="01847-140039"><i class="fa-solid fa-square-phone "></i></a>
        </div>
        <div class="col-md-6 text-end">
        <button class="btn btn-outline btn-info">Sign Up</button>
        <button class="btn btn-outline btn-success">Login</button>
        </div>
            </div> --}}

