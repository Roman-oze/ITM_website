<head>
    @include('admin.Admin layout._head')
</head>


<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    @include('admin.Admin layout._nav')
</nav>



<div id="layoutSidenav">
    @include('admin.Admin layout._sidenav')


        @yield('main')

</div>









<footer>
    @include('admin.Admin layout._footer')
</footer>

<script>
    @include('admin.Admin layout.script')
</script>
