<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('meta::manager', [
        'title' => fullPageTitle($title, 'Authentification'),
    ])

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <link href="https://miabartafrik.com/public/assets/css/preloader_miabartAfrik.min.css" rel="stylesheet">

    {!! stylesheets([
        'assets/css/all_import_css',
        'assets/plugins/web-fonts/icons',
        'assets/plugins/web-fonts/font-awesome/font-awesome.min',
        'assets/plugins/web-fonts/plugin',
        'assets/css/icon-list',
        'assets/plugins/gallery/gallery.css',
        'css/app',
    ]) !!}

    @stack('styles')

    @livewireStyles
</head>

<body class="main-body leftmenu auth_body">

    <!-- Loader -->
    <x-loader imgLink="{{ asset('public/assets/img/preloader.jpg') }}" />
    <!-- End Loader -->

    <!-- Page -->
    <main>
        @yield('body')

        @if(in_array(Route::currentRouteName(), ['page.completed', 'member.create', 'artist.create', 'partner.create', 'photographer.create']))

        {!! NoCaptcha::displaySubmit('recaptcha-watcher', 'submit now!', ['data-theme' => 'dark']) !!}

        @endif
    </main>
    <!-- End Page -->

    {!! javascripts([
        'js/laroute',
        'js/app',
    ]) !!}

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    {!! javascripts([
        'assets/plugins/perfect-scrollbar/perfect-scrollbar.min',
        'assets/plugins/sidebar/sidebar',
        'assets/plugins/select2/js/select2.min',
        'assets/plugins/gallery/picturefill',
        'assets/plugins/gallery/lightgallery',
        'assets/plugins/gallery/lightgallery-1',
        'assets/plugins/gallery/lg-pager',
        'assets/plugins/gallery/lg-autoplay',
        'assets/plugins/gallery/lg-fullscreen',
        'assets/plugins/gallery/lg-zoom',
        'assets/plugins/gallery/lg-hash',
        'assets/plugins/gallery/lg-share',
        'assets/plugins/parsleyjs/parsley.min',
        'assets/plugins/sweet-alert/sweetalert.min',
        'assets/plugins/sweet-alert/jquery.sweet-alert',
        'assets/js/jquery.mCustomScrollbar.concat.min',
        'assets/js/cbpFWTabs',
        'assets/js/form-validation',
        'assets/js/sticky',
        'assets/js/custom',
        'assets/js/bookcast',
        'plugins/validate-image-size-preview-imo/dist/imoViewer-min',
        'js/scripts',
    ]) !!}

    {!! NoCaptcha::renderJs(str_replace('_', '-', app()->getLocale())) !!}
    
    @livewireScripts

    @include('flashy::message')

    @stack('scripts')
</body>

</html>