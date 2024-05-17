
<head>
  @include('layout._head')
</head>
<body>

    <div class="container-fluid  ">
        @yield('topmost')
    </div>
    {{-- <nav class="navbar navbar-expand-lg navbar-light  fixed-top facilty p-2 t-center"> --}}
    <nav class="navbar navbar-expand-lg navbar-light facilty  p-2 ">

        @include('layout._nav')
      </nav>

      <header>

            <div class="container-fluid ">
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

