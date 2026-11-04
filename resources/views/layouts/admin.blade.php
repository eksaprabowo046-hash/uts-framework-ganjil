<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.partials.head')
    @yield('styles')
</head>

<body>
    @hasSection('no-header-sidebar')
        @yield('content')
    @else
        <!-- Begin page -->
        <div id="layout-wrapper">
            @include('admin.partials.header')
            @include('admin.partials.sidebar')

            <div class="main-content">
                <div class="page-content">
                    @yield('content')
                </div>

                @include('admin.partials.footer')
            </div>

            <div class="menu-overlay"></div>
        </div>
    @endif

    @include('admin.partials.scripts')
    @yield('scripts')
</body>

</html>