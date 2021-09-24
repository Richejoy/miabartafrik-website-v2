<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('meta::manager', [
        'title' => fullPageTitle($title, 'BookCast'),
    ])

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    {!! stylesheets([
        'assets/css/preloader_miabartAfrik.min',
        'assets/css/all_import_css',
        'assets/plugins/web-fonts/icons',
        'assets/plugins/web-fonts/font-awesome/font-awesome.min',
        'assets/plugins/web-fonts/plugin',
        'assets/css/icon-list',
        'assets/plugins/gallery/gallery.css',
        'plugins/emojionearea/dist/emojionearea.min',
        'css/app',
    ]) !!}

    @stack('styles')

    @livewireStyles
</head>

<body class="horizontalmenu bookcast_body">

    <!-- Loader -->
    @if(in_array(Route::currentRouteName(), ['artist.show', 'partner.show', 'photographer.show']))

        @yield('loader')

    @else

        <x-loader imgLink="{{ auth()->user()->library->remote }}" />

    @endif
    <!-- End Loader -->

    @if(auth()->user()->completed == 4)

    <!-- Page -->
    <div class="page">

        <!-- Main Header-->
        @include("layouts.partials.bookcast._header", ['dashboard' => false])
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
        @livewire('bookcast.friends')
        <!-- End Sidebar -->

        <!-- Modals -->
        @include("layouts.partials.bookcast._modals")
        <!-- End Modals -->

    </div>
    <!-- End Page -->

    @else

    <div class="container py-5">
        <div class="row">
            <div class="col py-5 text-center">
                <h1 class="text-warning">Erreur</h1>
                <p>
                    Vous n'avez pas terminer votre inscription sur le site officiel.
                </p>
            </div>
        </div>
    </div>

    @endif

    <!-- Back-to-top -->
    <a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    {!! javascripts([
        'assets/plugins/gallery/picturefill',
        'assets/plugins/gallery/lightgallery',
        'assets/plugins/gallery/lightgallery-1',
        'assets/plugins/gallery/lg-pager',
        'assets/plugins/gallery/lg-autoplay',
        'assets/plugins/gallery/lg-fullscreen',
        'assets/plugins/gallery/lg-zoom',
        'assets/plugins/gallery/lg-hash',
        'assets/plugins/gallery/lg-share',
        'assets/js/cbpFWTabs',
        'js/laroute',
        'js/scripts',
    ]) !!}

    {!! javascripts([
        'assets/js/form-validation',
        'assets/js/bookcast',
        'assets/plugins/perfect-scrollbar/perfect-scrollbar.min',
        'assets/js/jquery.mCustomScrollbar.concat.min',
        'assets/plugins/bootstrap/js/popper.min',
        'assets/plugins/bootstrap/js/bootstrap.min',
        'assets/plugins/sidebar/sidebar',
        'assets/plugins/select2/js/select2.min',
        'assets/js/sticky',
        'assets/js/custom',
        'assets/plugins/parsleyjs/parsley.min',
    ]) !!}

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    {!! javascripts([
        'assets/plugins/sweet-alert/sweetalert.min',
        'assets/plugins/sweet-alert/jquery.sweet-alert',
        
        'plugins/emojione/lib/js/emojione',
        'plugins/emojionearea/dist/emojionearea.min',
        'plugins/validate-image-size-preview-imo/dist/imoViewer-min',
        'js/app',
    ]) !!}
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js" defer></script>
    <!-- <script src="{{ asset('public/plugins/ckeditor/ckeditor.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js" defer></script> -->

    <script src="https://js.pusher.com/7.0/pusher.min.js" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    {!! NoCaptcha::renderJs(str_replace('_', '-', app()->getLocale())) !!}

    @livewireScripts

    @include('flashy::message')

    @stack('scripts')

    <script>
        CKEDITOR.plugins.addExternal('emojione', "{{ asset('public/plugins/ckeditor-emojione') }}/", 'plugin.js');
        
        CKEDITOR.replace('publicationContent', {
            language: 'fr',
            //uiColor: '#428BCA',
            toolbarLocation: 'bottom',
            extraPlugins: 'emojione'
        });
    </script>
</body>

</html>