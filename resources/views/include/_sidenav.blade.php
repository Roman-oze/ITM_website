<div id="layoutSidenav_nav" class="modern-software-sidebar">
    <nav class="sb-sidenav accordion sb-sidenav-dark shadow-sm border-end" id="sidenavAccordion">

        <div class="sb-sidenav-menu px-3 pt-3">

            <div class="nav flex-column gap-1">

                <div class="sidebar-heading px-2 pb-2 pt-1 text-uppercase text-muted fw-bold small tracking-wide">
                    Console Navigation
                </div>

                @foreach ($menus->where('parent_id', null) as $menu)

                    @if ($menu->children->isEmpty())

                        <!-- SINGLE LINK -->
                        <a class="nav-link modern-link d-flex align-items-center justify-content-between rounded-3 px-3 py-2 my-1"
                           href="{{ $menu->link }}">

                            <div class="d-flex align-items-center gap-3">

                                <div class="sb-nav-link-icon modern-icon d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>

                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>

                        </a>

                    @else

                        <!-- COLLAPSIBLE MENU -->
                        <a class="nav-link modern-link collapsed d-flex align-items-center justify-content-between rounded-3 px-3 py-2 my-1"
                           href="#"
                           data-bs-toggle="collapse"
                           data-bs-target="#collapse{{ $menu->id }}"
                           aria-expanded="false">

                            <div class="d-flex align-items-center gap-3">

                                <div class="sb-nav-link-icon modern-icon d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>

                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>

                            <i class="fas fa-chevron-right fs-xs collapse-arrow"></i>

                        </a>

                        <div class="collapse mt-1" id="collapse{{ $menu->id }}" data-bs-parent="#sidenavAccordion">

                            <nav class="sb-sidenav-menu-nested nav flex-column ms-4 ps-2 border-start border-opacity-25 gap-1">

                                @foreach ($menu->children as $child)
                                    <a href="{{ $child->link }}"
                                       class="nav-link modern-sub-link py-2 px-3 rounded-2 text-truncate">
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
    .modern-software-sidebar {
    --sidebar-bg: #0b1220;
    --text: #94a3b8;
    --hover: rgba(255,255,255,0.05);
    --active: rgba(32,157,216,0.12);
    --accent: #209DD8;

    font-family: 'Inter', system-ui, sans-serif;
}

/* SIDEBAR BACKGROUND */
.modern-software-sidebar .sb-sidenav-dark {
    background: var(--sidebar-bg) !important;
    border-color: rgba(255,255,255,0.06) !important;
}

/* MAIN LINKS */
.modern-software-sidebar .modern-link {
    color: var(--text) !important;
    font-size: 14px;
    transition: 0.2s ease;
    position: relative;
}

.modern-software-sidebar .modern-link:hover {
    background: var(--hover);
    color: #fff !important;
    transform: translateX(2px);
}

/* ICON BOX */
.modern-software-sidebar .modern-icon {
    width: 34px;
    height: 34px;
    background: rgba(255,255,255,0.03);
    border: 1px solid rgba(255,255,255,0.05);
    color: var(--text);
    transition: 0.2s ease;
}

.modern-software-sidebar .modern-link:hover .modern-icon {
    border-color: var(--accent);
    color: var(--accent);
}

/* ACTIVE STATE (optional Laravel add class) */
.modern-software-sidebar .modern-link.active {
    background: var(--active);
    color: #fff !important;
}

/* COLLAPSE ARROW */
.collapse-arrow {
    transition: 0.25s ease;
    color: var(--text);
}

.modern-link[aria-expanded="true"] .collapse-arrow {
    transform: rotate(90deg);
    color: var(--accent);
}

/* SUB MENU */
.modern-sub-link {
    font-size: 13px;
    color: var(--text) !important;
    transition: 0.2s ease;
}

.modern-sub-link:hover {
    color: #fff !important;
    padding-left: 18px !important;
    background: rgba(255,255,255,0.03);
}

/* SIDEBAR HEADING */
.sidebar-heading {
    letter-spacing: 1px;
    font-size: 11px;
}
</style>
