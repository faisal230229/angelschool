<!DOCTYPE html>
<html lang="en">
<!-- index.html  21 Nov 2019 03:44:50 GMT -->

<head>
    <meta charset="UTF-8" />
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport" />
    <title>The Angel School System</title>
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/bundles/morris/morris.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}" />
    <!-- Custom style CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/img/logo.png') }}" />
    <link rel="stylesheet" href="[path/to/css/feathericon.min.css) }}" />
    @livewireStyles

</head>

<body>
    <div class="loader"></div>
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>

            @include('layouts.navbar')

            <!------------------------------------------- Main Side bar ------------------------------------------>

            @include('layouts.sidebar')

            <!-- Main Content -->
            {{-- @yield('content') --}}
            {{ $slot }}

        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/js/app.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/apexcharts/apexcharts.min.js') }}"></script>
    <!-- JS Libraies -->
    <script src="{{ asset('assets/bundles/morris/morris.min.js') }}"></script>
    <script src="{{ asset('assets/bundles/morris/raphael-min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/chart-morris.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('assets/js/page/chart-apexcharts.js') }}"></script>
    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <!-- Custom JS File -->
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    @livewireScripts
</body>
<!-- index.html  21 Nov 2019 03:47:04 GMT -->

</html>