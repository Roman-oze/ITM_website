

{{-- <img src="{{asset('frontend/image/IT3.PNG')}}" class="pf ">
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
            <li class="nav-item p-1"></i><a href="{{route('homepage')}}"><i class="fa-solid fa-house s-4 homeicon"></i></a></li>
            <li class="nav-item p-1 navbar_text"> <a href="{{route('program')}}">Programs</a></li>
            <li class="nav-item p-1  navbar_text"><a href="{{route('main')}}">Faculty</a></li>
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
        </ul> --}}

              <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/logo.png')}}" alt="" class="pf "></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link " href="{{route('homepage')}}" active ><i class="fa-solid fa-house s-4 homeicon"></i></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('program')}}">Programs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('main')}}">Faculty</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('events')}}">Events</a>
                  </li>
                  <li class="nav-item">
                    <div class="dropdown">
                        <a class="nav-link" href="#">Routine</a>
                            <div class="dropdown-content bg-success rounded">
                                <a target="_blank" href="{{asset('frontend/image/ITM-Spring-2024-Routine.pdf')}}" class="nav-link">Spring-2024</a>
                                <a target="_blank" href="#"  class="nav-link">Fall-2024</a>
                            </div>
                         </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">Contact</a>
                  </li>



                <div class="right-padd animate__animated animate__bounce animate__repeat-2 ">
                    <li > <div class="p-1">
                    </div>
                </li>
                </div>
                <div class="right-padd animate__animated animate__bounce animate__repeat-2 ">
                    <li > <div class="p-1">
                        <a target="_blank" class="bn50 p-3 text-warning " href="https://pd.daffodilvarsity.edu.bd/admission/online">Apply</a>
                    </div>
                </li>
                </div>
              </div>
            </ul>



