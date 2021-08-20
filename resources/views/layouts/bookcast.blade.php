<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="BookCast -  Miabart Afrik">
    <meta name="author" content="Miabart Afrik">
    <meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne, ">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>{{ pageTitle($title) }} | BookCast | {{ config('app.name') }}</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/icon-list.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/preloader_miabartAfrik.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{ asset('public/assets/css/colors/color.css') }}">

    <!-- Select2 css -->
    <link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

    <!-- Internal Owl Carousel css-->
    <link href="{{ asset('public/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Sidemenu css-->
    <link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    @stack('styles')

    @livewireStyles
</head>

<body class="horizontalmenu">

    <!-- Loader -->
    <x-loader />
    <!-- End Loader -->

    <!-- Page -->
    <div class="page">

        <!-- Main Header-->
        @include("layouts.partials.bookcast._header")
        <!-- End Main Header-->

        <!-- Mobile-header -->
        @include("layouts.partials.bookcast._mobile_header")
        <!-- Mobile-header closed -->

        <!-- Horizonatal menu-->
        @include("layouts.partials.bookcast._nav")
        <!--End  Horizonatal menu-->

        <!-- Main Content-->
        <main>
            @yield('body')
        </main>
        <!-- End Main Content-->

        @include("layouts.partials.bookcast._footer")

        <!-- Sidebar -->
        @include("layouts.partials.bookcast._right_sidebar")
        <!-- End Sidebar -->

    </div>
    <!-- End Page -->

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <!-- Jquery js-->
    <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

    <!-- BookCast js-->
    <script src="{{ asset('public/assets/js/bookcast.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Perfect-scrollbar js -->
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

    <!-- Sidebar js -->
    <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/form-validation.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('public/assets/js/sticky.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    @include('flashy::message')

    @stack('scripts')

    <script>
        $('span.share').click(function(e) {
            var div = $(this).data('show');
            $('#' + div).slideToggle();
        });
    </script>
    
    @livewireScripts
</body>

</html>