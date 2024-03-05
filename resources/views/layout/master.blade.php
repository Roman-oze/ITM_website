<!DOCTYPE html>
<html lang="en">
<head>
  @include('layout._head')
</head>
<body>
   
    <nav class="navbar navbar-expand-lg navbar-light  facilty p-2 t-center">
        @include('layout._nav')
      </nav>
 
      <header>
            <div class="container-fluid">
                 @yield('headerpage')
             </div>
      </header>


<div class="container-fluid">
    @yield('content')
</div>

    <footer>
        @include('layout._footer')
    </footer>  

    <script>
        @include('layout._script')
    </script>
 
</body>
</html>
