
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
            </div></li>
            <li class="nav-item p-1"> <div class=" col-md-1 text-center apply">
                <button id="mode-toggle">
                    <i id="mode-icon" class="fas fa-sun icon1"></i>
                </button>
                </div></li>

        </ul>