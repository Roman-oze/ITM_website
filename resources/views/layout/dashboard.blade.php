<!DOCTYPE html>
<html lang="en">

<head>
    @include('include._head')
</head>

<body class="sb-nav-fixed">

    <div id="layout-wrapper">

        {{-- Top Navbar --}}
        @include('include._nav')

        <div id="layoutSidenav">

            {{-- Sidebar --}}
            @include('include._sidenav')

            {{-- Main Content --}}
            <div id="layoutSidenav_content">

                <main class="container-fluid px-4 py-4">
                    <div class="row justify-content-center">
                        @yield('main')
                    </div>
                </main>

                {{-- Footer --}}
                @include('include._footer')

            </div>

        </div>

    </div>

    {{-- JavaScript Files --}}
    @include('include._script')

    <script src="{{ asset('admin/js/scripts.js') }}"></script>

</body>

</html>
