
<head>
   @include('club.layout.head')
</head>

<nav class="navbar navbar-expand-lg navbar-light club-bg-color fixed-top p-2">

@include('club.layout.nav')
</nav>

<header>
      <br>
      <br>
      <br>
      <br>
    </header>

    @yield('club_header')
<div class="container">
    @yield('main_content')
</div>

<footer>
    @include('club.layout.footer')
</footer>

<script>
@include('layout._script')
</script>
