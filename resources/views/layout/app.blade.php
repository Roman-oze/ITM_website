<!DOCTYPE html>
<html lang="en">
<head>
    @include('layout._head')
</head>

<body>
    <!-- Navbar -->
    @include('layout._nav')

    <!-- Header Section -->
    <header>
        @yield('headerpage')
    </header>

    <!-- Main Content -->
  
        @yield('content')
 

    <!-- Footer -->
    @include('layout._footer')

    <!-- JavaScript Files -->
    <script src="{{ asset('frontend/js/app.min.js') }}"></script>
    @include('layout._script')
</body>
</html>
