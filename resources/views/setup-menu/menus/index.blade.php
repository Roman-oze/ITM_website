@extends('layout.dashboard')

@section('main')
<main>
<!-- resources/views/menu/index.blade.php -->
<!-- Loop through each main menu item -->
@foreach ($menus as $menu)
    <a class="nav-link {{ $menu->children->isNotEmpty() ? 'collapsed' : '' }} mt-1 text-white fa-lg" href="{{ $menu->link }}"
       {{ $menu->children->isNotEmpty() ? 'data-bs-toggle=collapse' : '' }}
       data-bs-target="#collapseMenu{{ $menu->id }}"
       aria-expanded="false" aria-controls="collapseMenu{{ $menu->id }}">

        <div class="sb-nav-link-icon text-white fa-lg">
            <i class="fa {{ $menu->icon }}"></i>
        </div>
        {{ $menu->name }}

        @if ($menu->children->isNotEmpty())
            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
        @endif
    </a>

    <!-- Render submenus if they exist -->
    @if ($menu->children->isNotEmpty())
        <div class="collapse" id="collapseMenu{{ $menu->id }}" aria-labelledby="heading{{ $menu->id }}" data-bs-parent="#sidenavAccordion">
            <nav class="sb-sidenav-menu-nested nav">
                @foreach ($menu->children as $submenu)
                    <a href="{{ $submenu->link }}" class="nav-link">{{ $submenu->name }}</a>
                @endforeach
            </nav>
        </div>
    @endif
@endforeach




</main>
@endsection
