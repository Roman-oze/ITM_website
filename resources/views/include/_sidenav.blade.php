<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">

                <!-- Dashboard Link -->
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon text-white"><i class="fas fa-tachometer-alt fa-lg"></i></div>
                    Dashboard
                </a>

                <!-- Users Dropdown -->
                <a class="nav-link collapsed mt-3" href="#" data-bs-toggle="collapse" data-bs-target="#collapseUsers" aria-expanded="false" aria-controls="collapseUsers">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-users text-white fa-lg"></i></div>
                    Users
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseUsers" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="{{route('users.index')}}" class="nav-link">Admins</a>
                        <a href="#" class="nav-link">Upcoming</a>
                    </nav>
                </div>

                <!-- Students Dropdown -->
                <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapseStudents" aria-expanded="false" aria-controls="collapseStudents">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-book-open fa-lg text-white"></i></div>
                    Students
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseStudents" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="{{route('student.index')}}" class="nav-link">Students</a>
                        <a href="{{route('alumni.index')}}" class="nav-link">Alumni</a>
                        <a href="{{route('scholarship.index')}}" class="nav-link">Scholarship</a>
                    </nav>
                </div>

                <!-- Website Setup Dropdown -->
                <a class="nav-link collapsed mt-1 text-white fa-lg" href="#" data-bs-toggle="collapse" data-bs-target="#collapseWebsiteSetup" aria-expanded="false" aria-controls="collapseWebsiteSetup">
                    <div class="sb-nav-link-icon  text-white fa-lg"><svg id="Group_28315" data-name="Group 28315" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                        <circle id="Ellipse_893" data-name="Ellipse 893" cx="0.625" cy="0.625" r="0.625" transform="translate(7.375 6.125)" fill="#575b6a"></circle>
                        <path id="Path_40777" data-name="Path 40777" d="M13.5,0H2.5A2.5,2.5,0,0,0,0,2.5V11a2.5,2.5,0,0,0,2.5,2.5H7.375v1.25H5.5A.625.625,0,0,0,5.5,16h5a.625.625,0,0,0,0-1.25H8.625V12.875A.625.625,0,0,0,8,12.25H2.5A1.251,1.251,0,0,1,1.25,11V2.5A1.251,1.251,0,0,1,2.5,1.25h11A1.251,1.251,0,0,1,14.75,2.5V11a1.251,1.251,0,0,1-1.25,1.25h-3a.625.625,0,0,0,0,1.25h3A2.5,2.5,0,0,0,16,11V2.5A2.5,2.5,0,0,0,13.5,0Z" fill="#575b6a"></path>
                        <path id="Path_40778" data-name="Path 40778" d="M120.375,84.75a.625.625,0,0,0,.625-.625v-.688a3.107,3.107,0,0,0,1.1-.456l.487.487a.625.625,0,0,0,.884-.884l-.487-.487a3.108,3.108,0,0,0,.456-1.1h.688a.625.625,0,1,0,0-1.25h-.688a3.108,3.108,0,0,0-.456-1.1l.487-.487a.625.625,0,0,0-.884-.884l-.487.487a3.107,3.107,0,0,0-1.1-.456v-.688a.625.625,0,0,0-1.25,0v.688a3.108,3.108,0,0,0-1.1.456l-.487-.487a.625.625,0,0,0-.884.884l.487.487a3.108,3.108,0,0,0-.456,1.1h-.688a.625.625,0,0,0,0,1.25h.688a3.108,3.108,0,0,0,.456,1.1l-.487.487a.625.625,0,0,0,.884.884l.487-.487a3.107,3.107,0,0,0,1.1.456v.688A.625.625,0,0,0,120.375,84.75ZM118.5,80.375a1.875,1.875,0,1,1,1.875,1.875A1.877,1.877,0,0,1,118.5,80.375Z" transform="translate(-112.375 -73.625)" fill="#575b6a"></path>
                    </svg></div>
                    Website Setup
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseWebsiteSetup" aria-labelledby="headingThree" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="{{route('herosection.index')}}" class="nav-link">Hero Section</a>
                        <a href="{{route('feature.index')}}" class="nav-link" >Feature</a>
                        <a href="{{route('services.index')}}" class="nav-link">Services</a>
                        <a href="{{route('footer.index')}}" class="nav-link">Footer</a>
                        <a href="#" class="nav-link">Appearance</a>
                    </nav>
                </div>


                <!-- Mail Link -->
                <a class="nav-link" href="{{ route('send-mail-form.create') }}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-envelope text-white fa-lg"></i></div>
                    Mail
                </a>


                <!-- Faculty Link -->
                <a class="nav-link" href="{{route('faculty.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-user-graduate text-white fa-lg"></i></div>
                    Faculty
                </a>

                <!-- Courses Link -->
                <a class="nav-link" href="{{route('Courses.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-newspaper text-white fa-lg"></i></div>
                    Course
                </a>

                <!-- Routine Link -->
                <a class="nav-link" href="{{url('/dashboard/routine')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-calendar-check text-white fa-lg"></i></div>
                    Routine
                </a>

                <!-- Schedule Link -->
                <a class="nav-link" href="{{route('schedules.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-clipboard-list text-white fa-lg"></i></div>
                    Schedule
                </a>

                <!-- Events Link -->
                <a class="nav-link" href="{{route('event.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-calendar-days text-white fa-lg"></i></div>
                    Events
                </a>

                <!-- Staff Link -->
                <a class="nav-link" href="{{route('staff.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-regular fa-address-book text-white fa-lg"></i></div>
                    Staff
                </a>

                <!-- Club Dropdown -->
                <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapseClub" aria-expanded="false" aria-controls="collapseClub">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-hotel text-white fa-lg"></i></div>
                    Club
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseClub" aria-labelledby="headingClub" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="" class="nav-link">Committee</a>
                        <a href="{{route('membership.index')}}" class="nav-link">Member</a>
                        <a href="" class="nav-link">Event</a>
                        <a href="" class="nav-link">Contact</a>
                    </nav>
                </div>

                <!-- Notice Board Link -->
                <a class="nav-link" href="{{route('notice.index')}}">
                    <div class="sb-nav-link-icon"><i class="fa-solid fa-circle-info text-white fa-lg"></i></div>
                    Notice Board
                </a>
            </div>
        </div>
    </nav>
</div>

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
                        </div>
                        <a class="nav-link" href="{{route('index')}}">
                            <div class="sb-nav-link-icon"><i class=" text-white fa-lg"></i></div>
                            Menu Permission
                        </a>
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
