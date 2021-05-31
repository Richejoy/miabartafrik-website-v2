<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Code - Plateforme artistique</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLE NEWS -->

    <!-- bookcast CSS -->
    <link href="./assets/css/bookcast.css" rel="stylesheet" />

    <!-- FANCYBOX CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>

    <!-- end STYLE NEWS -->

    <!-- miabartafrik CSS -->
    <link href="./assets/css/miabartafrik.css" rel="stylesheet" />


    <!-- COLOR-THEMES CSS -->
    <link href="./assets/css/color-themes.css" rel="stylesheet" />

    <!-- Perfect scroll bar css-->
    <link href="./assets/plugins/pscrollbar/perfect-scrollbar.css" rel="stylesheet" />

    <!--C3.JS CHARTS PLUGIN -->
    <link href="./assets/plugins/charts-c3/c3-chart.css" rel="stylesheet" />

    <!-- TABS CSS -->
    <link href="./assets/plugins/tabs/tabs-style2.css" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="./assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet" />

    <!--- FONT-ICONS CSS -->
    <link href="./assets/css/icons.css" rel="stylesheet" />

    <!-- RIGHT-MENU CSS -->
    <link href="./assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- LEFT-SIDEMENU CSS -->
    <link href="./assets/plugins/jquery-jside-menu-master/css/jside-menu.css" rel="stylesheet" />
    <link href="./assets/plugins/jquery-jside-menu-master/css/jside-skins.css" rel="stylesheet" />

    <!-- HORIZONTAL-MENU CSS -->
    <link href="./assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="./assets/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet">

    <!-- NEWS01 CSS -->


    <!-- SELECT2 CSS -->
    <link href="./assets/plugins/select2/select2.min.css" rel="stylesheet" />

    <!-- TIME PICKER CSS -->
    <link href="./assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet" />

    <!-- DATE PICKER CSS -->
    <link href="./assets/plugins/spectrum-date-picker/spectrum.css" rel="stylesheet" />

    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="./assets/plugins/multipleselect/multiple-select.css">

    <!-- FILE UPLODES -->
    <link href="./assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css" />

    <!--Sweat Alert Css-->
    <link href="./assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

</head>

<body>
    <!-- partial:index.partial.html -->
    <div id="login_Inscrit_bookArt-wrap">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="./assets/images/loader.svg" class="loader-img" alt="Loader">
        </div>
        <div class="login_Inscrit_bookArt-image"
            style="background: url(./assets/images/home/forgotpass.jpg) no-repeat center / cover;">

        </div>

        <div class="login_Inscrit_bookArt-card">
            <div class="login_Inscrit_bookArt-card-header">
                <a class="header-brand" href="index.html">
                    <img src="./assets/images/brand/logo.png" class="h-8" alt="BookCast logo">
                </a>


            </div>

            <p class="text-mutedinscrit">Un code vous est envoyé, renseigner pour confirmer votre compte. </p>
            <div class="grid_connexionBookcast">

                <form action="https://httpbin.org/post" method="POST"
                    class="form_connexionBookcast login_connexionBookcast">

                    <div class="form__field">
                        <label for="login__password">
                            <i class="icon icon-key" data-toggle="tooltip" title=""></i>
                            <span class="hidden">Saisir le code ici</span></label>
                        <input id="login__password" type="password" name="password" class="form__input"
                            placeholder="Saisir le code ici" required>
                    </div>


                    <div class="form__field">
                        <input type="submit" value="Réinitialiser">
                    </div>

                </form>

            </div>




        </div>
    </div>
    <!-- partial -->

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="./assets/js/connexion.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script>

    <!-- TYPINGS SCRIPTS -->
    <script src="./assets/js/typings.js"></script>
    <!-- PROFIL SCRIPTS -->
    <script src="./assets/js/bookcast.js"></script>

    <!-- JQUERY SCRIPTS -->
    <script src="./assets/js/vendors/jquery-3.2.1.min.js"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="./assets/js/vendors/bootstrap.bundle.min.js"></script>

    <!-- SPARKLINE -->
    <script src="./assets/js/vendors/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE -->
    <script src="./assets/js/vendors/circle-progress.min.js"></script>

    <!-- RATING STAR -->
    <script src="./assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- CHARTJS CHART -->
    <script src="./assets/plugins/chart/Chart.bundle.js"></script>
    <script src="./assets/plugins/chart/utils.js"></script>

    <!-- C3.JS CHART PLUGIN -->
    <script src="./assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="./assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- INPUT MASK PLUGIN-->
    <script src="./assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- CHARTJS CHART -->
    <script src="./assets/plugins/chart/Chart.bundle.js"></script>
    <script src="./assets/plugins/chart/utils.js"></script>

    <!-- CUSTOM SCROLLBAR -->
    <script src="./assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Side-menu js-->
    <script src="./assets/plugins/side-menu/sidemenu.js"></script>

    <!-- STICKY JS-->
    <script src="./assets/js/sticky.js"></script>
    <script src="./assets/js/horizontal-sticky.js"></script>

    <!-- Perfect scroll bar js-->
    <script src="./assets/plugins/pscrollbar/perfect-scrollbar.js"></script>

    <!-- PIETY CHART -->
    <script src="./assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="./assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- RIGHT-MENU JS -->
    <script src="./assets/plugins/sidebar/sidebar.js"></script>

    <!-- LEFTSIDEMENU PLUGIN -->
    <script src="./assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js"></script>

    <!-- HORIZONTAL-MENU JS -->
    <script src="./assets/plugins/horizontal-menu/horizontal-menu.js"></script>
    <script src="./assets/plugins/jquery-jside-menu-master/docs/demo-only.js"></script>

    <!-- INDEX-SCRIPTS -->
    <script src="./assets/js/index3.js"></script>

    <!--CUSTOM JS -->
    <script src="./assets/js/custom.js"></script>


    <!-- SELECT2 PLUGIN -->
    <script src="./assets/plugins/select2/select2.full.min.js"></script>



    <!-- TIMEPICKER JS -->
    <script src="./assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="./assets/plugins/time-picker/toggles.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="./assets/plugins/spectrum-date-picker/spectrum.js"></script>
    <script src="./assets/plugins/spectrum-date-picker/jquery-ui.js"></script>
    <script src="./assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- DATA TABLE -->
    <script src="./assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="./assets/js/select2.js"></script>

    <!-- FILE UPLOADES JS -->
    <script src="./assets/plugins/fileuploads/js/dropify.min.js"></script>
    <script src="./assets/plugins/fileuploads/js/file-upload.js"></script>


    <!-- MULTI SELECT JS-->
    <script src="./assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="./assets/plugins/multipleselect/multi-select.js"></script>
</body>

</html>