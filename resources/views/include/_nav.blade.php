<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark ">
    <!-- Navbar Brand-->
    <a class="navbar-brand ps-3" href="{{ route('dashboard') }}">ITM</a>

    <!-- Sidebar Toggle-->
    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 fa-2x" id="sidebarToggle" href="#!">
        <i class="fa-solid fa-bars-staggered"></i>
    </button>

    <!-- Navbar Search-->
    <form action="" method="GET" class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
        <div class="input-group">
            <input class="form-control" type="text" name="search" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
            <button class="btn btn-primary" id="btnNavbarSearch" type="submit">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    @can('manage-user')

    <!-- Notifications Dropdown -->
    <li class="nav-item dropdown p-3">
        <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-bell"></i>
            <span class="badge bg-danger" id="notificationCount">{{ \App\Models\Notification::where('is_read', false)->count() }}</span>
        </a>

        <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="notificationDropdown" style="width: auto;">
            <li class="dropdown-header h3">Notifications</li>

            <!-- Notification Items -->
            @foreach(\App\Models\Notification::latest()->take(5)->get() as $notification)
                <li class="notification-item">
                    <a href="{{ route('notifications.index') }}" class="dropdown-item d-flex justify-content-between align-items-center">
                        <span><strong>{{ $notification->subject }}</strong><br>{{ $notification->message }}</span>
                        <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                    </a>
                </li>
            @endforeach

            <!-- View All Notifications Button -->
            <li class="text-center m-3">
                <a href="{{ route('notifications.index') }}" class="btn btn-dark">View All Notifications</a>
            </li>
        </ul>
    </li>
    @endcan

    <!-- User Profile Dropdown -->
    {{-- <div class="d-flex align-items-center ms-sm-6">
        <div class="dropdown">
            <!-- Profile Button -->
            <button class="profile-btn text-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="user-name">{{ Auth::user()->name }}</span>
            </button>

            <!-- Dropdown Menu -->
            <ul class="dropdown-menu dropdown-menu-end advanced-dropdown" aria-labelledby="userDropdown">
                <!-- Profile Link -->
                <li>
                    <a class="dropdown-item profile-item" href="{{ route('profile.edit') }}">
                        <i class="bi bi-person-lines-fill me-2"></i> {{ __('Profile') }}
                    </a>
                </li>

                <!-- Logout -->
                <li>
                    <form method="POST" action="{{ route('logout') }}" class="logout-form">
                        @csrf
                        <button type="submit" class="dropdown-item logout-item" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="bi bi-box-arrow-right me-2"></i>{{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div> --}}
    <div class="profile-container" onclick="toggleMenu()">
        <img src="https://img-cdn.pixlr.com/image-generator/history/65bb506dcb310754719cf81f/ede935de-1138-4f66-8ed7-44bd16efc709/medium.webp" alt="Profile Image" class="avatar-image">
        <div class="menu-dropdown">
          <div class="arrow-indicator"></div>
          <div class="menu-header p">Welcome,<br>
             {{ Auth::user()->name }}!</div>
          <div class="menu-item">
            <a href="{{ route('profile.edit') }}" class="dropdown-item logout-item">
                {{ __('Profile') }}
            </a>

          </div>
          <div class="menu-item">
            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                @csrf
                <button type="submit" class="dropdown-item logout-item" onclick="event.preventDefault(); this.closest('form').submit();">
                    <i class="bi bi-box-arrow-right me-2 "></i>{{ __('Log Out') }}
                </button>
            </form>
          </div>
        </div>
      </div>
</nav>
<script>
    // JavaScript to toggle the dropdown menu
    function toggleMenu() {
      const menuDropdown = document.querySelector('.menu-dropdown');
      menuDropdown.classList.toggle('active');
    }

    // Close the dropdown when clicking outside
    document.addEventListener('click', function(event) {
      const profileContainer = document.querySelector('.profile-container');
      const menuDropdown = document.querySelector('.menu-dropdown');
      if (!profileContainer.contains(event.target)) {
        menuDropdown.classList.remove('active');
      }
    });
  </script>
  <style>
       .brand-logo {
      font-size: 24px;
      color: #ecf0f1;
      font-weight: bold;
      text-decoration: none;
    }

    .nav-links-wrapper {
      display: flex;
      gap: 20px;
      align-items: center;
    }

    .nav-item {
      color: #ecf0f1;
      text-decoration: none;
      font-size: 16px;
      transition: color 0.3s;
    }

    .nav-item:hover {
      color: #1abc9c;
    }

    /* Profile Dropdown */
    .profile-container {
      position: relative;
      cursor: pointer;
      margin: 20px;
    }

    .avatar-image {
      border-radius: 50%;
      width: 45px;
      height: 45px;
      object-fit: cover;
      border: 2px solid #1abc9c;
      transition: transform 0.3s;
    }

    .avatar-image:hover {
      transform: scale(1.1);
    }

    .menu-dropdown {
      display: none;
      position: absolute;
      top: 53px;
      right: -14px;
      background-color: #2c3e50;
      border-radius: 8px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
      overflow: hidden;
      min-width: 180px;
      z-index: 100;
    }

    .menu-dropdown.active {
      display: block;
    }

    .menu-header {
      background-color: #1abc9c;
      color: #fff;
      padding: 12px 15px;
      font-weight: bold;
      border-bottom: 1px solid #16a085;
    }

    .menu-item {
      border-bottom: 1px solid #34495e;
      transition: background-color 0.3s;
    }

    .menu-item:last-child {
      border-bottom: none;
    }

    .menu-link {
      color: #ecf0f1;
      text-decoration: none;
      padding: 10px 20px;
      display: block;
      transition: background-color 0.3s, color 0.3s;
    }

    .menu-link:hover {
      background-color: #1abc9c;
      color: #ffffff;
    }

    /* Dropdown Arrow Icon */
    .arrow-indicator {
      width: 0;
      height: 0;
      border-left: 8px solid transparent;
      border-right: 8px solid transparent;
      border-top: 8px solid #2c3e50;
      position: absolute;
      top: -8px;
      right: 15px;
    }

    /* Hover Animation */
    .profile-container:hover .avatar-image {
      transform: rotate(360deg);
    }
  </style>
