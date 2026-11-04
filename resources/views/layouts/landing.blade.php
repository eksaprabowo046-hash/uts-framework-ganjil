<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.partials.head')
    @yield('styles')
</head>
<body class="custom-cursor">
    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

    <!--Start Preloader-->
    <div id="preloader">
        <div class="preloader">
            <span></span>
            <span></span>
        </div>
    </div>
    <!--End Preloader-->

    @include('landing.partials.widgets')

    <div class="page-wrapper">
        @include('landing.partials.header')

        @yield('content')

        @include('landing.partials.footer')
    </div>

    @include('landing.partials.mobile_nav')
    @include('landing.partials.scripts')
    @yield('scripts')
</body>
</html>
