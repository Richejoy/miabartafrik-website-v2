@extends('layouts.bookcast', ['title' => 'Books'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container_profile_card">

        <!-- ROW-1 OPEN -->

        <div id="profile_miabartafrik_wrap">

            <div class="profile_miabartafrik_image">
                <div id="landing-text">
                    <div id="landing-text-inner">
                        <h1 class="writing-mode">Book-Cv Artistique</h1>
                    </div>
                </div>
            </div>

            <div class="profile_miabartafrik_card_content">

                <div class="container-fluido no-padding">

                    <div class="cover" style="background-image: url(../assets/img/artiste/bg_2.jpg);">
                        <div class="miabartafrik-top clearfix">
                            <a class="miabartafrik-icon miabartafrik-icon-prev" href="bookartiste.html"><span>LISTE DES
                                    BOOKS</span></a>

                            <span class="right"><a class="" href=""><span>Télécharger le book
                                        artistique</span></a></span>
                        </div>
                    </div>
                    <div class="cover-layer">
                        <div class="container web-portion">
                            <a href="/artisteName" class="ambassadeurProfilePage">
                                <img src="../assets/img/icons/iconambassadeur.png" alt="ambassadeur BookCast"
                                    class="ambassadeurSRound">
                            </a>

                            <div class="row top-det">

                                <div class="col-lg-6">
                                    <div class="main-contact-info-header pt-3">
                                        <div class="media">
                                            <div class="main-img-user">
                                                <img alt="avatar" src="../assets/img/artiste/artiste3-1.jpg">
                                                <a href="" style="display: none;"><i class="fe fe-camera"></i></a>
                                            </div>
                                            <div class="media-body">
                                                <h4> Nom de l'artiste </h4>
                                                <p>Actrice, Modèle photo, Danseuse</p>
                                                <nav class="contact-info">
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Togo"><i
                                                            class="flag flag-tg"></i></a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Appeler"><i
                                                            class="fe fe-phone"></i></a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                                                    </a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i>
                                                    </a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Inviter"><i
                                                            class="fe fe-user-plus"></i></a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Publier"><i
                                                            class="far fa-share-square"></i></a>
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Bloquer"><i
                                                            class="fe fe-slash"></i></a>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="main-contact-action btn-list pt-3 pr-3" style="display: none;">
                                            <a href="#" class="btn ripple btn-primary text-white btn-icon"
                                                data-placement="top" data-toggle="tooltip" title=""
                                                data-original-title="Edit Profile"><i class="fe fe-edit"></i></a>
                                            <a href="#" class="btn ripple btn-secondary text-white btn-icon"
                                                data-placement="top" data-toggle="tooltip" title=""
                                                data-original-title="Delete Profile"><i class="fe fe-trash-2"></i></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 eml-mob">
                                    <div class="infos_plus_bookcast">
                                        <ul>
                                            <li>
                                                <div class="desc">
                                                    <h4>Age</h4>
                                                    <h3>23 ans</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Sexe</h4>
                                                    <h3>Féminin</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Inscrit(e)</h4>
                                                    <h3>17/01/2021</h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-lg-3 eml-mob">

                                    <div class="infos_plus_bookcast">
                                        <ul>
                                            <li>
                                                <div class="desc">
                                                    <h4>Connecté(e)</h4>
                                                    <h3>il y a 3 heures</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Langues parlées</h4>
                                                    <h3>Français, Anglais</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Langue maternelle</h4>
                                                    <h3>Ewé, Kabyè</h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>


                    </div>

                    <div class="cover-layer">

                        <!-- BODY BOOK CARD START -->

                        <div class="container_tabs">

                            <section>
                                <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
                                    <nav>
                                        <ul>
                                            <li><a href="#actualite_book"
                                                    class="icon pe-7s-news-paper"><span>Activités</span></a></li>
                                            <li><a href="#infos_book" class="icon pe-7s-id"><span>Infos book</span></a>
                                            </li>
                                            <li><a href="#photos_book" class="icon pe-7s-camera"><span>Photos</span></a>
                                            </li>
                                            <li><a href="#audios_book"
                                                    class="icon pe-7s-musiclist"><span>Audios</span></a></li>
                                            <li><a href="#videos_book" class="icon pe-7s-video"><span>Videos</span></a>
                                            </li>
                                            <li><a href="#contact_book" class="icon pe-7s-mail"><span>Contact</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">

                                        <!-- ACTIVITY BOOK CARD START -->

                                        <section id="actualite_book">
                                            <div class="row">
                                                <!-- BODY ACTU -->
                                                <div class="col-xl-8 col-lg-12">

                                                    <div class="main-content-body tab-pane border-top-0 active"
                                                        id="timeline">
                                                        <div class="border">
                                                            <div class="main-content-body main-content-body-profile">
                                                                <div class="main-profile-body p-0">
                                                                    <div class="row row-sm">
                                                                        <div class="col-12">

                                                                            <!-- Post container -->
                                                                            <div class="card mg-b-20 border">
                                                                                <div class="card-header">
                                                                                    <div class="media">
                                                                                        <div class="media-user mr-2">
                                                                                            <div
                                                                                                class="main-img-user avatar-md">
                                                                                                <img alt=""
                                                                                                    class="rounded-circle"
                                                                                                    src="../assets/img/users/6.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6
                                                                                                class="mb-0 mg-t-2 ml-2">
                                                                                                Avorgno Yawo Guy</h6>
                                                                                            <span
                                                                                                class="text-primary ml-2">juste
                                                                                                maintenant </span>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown"> <a
                                                                                                    class="new option-dots2"
                                                                                                    data-toggle="dropdown"
                                                                                                    href="JavaScript:void(0);"
                                                                                                    aria-expanded="false"><i
                                                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                                                    style=""> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Modifier
                                                                                                        la publication
                                                                                                    </a> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Supprimer
                                                                                                        le message</a>
                                                                                                    <a class="dropdown-item"
                                                                                                        href="#">Paramètres
                                                                                                        personnels</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <p class="post_text mg-t-0">
                                                                                        Découvrez l'avant goût de mon
                                                                                        prochain film <span>Waka</span>
                                                                                        du réalisateur Steven Af. <a
                                                                                            href="">#film africain</a>
                                                                                        <a href="">#long métrage</a> <a
                                                                                            href="">#réalisation</a>
                                                                                    </p>
                                                                                    <div class="row row-sm">
                                                                                        <div
                                                                                            class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                                                                                            <iframe
                                                                                                class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik"
                                                                                                src=""
                                                                                                allowtransparency="true"
                                                                                                allowfullscreen=""
                                                                                                data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;rel=0&amp;playlist=VXe_2zFCyGw&amp;loop=1&amp;mute=1"
                                                                                                allow="autoplay; fullscreen"
                                                                                                frameborder="0"></iframe>

                                                                                            <button
                                                                                                class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
                                                                                                style="background-image:url(../assets/img/artiste/slim-girl.jpg);">
                                                                                                <svg class="play-vid"
                                                                                                    viewBox="0 0 100 100">
                                                                                                    <path
                                                                                                        class="stroke-solid"
                                                                                                        fill="none"
                                                                                                        stroke="white"
                                                                                                        d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																						         C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                                                                                    <path
                                                                                                        class="stroke-dotted_miabart_afrik"
                                                                                                        fill="none"
                                                                                                        stroke="white"
                                                                                                        d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
																						         C97.3,23.7,75.7,2.3,49.9,2.5"></path>
                                                                                                    <path
                                                                                                        class="vid-icon"
                                                                                                        fill="white"
                                                                                                        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z">
                                                                                                    </path>
                                                                                                </svg>
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="media mg-t-15 profile-footer">
                                                                                        <div class="media-user mr-2">
                                                                                            <div
                                                                                                class="demo-avatar-group">
                                                                                                <div
                                                                                                    class="demo-avatar-group main-avatar-list-stacked">
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/3.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user online">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/5.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/6.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-avatar">
                                                                                                        +10 </div>
                                                                                                </div>
                                                                                                <!-- demo-avatar-group -->
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6 class="mb-0 mg-t-10">16
                                                                                                personnes aiment votre
                                                                                                vidéo </h6>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown show">
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-heart mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-comment mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-share-square"></i></a>
                                                                                            </div>
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
                                                                                            <div
                                                                                                class="main-img-user avatar-md">
                                                                                                <img alt=""
                                                                                                    class="rounded-circle"
                                                                                                    src="../assets/img/users/6.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6
                                                                                                class="mb-0 mg-t-2 ml-2">
                                                                                                AGBODJAN TONOU</h6><span
                                                                                                class="text-primary ml-2">juste
                                                                                                maintenant </span>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown"> <a
                                                                                                    class="new option-dots2"
                                                                                                    data-toggle="dropdown"
                                                                                                    href="JavaScript:void(0);"
                                                                                                    aria-expanded="false"><i
                                                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                                                    style=""> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Modifier
                                                                                                        la publication
                                                                                                    </a> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Supprimer
                                                                                                        le message</a>
                                                                                                    <a class="dropdown-item"
                                                                                                        href="#">Paramètres
                                                                                                        personnels</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <p class="post_text mg-t-0">
                                                                                        Je suis le studio pour un
                                                                                        <span>shoot photo</span> avec le
                                                                                        photo Kévin. <a href="">#shoot
                                                                                            photo</a> <a href="">#book
                                                                                            photo</a> <a href="">#mes
                                                                                            photos par ici</a>
                                                                                    </p>
                                                                                    <div class="row row-sm">
                                                                                        <div class="row row-sm">
                                                                                            <div class="col">
                                                                                                <img alt="img"
                                                                                                    class="post_img"
                                                                                                    src="../assets/img/artiste/reflex-et-vous.jpg">

                                                                                                <img alt="img"
                                                                                                    class="wd-100 post_img"
                                                                                                    src="../assets/img/media/2.jpg">

                                                                                                <img alt="img"
                                                                                                    class="wd-100 post_img"
                                                                                                    src="../assets/img/media/2.jpg">
                                                                                                <img alt="img"
                                                                                                    class="wd-100 post_img"
                                                                                                    src="../assets/img/media/2.jpg">

                                                                                                <img alt="img"
                                                                                                    class="wd-100 post_img"
                                                                                                    src="../assets/img/media/2.jpg">
                                                                                            </div>

                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="media mg-t-15 profile-footer">
                                                                                        <div class="media-user mr-2">
                                                                                            <div
                                                                                                class="demo-avatar-group">
                                                                                                <div
                                                                                                    class="demo-avatar-group main-avatar-list-stacked">
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/3.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user online">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/5.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/6.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-avatar">
                                                                                                        +10 </div>
                                                                                                </div>
                                                                                                <!-- demo-avatar-group -->
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6
                                                                                                class="mb-0 mg-t-10 h6m">
                                                                                                16 personnes aiment
                                                                                                votre vidéo </h6>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown show">
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-heart mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-comment mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-share-square"></i></a>
                                                                                            </div>
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
                                                                                            <div
                                                                                                class="main-img-user avatar-md">
                                                                                                <img alt=""
                                                                                                    class="rounded-circle"
                                                                                                    src="../assets/img/users/6.jpg">
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6
                                                                                                class="mb-0 mg-t-2 ml-2">
                                                                                                MIABART AFRIK</h6><span
                                                                                                class="text-primary ml-2">26
                                                                                                Mai 2021, 10:14 </span>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown"> <a
                                                                                                    class="new option-dots2"
                                                                                                    data-toggle="dropdown"
                                                                                                    href="JavaScript:void(0);"
                                                                                                    aria-expanded="false"><i
                                                                                                        class="fas fa-ellipsis-v"></i></a>
                                                                                                <div class="dropdown-menu dropdown-menu-right shadow"
                                                                                                    style=""> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Modifier
                                                                                                        la publication
                                                                                                    </a> <a
                                                                                                        class="dropdown-item"
                                                                                                        href="#">Supprimer
                                                                                                        le message</a>
                                                                                                    <a class="dropdown-item"
                                                                                                        href="#">Paramètres
                                                                                                        personnels</a>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <p class="post_text mg-t-0">
                                                                                        Parcequ'un artiste ne meurt
                                                                                        jamais, <span>l'équipe Miabart
                                                                                            Afrik</span> vous fais
                                                                                        redécouvrir le son de réveil de
                                                                                        l'artiste disparu mais vivant
                                                                                        par la voix d'ange <span> AWOO
                                                                                            MAWUGNE</span> <a
                                                                                            href="">#Omar B</a> <a
                                                                                            href="">#Artite togolais</a>
                                                                                    </p>
                                                                                    <div class="row row-sm">

                                                                                        <div class="post_audio">
                                                                                            <audio class="audio_player"
                                                                                                controls="" loop=""
                                                                                                autoplay="">
                                                                                                <source
                                                                                                    src="../assets/audio/OMAR B - AWOO MAWUGNE (Audio Officiel).m4a"
                                                                                                    type="audio/ogg">
                                                                                                Your browser dose not
                                                                                                Support the audio Tag
                                                                                            </audio>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div
                                                                                        class="media mg-t-15 profile-footer">
                                                                                        <div class="media-user mr-2">
                                                                                            <div
                                                                                                class="demo-avatar-group">
                                                                                                <div
                                                                                                    class="demo-avatar-group main-avatar-list-stacked">
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/12.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/3.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user online">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/5.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-img-user">
                                                                                                        <img alt=""
                                                                                                            class="rounded-circle"
                                                                                                            src="../assets/img/users/6.jpg">
                                                                                                    </div>
                                                                                                    <div
                                                                                                        class="main-avatar">
                                                                                                        +8540 </div>
                                                                                                </div>
                                                                                                <!-- demo-avatar-group -->
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <div class="media-body">
                                                                                            <h6
                                                                                                class="mb-0 mg-t-10 h6m">
                                                                                                2 652 125 personnes
                                                                                                aiment cette musique.
                                                                                            </h6>
                                                                                        </div>
                                                                                        <div class="ml-auto">
                                                                                            <div class="dropdown show">
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-heart mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-comment mr-3"></i></a>
                                                                                                <a class="new"
                                                                                                    href="JavaScript:void(0);"><i
                                                                                                        class="far fa-share-square"></i></a>
                                                                                            </div>
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
                                                <!-- END BODY ACTU -->

                                                <!-- SIDE BAR -->
                                                <div class="col-xl-4 col-lg-12 d-none d-xl-block custom-leftnav">
                                                    <div class="main-content-left-components">


                                                        <div class="right_sidebar">
                                                            <div class="sidebar_titre">
                                                                <h4>NetConcert</h4>
                                                                <a href="">Voir tout</a>
                                                            </div>
                                                            <div class="sidebar_body">
                                                                <div
                                                                    class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                                                                    <iframe
                                                                        class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik"
                                                                        src="" allowtransparency="true"
                                                                        allowfullscreen=""
                                                                        data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;rel=0&amp;playlist=VXe_2zFCyGw&amp;loop=1&amp;mute=1"
                                                                        allow="autoplay; fullscreen"
                                                                        frameborder="0"></iframe>

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

                                                                <div class="titreVideo_miabart_afrik ">
                                                                    luke james - all of your love [Official Audio]
                                                                </div>
                                                            </div>

                                                        </div>

                                                        <!-- info -->
                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Publicité</h4>
                                                                <a href="">Annonceur</a>
                                                            </div>
                                                            <div class="sidebar_body">
                                                                <a href=""> <img
                                                                        src="../assets/img/publicite/affiche.jpg"
                                                                        class="imageaffichepub"></a>
                                                            </div>
                                                        </div>
                                                        <!-- end info -->

                                                        <!-- info -->
                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Publicité</h4>
                                                                <a href="">Annonceur</a>
                                                            </div>
                                                            <div class="sidebar_body">
                                                                <a href=""> <img
                                                                        src="../assets/img/publicite/affiche.jpg"
                                                                        class="imageaffichepub"></a>
                                                            </div>
                                                        </div>
                                                        <!-- end info -->

                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Publicité</h4>
                                                                <a href="">Annonceur</a>
                                                            </div>
                                                            <div class="sidebar_body">
                                                                <a href=""> <img
                                                                        src="../assets/img/publicite/duchesse.jpg"
                                                                        class="imageaffichepub"></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END SIDE BAR -->

                                            </div>
                                        </section>

                                        <!-- ACTIVITY BOOK CARD END -->

                                        <!-- INFOS BOOK CARD START -->

                                        <section id="infos_book">

                                            <div class="accordeon_infos_book">
                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn" value="one"
                                                        checked="checked" />
                                                    <label for="btn" class="entypo_infos_book">Biographie</label>
                                                    <article class="article_infos_book" id="content-1">
                                                        <p><em class="em_color">Un rêve en le poursuivant devient
                                                                toujours réalité.</em> Je suis AGBODJAN TONOU, togolaise
                                                            d'origine, esthéticienne et actrice professionnelle. Ma
                                                            passion pour le cinéma s'est concréiser en complément avec
                                                            mon métier d'esthétique. J'ai a mon actif des expériences
                                                            cinématographie riche .</p>
                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="two" />
                                                    <label for="btn" class="entypo_infos_book">Expériences</label>

                                                    <!-- infos book start -->
                                                    <article class="article_infos_book" id="content-2">
                                                        <div class="row">
                                                            <div class="col-md-7">

                                                                <!-- experience -->
                                                                <div class="riser">
                                                                    <!-- bold -->
                                                                    <h3>Type de l'expérience</h3>
                                                                    <h4 class="start_date">
                                                                        <span id="start_date">11.05.2020</span>
                                                                        <span class="end_date" id="end_date">A
                                                                            présent</span>
                                                                    </h4>
                                                                    <ul>
                                                                        <li>
                                                                            <span class="select_titre">Auteur:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Mise en
                                                                                scène:</span>
                                                                            Nom du scénarist
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Lieu de
                                                                                création:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Autres
                                                                                lieux:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Rôle:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Compagnie:</span>
                                                                            Nom du scénariste
                                                                        </li>


                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5">

                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                    <span
                                                                        class="card_affiches_infos_book-heading">Expériences
                                                                        en image</span>
                                                                    <ul class="card_affiches_infos_book-list">
                                                                        <li>
                                                                            <a href="">
                                                                                <img src="./assets/images/films/affiche.jpg"
                                                                                    alt="" />
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="">
                                                                                <img src="./assets/images/films/Waka_Affiche.jpg"
                                                                                    alt="" />
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </article>
                                                    <!-- infos book start -->

                                                    <!-- infos book start -->
                                                    <article class="article_infos_book" id="content-2">
                                                        <div class="row">
                                                            <div class="col-md-7">

                                                                <!-- experience -->
                                                                <div class="riser">
                                                                    <!-- bold -->
                                                                    <h3>Type de l'expérience</h3>
                                                                    <h4 class="start_date"> <span
                                                                            id="start_date">11.05.2020</span>
                                                                        -
                                                                        <span class="end_date" id="end_date">A
                                                                            présent</span>
                                                                    </h4>
                                                                    <ul>
                                                                        <li>
                                                                            <span class="select_titre">Auteur:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Mise en
                                                                                scène:</span>
                                                                            Nom du scénarist
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Lieu de
                                                                                création:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Autres
                                                                                lieux:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Rôle:</span>
                                                                            Nom du scénariste
                                                                        </li>
                                                                        <li>
                                                                            <span class="select_titre">Compagnie:</span>
                                                                            Nom du scénariste
                                                                        </li>


                                                                    </ul>
                                                                </div>

                                                            </div>
                                                            <div class="col-md-5">

                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                    <span
                                                                        class="card_affiches_infos_book-heading">Expériences
                                                                        en image</span>
                                                                    <ul class="card_affiches_infos_book-list">
                                                                        <li>
                                                                            <a href="">
                                                                                <img src="./assets/images/films/affiche.jpg"
                                                                                    alt="" />
                                                                            </a>
                                                                        </li>

                                                                        <li>
                                                                            <a href="">
                                                                                <img src="./assets/images/films/Waka_Affiche.jpg"
                                                                                    alt="" />
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>

                                                            </div>

                                                        </div>
                                                    </article>
                                                    <!-- infos book start -->


                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="three" />
                                                    <label for="btn" class="entypo_infos_book">Parcours &
                                                        Educations</label>
                                                    <article class="article_infos_book" id="content-3">
                                                        <div class="row">
                                                            <div class="col-md-6">Formations</div>
                                                            <div class="col-md-6">
                                                                <div class="education">
                                                                    <header>
                                                                        <h2>Education</h2>
                                                                    </header>

                                                                    <div class="ed-info">
                                                                        <img src="https://i.imgur.com/2JdJghU.png">
                                                                        <div class="infos_education">
                                                                            <h3>Brigham Young University</h3>
                                                                            <h4>Technology and Engineering Education, BS
                                                                                • December 2015</h4>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ed-info">
                                                                        <img src="https://i.imgur.com/2JdJghU.png">
                                                                        <div class="infos_education">
                                                                            <h3>Brigham Young University</h3>
                                                                            <h4>Technology and Engineering Education, BS
                                                                                • December 2015</h4>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ed-info">
                                                                        <img src="https://i.imgur.com/2JdJghU.png">
                                                                        <div class="infos_education">
                                                                            <h3>Brigham Young University</h3>
                                                                            <h4>Technology and Engineering Education, BS
                                                                                • December 2015</h4>
                                                                        </div>
                                                                    </div>

                                                                    <div class="ed-info">
                                                                        <img src="https://i.imgur.com/2JdJghU.png">
                                                                        <div class="infos_education">
                                                                            <h3>Brigham Young University</h3>
                                                                            <h4>Technology and Engineering Education, BS
                                                                                • December 2015</h4>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="four" />
                                                    <label for="btn" class="entypo_infos_book">Caractéristiques
                                                        physiques</label>
                                                    <article class="article_infos_book" id="content-4">
                                                        <div class="col-md-12 mba-artist-details">
                                                            <div class="row">
                                                                <div class="col">
                                                                    <ul class="mx-auto mx-md-0">
                                                                        <li>
                                                                            <span class="title01">Taille</span>
                                                                            <span class="value">175cm</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Poids</span>
                                                                            <span class="value">52kg</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Tour de
                                                                                poitrine</span>
                                                                            <span class="value">85cm</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Tour de taille</span>
                                                                            <span class="value">60cm</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Tour de hanches</span>
                                                                            <span class="value">84cm</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Couleur des
                                                                                cheveux</span>
                                                                            <span class="value">Châtain clair</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Type de cheveux</span>
                                                                            <span class="value">Raides</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Longueur des
                                                                                cheveux</span>
                                                                            <span class="value">Très long</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Couleur des
                                                                                yeux</span>
                                                                            <span class="value">Noisette</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="four" />
                                                    <label for="btn" class="entypo_infos_book">Compétences</label>
                                                    <article class="article_infos_book" id="content-5">
                                                        <p><em class="em_color">Décrire les compétences</em> de
                                                            l'artiste AGBODJAN-TONOU.</p>
                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="four" />
                                                    <label for="btn" class="entypo_infos_book">Prix &
                                                        Distinction</label>
                                                    <article class="article_infos_book" id="content-5">
                                                        <p><em class="em_color">Vos prix & distinction reçu</em> ici.
                                                        </p>
                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn"
                                                        value="four" />
                                                    <label for="btn" class="entypo_infos_book">Agence (Agent)</label>
                                                    <article class="article_infos_book" id="content-6">
                                                        <p><em class="em_color">L'agence ROMBO</em> gère en pemenance la
                                                            carrière artistique de AGBODJAN-TONOU. Pour donc confier un
                                                            projet artistique à l'artiste veillez contacter l'agence <em
                                                                class="em_color">00228 92xxxxx</em></p>

                                                    </article>
                                                </div>

                                            </div>
                                        </section>

                                        <!-- INFOS BOOK CARD END -->

                                        <!-- PHOTOS BOOK CARD START -->
                                        <section id="photos_book">



                                            <div class="demo-gallery ">
                                                <ul id="lightgallery"
                                                    class="list-unstyled containergalbook detail-photo-grid">
                                                    <li class="grid-item"
                                                        data-responsive="../assets/img/media/artiste3-1.jpg"
                                                        data-src="../assets/img/media/artiste3-1.jpg"
                                                        data-sub-html="<h4>Gallery Image 1</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive wd-100p"
                                                                src="../assets/img/media/artiste3-1.jpg" alt="Thumb-1">
                                                        </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/2.jpg"
                                                        data-src="../assets/img/media/2.jpg"
                                                        data-sub-html="<h4>Gallery Image 2</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/2.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/3.jpg"
                                                        data-src="../assets/img/media/3.jpg"
                                                        data-sub-html="<h4>Gallery Image 3</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/3.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/4.jpg"
                                                        data-src="../assets/img/media/4.jpg"
                                                        data-sub-html="<h4>Gallery Image 4</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/4.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/5.jpg"
                                                        data-src="../assets/img/media/5.jpg"
                                                        data-sub-html="<h4>Gallery Image 5</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/5.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/6.jpg"
                                                        data-src="../assets/img/media/6.jpg"
                                                        data-sub-html="<h4>Gallery Image 6</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/6.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/7.jpg"
                                                        data-src="../assets/img/media/7.jpg"
                                                        data-sub-html="<h4>Gallery Image 7</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/7.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/8.jpg"
                                                        data-src="../assets/img/media/8.jpg"
                                                        data-sub-html="<h4>Gallery Image 8</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/8.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                    <li class="grid-item" data-responsive="../assets/img/media/9.jpg"
                                                        data-src="../assets/img/media/9.jpg"
                                                        data-sub-html="<h4>Gallery Image 9</h4>">
                                                        <a href="" class="wd-100p"><img class="img-responsive"
                                                                src="../assets/img/media/9.jpg" alt="Thumb-1"> </a>
                                                    </li>
                                                </ul>
                                                <!-- /Gallery -->
                                            </div>
                                        </section>
                                        <!-- PHOTOS BOOK CARD END -->

                                        <!-- MUSIQUE BOOK CARD START -->
                                        <section id="audios_book">
                                            <p>Musiques et audios</p>
                                        </section>
                                        <!-- MUSIQUE BOOK CARD END -->


                                        <!-- VIDEOS BOOK CARD START -->
                                        <section id="videos_book">
                                            <p>Vidéos</p>
                                        </section>
                                        <!-- VIDEOS BOOK CARD END -->

                                        <!-- CONTACT BOOK CARD START -->
                                        <section id="contact_book">
                                            <p>Message form</p>
                                        </section>
                                        <!-- CONTACT BOOK CARD END -->

                                    </div><!-- /content -->
                                </div><!-- /tabs_miabartafrik -->
                            </section>

                        </div>

                        <!-- BODY BOOK CARD END -->

                    </div>





                </div>




            </div>
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection

@push('scripts')

<script src="../assets/js/cbpFWTabs.js"></script>
<script>
(function() {

    [].slice.call(document.querySelectorAll('.tabs_miabartafrik')).forEach(function(el) {
        new CBPFWTabs(el);
    });

})();
</script>
<!-- Jquery js-->
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- BookCast js-->
<script src="../assets/js/bookcast.js"></script>



<!-- Bootstrap js-->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect-scrollbar js -->
<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Internal Gallery js-->
<script src="../assets/plugins/gallery/picturefill.js"></script>
<script src="../assets/plugins/gallery/lightgallery.js"></script>
<script src="../assets/plugins/gallery/lightgallery-1.js"></script>
<script src="../assets/plugins/gallery/lg-pager.js"></script>
<script src="../assets/plugins/gallery/lg-autoplay.js"></script>
<script src="../assets/plugins/gallery/lg-fullscreen.js"></script>
<script src="../assets/plugins/gallery/lg-zoom.js"></script>
<script src="../assets/plugins/gallery/lg-hash.js"></script>
<script src="../assets/plugins/gallery/lg-share.js"></script>

<!-- Sidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Select2 js-->
<script src="../assets/plugins/select2/js/select2.min.js"></script>

<!-- Sticky js -->
<script src="../assets/js/sticky.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>

@endpush