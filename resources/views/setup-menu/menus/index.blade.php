@extends('layout.dashboard')

@section('main')
<main>
<!-- resources/views/menu/index.blade.php -->
<ul class="nav">
    @foreach($menus as $menu)
        <li class="nav-item">
            <a href="{{ $menu->url }}" class="nav-link">
                <i class="icon"></i>
                <p>{{ $menu->name }}</p>
            </a>
        </li>
    @endforeach
</ul>



</main>
@endsection
