<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <!-- Sidebar Menu -->
                @foreach ($menus->where('parent_id', null) as $menu)
                    @if ($menu->children->isEmpty())
                        <!-- Normal menu format -->
                        <a class="nav-link" href="{{ $menu->link }}">
                            <div class="sb-nav-link-icon">
                                <i class="{{ $menu->icon }}"></i>
                            </div>
                            {{ $menu->name }}
                        </a>
                    @else
                        <!-- Dropdown menu format -->
                        <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{ $menu->id }}" aria-expanded="false" aria-controls="collapse{{ $menu->id }}">
                            <div class="sb-nav-link-icon">
                                <i class="{{ $menu->icon }}"></i>
                            </div>
                            {{ $menu->name }}
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapse{{ $menu->id }}" aria-labelledby="heading{{ $menu->id }}" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                @foreach ($menu->children as $child)
                                    <a href="{{ $child->link }}" class="nav-link">{{ $child->name }}</a>
                                @endforeach
                            </nav>
                        </div>
                    @endif
                @endforeach

                {{-- @foreach ($menu_permissions as $permission)
                        <!-- Normal menu format -->
                        @if ($permission->menu->children->isEmpty())
                        <!-- Normal menu format -->
                        <a class="nav-link" href="{{ $permission->menu->link }}">
                            <div class="sb-nav-link-icon">
                                <i class="{{ $permission->menu->icon }}"></i>
                            </div>
                            {{ $permission->menu->name }}
                        </a>
                    @else
                        <!-- Dropdown menu format -->
                        <a class="nav-link collapsed mt-1" href="#" data-bs-toggle="collapse" data-bs-target="#collapse{{ $permission->menu->id }}" aria-expanded="false" aria-controls="collapse{{ $permission->menu->id }}">
                            <div class="sb-nav-link-icon">
                                <i class="{{ $permission->menu->icon }}"></i>
                            </div>
                            {{ $permission->menu->name }}
                            <div class="sb-sidenav-collapse-arrow">
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </a>
                        <div class="collapse" id="collapse{{ $permission->menu->id }}" aria-labelledby="heading{{ $permission->menu->id }}" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                @foreach ($permission->menu->children as $child)
                                    <a href="{{ $child->link }}" class="nav-link">{{ $child->name }}</a>
                                @endforeach
                            </nav>
                        </div>
                    @endif

                @endforeach --}}


            </div>
        </div>
    </nav>
</div>
