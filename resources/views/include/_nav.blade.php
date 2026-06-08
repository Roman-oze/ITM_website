<nav class="sb-topnav navbar navbar-expand navbar-dark modern-topbar px-4 border-bottom">

    <div class="d-flex align-items-center gap-3">
        <a class="navbar-brand fw-bold tracking-wide text-white m-0" href="{{ route('dashboard') }}">
            <i class="fas fa-terminal text-primary me-2"></i>ITM<span class="fs-xs fw-normal text-muted ms-1">v2.0</span>
        </a>

        <button class="btn btn-icon-toggle d-flex align-items-center justify-content-center" id="sidebarToggle" href="#!">
            <i class="fa-solid fa-bars-staggered"></i>
        </button>
    </div>

    <div class="d-flex align-items-center ms-auto gap-3">

        <form action="" method="GET" class="d-none d-md-inline-block form-inline modern-search-form">
            <div class="input-group-modern position-relative">
                <span class="search-icon-inside position-absolute top-50 start-0 translate-middle-y ps-3 text-muted">
                    <i class="fas fa-search fs-sm"></i>
                </span>
                <input class="form-control form-control-modern ps-5 pe-4 py-2" type="text" name="search" placeholder="Search resources, pull requests..." aria-label="Search" />
                <span class="search-shortcut d-none d-lg-inline-block position-absolute top-50 end-0 translate-middle-y me-2 badge bg-dark text-muted border border-secondary border-opacity-25">⌘K</span>
            </div>
        </form>

        <ul class="navbar-nav align-items-center gap-2">
            @can('manage-user')
            <li class="nav-item dropdown">
                <a class="nav-link notification-bell-link position-relative d-flex align-items-center justify-content-center rounded-circle" href="#" id="notificationDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-regular fa-bell fs-5 text-muted-hover"></i>
                    @php
                        $unreadCount = \App\Models\Notification::where('is_read', false)->count();
                    @endphp
                    @if($unreadCount > 0)
                        <span class="badge-dot position-absolute top-0 end-0 bg-danger"></span>
                    @endif
                </a>

                <div class="dropdown-menu dropdown-menu-end p-0 shadow-xl border border-secondary border-opacity-10 modern-dropdown-panel animate-fade-in" aria-labelledby="notificationDropdown">
                    <div class="p-3 d-flex justify-content-between align-items-center border-bottom border-secondary border-opacity-10 bg-dark-card-header">
                        <span class="fw-semibold text-white fs-6">Notifications</span>
                        <span class="badge bg-primary-subtle text-primary rounded-pill px-2 py-1 fs-xs">{{ $unreadCount }} Unread</span>
                    </div>

                    <div class="list-group list-group-flush overflow-auto-y" style="max-height: 320px;">
                        @forelse(\App\Models\Notification::latest()->take(5)->get() as $notification)
                            <a href="{{ route('notifications.index') }}" class="list-group-item list-group-item-action d-flex gap-3 px-3 py-2-5 border-bottom border-secondary border-opacity-10 bg-hover-slate">
                                <div class="icon-avatar bg-primary-subtle rounded-circle d-flex align-items-center justify-content-center text-primary" style="width:36px; height:36px; flex-shrink: 0;">
                                    <i class="fa-solid fa-circle-info fs-5"></i>
                                </div>
                                <div class="w-100 min-w-0">
                                    <div class="d-flex justify-content-between align-items-baseline mb-1">
                                        <h6 class="text-white text-truncate mb-0 fs-sm fw-medium" style="max-width: 160px;">{{ $notification->subject }}</h6>
                                        <span class="text-muted fs-xs">{{ $notification->created_at->diffForHumans(null, true) }}</span>
                                    </div>
                                    <p class="text-muted text-truncate mb-0 fs-xs">{{ $notification->message }}</p>
                                </div>
                            </a>
                        @empty
                            <div class="p-4 text-center text-muted fs-xs">
                                <i class="fa-regular fa-folder-open d-block fs-3 mb-2 opacity-50"></i>
                                No active production notifications found.
                            </div>
                        @endforelse
                    </div>

                    <div class="p-2 text-center border-top border-secondary border-opacity-10">
                        <a href="{{ route('notifications.index') }}" class="btn btn-link btn-sm text-primary text-decoration-none fs-xs fw-medium w-100 py-1">View cloud stream panel</a>
                    </div>
                </div>
            </li>
            @endcan

            <li class="nav-item dropdown">
                <div class="profile-avatar-trigger position-relative d-flex align-items-center" id="userProfileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{ asset('frontend/image/nav_logo.jpg') }}" alt="Profile Avatar" class="avatar-image-modern shadow-sm">
                    <span class="status-indicator online"></span>
                </div>

                <div class="dropdown-menu dropdown-menu-end p-2 shadow-xl border border-secondary border-opacity-10 modern-dropdown-panel animate-fade-in" aria-labelledby="userProfileDropdown">
                    <div class="px-3 py-2 border-bottom border-secondary border-opacity-10 mb-1">
                        <p class="text-white fw-medium mb-0 fs-sm">{{ Auth::user()->name }}</p>
                        <p class="text-muted mb-0 fs-xs text-truncate">{{ Auth::user()->email ?? 'engineer@company.com' }}</p>
                    </div>

                    <a href="{{ route('profile.edit') }}" class="dropdown-item modern-dropdown-item rounded-2 py-2 fs-sm">
                        <i class="fa-regular fa-user me-2 opacity-70"></i>Account Setup
                    </a>

                    <div class="dropdown-divider border-secondary border-opacity-10"></div>

                    <form method="POST" action="{{ route('logout') }}" class="m-0">
                        @csrf
                        <button type="submit" class="dropdown-item modern-dropdown-item text-danger rounded-2 py-2 fs-sm" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="fa-solid fa-arrow-right-from-bracket me-2 opacity-70"></i>{{ __('Sign Out') }}
                        </button>
                    </form>
                </div>
            </li>
        </ul>
    </div>
</nav>

<style>
    /* Core Layout Modern Topbar Configuration */
.modern-topbar {
    background-color: #0f172a !important; /* Premium dark slate background matching the updated sidebar */
    border-color: rgba(255, 255, 255, 0.06) !important;
    height: 64px;
}

/* Helper Text/Font Utilities */
.fs-sm { font-size: 13px !important; }
.fs-xs { font-size: 11px !important; }
.py-2-5 { padding-top: 0.65rem; padding-bottom: 0.65rem; }
.text-muted-hover { color: #94a3b8; transition: color 0.15s ease; }
.text-muted-hover:hover { color: #f8fafc; }

/* Custom Sleek Input Bar Elements */
.modern-search-form .form-control-modern {
    background-color: rgba(255, 255, 255, 0.04) !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
    color: #f8fafc !important;
    border-radius: 8px;
    font-size: 13px;
    width: 260px;
    transition: all 0.2s cubic-bezier(0.4, 0, 0.2, 1);
}
.modern-search-form .form-control-modern:focus {
    background-color: rgba(0, 0, 0, 0.2) !important;
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    width: 320px; /* Expands elegantly on click */
}
.search-shortcut {
    font-size: 10px !important;
    font-family: monospace;
    background: rgba(255, 255, 255, 0.05) !important;
    color: #64748b !important;
}

/* Interface Toggle Element Button */
.btn-icon-toggle {
    background: none;
    border: none;
    width: 36px;
    height: 36px;
    border-radius: 8px;
    color: #94a3b8;
    transition: all 0.15s ease;
}
.btn-icon-toggle:hover {
    background: rgba(255, 255, 255, 0.05);
    color: #f8fafc;
}

/* Notification Dot Marker */
.notification-bell-link {
    width: 36px;
    height: 36px;
    transition: background 0.15s;
}
.notification-bell-link:hover {
    background: rgba(255, 255, 255, 0.05);
}
.badge-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    border: 2px solid #0f172a;
    margin-top: 4px;
    margin-right: 4px;
}

/* Floating Clean Action Dropdown Panels */
.modern-dropdown-panel {
    background-color: #1e293b !important; /* Soft interior container color */
    min-width: 320px;
    border-radius: 12px !important;
    margin-top: 10px !important;
}
.bg-dark-card-header {
    background-color: rgba(0, 0, 0, 0.1);
}
.bg-hover-slate {
    background-color: transparent;
    transition: background-color 0.15s ease;
}
.bg-hover-slate:hover {
    background-color: rgba(255, 255, 255, 0.02) !important;
}

/* Profile Picture Actions */
.profile-avatar-trigger {
    cursor: pointer;
}
.avatar-image-modern {
    width: 36px;
    height: 36px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid rgba(255, 255, 255, 0.1);
    transition: border-color 0.15s ease;
}
.profile-avatar-trigger:hover .avatar-image-modern {
    border-color: #3b82f6;
}
.status-indicator {
    width: 10px;
    height: 10px;
    border-radius: 50%;
    position: absolute;
    bottom: 0;
    right: 0;
    border: 2px solid #0f172a;
}
.status-indicator.online { background-color: #10b981; }

/* Menu Standard Actions */
.modern-dropdown-item {
    color: #94a3b8 !important;
    transition: all 0.15s ease;
}
.modern-dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.04) !important;
    color: #f8fafc !important;
}

/* Clean Micro Animation */
.animate-fade-in {
    animation: dropdownFadeIn 0.2s cubic-bezier(0.16, 1, 0.3, 1);
}
@keyframes dropdownFadeIn {
    from { opacity: 0; transform: translateY(4px); }
    to { opacity: 1; transform: translateY(0); }
}
</style>
