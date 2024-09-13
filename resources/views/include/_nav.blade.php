

<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark p-3">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3 " href="{{route('dashboard')}}">ITM</a>
    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 fa-2x" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
    <!-- Navbar Search-->
    <form action="" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0" method="GET">
        <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="submit"><i class="fas fa-search"></i></button>
        </div>
    </form>
    <!-- Navbar-->
    <div class="d-flex align-items-center ms-sm-6">
        <!-- User Dropdown -->
        <div class="dropdown">

            <button class="getstarted scrollto text-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-solid fa-user"></i> {{ Auth::user()->name }}
                {{-- User --}}

                {{-- <svg class="ms-1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" width="16" height="16">
                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg> --}}
            </button>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="userDropdown">
                <!-- Profile Link -->
                <li>
                    <a class="dropdown-item text-dark" href="{{ route('profile.edit') }}">
                        {{ __('Profile') }}
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="dropdown-item text-dark">
                        @csrf
                        <button type="submit" class="dropdown-item text-dark" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </button>
                    </form>

                </li>
            </ul>
        </div>
        </div>

</nav>

