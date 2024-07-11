
<head>
   @include('club.layout.head')
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-info fixed-top p-2">
@include('club.layout.nav')
</nav>

<header>
      <br>
      <br>
      @yield('club_header')
      <br>
      <br>
</header>

<div class="container">
    @yield('main_content')
</div>

<footer>
    @include('club.layout.footer')
</footer>

<script>
@include('layout._script')
</script>
