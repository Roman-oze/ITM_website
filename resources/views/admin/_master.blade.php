<head>
    @include('admin._head')
</head>


<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    @include('admin._nav')
</nav>



<div id="layoutSidenav">
    @include('admin._sidenav')


        @yield('main')
       
</div>








<footer>
    @include('admin._footer')
</footer>

<script>
    @include('admin.script')
</script>
