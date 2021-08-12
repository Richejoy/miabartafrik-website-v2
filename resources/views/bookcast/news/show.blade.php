@extends('layouts.bookcast', ['title' => 'Books'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Actualité</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Actualité</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Actu artistique</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">

                    <div class="rechercheupdatbookcast">
                        <form>
                            <div class="inner-form">
                                <div class="basic-search">
                                    <div class="input-field">
                                        <input id="search" type="text" placeholder="Retrouver une actualité">
                                        <div class="icon-wrap">
                                            <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true"
                                                data-prefix="fas" data-icon="search" role="img"
                                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                <path
                                                    d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                                                </path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="advance-search">
                                    <div class="row">

                                        <div
                                            class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                            <div class="form__field">
                                                <label for="login__username">
                                                    <i class="fa fa-map-marker iconBookconnex" data-toggle="tooltip"
                                                        title="" data-original-title="">

                                                    </i>
                                                    <span class="hidden">Choix du pays </span></label>
                                                <select class="select_on_bookcast">
                                                    <option>Pays</option>
                                                    <option>Togo</option>
                                                    <option>Bénin</option>
                                                    <option>Ghana</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div
                                            class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                            <div class="form__field">
                                                <label for="login__username">
                                                    <i class="fe fe-briefcase iconBookconnex" data-toggle="tooltip"
                                                        title="" data-original-title="">

                                                    </i>
                                                    <span class="hidden">Domaine artistique </span></label>
                                                <select class="select_on_bookcast">
                                                    <option>Domaines artistique</option>
                                                    <option>Cinéma &amp; Fiction</option>
                                                    <option>Mode &amp; Beauté</option>
                                                    <option>Musique / Danse</option>
                                                    <option>Radio / Télévision</option>
                                                    <option>Théâtre &amp; Humour</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div
                                            class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                            <div class="form__field">
                                                <label for="login__username">
                                                    <i class="fa fa-calendar-check-o iconBookconnex"
                                                        data-toggle="tooltip" title="" data-original-title="">

                                                    </i>
                                                    <span class="hidden">Période </span></label>
                                                <select class="select_on_bookcast">
                                                    <option>Quand ?</option>
                                                    <option>Artiste</option>
                                                    <option>Photographes/Vidéaste</option>
                                                    <option>Réseau artistique(Partenariat)</option>
                                                </select>
                                            </div>
                                        </div>


                                    </div>

                                    <!-- BUTTON RECHERCHE START -->
                                    <a href="" class="guymake_button_mba_all">
                                        <div class="search_mba_all">Lancer recherche</div>
                                    </a>
                                    <!-- BUTTON RECHERCHE END -->


                                </div>
                            </div>
                        </form>

                    </div>


                    <div class="content_body">
                        <div class="row">

                            <!-- ACTUALITE -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="blog-card">
                                    <img src="../assets/img/blog/art-design-4.jpg" alt="" class="blog-thumbnail">

                                    <div class="blog-container">
                                        <span class="domaineart_actu badge-info">Cinéma &amp; Fiction</span>

                                        <a href="actuartview.html">
                                            <h4 class="article_titre"><b>Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing</b></h4>
                                        </a>

                                        <small class="d-block text-muted">15 mintues ago</small>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire l'article</a>
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="main_profilbook_header">
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="356 392 (Vues)"><i
                                                        class="fe fe-eye"></i>
                                                </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="5254 (J'aimes)"><i
                                                        class="fe fe-heart"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Enrgistrer pour plus tard"><i
                                                        class="fe fe-save"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Publier"><i
                                                        class="far fa-share-square"></i></a>
                                            </nav>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <!-- END ACTUALITE -->

                            <!-- ACTUALITE -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="blog-card">
                                    <img src="../assets/img/blog/art-design-5.jpg" alt="" class="blog-thumbnail">

                                    <div class="blog-container">
                                        <span class="domaineart_actu badge-info">Cinéma &amp; Fiction</span>

                                        <a href="actuartview.html">
                                            <h4 class="article_titre"><b>Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing</b></h4>
                                        </a>

                                        <small class="d-block text-muted">15 mintues ago</small>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire l'article</a>
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="main_profilbook_header">
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="356 392 (Vues)"><i
                                                        class="fe fe-eye"></i>
                                                </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="5254 (J'aimes)"><i
                                                        class="fe fe-heart"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Enrgistrer pour plus tard"><i
                                                        class="fe fe-save"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Publier"><i
                                                        class="far fa-share-square"></i></a>
                                            </nav>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <!-- END ACTUALITE -->

                            <!-- ACTUALITE -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="blog-card">
                                    <img src="../assets/img/blog/img4.jpg" alt="" class="blog-thumbnail">

                                    <div class="blog-container">
                                        <span class="domaineart_actu badge-info">Cinéma &amp; Fiction</span>

                                        <a href="actuartview.html">
                                            <h4 class="article_titre"><b>Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing</b></h4>
                                        </a>

                                        <small class="d-block text-muted">15 mintues ago</small>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire l'article</a>
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="main_profilbook_header">
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="356 392 (Vues)"><i
                                                        class="fe fe-eye"></i>
                                                </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="5254 (J'aimes)"><i
                                                        class="fe fe-heart"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Enrgistrer pour plus tard"><i
                                                        class="fe fe-save"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Publier"><i
                                                        class="far fa-share-square"></i></a>
                                            </nav>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <!-- END ACTUALITE -->

                            <!-- ACTUALITE -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="blog-card">
                                    <img src="../assets/img/blog/stairs-movie-set.jpg" alt="" class="blog-thumbnail">

                                    <div class="blog-container">
                                        <span class="domaineart_actu badge-info">Cinéma &amp; Fiction</span>

                                        <a href="actuartview.html">
                                            <h4 class="article_titre"><b>Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing</b></h4>
                                        </a>

                                        <small class="d-block text-muted">15 mintues ago</small>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire l'article</a>
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="main_profilbook_header">
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="356 392 (Vues)"><i
                                                        class="fe fe-eye"></i>
                                                </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="5254 (J'aimes)"><i
                                                        class="fe fe-heart"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Enrgistrer pour plus tard"><i
                                                        class="fe fe-save"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Publier"><i
                                                        class="far fa-share-square"></i></a>
                                            </nav>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <!-- END ACTUALITE -->

                            <!-- ACTUALITE -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                <div class="blog-card">
                                    <img src="../assets/img/blog/art-design-6.jpg" alt="" class="blog-thumbnail">

                                    <div class="blog-container">
                                        <span class="domaineart_actu badge-info">Cinéma &amp; Fiction</span>

                                        <a href="actuartview.html">
                                            <h4 class="article_titre"><b>Lorem ipsum, dolor sit amet consectetur
                                                    adipisicing</b></h4>
                                        </a>

                                        <small class="d-block text-muted">15 mintues ago</small>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire l'article</a>
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>

                                        <div class="main_profilbook_header">
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="356 392 (Vues)"><i
                                                        class="fe fe-eye"></i>
                                                </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="5254 (J'aimes)"><i
                                                        class="fe fe-heart"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Enrgistrer pour plus tard"><i
                                                        class="fe fe-save"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                    title="" data-original-title="Publier"><i
                                                        class="far fa-share-square"></i></a>
                                            </nav>
                                        </div>




                                    </div>
                                </div>
                            </div>
                            <!-- END ACTUALITE -->

                        </div>

                        <!-- PREVANDNEXT START -->
                        <div class="prvnextbtn_mba_all">
                            <svg width="18px" height="17px" viewBox="0 0 18 17" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="prev"
                                    transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)">
                                    <polygon class="arrow"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <polygon class="arrow-fixed"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <path
                                        d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                                    </path>
                                </g>
                            </svg>

                            <svg width="18px" height="17px" viewBox="-1 0 18 17" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <polygon class="arrow"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <polygon class="arrow-fixed"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <path
                                        d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <!-- PREVANDNEXT END -->


                    </div>


                </div>

                <!-- ASIDE BAR -->
                <div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
                    <div class="main-content-left-components">

                        <!-- NewsLetter -->
                        <div class="custom-card">
                            <div class="component-item">
                                <div class="right_sidebar">
                                    <div class="newsletter_form">
                                        <header>
                                            <h1>NewsLetter</h1>
                                            <p>Renseignez toute les informations pour recevoir nos news. <a
                                                    href="">Paramètre</a></p>
                                        </header>

                                        <div class="form-group text-left">
                                            <label for="profile_phone" class="required-text mg-b-10 label_mba">
                                                Email
                                            </label>
                                            <input class="form-control" placeholder="Entrer votre Email " type="text">
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- NewsLetter -->

                        <div class="right_sidebar">
                            <div class="sidebar_titre">
                                <h4>NetConcert</h4>
                                <a href="">Voir tout</a>
                            </div>
                            <div class="sidebar_body">
                                <div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                                    <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src=""
                                        frameborder="0" allowTransparency="true" allowfullscreen
                                        data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&autoplay=1&modestbranding=1&rel=0&playlist=VXe_2zFCyGw&loop=1&mute=1"
                                        allow="autoplay; fullscreen"></iframe>

                                    <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
                                        style="background-image:url(../assets/img/artiste/slim-girl.jpg);">
                                        <svg class="play-vid" viewBox="0 0 100 100">
                                            <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
									         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                            <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
									         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                            <path class="vid-icon" fill="white"
                                                d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                        </svg>
                                    </button>
                                </div>

                                <div class="titreVideo_miabart_afrik ">
                                    luke james - all of your love [Official Audio]
                                </div>
                            </div>

                        </div>



                        <div class="card custom-card">
                            <div class="sidebar_titre">
                                <h4>Publicité</h4>
                                <a href="">Annonceur</a>
                            </div>
                            <div class="sidebar_body">
                                <a href=""> <img src="../assets/img/publicite/duchesse.jpg" class="imageaffichepub"></a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- End ASIDE BAR -->



            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection

@push('scripts')

<!-- Jquery js-->
<script src="../assets/plugins/jquery/jquery.min.js"></script>

<!-- BookCast js-->
<script src="../assets/js/bookcast.js"></script>

<!-- Bootstrap js-->
<script src="../assets/plugins/bootstrap/js/popper.min.js"></script>
<script src="../assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- Perfect-scrollbar js -->
<script src="../assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<!-- Sidebar js -->
<script src="../assets/plugins/sidebar/sidebar.js"></script>

<!-- Select2 js-->
<script src="../assets/plugins/select2/js/select2.min.js"></script>

<!-- Sticky js -->
<script src="../assets/js/sticky.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>

@endpush