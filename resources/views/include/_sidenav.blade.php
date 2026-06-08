
<div id="layoutSidenav_nav" class="modern-software-sidebar">
    <nav class="sb-sidenav accordion sb-sidenav-dark shadow-sm border-end" id="sidenavAccordion">
        <div class="sb-sidenav-menu px-3 pt-3">
            <div class="nav flex-column gap-1">
                <div class="sidebar-heading px-2 pb-2 pt-1 text-uppercase text-muted tracking-wider fw-bold">
                    Console Navigation
                </div>

                @foreach ($menus->where('parent_id', null) as $menu)
                    @if ($menu->children->isEmpty())
                        <a class="nav-link modern-link d-flex align-items-center justify-content-between rounded-3 px-3 py-2-5 my-1" href="{{ $menu->link }}">
                            <div class="d-flex align-items-center">
                                <div class="sb-nav-link-icon me-3 d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>
                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>
                        </a>
                    @else
                        <a class="nav-link modern-link collapsed d-flex align-items-center justify-content-between rounded-3 px-3 py-2-5 my-1"
                           href="#"
                           data-bs-toggle="collapse"
                           data-bs-target="#collapse{{ $menu->id }}"
                           aria-expanded="false"
                           aria-controls="collapse{{ $menu->id }}">
                            <div class="d-flex align-items-center">
                                <div class="sb-nav-link-icon me-3 d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>
                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>
                            <div class="sb-sidenav-collapse-arrow transition-transform">
                                <i class="fas fa-chevron-right fs-xs"></i>
                            </div>
                        </a>

                        <div class="collapse collapse-wrapper mt-1" id="collapse{{ $menu->id }}" aria-labelledby="heading{{ $menu->id }}" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav flex-column ms-4 ps-2 border-start border-secondary border-opacity-25 gap-1">
                                @foreach ($menu->children as $child)
                                    <a href="{{ $child->link }}" class="nav-link modern-sub-link py-2 px-3 rounded-2 position-relative text-truncate">
                                        {{ $child->name }}
                                    </a>
                                @endforeach
                            </nav>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </nav>
</div>


<style>
    .modern-software-sidebar, .modern-topbar {
    --sidebar-bg: #0f172a;
    --link-color: #94a3b8;
    --link-hover-color: #f8fafc;
    --link-hover-bg: rgba(255, 255, 255, 0.04);
    --link-active-bg: linear-gradient(90deg, rgba(59, 130, 246, 0.12) 0%, rgba(59, 130, 246, 0.02) 100%);
    --link-active-color: #3b82f6;
    font-family: 'Inter', system-ui, sans-serif;
}

/* Navbar Base */
.modern-topbar {
    background-color: var(--sidebar-bg) !important;
    border-color: rgba(255, 255, 255, 0.06) !important;
    height: 64px;
}

/* Modern Minimalist Inline Inputs */
.modern-search-form .form-control-modern {
    background-color: rgba(255, 255, 255, 0.04) !important;
    border: 1px solid rgba(255, 255, 255, 0.08) !important;
    color: #f8fafc !important;
    border-radius: 6px;
    font-size: 13px;
    width: 240px;
    transition: all 0.2s ease-in-out;
}
.modern-search-form .form-control-modern:focus {
    border-color: #3b82f6 !important;
    box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.15);
    width: 290px;
}

/* Structural Navigation Links */
.modern-software-sidebar .sb-sidenav-dark {
    background-color: var(--sidebar-bg) !important;
    border-color: rgba(255, 255, 255, 0.06) !important;
}
.modern-software-sidebar .modern-link {
    color: var(--link-color) !important;
    font-size: 14px;
    transition: all 0.15s ease-in-out;
}
.modern-software-sidebar .modern-link:hover {
    color: var(--link-hover-color) !important;
    background-color: var(--link-hover-bg);
}

/* Icon Container Boxes */
.modern-software-sidebar .sb-nav-link-icon {
    width: 32px;
    height: 32px;
    background: rgba(255, 255, 255, 0.02);
    border: 1px solid rgba(255, 255, 255, 0.04);
    color: var(--link-color);
}

/* Submenu System Alignment */
.modern-software-sidebar .modern-sub-link {
    font-size: 13px;
    color: var(--link-color) !important;
    transition: all 0.15s ease;
}
.modern-software-sidebar .modern-sub-link:hover {
    color: var(--link-hover-color) !important;
    padding-left: 1.15rem !important;
}

/* Avatar Management Layout profiles */
.avatar-image-modern {
    width: 34px;
    height: 34px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid rgba(255, 255, 255, 0.1);
}
.profile-avatar-trigger:hover .avatar-image-modern {
    border-color: #3b82f6;
}
.status-indicator {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    position: absolute;
    bottom: 0;
    right: 0;
    border: 2px solid #0f172a;
}
.status-indicator.online { background-color: #10b981; }

.modern-dropdown-panel {
    background-color: #1e293b !important;
    min-width: 320px;
    border-radius: 8px !important;
}
.badge-dot {
    width: 8px;
    height: 8px;
    border-radius: 50%;
    border: 2px solid #0f172a;
    margin-top: 4px;
    margin-right: 4px;
}
</style>
