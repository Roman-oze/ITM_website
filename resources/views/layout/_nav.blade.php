{{-- <div id="top-bar">
    <div class="container-fluid small">
      <div class="row text-light text-center ">
        <div class="col-sm-6 py-1 text-sm-left">
            Information Technology & Management (I T M)
        </div>
        <div class="col-sm-6 py-1 text-sm-right">

            <a href="https://ee-eu.kobotoolbox.org/x/IIk80qMC" class="mr-1 text-white" target="_blank" data-toggle="tooltip" title="" data-original-title="Click here to go to the Survey Link">
                <i class="icon-coins mr-1" aria-hidden="true"></i> Survey Link
            </a>
                <a href="http://103.69.149.45:9305" class="text-reset" target="_blank" data-toggle="tooltip" title="" data-original-title="Click here to go to the LGCRRP test server">
                <i class="icon-database-remove mr-1" aria-hidden="true"></i> Test Server
                </a>

            <span class="m-2" data-toggle="modal" data-target="#exampleModalCenter">
                <i class="icon-help mr-1" aria-hidden="true" title="Help"></i>Helpline </span>

                <a href="https://play.google.com/store/apps/details?id=com.lged.ulgi.mis.com.lged.lgcrrp.misulgi" class="text-reset" target="_blank" data-toggle="tooltip" title="" data-original-title="LGCRRP মোবাইল অ্যাপ্লিকেশনটি Google Play Store-থেকে ডাউনলোড করুন। ">
                    <img alt="Play Store" src="https://lgcrrpmis.lged.gov.bd/images/google-play-store-icon.png" width="16" class="mr-1">
                </a>

                <a href="https://lgcrrpmis.lged.gov.bd/images/lgcrrp-mis-ulgi.apk" download="lgcrrp-mis-ulgi.apk" class="text-reset mr-2" target="_blank" data-toggle="tooltip" title="" data-original-title="LGCRRP মোবাইল অ্যাপ্লিকেশনটি ডাউনলোড করুন">
                LGCRRP (Apk)</a>

                <a href="https://lgcrrpmis.lged.gov.bd/bn//admin" class="text-reset"><i class="icon-reload-alt mr-1" aria-hidden="true"></i> বাংলা</a>
                 </div>
      </div>
    </div>
</div> --}}

<div class="container-fluid  ">
         <div class="row text-light  ">
        <div class="col-md-10  col-sm-10 py-1 text-left topbar-icon">
            <a  class="  p-2 navbar_text" href="https://www.facebook.com/diu.itm"><i class="fa-brands fa-facebook icontop"></i></a>
            <a  class=" text-dark p-2" href="https://www.facebook.com/itmclub.daffodilvarsity"><i class="fa-brands fa-linkedin icontop"></i></a>
            <a  class=" text-dark p-2" href="itmoffice@daffodilvarsity.edu.bd"><i class="fa-solid fa-envelope icontop"></i></a>
            <a  class=" text-dark p-2" href="01847-140039"><i class="fa-solid fa-square-phone  icontop"></i></a>
        </div>

        <div class="col-md-2  col-sm-2 py-1 ">

        <a class="topbar-btn" href="{{route('login')}}"><i class="fa-solid fa-lock "></i> Login</a>
        <a class="topbar-btn" href="{{route('register')}}"><i class="fa-solid fa-user "></i> Register</a>
        </div>
        </div>
    </div>

        <nav class="navbar navbar-expand-lg p-2   text-center" style="    background-color: rgb(7, 40, 47); ">
              <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/portal.png')}}" alt="" class="brand-logo "></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa-1x bg-info rounded-circle p-1"></span>
              </button>


              <div class="collapse navbar-collapse " id="navbarNav">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item">
                    <a class="nav-link link-hover" href="{{route('home')}}" ><i class="fa-solid fa-house s-4 homeicon text-white"></i></a>
                  </li>
                  <li class="nav-item "><div class="dropdown">
                    <a class="nav-link link-hover" href="#">Admission</a>
                        <div class="dropdown-content ms-auto rounded">

                            <a target="_blank" href="{{route('admission_eligibility')}}" class="nav-link text-dark">Admission Eligibility</a>
                            <a target="_blank" href="{{route('Local_tuition')}}" class="nav-link text-dark">Local Tuition</a>
                            <a target="_blank" href="{{route('international_tuition')}}" class="nav-link text-dark">International Tuition</a>
                            <a target="_blank" href="https://daffodilvarsity.edu.bd/admission-test" class="nav-link text-dark">Admission Test result</a>
                            <a target="_blank" href="" class="nav-link">Admission Notice</a>
                        </div>
                </li>
                  <li class="nav-item "><div class="dropdown">
                    <a class="nav-link link-hover" href="#">Students</a>
                        <div class="dropdown-content ms-auto rounded">
                            <a target="_blank" href="{{route('events')}}" class="nav-link text-dark">Events</a>
                            <a target="_blank" href="{{route('alumni')}}" class="nav-link text-dark">Alumni</a>
                            <a target="_blank" href="{{route('Local_tuition')}}" class="nav-link text-dark">Research</a>
                            <a target="_blank" href="{{route('international_tuition')}}" class="nav-link text-dark">Scholarship</a>
                            <a target="_blank" href="https://daffodilvarsity.edu.bd/admission-test" class="nav-link text-dark">Notice Board</a>
                        </div>
                </li>
                  <li class="nav-item">
                    <a class="nav-link link-hover" href="{{route('program')}}">Programs</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link link-hover" href="{{route('faculty.member')}}">Faculty Members</a>
                  </li>

                  {{-- <li class="nav-item">
                    <a class="nav-link" href="{{route('semester.routines')}}">Routine</a>
                  </li> --}}

                  <li class="nav-item">
                    <div class="dropdown rounded">
                        <a class="nav-link link-hover" href="#">Routine</a>
                            <div class="dropdown-content rounded">
                                <a class="text-dark h5" target="_blank" href="{{asset('frontend/image/ITM-Spring-2024-Routine.pdf')}}" class="nav-link">Spring-2024</a>
                                <a class="text-dark h5" target="_blank" href="{{route('semester.routines')}}"  class="nav-link">Fall-2024</a>
                            </div>
                         </li>
                  <li class="nav-item">
                    <a class="nav-link link-hover" href="{{route('about')}}">Contact</a>
                  </li>


                    <li >
                        <div class="right-padd animate__animated animate__bounce animate__repeat-2 admission-btn ">
                        <a target="_blank" class="bn50 p-3 " href="https://pd.daffodilvarsity.edu.bd/admission/online">Apply Online</a>
                    </div>
                </li>
              </div>
            </ul>

        </nav>
        {{-- <div id="hero">
            <div id="top-bar">
                <div class="container-fluid small">
                  <div class="row text-light text-center ">
                    <div class="col-sm-6 py-1 text-sm-left">
                        General Accounting and Reporting System(G A R S)
                    </div>
                    <div class="col-sm-6 py-1 text-sm-right">

                        <a href="https://ee-eu.kobotoolbox.org/x/IIk80qMC" class="mr-1 text-white" target="_blank" data-toggle="tooltip" title="" data-original-title="Click here to go to the Survey Link">
                            <i class="icon-coins mr-1" aria-hidden="true"></i> Survey Link
                        </a>
                            <a href="http://103.69.149.45:9305" class="text-reset" target="_blank" data-toggle="tooltip" title="" data-original-title="Click here to go to the LGCRRP test server">
                            <i class="icon-database-remove mr-1" aria-hidden="true"></i> Test Server
                            </a>

                        <span class="m-2" data-toggle="modal" data-target="#exampleModalCenter">
                            <i class="icon-help mr-1" aria-hidden="true" title="Help"></i>Helpline </span>

                            <a href="https://play.google.com/store/apps/details?id=com.lged.ulgi.mis.com.lged.lgcrrp.misulgi" class="text-reset" target="_blank" data-toggle="tooltip" title="" data-original-title="LGCRRP মোবাইল অ্যাপ্লিকেশনটি Google Play Store-থেকে ডাউনলোড করুন। ">
                                <img alt="Play Store" src="https://lgcrrpmis.lged.gov.bd/images/google-play-store-icon.png" width="16" class="mr-1">
                            </a>

                            <a href="https://lgcrrpmis.lged.gov.bd/images/lgcrrp-mis-ulgi.apk" download="lgcrrp-mis-ulgi.apk" class="text-reset mr-2" target="_blank" data-toggle="tooltip" title="" data-original-title="LGCRRP মোবাইল অ্যাপ্লিকেশনটি ডাউনলোড করুন">
                            LGCRRP (Apk)</a>

                            <a href="https://lgcrrpmis.lged.gov.bd/bn//admin" class="text-reset"><i class="icon-reload-alt mr-1" aria-hidden="true"></i> বাংলা</a>
                             </div>
                  </div>
                </div>
            </div>
            <!-- /#top-bar -->

            <header class="site-header text-white position-relative">
              <nav class="navbar navbar-expand-lg navbar-light p-2 ">
                <img src="{{url('/images/logo.png')}}" class="pf ">

                <div class="d-inline-block mt-1">
                    <div class="h4 d-none font-weight-bold d-sm-block my-0 text-white">G A R S
                    </div>

                    <h5 class="site-subtitle my-0  ">
                        <span class="d-none d-sm-block text-white">General Accounting and Reporting System </span> <span class="d-block d-sm-none" aria-hidden="true"><abbr title="Local Government Engineering Department (LGED)">LGED</abbr></span>
                    </h2>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse p-2" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#" rel="home">
                                <i class="fa-solid fa-house"></i> Home</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="">
                                <i class="fa-solid fa-globe"></i> Complaint (GRS)
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="">
                                <i class="fa-solid fa-user-plus"></i> Registration
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white-50" href="{{route('login')}}">
                                <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
                            </a>
                        </li>

                        </ul>
                    </nav>

            </header>
        </div>
 --}}

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
