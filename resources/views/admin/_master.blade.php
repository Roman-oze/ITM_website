<head>
    @include('admin._head')
</head>
<nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    @include('admin._nav')
</nav>

<div>
    @yield('admin_content')
</div>


<footer class="py-4 bg-light mt-auto">
    @include('admin._footer')
</footer>

<script>
    @include('admin._script')
</script>
