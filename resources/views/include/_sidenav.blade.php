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
                    <div class="sb-nav-link-icon  text-white fa-lg">
                        <i class="fa-solid fa-gear"></i>
                    </div>
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


                <!-- Menu Permission Dropdown -->
                <a class="nav-link collapsed mt-1 text-white fa-lg" href="#" data-bs-toggle="collapse" data-bs-target="#collapseMenuPermission" aria-expanded="false" aria-controls="collapseMenuPermission">
                    <div class="sb-nav-link-icon text-white fa-lg">
                        <i class="fa-solid fa-lock"></i>
                    </div>
                    Menu Permission
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="collapseMenuPermission" aria-labelledby="headingFour" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a href="{{ route('menu-permission.index') }}" class="nav-link">Display Assign</a>
                        <a href="{{ route('menu.create') }}" class="nav-link">Create Menu</a>
                        <a href="{{ route('menu-permissions.create') }}" class="nav-link">Assign Menu</a>
                    </nav>
                </div>





                        @foreach ( $menus as $menu)

                                <a class="nav-link" href="{{ $menu->link }}">
                                    <div class="sb-nav-link-icon"><i class="{{ $menu->icon }} text-white fa-lg"></i></div>
                                    {{ $menu->name }}
                                </a>
                        @endforeach

                <!-- Mail Link -->
                {{-- <a class="nav-link" href="{{ route('send-mail-form.create') }}">
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
                </a> --}}
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
