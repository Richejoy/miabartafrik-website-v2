<!doctype html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-TileColor" content="#0061da">
        <meta name="theme-color" content="#1643a3">
        <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"/>
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="HandheldFriendly" content="True">
        <meta name="MobileOptimized" content="320">
        <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon"/>
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}"/>

        <!-- TITLE -->
        <title>{{ config('app.name') }} - BookCast - {{ $title ?? 'Laravel' }}</title>

        <!-- bookcast CSS -->
        <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet"/>

        <!-- MODAL CSS -->
        <link href="{{ asset('public/assets/css/surveyModalAuto.css') }}" rel="stylesheet"/>   

        <!-- miabartafrik CSS -->
        <link href="{{ asset('public/assets/css/miabartafrik.css') }}" rel="stylesheet"/>  
    </head>
    <body class="app sidebar-mini rtl horizontal-body">

        <!-- GLOBAL-LOADER --> 
        <!-- Preloader MiabartAfrik -->
        <div id="global-loader" class="miabartafrik_preloader_page">
            <img class="miabartafrik_preloader_logo" src="{{ asset('public/assets/images/preloader.jpg') }}">
            <div class="miabartafrik_preloader_previewArea">
                <div class="miabartafrik_preloader_ballPulse">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
        </div>
        <!-- Preloader MiabartAfrik end -->

        @yield('body')

        <!-- BACK-TO-TOP -->
        <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

        <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
 
        <!-- BOOKCAST JS -->
        <script src="{{ asset('public/assets/js/bookcast.js') }}"></script> 

        @if(Route::currentRouteName() == 'bookcast.index')
        <!-- MODAL PUBLICITE JS --> 
        <script src="{{ asset('public/assets/js/surveyModalAuto.js') }}"></script>
        @endif
 
        <!-- JQUERY SCRIPTS -->
        <script src="{{ asset('public/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

        <!-- BOOTSTRAP SCRIPTS -->
        <script src="{{ asset('public/assets/js/vendors/bootstrap.bundle.min.js') }}"></script>

        <!-- SPARKLINE -->
        <script src="{{ asset('public/assets/js/vendors/jquery.sparkline.min.js') }}"></script>

        <!-- CHART-CIRCLE -->
        <script src="{{ asset('public/assets/js/vendors/circle-progress.min.js') }}"></script>

        <!-- RATING STAR -->
        <script src="{{ asset('public/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

        <!-- CHARTJS CHART -->
        <script src="{{ asset('public/assets/plugins/chart/Chart.bundle.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/chart/utils.js') }}"></script>

        <!-- C3.JS CHART PLUGIN -->
        <script src="{{ asset('public/assets/plugins/charts-c3/d3.v5.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/charts-c3/c3-chart.js') }}"></script>

        <!-- INPUT MASK PLUGIN-->
        <script src="{{ asset('public/assets/plugins/input-mask/jquery.mask.min.js') }}"></script>
 
        <!-- CUSTOM SCROLLBAR -->
        <script src="{{ asset('public/assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

        <!--Side-menu js-->
        <script src="{{ asset('public/assets/plugins/side-menu/sidemenu.js') }}"></script>

        <!-- STICKY JS-->
        <script src="{{ asset('public/assets/js/sticky.js') }}"></script>
        <script src="{{ asset('public/assets/js/horizontal-sticky.js') }}"></script>

        <!-- Perfect scroll bar js-->
        <script src="{{ asset('public/assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script> 

        <!-- RIGHT-MENU JS -->
        <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

        <!-- LEFTSIDEMENU PLUGIN -->
        <script src="{{ asset('public/assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js') }}"></script>

        <!-- HORIZONTAL-MENU JS -->
        <script src="{{ asset('public/assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/jquery-jside-menu-master/docs/demo-only.js') }}"></script>
 
        <!--CUSTOM JS -->
        <script src="{{ asset('public/assets/js/custom.js') }}"></script>  

        <!-- DATEPICKER JS -->
        <script src="{{ asset('public/assets/plugins/spectrum-date-picker/spectrum.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/spectrum-date-picker/jquery-ui.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

        <!-- DATA TABLE -->
        <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

        <!-- SELECT2 JS -->
        <script src="{{ asset('public/assets/js/select2.js') }}"></script> 

        <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/mainsli.js') }}"></script>

        <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
        
    </body>
</html>