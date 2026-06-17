<div id="layoutSidenav_nav" class="modern-software-sidebar">
    <nav class="sb-sidenav accordion sb-sidenav-dark shadow-sm border-end" id="sidenavAccordion">

        <div class="sb-sidenav-menu px-3 pt-3">

            <div class="nav flex-column gap-1">


                @foreach ($menus->where('parent_id', null) as $menu)
                    @if ($menu->children->isEmpty())
                        <!-- SINGLE LINK -->
                        <a class="nav-link modern-link d-flex align-items-center justify-content-between rounded-3 px-3 py-2 my-1"
                            href="{{ $menu->link }}">

                            <div class="d-flex align-items-center gap-3">

                                <div
                                    class="sb-nav-link-icon modern-icon d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>

                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>

                        </a>
                    @else
                        <!-- COLLAPSIBLE MENU -->
                        <a class="nav-link modern-link collapsed d-flex align-items-center justify-content-between rounded-3 px-3 py-2 my-1"
                            href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{ $menu->id }}"
                            aria-expanded="false">

                            <div class="d-flex align-items-center gap-3">

                                <div
                                    class="sb-nav-link-icon modern-icon d-flex align-items-center justify-content-center rounded-2">
                                    <i class="{{ $menu->icon }}"></i>
                                </div>

                                <span class="menu-text fw-medium">{{ $menu->name }}</span>
                            </div>

                            <i class="fas fa-chevron-right fs-xs collapse-arrow"></i>

                        </a>

                        {{-- <div class="collapse mt-1" id="collapse{{ $menu->id }}" data-bs-parent="#sidenavAccordion">

                            <nav class="sb-sidenav-menu-nested nav flex-column ms-4 ps-2 border-start border-opacity-25 gap-1">

                                @foreach ($menu->children as $child)
                                    <a href="{{ $child->link }}"
                                       class="nav-link modern-sub-link py-2 px-3 rounded-2 text-truncate">
                                        {{ $child->name }}
                                    </a>
                                @endforeach

                            </nav>

                        </div> --}}
                        <div class="collapse mt-1" id="collapse{{ $menu->id }}" data-bs-parent="#sidenavAccordion">

                            <div class="modern-submenu">

                                @foreach ($menu->children as $child)
                                    <a href="{{ $child->link }}"
                                        class="nav-link modern-sub-link d-flex align-items-center gap-2">

                                        <span class="submenu-dot"></span>
                                        <span>{{ $child->name }}</span>

                                    </a>
                                @endforeach

                            </div>

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
        --hover: rgba(255, 255, 255, 0.05);
        --active: rgba(32, 157, 216, 0.12);
        --accent: #209DD8;
        ;

        font-family: 'Inter', system-ui, sans-serif;
    }

    /* SIDEBAR BACKGROUND */
    .modern-software-sidebar .sb-sidenav-dark {
        background: var(--sidebar-bg) !important;
        border-color: rgba(255, 255, 255, 0.06) !important;
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
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid rgba(255, 255, 255, 0.05);
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
        background: rgba(255, 255, 255, 0.03);
    }

    /* SIDEBAR HEADING */
    .sidebar-heading {
        letter-spacing: 1px;
        font-size: 11px;
    }

    /* =========================
   MODERN SUBMENU
========================= */

    .modern-submenu {
        margin-left: 18px;
        padding: 8px;
        border-radius: 14px;

        background: rgba(255, 255, 255, 0.02);

        border: 1px solid rgba(255, 255, 255, 0.04);

        backdrop-filter: blur(10px);
    }

    /* SUB MENU LINK */

    .modern-sub-link {
        position: relative;

        color: #94a3b8 !important;

        font-size: 13px;
        font-weight: 500;

        padding: 10px 14px !important;

        border-radius: 10px;

        transition: all .3s ease;
    }

    /* DOT */

    .submenu-dot {
        width: 6px;
        height: 6px;

        border-radius: 50%;

        background: rgba(255, 255, 255, 0.25);

        transition: all .3s ease;
    }

    /* HOVER */

    .modern-sub-link:hover {
        background: rgba(32, 157, 216, 0.12);

        color: #ffffff !important;

        transform: translateX(4px);
    }

    .modern-sub-link:hover .submenu-dot {
        background: #209DD8;

        box-shadow: 0 0 10px rgba(32, 157, 216, .6);
    }

    /* ACTIVE */

    .modern-sub-link.active {
        background: rgba(32, 157, 216, 0.16);

        color: #fff !important;

        border-left: 3px solid #209DD8;
    }

    .modern-sub-link.active .submenu-dot {
        background: #209DD8;
    }

    /* COLLAPSE ANIMATION */

    .collapse .modern-submenu {
        animation: submenuFade .25s ease;
    }

    @keyframes submenuFade {
        from {
            opacity: 0;
            transform: translateY(-6px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
</style>
