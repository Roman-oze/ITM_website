
@include('include._head')

<body>

    <div id="layout-wrapper">



        @include('include._nav')


        <div id="layoutSidenav">
            @include('include._sidenav')
                <div id="layoutSidenav_content">
                    @yield('main')
                </div>
        </div>


        @include('include._footer')

        <script src="{{asset('admin/js/scripts.js')}}">
            @include('include._script')
        </script>

    </div>

</body>
