@extends('layouts.bookcast', ['title' => 'Accueil'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">
    <!-- WELCOME SECTION -->
    <section id="welcome-section" class="grid">
        <div>
            <h2 data-en class="member_info">Acteurs,<br>chanteurs, <br>producteurs, <br>danseurs, <span
                    class="h2color">&</span>...</h2>
        </div>

        <div class="vertical-line"></div>

        <div class="welc_h1">
            <h1 data-en class="vivez_art">Vivez,<br>de votre<br>Art<span class="h1color">.</span></h1>
        </div>
    </section>
    <!-- END WELCOME SECTION -->

    <div class="container">

        <div class="inner-body">

            <!-- Sponsors -->
            @include("layouts.partials.bookcast._sponsors", ['sponsors' => $sponsors])
            <!-- End Sponsors -->

            <!-- Row -->
            <div class="row row-sm">

                <!-- LEFT ASIDE -->
                @include('layouts.partials.bookcast._left_aside')
                <!-- END LEFT ASIDE -->

                <!-- BODY -->
                <div class="col-xl-6 col-lg-12">

                    <div class="main-content-body tab-pane border-top-0 active" id="timeline">
                        <div class="post_news">
                            <div class="main-content-body main-content-body-profile">
                                <div class="main-profile-body p-0">
                                    <div class="row row-sm">
                                        <div class="col-12">

                                            <!-- Post container -->
                                            <div class="card mg-b-20 border">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-user mr-2">
                                                            <div class="main-img-user avatar-md"><img alt=""
                                                                    class="rounded-circle"
                                                                    src="../assets/img/users/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-2 ml-2">Avorgno Yawo Guy</h6><span
                                                                class="text-primary ml-2">juste maintenant </span>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown"> <a class="new option-dots2"
                                                                    data-toggle="dropdown" href="JavaScript:void(0);"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                    style=""> <a class="dropdown-item" href="#">Modifier
                                                                        la publication </a> <a class="dropdown-item"
                                                                        href="#">Supprimer le message</a> <a
                                                                        class="dropdown-item" href="#">Paramètres
                                                                        personnels</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="post_text mg-t-0">
                                                        Découvrez l'avant goût de mon prochain film <span>Waka</span> du
                                                        réalisateur Steven Af. <a href="">#film africain</a> <a
                                                            href="">#long métrage</a> <a href="">#réalisation</a>
                                                    </p>
                                                    <div class="row row-sm">
                                                        <div
                                                            class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                                                            <iframe
                                                                class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik"
                                                                src="" allowtransparency="true" allowfullscreen=""
                                                                data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;rel=0&amp;playlist=VXe_2zFCyGw&amp;loop=1&amp;mute=1"
                                                                allow="autoplay; fullscreen" frameborder="0"></iframe>

                                                            <button
                                                                class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
                                                                style="background-image:url(../assets/img/artiste/slim-girl.jpg);">
                                                                <svg class="play-vid" viewBox="0 0 100 100">
                                                                    <path class="stroke-solid" fill="none"
                                                                        stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                                                     C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                                                    <path class="stroke-dotted_miabart_afrik"
                                                                        fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                                                     C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                                                    <path class="vid-icon" fill="white"
                                                                        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="media mg-t-15 profile-footer">
                                                        <div class="media-user mr-2">
                                                            <div class="demo-avatar-group">
                                                                <div class="demo-avatar-group main-avatar-list-stacked">
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/3.jpg"></div>
                                                                    <div class="main-img-user online"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/5.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/6.jpg"></div>
                                                                    <div class="main-avatar"> +2280 </div>
                                                                </div>
                                                                <!-- demo-avatar-group -->
                                                            </div>
                                                            <!-- demo-avatar-group -->
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-10">16 personnes aiment votre vidéo
                                                            </h6>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown show"> <a class="new"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="far fa-heart mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-comment mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-share-square"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Post container -->

                                            <!-- Post container -->
                                            <div class="card mg-b-20 border">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-user mr-2">
                                                            <div class="main-img-user avatar-md"><img alt=""
                                                                    class="rounded-circle"
                                                                    src="../assets/img/users/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-2 ml-2">AGBODJAN TONOU</h6><span
                                                                class="text-primary ml-2">juste maintenant </span>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown"> <a class="new option-dots2"
                                                                    data-toggle="dropdown" href="JavaScript:void(0);"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                    style=""> <a class="dropdown-item" href="#">Modifier
                                                                        la publication </a> <a class="dropdown-item"
                                                                        href="#">Supprimer le message</a> <a
                                                                        class="dropdown-item" href="#">Paramètres
                                                                        personnels</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="post_text mg-t-0">
                                                        Je suis le studio pour un <span>shoot photo</span> avec le photo
                                                        Kévin. <a href="">#shoot photo</a> <a href="">#book photo</a> <a
                                                            href="">#mes photos par ici</a>
                                                    </p>
                                                    <div class="row row-sm">
                                                        <div class="row row-sm">
                                                            <div class="col">
                                                                <img alt="img" class="post_img"
                                                                    src="../assets/img/artiste/reflex-et-vous.jpg">

                                                                <img alt="img" class="wd-100 post_img"
                                                                    src="../assets/img/media/2.jpg">

                                                                <img alt="img" class="wd-100 post_img"
                                                                    src="../assets/img/media/2.jpg">
                                                                <img alt="img" class="wd-100 post_img"
                                                                    src="../assets/img/media/2.jpg">

                                                                <img alt="img" class="wd-100 post_img"
                                                                    src="../assets/img/media/2.jpg">
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="media mg-t-15 profile-footer">
                                                        <div class="media-user mr-2">
                                                            <div class="demo-avatar-group">
                                                                <div class="demo-avatar-group main-avatar-list-stacked">
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/3.jpg"></div>
                                                                    <div class="main-img-user online"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/5.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/6.jpg"></div>
                                                                    <div class="main-avatar"> +2280 </div>
                                                                </div>
                                                                <!-- demo-avatar-group -->
                                                            </div>
                                                            <!-- demo-avatar-group -->
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-10 h6m">16 personnes aiment votre vidéo
                                                            </h6>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown show"> <a class="new"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="far fa-heart mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-comment mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-share-square"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Post container -->

                                            <!-- Post container -->
                                            <div class="card mg-b-20 border">
                                                <div class="card-header">
                                                    <div class="media">
                                                        <div class="media-user mr-2">
                                                            <div class="main-img-user avatar-md"><img alt=""
                                                                    class="rounded-circle"
                                                                    src="../assets/img/users/6.jpg"></div>
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-2 ml-2">MIABART AFRIK</h6><span
                                                                class="text-primary ml-2">26 Mai 2021, 10:14 </span>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown"> <a class="new option-dots2"
                                                                    data-toggle="dropdown" href="JavaScript:void(0);"
                                                                    aria-expanded="false"><i
                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                    style=""> <a class="dropdown-item" href="#">Modifier
                                                                        la publication </a> <a class="dropdown-item"
                                                                        href="#">Supprimer le message</a> <a
                                                                        class="dropdown-item" href="#">Paramètres
                                                                        personnels</a> </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <p class="post_text mg-t-0">
                                                        Parcequ'un artiste ne meurt jamais, <span>l'équipe Miabart
                                                            Afrik</span> vous fais redécouvrir le son de réveil de
                                                        l'artiste disparu mais vivant par la voix d'ange <span> AWOO
                                                            MAWUGNE</span> <a href="">#Omar B</a> <a href="">#Artite
                                                            togolais</a>
                                                    </p>
                                                    <div class="row row-sm">

                                                        <div class="post_audio">
                                                            <audio class="audio_player" controls="" loop="" autoplay="">
                                                                <source
                                                                    src="../assets/audio/OMAR B - AWOO MAWUGNE (Audio Officiel).m4a"
                                                                    type="audio/ogg">
                                                                Your browser dose not Support the audio Tag
                                                            </audio>
                                                        </div>
                                                    </div>
                                                    <div class="media mg-t-15 profile-footer">
                                                        <div class="media-user mr-2">
                                                            <div class="demo-avatar-group">
                                                                <div class="demo-avatar-group main-avatar-list-stacked">
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/12.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/3.jpg"></div>
                                                                    <div class="main-img-user online"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/5.jpg"></div>
                                                                    <div class="main-img-user"><img alt=""
                                                                            class="rounded-circle"
                                                                            src="../assets/img/users/6.jpg"></div>
                                                                    <div class="main-avatar"> +8540 </div>
                                                                </div>
                                                                <!-- demo-avatar-group -->
                                                            </div>
                                                            <!-- demo-avatar-group -->
                                                        </div>
                                                        <div class="media-body">
                                                            <h6 class="mb-0 mg-t-10 h6m">2 652 125 personnes aiment
                                                                cette musique. </h6>
                                                        </div>
                                                        <div class="ml-auto">
                                                            <div class="dropdown show"> <a class="new"
                                                                    href="JavaScript:void(0);"><i
                                                                        class="far fa-heart mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-comment mr-3"></i></a> <a
                                                                    class="new" href="JavaScript:void(0);"><i
                                                                        class="far fa-share-square"></i></a> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end Post container -->

                                        </div>
                                    </div>
                                </div>
                                <!-- main-profile-body -->
                            </div>
                        </div>
                    </div>

                    <button type="button" class="load_more_post">Charger plus </button>
                    <!-- end Post container -->
                </div>
                <!-- END BODY -->

                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection