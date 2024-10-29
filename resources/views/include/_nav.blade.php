

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

        <!-- Notification -->
    {{-- <div class="notification-icon" id="notificationIcon">
        <i class="fas fa-bell">
            <span class="badge badge-danger" id="badgeNotification">{{count($notifications)}}</span>

            </i>
        </i>
    </div> --}}
    <!-- Notification Icon with Dropdown -->
<li class="nav-item dropdown ">
    <a class="nav-link dropdown-toggle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
        <i class="fa fa-bell"></i>
        <span class="badge bg-danger" id="notificationCount">{{ \App\Models\Notification::where('is_read', false)->count() }}</span>
    </a>

    <ul class="dropdown-menu dropdown-menu-end p-3" aria-labelledby="notificationDropdown" style="width: auto;">
        <li class="dropdown-header h3">Notifications</li>

        <!-- Example Notification Items -->
        @foreach(\App\Models\Notification::latest()->take(5)->get() as $notification)
            <li class="notification-item">
                <a href="{{ route('notifications.index') }}" class="dropdown-item d-flex justify-content-between align-items-center">
                    <span><strong>{{ $notification->subject }}</strong><br>{{ $notification->message }}</span>
                    <small class="text-muted">{{ $notification->created_at->diffForHumans() }}</small>
                </a>
            </li>
        @endforeach

        <!-- Button to View All Notifications -->
        <li class="text-center m-3">
            <a href="{{ route('notifications.index') }}" class="btn btn-dark ">View All Notifications</a>
        </li>
    </ul>
</li>



<!-- Optionally, add icons library like Bootstrap Icons if not already included -->

<div class="d-flex align-items-center ms-sm-6">
    <!-- User Profile Dropdown -->
    <div class="dropdown">

        <!-- Profile Button -->
        <button class="profile-btn text-dark dropdown-toggle" type="button" id="userDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            <span class="user-name">{{ Auth::user()->name }}</span>
        </button>

        <!-- Advanced Dropdown Menu -->
        <ul class="dropdown-menu dropdown-menu-end advanced-dropdown" aria-labelledby="userDropdown">
            <!-- Profile Section -->
            <li class="dropdown-header profile-section text-center">
                <p class="badge badge-dark">{{ Auth::user()->name }}</p><br>
                <small class=" badge badge-dark">{{ Auth::user()->email }}</small>
            </li>
            <li><hr class="dropdown-divider"></li>

            <!-- Profile Link -->
            <li>
                <a class="dropdown-item profile-item" href="{{ route('profile.edit') }}">
                    <i class="bi bi-person-lines-fill me-2"></i> {{ __('Profile') }}
                </a>
            </li>

            <!-- Settings Link -->
            {{-- <li>
                <a class="dropdown-item settings-item" href="">
                    <i class="bi bi-gear me-2"></i> {{ __('Settings') }}
                </a>
            </li> --}}

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
</div>

<!-- CSS for Advanced Profile Button -->
<style>
    /* Profile Button */
    .profile-btn {
        display: flex;
        align-items: center;
        font-weight: 600;
        padding: 8px 15px;
        border-radius: 30px;
        background-color: #f8f9fa;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        transition: background-color 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-btn:hover {
        background-color: #e2e6ea;
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.15);
    }

    /* Profile Image */
    .profile-img {
        width: 30px;
        height: 30px;
        border-radius: 50%;
        object-fit: cover;
    }

    .profile-img-large {
        width: 60px;
        height: 60px;
        border-radius: 50%;
        object-fit: cover;
    }

    /* User Name Text */
    .user-name {
        font-size: 16px;
        color: #333;
    }

    /* Dropdown Styling */
    .advanced-dropdown {
        width: 250px;
        border-radius: 10px;
        padding: 10px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
        animation: fadeIn 0.3s ease;
    }

    .profile-section {
        padding: 15px 20px;
    }

    .dropdown-item {
        font-weight: 500;
        padding: 10px 20px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .dropdown-item:hover {
        background-color: #f3f4f6;
        color: #333;
    }

    .logout-item {
        color: #d9534f;
    }

    @keyframes fadeIn {
        0% { opacity: 0; transform: translateY(-10px); }
        100% { opacity: 1; transform: translateY(0); }
    }
</style>

</nav>

