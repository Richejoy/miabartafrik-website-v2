<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-TileColor" content="#0061da">
    <meta name="theme-color" content="#1643a3">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <link rel="icon" href="{{ asset('public/favicon.ico') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/favicon.ico') }}" />

    <!-- TITLE -->
    <title>{{ $title ?? 'Laravel' }} - BookCast – {{ config('app.name') }}</title>

    <!-- STYLE NEWS -->

    <!-- bookcast CSS -->
    <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet" />

    @yield('stylesheet')

    <!-- FANCYBOX CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>

    <!-- end STYLE NEWS -->

    <!-- miabartafrik CSS -->
    <link href="{{ asset('public/assets/css/miabartafrik.css') }}" rel="stylesheet" />

    <!-- COLOR-THEMES CSS -->
    <link href="{{ asset('public/assets/css/color-themes.css') }}" rel="stylesheet" />

    <!-- Perfect scroll bar css-->
    <link href="{{ asset('public/assets/plugins/pscrollbar/perfect-scrollbar.css') }}" rel="stylesheet" />

    <!--C3.JS CHARTS PLUGIN -->
    <link href="{{ asset('public/assets/plugins/charts-c3/c3-chart.css') }}" rel="stylesheet" />

    <!-- TABS CSS -->
    <link href="{{ asset('public/assets/plugins/tabs/tabs-style2.css') }}" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="{{ asset('public/assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet" />

    <!-- RIGHT-MENU CSS -->
    <link href="{{ asset('public/assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- LEFT-SIDEMENU CSS -->
    <link href="{{ asset('public/assets/plugins/jquery-jside-menu-master/css/jside-menu.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/jquery-jside-menu-master/css/jside-skins.css') }}" rel="stylesheet" />

    <!-- HORIZONTAL-MENU CSS -->
    <link href="{{ asset('public/assets/plugins/horizontal-menu/dropdown-effects/fade-down.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/plugins/horizontal-menu/horizontal-menu.css') }}" rel="stylesheet">

    <!-- SELECT2 CSS -->
    <link href="{{ asset('public/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- TIME PICKER CSS -->
    <link href="{{ asset('public/assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />

    <!-- DATE PICKER CSS -->
    <link href="{{ asset('public/assets/plugins/spectrum-date-picker/spectrum.css') }}" rel="stylesheet" />

    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/plugins/multipleselect/multiple-select.css') }}">

    <!-- FILE UPLODES -->
    <link href="{{ asset('public/assets/plugins/fileuploads/css/dropify.min.css') }}" rel="stylesheet"
        type="text/css" />

    <!--Sweat Alert Css-->
    <link href="{{ asset('public/assets/plugins/sweet-alert/sweetalert.css') }}" rel="stylesheet" />
</head>

<body class="app sidebar-mini rtl horizontal-body">
    <!-- GLOBAL-LOADER -->
    <div id="global-loader">
        <img src="{{ asset('public/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
    </div>

    <div class="miabartafrik">
        <div class="page-main">
            <!-- app-content-->
            <div class="app-content">

                <!-- HEADER -->
                @include('layouts.partials.bookcast._header')
                <!-- HEADER END -->

                <!--Resposnisve Navbar-->
                @include('layouts.partials.bookcast._notifications')
                <!--/Resposnisve Navbar-->

                <!-- HORIZONTAL-MENU -->
                @include('layouts.partials.bookcast._nav')
                <!-- HORIZONTAL-MENU END -->

                <!-- VIEW -->
                @yield('body')
                <!-- VIEW -->

            </div>
        </div>

        <!-- MES CONATCTS OPEN -->
        @include('layouts.partials.bookcast._sidebar_right')
        <!-- MES CONATCTS -->

        <!-- FOOTER -->
        @include('layouts.partials.bookcast._footer')
        <!-- FOOTER END -->
    </div>

    <!-- BACK-TO-TOP -->
    <a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

    <!-- PROFIL SCRIPTS -->
    <script src="{{ asset('public/assets/js/bookcast.js') }}"></script>

    <!-- jquery-2.1.3.min js -->
    <script type="text/javascript" src="{{ asset('public/assets/js/jquery-3.2.1.min.js') }}"></script>
    <!-- Vendors -->
    <script type="text/javascript" src="{{ asset('public/assets/js/sliderhome.min.js') }}"></script>
    <!-- Vendors -->
    <script type="text/javascript" src="{{ asset('public/assets/js/mainsliderhome.js') }}"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script>

    <!-- TYPINGS SCRIPTS -->
    <script src="{{ asset('public/assets/js/typings.js') }}"></script>

    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('public/assets/js/vendors/jquery-3.2.1.min.js') }}"></script>

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

    <!-- CHARTJS CHART -->
    <script src="{{ asset('public/assets/plugins/chart/Chart.bundle.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/chart/utils.js') }}"></script>

    <!-- CUSTOM SCROLLBAR -->
    <script src="{{ asset('public/assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!--Side-menu js-->
    <script src="{{ asset('public/assets/plugins/side-menu/sidemenu.js') }}"></script>

    <!-- STICKY JS-->
    <script src="{{ asset('public/assets/js/sticky.js') }}"></script>
    <script src="{{ asset('public/assets/js/horizontal-sticky.js') }}"></script>

    <!-- Perfect scroll bar js-->
    <script src="{{ asset('public/assets/plugins/pscrollbar/perfect-scrollbar.js') }}"></script>

    <!-- PIETY CHART -->
    <script src="{{ asset('public/assets/plugins/peitychart/jquery.peity.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/peitychart/peitychart.init.js') }}"></script>

    <!-- RIGHT-MENU JS -->
    <script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

    <!-- LEFTSIDEMENU PLUGIN -->
    <script src="{{ asset('public/assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js') }}"></script>

    <!-- HORIZONTAL-MENU JS -->
    <script src="{{ asset('public/assets/plugins/horizontal-menu/horizontal-menu.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/jquery-jside-menu-master/docs/demo-only.js') }}"></script>

    <!-- INDEX-SCRIPTS -->
    <script src="{{ asset('public/assets/js/index3.js') }}"></script>

    <!--CUSTOM JS -->
    <script src="{{ asset('public/assets/js/custom.js') }}"></script>

    <!-- SELECT2 PLUGIN -->
    <script src="{{ asset('public/assets/plugins/select2/select2.full.min.js') }}"></script>

    <!-- TIMEPICKER JS -->
    <script src="{{ asset('public/assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/time-picker/toggles.min.js') }}"></script>

    <!-- DATEPICKER JS -->
    <script src="{{ asset('public/assets/plugins/spectrum-date-picker/spectrum.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/spectrum-date-picker/jquery-ui.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

    <!-- DATA TABLE -->
    <script src="{{ asset('public/assets/plugins/datatable/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/dataTables.bootstrap4.min.js') }}"></script>

    <!-- SELECT2 JS -->
    <script src="{{ asset('public/assets/js/select2.js') }}"></script>

    <!-- FILE UPLOADES JS -->
    <script src="{{ asset('public/assets/plugins/fileuploads/js/dropify.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- MULTI SELECT JS-->
    <script src="{{ asset('public/assets/plugins/multipleselect/multiple-select.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/multipleselect/multi-select.js') }}"></script>

    <!-- SWEET-ALERT PLUGIN -->
    <script src="{{ asset('public/assets/plugins/sweet-alert/sweetalert.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('js/bookcast.js') }}"></script>

</body>

</html>