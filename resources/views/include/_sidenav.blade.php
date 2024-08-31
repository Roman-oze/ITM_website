
<div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark " id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">

                    <a class="nav-link" href="{{route('dashboard')}}">
                        <div class="sb-nav-link-icon text-white "><i class="fas fa-tachometer-alt fa-lg"></i></div>
                        Dashboard
                    </a>
                    <a class="nav-link collapsed  mt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-users text-white fa-lg"></i></div>
                        Users
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse p-1 " id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link " id="sidenavAccordionPages">
                            <a  href="{{route('users')}}" class="linked "> Admins</a>
                        </nav>
                    </div>
                    <div class="collapse p-1 " id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link" id="sidenavAccordionPages">
                            <a  href="" class="linked"> Upcoming</a>
                        </nav>
                    </div>



                    <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open  fa-lg text-white"></i></i></div>
                         Students
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse p-1" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link">
                            <a  href="{{route('dashboard.index')}}" class="linked ">Students</a>
                        </nav>
                    </div>
                    <div class="collapse p-1" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link">
                            <a  href="{{route('dashboard.alumni')}}" class="linked">Alumni</a>
                        </nav>
                    </div>
                    <div class="collapse p-1" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link">
                            <a  href="{{route('dashboard.scholarship')}}" class="linked">Scholarship</a>
                        </nav>
                    </div>

                    <a class="nav-link" href="{{route('contactForm')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-envelope text-white fa-lg"></i></div>
                        Send Mail
                    </a>
                    <a class="nav-link" href="{{route('contact.index')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-message fa-fw text-white fa-lg"></i></div>
                        Messages
                    </a>

                    <a class="nav-link" href="{{route('dashboard.faculty')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate text-white fa-lg"></i></div>
                        Faculty
                    </a>

                    <a class="nav-link" href="{{route('dashboard.routines')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar-check text-white fa-lg" ></i></div>
                        Routine
                    </a>
                    <a class="nav-link" href="{{route('dashboard.event')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-list text-white fa-lg"></i></div>
                        Schedule
                    </a>
                    <a class="nav-link" href="{{route('dashboard.event')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days text-white fa-lg"></i></div>
                        Events
                    </a>
                    <a class="nav-link" href="{{route('dashboard.scholarship')}}">                        <div class="sb-nav-link-icon"><i class="fa-solid fa-file-word text-white fa-lg"></i></div>
                        Application Form
                    </a>

                    <a class="nav-link" href="{{route('dashboard.scholarship')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-award  text-white fa-lg"></i></div>
                        Communicationn
                    </a>

                    <a class="nav-link" href="{{route('staff.index')}}">
                        <div class="sb-nav-link-icon"><i class="fa-regular fa-address-book text-white fa-lg"></i></div>
                        Staff
                    </a>

                    {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-gear text-white fa-lg"></i></div>
                        Setting
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down fa-lg"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav drop-link" id="sidenavAccordionPages">
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                Authentication
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                <nav class="sb-sidenav-menu-nested nav drop-link">
                                    <a class="nav-link" href="{{route('login')}}">Login</a>
                                    <a class="nav-link" href="{{route('register')}}">Register</a>
                                    <a class="nav-link" href="{{route('password.request')}}">Forgot Password</a>
                                </nav>
                            </div>

                        </nav>
                    </div> --}}

                    <div class="sb-sidenav-menu-heading">Additional</div>

                    <a class="nav-link" href="{{route('chart')}}">
                        <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info text-white fa-lg"></i></div>
                        Notice Board
                    </a>
                    {{-- <a class="nav-link" href="{{route('chart')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                        Charts
                    </a>
                    <a class="nav-link" href="{{route('static')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                        Tables
                    </a> --}}
                </div>
            </div>
        </nav>
    </div>






{{--

 <div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="index.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
                <div class="sb-sidenav-menu-heading">Interface</div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users text-white"></i></div>
                    User
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{route('users')}}">Admin</a>
                        <a class="nav-link" href="layout-sidenav-light.html">Student</a>
                    </nav>
                </div>
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Routine
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="{{route('dashboard.routines')}}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Spring
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>

                        <a class="nav-link collapsed" href="{{route('dashboard.routines')}}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Fall
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                    </nav>
                </div>


                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                    Pages
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                            Authentication
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="login.html">Login</a>
                                <a class="nav-link" href="register.html">Register</a>
                                <a class="nav-link" href="password.html">Forgot Password</a>
                            </nav>
                        </div>
                        <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                            Error
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link" href="401.html">401 Page</a>
                                <a class="nav-link" href="404.html">404 Page</a>
                                <a class="nav-link" href="500.html">500 Page</a>
                            </nav>
                            250
                        </div>
                    </nav>
                </div>
                <div class="sb-sidenav-menu-heading">Addons</div>
                <a class="nav-link" href="charts.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                    Charts
                </a>
                <a class="nav-link" href="tables.html">
                    <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                    Tables
                </a>
            </div>
        </div>
        <div class="sb-sidenav-footer">
            <div class="small">Logged in as:</div>
            Start Bootstrap
        </div>
    </nav>
</div> --}}
