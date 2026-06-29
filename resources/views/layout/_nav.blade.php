<header id="header" class="fixed-top primary-color">

    <div class="container d-flex align-items-center">
        {{-- <a class="navbar-brand" href="#"><img src="{{asset('frontend/image/portal.png')}}" alt="" class="brand-logo"></a> --}}
        {{-- <h1 class="logo me-auto"><a href="{{route('home')}}"><img src="{{asset('frontend/image/logo.png')}}" alt="" class="brand"></a></h1> --}}
        {{-- <h1 class=" text-white me-auto"><a href="index.html">I T M</h1> --}}
        <h1 class="logo me-auto"><a href="{{ route('home') }}"><img src="{{ asset('frontend/logo/sg-logo.png') }}"
                    alt="" class="rounded"></a></h1>

        <nav id="navbar" class="navbar">
            <ul>
                <li>
                    <a class="nav-link scrollto active" href="{{ route('home') }}"><i
                            class="fa-solid fa-house s-4 homeicon"></i></a>
                </li>
                {{-- <li><a class="nav-link scrollto" href="#services">Services</a></li> --}}
                <li>
                    <div class="dropdown">

                        <a class="nav-link scrollto" href="{{ route('service-category') }}">
                            Service Category
                        </a>

                        <div class="dropdown-content ms-auto rounded">

                            <a href="{{ route('service-category', ['category' => 'Private Organization']) }}"
                                class="nav-link text-info">

                                Private Organization

                            </a>

                            <a href="{{ route('service-category', ['category' => 'Government']) }}"
                                class="nav-link text-info">

                                Government

                            </a>

                            <a href="{{ route('service-category', ['category' => 'International']) }}"
                                class="nav-link text-info">

                                International

                            </a>

                            <a href="{{ route('service-category', ['category' => 'E-Commerce']) }}"
                                class="nav-link text-info">

                                E-Commerce

                            </a>

                        </div>

                    </div>
                </li>
                <li>
                    <div class="dropdown">
                        <a class="nav-link scrollto" href="#">Achievement</a>
                        <div class="dropdown-content ms-auto rounded">
                            <a target="_blank" href="{{ route('events') }}" class="nav-link text-info">Events</a>
                            <a target="_blank" href="" class="nav-link text-info">Awards</a>
                            <a target="_blank" href="{{ route('notice') }}" class="nav-link text-info">Notice Board</a>
                        </div>
                    </div>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('gallery') }}">Gallery</a></li>
                <li><a class="nav-link scrollto" href="{{ route('team.team-member-list') }}">Team</a></li>
                <li>
                    <div class="dropdown rounded">
                        <a class="nav-link scrollto" href="{{ route('blog') }}">Blogs</a>

                    </div>
                </li>
                <li><a class="nav-link scrollto" href="{{ route('about') }}">Contact</a></li>
                <li>
                    <a class="getstarted scrollto" href="{{ route('login') }}">Login <i
                            class="fa-solid fa-lock"></i></a>
                </li>

            </ul>
            <i class="fa-solid fa-bars mobile-nav-toggle"></i>
        </nav>
    </div>
</header>
