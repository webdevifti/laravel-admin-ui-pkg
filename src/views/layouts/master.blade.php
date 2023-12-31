<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>@yield('page_title')</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="keywords" content="" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  
    <link rel="shortcut icon" type="image/png" href="{{ asset('vendor/admindash/admin/dist/images/logos/favicon.png') }}" />
    
    <link rel="stylesheet" href="{{ asset('vendor/admindash/admin/dist/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">

    <link id="themeColors" rel="stylesheet" href="{{ asset('vendor/admindash/admin/dist/css/style.min.css') }}" />

    @yield('header_styles')
</head>

<body>
    <div class="preloader">
        <img src="{{ asset('vendor/admindash/admin/dist/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>
    <div class="preloader">
        <img src="{{ asset('vendor/admindash/admin/dist/images/logos/favicon.png') }}" alt="loader" class="lds-ripple img-fluid" />
    </div>

    <div class="page-wrapper" id="main-wrapper" data-theme="blue_theme" data-layout="vertical" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        
        <aside class="left-sidebar">
            @include('vendor.admindash.layouts.sidebar')
        </aside>
      
        <div class="body-wrapper">
            @include('vendor.admindash.layouts.header')

            @yield('main_content')
            @include('vendor.admindash.layouts.footer')

            <script src="{{ asset('vendor/admindash/admin/dist/libs/jquery/dist/jquery.min.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/libs/simplebar/dist/simplebar.min.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/js/app.min.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/js/app.init.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/js/app-style-switcher.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/js/sidebarmenu.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/js/custom.js') }}"></script>
            <script src="{{ asset('vendor/admindash/admin/dist/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
            {{-- <script src="{{ asset('vendor/admindash/admin/dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script> --}}
            <script src="{{ asset('vendor/admindash/admin/dist/js/dashboard.js') }}"></script>
            @yield('footer_scripts')
</body>

</html>
