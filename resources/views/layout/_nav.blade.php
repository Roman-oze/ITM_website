
<header id="header" class="fixed-top">

        <div class="container d-flex align-items-center">
            {{-- <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/portal.png')}}" alt="" class="brand-logo"></a> --}}
            {{-- <h1 class="logo me-auto"><a href="{{route('home')}}"><img src="{{asset('frontend/image/logo.png')}}" alt="" class="brand"></a></h1> --}}
            {{-- <h1 class=" text-white me-auto"><a href="index.html">I T M</h1> --}}
            <h1 class="logo me-auto"><a href="{{route('home')}}"><img src="{{asset('frontend/image/url_logo.jpg')}}" alt="" class="rounded"></a></h1>

          <nav id="navbar" class="navbar">
            <ul>
              <li>
                <a class="nav-link scrollto active" href="{{route('home')}}"><i class="fa-solid fa-house s-4 homeicon"></i></a>
              </li>
              {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
              <li>
                <div class="dropdown">
                    <a class="nav-link scrollto" href="#">Admission</a>
                    <div class="dropdown-content ms-auto rounded">
                      <a target="_blank" href="{{route('admission_eligibility')}}" class="nav-link text-info">Admission Eligibility</a>
                      <a target="_blank" href="{{route('Local_tuition')}}" class="nav-link text-info">Local Tuition</a>
                      <a target="_blank" href="{{route('international_tuition')}}" class="nav-link text-info">International Tuition</a>
                      <a target="_blank" href="https://daffodilvarsity.edu.bd/admission-test" class="nav-link text-info">Admission Test result</a>
                      <a target="_blank" href="" class="nav-link text-info">Admission Notice</a>
                    </div>
                  </div>
              </li>
              <li><div class="dropdown">
                <a class="nav-link scrollto" href="#">Students</a>
                <div class="dropdown-content ms-auto rounded">
                  <a target="_blank" href="{{route('events')}}" class="nav-link text-info">Events</a>
                  <a target="_blank" href="{{route('alumni')}}" class="nav-link text-info">Alumni</a>
                  <a target="_blank" href="{{route('scholarship')}}" class="nav-link text-info">Scholarship</a>
                  {{-- <a target="_blank" href="{{url('/admission/scholarship')}}" class="nav-link text-info">Scholarship</a> --}}
                  <a target="_blank" href="{{route('notice')}}" class="nav-link text-info">Notice Board</a>
                </div>
              </div></li>
              <li><a class="nav-link scrollto"  href="{{route('program')}}">Course</a></li>
              <li><a class="nav-link scrollto" href="{{route('faculty.member')}}">Faculty Members</a></li>
               <li>
                <div class="dropdown rounded">
                <a class="nav-link scrollto" href="#">Routine</a>
                <div class="dropdown-content rounded text-center">
                  {{-- <a class=" h5" target="_blank" href="{{asset('frontend/image/ITM-Spring-2024-Routine.pdf')}}" class="nav-link text-info">Spring-2024</a> --}}
                  <a class=" h5 text-dark" target="_blank" href="{{route('spring.routines')}}" class="nav-link text-info">Spring-2024</a>
                  <a class=" h5 text-dark" target="_blank" href="{{route('fall.routines')}}" class="nav-link  text-info">Fall-2024</a>
                </div>
              </div>
            </li>
              <li><a class="nav-link scrollto" href="{{route('about')}}">Contact</a></li>
              <li>
                <a class="getstarted scrollto " href="https://pd.daffodilvarsity.edu.bd/admission/online">Online Apply</a>
              </li>
              <li>
                <a class="getstarted scrollto" href="{{route('login')}}">Login <i class="fa-solid fa-lock"></i></a>
              </li>

            </ul>
            <i class="fa-solid fa-bars mobile-nav-toggle"></i>
          </nav>

        </div>
      </header>

