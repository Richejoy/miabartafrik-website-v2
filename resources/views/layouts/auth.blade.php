<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="BookCast -  Miabart Afrik">
    <meta name="author" content="Miabart Afrik">
    <meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>{{ pageTitle($title) }} | Authentification | {{ config('app.name') }}</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Icons css-->
    <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />

    <!-- Select2 css -->
    <link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

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
    @stack('styles')

    @livewireStyles
</head>

<body class="main-body leftmenu">

    <!-- Loader -->
    <x-loader imgLink="{{ asset('public/assets/img/preloader.jpg') }}" />
    <!-- End Loader -->

    <!-- Page -->
    <main>
        @include('flash::message')

        @yield('body')
    </main>
    <!-- End Page -->

    <!-- Jquery js-->
    <script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

    <script src="{{ asset('public/assets/js/select2.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Internal Jquery-steps js-->
    <script src="{{ asset('public/assets/plugins/jquery-steps/jquery.steps.min.js') }}"></script>

    <!-- Internal Accordion-Wizard-Form js-->
    <script src="{{ asset('public/assets/plugins/accordion-Wizard-Form/jquery.accordion-wizard.min.js') }}"></script>

    <!-- Internal Form-wizard js-->
    <script src="{{ asset('public/assets/js/form-wizard.js') }}"></script>

    <!-- Internal Parsley js-->
    <script src="{{ asset('public/assets/plugins/parsleyjs/parsley.min.js') }}"></script>

    <!-- Internal Form-validation js-->
    <script src="{{ asset('public/assets/js/form-validation.js') }}"></script>

    <!-- Select2 js-->
    <script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <script src="{{ asset('public/js/miabartafrik.js') }}"></script>

    @include('flashy::message')

    @stack('scripts')
    
    @livewireScripts
</body>

</html>