<!DOCTYPE html>
<html lang="en">

<head>
    @include('include._head')
</head>

<body>

    {{-- Top Navbar --}}
    @include('include._nav')
    <div id="layout-wrapper">


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


            </div>

        </div>

    </div>
    {{-- Footer --}}
    @include('include._footer')

    {{-- JavaScript Files --}}
    @include('include._script')

    <script src="{{ asset('admin/js/scripts.js') }}"></script>

</body>

</html>
