<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="BookCast -  Miabart Afrik">
    <meta name="author" content="Miabart Afrik">
    <meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon" />

    <!-- Title -->
    <title>{{ pageTitle($title) }} | BookCast | {{ config('app.name') }}</title>

    <!-- Bootstrap css-->
    <link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/jquery.mCustomScrollbar.min.css') }}" rel="stylesheet">

    <!-- Icons css-->
    <link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/css/icon-list.css') }}" rel="stylesheet" />

    <!-- Style css-->
    <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/jquery.fancybox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/tabstyles.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/tabs.css') }}" rel="stylesheet">
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

    <link rel="stylesheet" href="{{ asset('public/assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- Sidemenu css -->
    <link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    <link href="{{ asset('public/assets/plugins/gallery/gallery.css') }}" rel="stylesheet">

    @stack('styles')

    @livewireStyles

    <link href="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.css') }}" rel="stylesheet">

    <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
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

    <!-- Internal Gallery js-->
    <script src="{{ asset('public/assets/plugins/gallery/picturefill.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lightgallery.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lightgallery-1.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-pager.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-autoplay.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-fullscreen.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-zoom.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-hash.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/gallery/lg-share.js') }}"></script>

    <script src="{{ asset('public/assets/js/cbpFWTabs.js') }}"></script>

    <!-- Sticky js -->
    <script src="{{ asset('public/assets/js/sticky.js') }}"></script>

    <!-- Modal js-->
    <script src="{{ asset('public/assets/js/modal.js') }}"></script>

    <!-- Custom js -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <!-- scriptscroll js -->
    <script src="{{ asset('public/assets/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/scriptscroll.js') }}"></script>

    <script src="{{ asset('public/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('public/assets/js/carousel.js') }}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Richejoy js -->
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" integrity="sha512-YUkaLm+KJ5lQXDBdqBqk7EVhJAdxRnVdT2vtCzwPHSweCzyMgYV/tgGF4/dCyqtCC2eCphz0lRQgatGVdfR0ww==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="{{ asset('public/plugins/emojione/lib/js/emojione.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js" defer></script>
    <!-- <script src="{{ asset('public/plugins/ckeditor/ckeditor.js') }}" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/standard/ckeditor.js" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/basic/ckeditor.js" defer></script>
    <script src="//cdn.ckeditor.com/4.16.2/full/ckeditor.js" defer></script> -->

    <script src="https://js.pusher.com/7.0/pusher.min.js" defer></script>
    <script src="{{ asset('public/js/pusher.js') }}" defer></script>

    <script src="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.js') }}" defer></script>

    <script src="{{ asset('public/plugins/validate-image-size-preview-imo/dist/imoViewer-min.js') }}" defer></script>

    <script src="{{ asset('public/plugins/password/bootstrap-password-toggler.min.js') }}" defer></script>

    <script src="{{ asset('public/js/laroute.js') }}" defer></script>

    <script src="{{ asset('public/js/scripts.js') }}" defer></script>

    <script src="{{ asset('public/js/app.js') }}" defer></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

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