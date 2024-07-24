
<head>
  @include('layout._head')
</head>

<body>
    {{-- <nav class="navbar navbar-expand-lg navbar-light  fixed-top facilty p-2 t-center"> --}}

     @include('layout._nav')


      <header>
           @yield('headerpage')
      </header>


    @yield('content')


    <footer>
        @include('layout._footer')
    </footer>

    <script src="{{asset('frontend/js/app.min.js')}}">
        @include('layout._script')
    </script>


</body>
</html>


