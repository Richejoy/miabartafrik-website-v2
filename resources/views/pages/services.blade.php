<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Services – {{ config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- STYLE NEWS -->

    <!-- bookcast CSS -->
    <link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet" />

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

    <!-- NEWS01 CSS -->


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

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <!-- partial:index.partial.html -->

    <div id="inscription_Inscrit_bookArt-wrap">
        <!-- GLOBAL-LOADER -->
        <div id="global-loader">
            <img src="{{ asset('public/assets/images/loader.svg') }}" class="loader-img" alt="Loader">
        </div>

        <!-- AvatarView -->
        <div class="inscription_Inscrit_bookArt-image">

            <section class="section_util_miabartafrik">
                <div class="cards_util_miabartafrik-container">
                    <div class="cards_util_miabartafrik-wrapper">
                        <div data-card="0" class="info_util_miabartafrik active">
                            <div class="image_util_miabartafrik-wrapper">
                                <div class="image_util_miabartafrik image_util_miabartafrik-1"><img draggable="false"
                                        src="https://source.unsplash.com/Um9AkOiIDcU/600x400" alt="Photo of Miami">
                                </div>
                            </div>
                            <h3>BookCast</h3>
                            <p>Retouvez le book de tes artistes préférés toute catégorie confondue. Vous pourriez les
                                likers pour propulser leur carrière artistique.</p>
                            <a target="_blank" class="button" href="https://unsplash.com/s/photos/miami"
                                aria-label="Photos from unsplash of miami">Avantages BookCast</a>
                        </div>

                        <div data-card="1" class="info_util_miabartafrik inactive">
                            <div class="image_util_miabartafrik-wrapper">
                                <div class="image_util_miabartafrik"><img draggable="false"
                                        src="{{ asset('public/assets/images/reseau.jpg') }}" alt="Photo of toronto">
                                </div>
                            </div>
                            <h3>Réseaux artistique</h3>
                            <p>Les professionnels artistique et culturel sont à retrouver ici, discuter donc avec eux
                                pour des projets artistique et culturel.</p>
                            <a target="_blank" class="button" href="https://unsplash.com/s/photos/toronto"
                                aria-label="Photos from unsplash of toronto">Avantages réseau artistique</a>
                        </div>

                        <div data-card="2" class="info_util_miabartafrik inactive">
                            <div class="image_util_miabartafrik-wrapper">
                                <div class="image_util_miabartafrik"><img draggable="false"
                                        src="https://source.unsplash.com/gGOzpDZ_Qz0/600x400" alt="Photo of munich">
                                </div>
                            </div>
                            <h3>BoutikArt</h3>
                            <p>Vous aimez les oeuvres des artistes africains? Découvrez des oeuvres "made in africa"
                                dans la BoutikArt. Achetez en toute simplicité et sécurité partout dans le monde.</p>
                            <a target="_blank" class="button" href="https://unsplash.com/s/photos/munich"
                                aria-label="Photos from unsplash of munich">Avantage BoutikArt</a>
                        </div>

                        <div data-card="3" class="info_util_miabartafrik inactive">
                            <div class="image_util_miabartafrik-wrapper">
                                <div class="image_util_miabartafrik"><img draggable="false"
                                        src="https://source.unsplash.com/Mn9Fa_wQH-M/600x400" alt="Photo of tokyo">
                                </div>
                            </div>
                            <h3>Bon-Adress</h3>
                            <p>Bénéficiez des réductions négociées par MiabartAfrik auprès des hôtels, entreprises,
                                boutiques dans " Bon-Adress".</p>
                            <a target="_blank" class="button" href="https://unsplash.com/s/photos/munich"
                                aria-label="Photos from unsplash of tokyo">Avantages Bon-Adress</a>
                        </div>

                    </div>
                    <a href="#" aria-label="Slide the cards" class="slide-button"></a>
                </div>
            </section>

        </div>

        <!-- Formulaire infos -->
        <div class="inscription_Inscrit_bookArt-card" style="background-color: #f8f8f9 !important;">

            <!-- SERVICES MIABARTAFRIK -->

            <fieldset class="servicesmiabartafrikGood-group">
                <legend class="servicesmiabartafrikGood-group-legend">Choisissez votre préféré</legend>

                <a href="{{ route('bookcast.index') }}" class="">
                    <div class="servicesmiabartafrikGood">
                        <label class="servicesmiabartafrikGood-wrapper">
                            <span class="servicesmiabartafrikGood-tile">
                                <span class="servicesmiabartafrikGood-icon">
                                    <svg height="477pt" viewBox="0 0 477.8314 477" width="477pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m447.535156 18.277344-7.703125-1.917969c-85.363281-21.257813-174.636719-21.257813-260 0l-7.695312 1.917969c-17.820313 4.433594-30.324219 20.445312-30.304688 38.808594v55.703124c-39.769531 11.265626-78.113281 27.074219-114.265625 47.113282l-6.984375 3.847656c-16.066406 8.875-23.992187 27.578125-19.199219 45.296875l23.28125 87.054687c20.988282 78.132813 78.746094 141.125 154.765626 168.800782l24 8.800781c28.46875 10.238281 60.300781 1.691406 79.808593-21.433594l16.386719-19.574219c15.253906-18.148437 27.773438-38.425781 37.167969-60.195312 5.042969-1.957031 9.851562-4.488281 14.328125-7.535156l20.925781-14.648438c66.269531-46.433594 105.746094-122.257812 105.785156-203.175781v-90.054687c.019531-18.359376-12.480469-34.371094-30.296875-38.808594zm-160.160156 404.136718-16.390625 19.589844c-15.179687 17.984375-39.9375 24.632813-62.082031 16.664063l-24-8.796875c-71.113282-25.894532-125.144532-84.824219-144.78125-157.914063l-23.289063-87.054687c-2.867187-10.617188 1.878907-21.816406 11.503907-27.136719l6.976562-3.847656c33.753906-18.714844 69.476562-33.632813 106.519531-44.480469v17.703125c.054688 71.660156 31.082031 139.792969 85.09375 186.882813-14.070312 5.71875-28.925781 9.289062-44.0625 10.582031l-60.160156 4.878906c-3.640625.289063-6.625 3.007813-7.25 6.609375s1.269531 7.167969 4.601563 8.664062l79.753906 36c17.367187 7.871094 37.875 2.386719 49-13.105468l17.453125-24.277344 2.28125 1.597656c12.105469 8.453125 26.523437 12.980469 41.289062 12.960938 2.398438 0 4.71875-.304688 7.078125-.535156-8.035156 16.117187-17.949218 31.226562-29.535156 45.015624zm-46.34375-76.992187c2.183594 1.601563 4.3125 3.328125 6.558594 4.894531l5.539062 3.875-17.34375 24.132813c-6.679687 9.285156-18.984375 12.566406-29.402344 7.839843l-51.496093-23.199218 29.265625-2.398438c19.703125-1.652344 38.960937-6.777344 56.878906-15.144531zm220.800781-198.28125c-.03125 75.699219-36.960937 146.625-98.953125 190.066406l-20.925781 14.648438c-19.304687 13.449219-44.941406 13.449219-64.242187 0l-20.917969-14.648438c-61.996094-43.4375-98.929688-114.367187-98.960938-190.066406v-90.054687c0-11.011719 7.492188-20.609376 18.175781-23.28125l7.703126-1.925782c82.816406-20.628906 169.425781-20.628906 252.242187 0l7.703125 1.925782c10.679688 2.671874 18.175781 12.269531 18.175781 23.28125zm0 0" />
                                        <path
                                            d="m280.175781 149.757812 10.910157-11.710937c-25.011719-24.953125-65.5-24.953125-90.511719 0l-.398438.398437 11.710938 10.914063c9.070312-9.074219 21.398437-14.140625 34.226562-14.066406 12.832031.078125 25.097657 5.285156 34.0625 14.464843zm0 0" />
                                        <path
                                            d="m328.574219 138.046875-.398438.398437 11.710938 10.914063c9.070312-9.074219 21.398437-14.140625 34.226562-14.066406 12.832031.078125 25.097657 5.285156 34.0625 14.464843l10.910157-11.710937c-25.011719-24.953125-65.5-24.953125-90.511719 0zm0 0" />
                                        <path
                                            d="m114.070312 265.703125c12.507813-3.355469 25.839844-1.515625 36.96875 5.101563l7.457032-14.167969c-30.609375-17.671875-69.75-7.1875-87.425782 23.417969l-.277343.488281 6.917969 4 7.199218 3.503906c6.34375-11.046875 16.84375-19.09375 29.160156-22.34375zm0 0" />
                                        <path
                                            d="m396.398438 224.230469-59.367188 10.800781c-17.984375 3.28125-36.414062 3.28125-54.398438 0l-59.378906-10.800781c-3.585937-.652344-7.164062 1.203125-8.691406 4.515625-1.53125 3.3125-.628906 7.238281 2.195312 9.546875l67.746094 55.410156c14.75 12.007813 35.90625 12.007813 50.65625 0l67.734375-55.425781c2.824219-2.308594 3.730469-6.234375 2.199219-9.546875-1.527344-3.3125-5.105469-5.167969-8.695312-4.515625zm-71.367188 57.101562c-8.847656 7.214844-21.550781 7.214844-30.398438 0l-43.792968-35.824219 28.933594 5.257813c19.871093 3.632813 40.230468 3.632813 60.097656 0l28.9375-5.257813zm0 0" />
                                    </svg>
                                </span>
                                <span class="servicesmiabartafrikGood-label">BookCast</span>
                            </span>
                        </label>
                    </div>
                </a>

                <a href="{{ route('artistic_network.index') }}" class="">
                    <div class="servicesmiabartafrikGood">
                        <label class="servicesmiabartafrikGood-wrapper">
                            <input type="servicesmiabartafrikGood" class="servicesmiabartafrikGood-input" checked />
                            <span class="servicesmiabartafrikGood-tile">
                                <span class="servicesmiabartafrikGood-icon">
                                    <svg height="511pt" viewBox="0 -3 511.99992 511" width="511pt"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="m509.914062 214.859375-85.695312-111.320313c-3.171875-4.117187-8.957031-5.132812-13.34375-2.34375l-55.328125 35.1875h-72.160156c-.933594 0-1.863281.199219-2.761719.460938l-55.949219 16.105469-58.054687-15.878907-56.410156-35.875c-4.3125-2.742187-9.992188-1.8125-13.199219 2.164063l-94.785157 117.40625c-3.40625 4.21875-2.84375 10.378906 1.265626 13.914063l49.679687 42.753906 44.570313 60.0625c-13.035157 13.886718-12.78125 35.789062.78125 49.355468 6.011718 6.007813 13.65625 9.402344 21.519531 10.191407-.273438 1.78125-.414063 3.589843-.414063 5.425781 0 9.476562 3.691406 18.386719 10.390625 25.085938 6.703125 6.703124 15.613281 10.394531 25.089844 10.394531.128906 0 .253906-.007813.378906-.011719-.003906.242188-.015625.480469-.015625.722656 0 9.476563 3.691406 18.386719 10.390625 25.089844 6.703125 6.699219 15.613281 10.390625 25.089844 10.390625 1.871094 0 3.722656-.152344 5.539063-.433594.769531 7.890625 4.171874 15.570313 10.203124 21.601563 6.914063 6.917968 16 10.375 25.085938 10.375s18.171875-3.457032 25.089844-10.375l5.425781-5.425782 2.277344 1.835938c6.859375 6.644531 15.765625 9.964844 24.671875 9.964844 9.085937 0 18.171875-3.457032 25.085937-10.375 7.058594-7.058594 10.515625-16.375 10.371094-25.644532 9.265625.140626 18.585937-3.3125 25.644531-10.367187 7.050782-7.054687 10.507813-16.363281 10.371094-25.628906 9.652344.152343 18.808594-3.554688 25.640625-10.386719 7.058594-7.058594 10.515625-16.375 10.371094-25.644531 9.273437.140625 18.585937-3.3125 25.644531-10.371094 12.046875-12.046875 13.597656-30.667969 4.664062-44.414063l32.542969-68.15625 48.925781-42.101562c4.042969-3.480469 4.660157-9.511719 1.40625-13.734375zm-402.914062-91.910156 40.5625 25.792969-88.238281 107.5-35.359375-30.433594zm5.722656 227.921875 12.242188-12.242188c.371094-.371094.761718-.722656 1.160156-1.050781 2.394531-1.953125 5.292969-3.117187 8.363281-3.394531.085938-.007813.175781-.007813.261719-.011719.4375-.035156.875-.058594 1.316406-.054687 4.195313.058593 8.09375 1.773437 10.984375 4.824218 5.671875 5.996094 5.367188 15.792969-.679687 21.839844l-11.871094 11.871094c-6.003906 6.003906-15.773438 6.003906-21.777344 0-6.003906-6.007813-6.003906-15.777344 0-21.78125zm31.496094 62.484375c-2.910156-2.90625-4.511719-6.773438-4.511719-10.886719s1.601563-7.980469 4.511719-10.890625l23.738281-23.738281c4.546875-4.546875 11.695313-5.792969 17.507813-3.023438 5.992187 2.855469 9.363281 9.359375 8.484375 15.902344-.46875 3.492188-2.09375 6.78125-4.585938 9.277344l-23.363281 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm35.84375 36.191406c-2.910156-2.90625-4.511719-6.773437-4.511719-10.886719 0-4.113281 1.601563-7.980468 4.511719-10.890625l23.734375-23.738281c4.863281-4.859375 12.664063-5.90625 18.617187-2.441406 5.4375 3.164062 8.285157 9.375 7.351563 15.5625-.511719 3.402344-2.128906 6.601562-4.5625 9.035156l-23.359375 23.359375c-2.910156 2.910156-6.777344 4.511719-10.890625 4.511719s-7.980469-1.601563-10.890625-4.511719zm40.828125 31.5625c-6.003906-6.003906-6.003906-15.773437 0-21.777344l12.242187-12.242187c.371094-.371094.757813-.71875 1.15625-1.046875.011719-.007813.019532-.015625.027344-.023438 1.992188-1.617187 4.332032-2.699219 6.828125-3.171875.058594-.007812.117188-.015625.175781-.023437.429688-.078125.867188-.140625 1.304688-.179688.175781-.015625.351562-.015625.53125-.027343.359375-.019532.714844-.042969 1.078125-.039063 4.191406.058594 8.09375 1.769531 10.984375 4.824219.355469.375.6875.765625.992188 1.167968 4.617187 6.035157 3.996093 15-1.734376 20.734376l-11.808593 11.808593c-6.003907 6.003907-15.773438 6-21.777344-.003906zm187.285156-112.042969c-6.003906 6.007813-15.773437 6.003906-21.777343 0-.21875-.21875-.449219-.421875-.683594-.613281l-64.554688-65.234375c-3.902344-3.941406-10.257812-3.972656-14.199218-.070312-3.941407 3.898437-3.972657 10.253906-.074219 14.195312l65.253906 65.933594c.007813.007812.015625.015625.023437.023437 6.003907 6.003907 6.003907 15.777344 0 21.78125-2.910156 2.910157-6.777343 4.511719-10.890624 4.511719-4.117188 0-7.984376-1.601562-10.890626-4.511719l-43.652343-44.105469c-3.898438-3.941406-10.253907-3.972656-14.195313-.074218-3.941406 3.902344-3.972656 10.257812-.074218 14.199218l42.984374 43.429688c.21875.273438.453126.535156.703126.785156 6.003906 6.003906 6.003906 15.777344 0 21.78125-6.007813 6.003906-15.78125 6-21.785157-.003906l-23.824219-24.074219c-3.902343-3.941406-10.257812-3.976562-14.199218-.074219-3.941406 3.898438-3.972656 10.253907-.074219 14.195313l23.160156 23.398437c.21875.273438.453125.539063.707031.789063 6.003907 6.003906 6.003907 15.777344 0 21.78125-6.003906 6.007813-15.773437 6.003906-21.777343 0-.691407-.691406-1.503907-1.222656-2.277344-1.816406-.65625-.5-.828125-.847657-.5-1.644531.332031-.808594.828125-1.539063 1.160156-2.351563.367188-.90625.664063-1.839844.953125-2.777344 1.539063-4.960937 1.992188-10.296875 1.300782-15.445312-1.328126-9.878907-6.761719-18.792969-14.996094-24.433594-4.449219-3.042969-9.597656-5.039063-14.933594-5.789063 2.585938-11.40625-.519531-23.773437-8.597656-32.308593-6.648438-7.023438-15.628906-10.964844-25.289063-11.097657-.351562-.003906-.703125-.003906-1.058593 0 .214843-9.21875-3.136719-18.378906-9.492188-25.09375-6.652344-7.023437-15.632812-10.964843-25.289062-11.097656-2.871094-.039062-5.769532.265625-8.566407.910156-1.195312-8.316406-5.386719-16.011718-11.734375-21.515624-6.308594-5.460938-14.242187-8.492188-22.691406-8.609376-8.894531-.128906-17.632812 3.152344-24.238281 9.117188l-38.808594-52.292969 92.84375-113.109375 29.589844 8.09375-38.644531 68.191406c-4.671876 8.246094-5.851563 17.816407-3.324219 26.949219 2.527343 9.136719 8.457031 16.738281 16.703125 21.410157.515625.292968 1.035156.570312 1.5625.835937.039062.019531.078125.039063.121094.058594 1.386718.691406 2.8125 1.285156 4.257812 1.785156 6.730469 2.332031 14 2.585937 21.011719.648437 9.132812-2.527343 16.734375-8.460937 21.40625-16.703124l25.113281-44.316407 44.839844 3.179688 119.402344 119.398437c6 6.007813 6 15.777344-.003907 21.78125zm4.160157-46.019531-112.011719-112.007813c-.210938-.214843-.433594-.417968-.664063-.609374-1.613281-1.34375-3.613281-2.15625-5.722656-2.304688l-54.902344-3.894531c-3.796875-.261719-7.570312 1.757812-9.445312 5.066406l-28.234375 49.828125c-2.027344 3.578125-5.328125 6.152344-9.292969 7.25-3.960938 1.097656-8.117188.582031-11.699219-1.445312-3.578125-2.027344-6.152343-5.328126-7.25-9.292969-1.097656-3.964844-.585937-8.121094 1.445313-11.699219l37.691406-66.519531 15.273438-4.394531c.101562-.03125.199218-.070313.300781-.101563l57.003906-16.460937h68.875l85.984375 109.304687zm40.503906-73.039063-79.515625-101.136718 40.582031-25.808594 74.300781 96.511719zm0 0" />
                                        <path
                                            d="m310.183594 117.53125c2.570312 0 5.140625-.980469 7.101562-2.941406l68.578125-68.578125c3.921875-3.921875 3.921875-10.277344 0-14.199219s-10.277343-3.921875-14.199219 0l-68.578124 68.578125c-3.921876 3.921875-3.921876 10.277344 0 14.199219 1.960937 1.960937 4.53125 2.941406 7.097656 2.941406zm0 0" />
                                        <path
                                            d="m194.714844 114.589844c1.960937 1.960937 4.53125 2.941406 7.101562 2.941406 2.566406 0 5.136719-.980469 7.097656-2.941406 3.921876-3.921875 3.921876-10.277344 0-14.199219l-68.578124-68.578125c-3.921876-3.921875-10.277344-3.921875-14.199219 0s-3.921875 10.277344 0 14.199219zm0 0" />
                                        <path
                                            d="m256 117.53125c5.542969 0 10.039062-4.496094 10.039062-10.039062v-56.753907c0-5.542969-4.496093-10.039062-10.039062-10.039062s-10.039062 4.496093-10.039062 10.039062v56.753907c0 5.542968 4.496093 10.039062 10.039062 10.039062zm0 0" />
                                        <path
                                            d="m246.734375 14.351562c1.59375 3.863282 5.566406 6.398438 9.757813 6.179688 4.140624-.214844 7.777343-3.011719 9.058593-6.953125 1.285157-3.972656-.113281-8.5-3.441406-11.03125-3.394531-2.5859375-8.128906-2.730469-11.679687-.382813-3.960938 2.617188-5.496094 7.828126-3.695313 12.1875zm0 0" />
                                    </svg>
                                </span>
                                <span class="servicesmiabartafrikGood-label">Réseaux artistiques</span>
                            </span>
                        </label>
                    </div>
                </a>


                <a href="{{ route('boutikart.index') }}" class="">
                    <div class="servicesmiabartafrikGood">
                        <label class="servicesmiabartafrikGood-wrapper">
                            <input type="servicesmiabartafrikGood" class="servicesmiabartafrikGood-input" />
                            <span class="servicesmiabartafrikGood-tile">
                                <span class="servicesmiabartafrikGood-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" id="Layer_1" data-name="Layer 1"
                                        viewBox="0 0 512 512" width="512" height="512">
                                        <path
                                            d="M341,219h84a6,6,0,0,0,6-6V190a6,6,0,0,0-6-6H341a6,6,0,0,0-6,6v23A6,6,0,0,0,341,219Zm35-23h43v11H376Zm-29,0h17v11H347Z" />
                                        <path
                                            d="M341,269H455a6,6,0,0,0,6-6V240a6,6,0,0,0-6-6H341a6,6,0,0,0-6,6v23A6,6,0,0,0,341,269Zm35-23h73v11H376Zm-29,0h17v11H347Z" />
                                        <path
                                            d="M341,319h84a6,6,0,0,0,6-6V290a6,6,0,0,0-6-6H341a6,6,0,0,0-6,6v23A6,6,0,0,0,341,319Zm35-23h43v11H376Zm-29,0h17v11H347Z" />
                                        <path
                                            d="M341,369H445a6,6,0,0,0,6-6V340a6,6,0,0,0-6-6H341a6,6,0,0,0-6,6v23A6,6,0,0,0,341,369Zm35-23h63v11H376Zm-29,0h17v11H347Z" />
                                        <path
                                            d="M89.433,402H276.567a5.65,5.65,0,0,0,5.978-6.166l-14.7-174.047a5.972,5.972,0,0,0-5.811-5.494L219,216V201.383A42.216,42.216,0,0,0,176.784,159h-.02C153.383,159.011,134,178.041,134,201.419V216H104.129a5.916,5.916,0,0,0-5.979,5.4L83.454,396a5.449,5.449,0,0,0,1.562,4.313A5.78,5.78,0,0,0,89.433,402ZM257,231.231l12.8,151.724L257,372.614ZM259.589,390H241.66l9.3-6.973ZM245,373.243l-13.641,10.231L245,244.526ZM146,201.417c0-16.764,14-30.409,30.8-30.417h.014A30.217,30.217,0,0,1,207,201.419V216H146ZM109.646,228H134v19.247a6,6,0,0,0,12,0V228h61v19.247a6,6,0,0,0,12,0V228h15.188l-12.12,123H99.257Zm-11.4,135H220.89l-2.67,27H95.959Z" />
                                        <path
                                            d="M456,48H56A46,46,0,0,0,10,94V418a46,46,0,0,0,46,46H456a46,46,0,0,0,46-46V94A46,46,0,0,0,456,48ZM22,94.182A34.2,34.2,0,0,1,56,60H168V92.869A21.021,21.021,0,0,1,146.909,114H22ZM490,417.818A34.2,34.2,0,0,1,456,452H56a34.2,34.2,0,0,1-34-34.182V126H490ZM490,114H172.491A32.54,32.54,0,0,0,180,92.868V60H456a34.2,34.2,0,0,1,34,34.182Z" />
                                        <path
                                            d="M62.364,78.979a8.182,8.182,0,1,0,8.182,8.182A8.191,8.191,0,0,0,62.364,78.979Z" />
                                        <path
                                            d="M95.091,78.979a8.182,8.182,0,1,0,8.182,8.182A8.191,8.191,0,0,0,95.091,78.979Z" />
                                        <path
                                            d="M127.819,78.979A8.182,8.182,0,1,0,136,87.161,8.191,8.191,0,0,0,127.819,78.979Z" />
                                        <path
                                            d="M44,158.833a6,6,0,0,0,6-6v-4.295a6,6,0,0,0-12,0v4.295A6,6,0,0,0,44,158.833Z" />
                                        <path
                                            d="M44,275.833a6,6,0,0,0,6-6v-96a6,6,0,0,0-12,0v96A6,6,0,0,0,44,275.833Z" />
                                    </svg>
                                </span>
                                <span class="servicesmiabartafrikGood-label">BoutikArt</span>
                            </span>
                        </label>
                    </div>
                </a>

                <a href="{{ route('bonaddress.index') }}" class="">
                    <div class="servicesmiabartafrikGood">
                        <label class="servicesmiabartafrikGood-wrapper">
                            <input type="servicesmiabartafrikGood" class="servicesmiabartafrikGood-input" />
                            <span class="servicesmiabartafrikGood-tile">
                                <span class="servicesmiabartafrikGood-icon">
                                    <svg id="Capa_1" enable-background="new 0 0 512 512" height="512"
                                        viewBox="0 0 512 512" width="512" xmlns="http://www.w3.org/2000/svg">
                                        <g>
                                            <path
                                                d="m94.744 296.184c-8.817 5.23-14.744 14.842-14.744 25.816 0 16.542 13.458 30 30 30 13.036 0 24.152-8.361 28.28-20h77.72c16.542 0 30 13.458 30 30s-13.458 30-30 30h-120c-27.57 0-50 22.43-50 50s22.43 50 50 50h100c5.523 0 10-4.477 10-10s-4.477-10-10-10h-100c-16.542 0-30-13.458-30-30s13.458-30 30-30h120c27.57 0 50-22.43 50-50s-22.43-50-50-50h-77.72c-2.365-6.668-7.023-12.257-13.024-15.816l76.378-125.316c12.015-18.06 18.366-39.104 18.366-60.868 0-60.654-49.346-110-110-110s-110 49.346-110 110c0 21.764 6.351 42.808 18.366 60.868zm15.256 35.816c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10zm0-312c49.626 0 90 40.374 90 90 0 17.868-5.227 35.135-15.115 49.935-.077.115-.152.232-.224.351l-74.661 122.499s-74.808-122.735-74.885-122.85c-9.888-14.8-15.115-32.067-15.115-49.935 0-49.626 40.374-90 90-90z" />
                                            <path
                                                d="m110 160c27.57 0 50-22.43 50-50s-22.43-50-50-50-50 22.43-50 50 22.43 50 50 50zm0-80c16.542 0 30 13.458 30 30s-13.458 30-30 30-30-13.458-30-30 13.458-30 30-30z" />
                                            <path
                                                d="m402 166c-60.654 0-110 49.346-110 110 0 21.799 6.371 42.875 18.424 60.954l76.093 119.36c-5.892 3.565-10.461 9.101-12.796 15.686h-87.721c-5.523 0-10 4.477-10 10s4.477 10 10 10h87.72c4.128 11.639 15.243 20 28.28 20 16.542 0 30-13.458 30-30 0-10.881-5.823-20.426-14.516-25.686l76.093-119.36c12.052-18.079 18.423-39.155 18.423-60.954 0-60.654-49.346-110-110-110zm0 326c-5.514 0-10-4.486-10-10s4.486-10 10-10 10 4.486 10 10-4.486 10-10 10zm74.885-166.065c-.039.06-74.885 117.462-74.885 117.462s-74.846-117.403-74.885-117.462c-9.888-14.8-15.115-32.067-15.115-49.935 0-49.626 40.374-90 90-90s90 40.374 90 90c0 17.868-5.227 35.135-15.115 49.935z" />
                                            <path
                                                d="m402 226c-27.57 0-50 22.43-50 50s22.43 50 50 50 50-22.43 50-50-22.43-50-50-50zm0 80c-16.542 0-30-13.458-30-30s13.458-30 30-30 30 13.458 30 30-13.458 30-30 30z" />
                                            <circle cx="241" cy="482" r="10" />
                                        </g>
                                    </svg>
                                </span>
                                <span class="servicesmiabartafrikGood-label">Bon-Adress</span>
                            </span>
                        </label>
                    </div>
                </a>
            </fieldset>

            <div class="clearfix"></div>

        </div>
    </div>

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


    <script type="text/javascript">
    $(".sexytabs").tabs({
        show: {
            effect: "slide",
            direction: "left",
            duration: 200,
            easing: "easeOutBack"
        },
        hide: {
            effect: "slide",
            direction: "right",
            duration: 200,
            easing: "easeInQuad"
        }
    });
    </script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</body>

</html>