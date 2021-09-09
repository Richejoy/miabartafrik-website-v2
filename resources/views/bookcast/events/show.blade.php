@extends('layouts.bookcast', ['title' => 'Books'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div
        class="container_profile_card">

        <!-- ROW-1 OPEN -->

        <div id="profile_miabartafrik_wrap">

            <div class="profile_miabartafrik_image">

                <div id="landing-text">
                    <div id="landing-text-inner">
                        <a href="" class="btntelecharger" id="view-work" data-target="#affiche_modal" data-toggle="modal">
                            Adresse maping ici
                        </a>
                    </div>
                </div>

            </div>

            <div id="content-3" class="profile_miabartafrik_card_content custom_scrollbar_page">

                <div class="container-fluido no-padding">

                    <div class="cover" style="background-image: url(../assets/img/artiste/blissful-smiling.jpg);">
                        <a href="">
                            <div class="back_button_mba">
                                <div class="arrow_mba-wrap">
                                    <span class="arrow_mba-part-1"></span>
                                    <span class="arrow_mba-part-2"></span>
                                    <span class="arrow_mba-part-3"></span>
                                </div>
                            </div>
                        </a>
                    </div>

                    <div class="cover-layer">
                        <div class="container web-portion">
                            <div class="row top-det">
                                <div class="col-lg-5">

                                    <div class="main-contact-info-header">
                                        <h3 class="bold_titre_eventfirst">
                                            Blueberry Tasting - The best of 2016 or whatever Blueberry Tasting - The best of 2016 or whatever
                                        </h3>
                                    </div>
                                    <div class="media-body">
                                        <nav class="contact-info">
                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Togo">
                                                <i class="flag flag-tg"></i>
                                            </a>
                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)">
                                                <i class="fe fe-eye"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)">
                                                <i class="fe fe-heart"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Contacter l'annonceur">
                                                <i class="fe fe-phone"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Enrgistrer pour plus tard">
                                                <i class="fe fe-save"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier">
                                                <i class="far fa-share-square"></i>
                                            </a>
                                        </nav>
                                    </div>

                                </div>

                                <div class="col-lg-3 eml-mob">
                                    <div class="infos_plus_bookcast">
                                        <ul>
                                            <li>
                                                <div class="desc">
                                                    <h4>Type d'évènement</h4>
                                                    <h3>ARB - HIP HOP</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Date</h4>
                                                    <h3 class="date">
                                                        <span id="datestart">17.08.2021</span>
                                                        au
                                                        <span id="dateclosed">20.08.2021</span>
                                                    </h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Heure</h4>
                                                    <h3>19:35:30</h3>
                                                </div>
                                            </li>
                                            <li></li>
                                        </ul>

                                    </div>
                                </div>

                                <div class="col-lg-4 eml-mob">

                                    <div class="infos_plus_bookcast" style="padding: 0.5rem;">
                                        <ul>
                                            <li>
                                                <div class="desc">
                                                    <h4>Tickets</h4>
                                                    <h3>2500 FCFA | 5000 F CFA | 20 000 FCFA</h3>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>

                                    <div class="infos_plus_bookcast">
                                        <div class="detail-buttons" style="padding: 0.5rem;">
                                            <button class="detail-button" data-target="#ticket_event" data-toggle="modal">
                                                Payer un ticket
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius" src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                    <a href="" class="btntelecharger" id="view-work" data-target="#affiche_modal" data-toggle="modal">
                                        Affiche de l'évènement
                                    </a>


                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="cover-layer">
                        <div class="container_tabs">

                            <section>
                                <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
                                    <nav>
                                        <ul>
                                            <li><a href="#actualite_fiche_reseau" class="icon pe-7s-news-paper"><span>A propos de l'évènement</span></a></li>
                                            <li><a href="#tickets_event" class="icon pe-7s-ticket"><span>Ticket/Réservation</span></a></li>
                                            <li><a href="#photos_events" class="icon si si-control-play"><span>Médias</span></a></li>
                                            <li><a href="#contact_agenda" class="icon si si-location-pin"><span>Adresse + Contact</span></a></li>
                                        </ul>
                                    </nav>
                                    <div
                                        class="content-wrap">

                                        <!-- A PROPOS DE L'EVENT START -->
                                        <section id="presentation_fiche_reseau">
                                            <p>A propos de l'évènement ici</p>
                                        </section>
                                        <!-- A PROPOS DE L'EVENT END -->

                                        <!-- VIDEOS BOOK CARD START -->
                                        <section id="tickets_event">
                                            <p>Ticket event ici</p>
                                        </section>
                                        <!-- VIDEOS BOOK CARD END -->

                                        <!-- PHOTOS BOOK CARD START -->
                                        <section id="photos_events">
                                            <div class="tab_new_mba" id="tab1">
                                                <div class="tab_new_mba-header">
                                                    <ul role="tablist">
                                                        <li id="#photos_fiche" aria-selected="true" class="tab_new_mba-header-item is-opened" role="tab" tabindex="0" aria-controls="photos_fiche">Photos</li>

                                                        <li id="#audios_fiche" aria-selected="false" class="tab_new_mba-header-item" role="tab" tabindex="0" aria-controls="audios_fiche">Audios</li>

                                                        <li id="#videos_fiche" aria-selected="false" class="tab_new_mba-header-item" role="tab" tabindex="0" aria-controls="videos_fiche">Vidéos</li>
                                                    </ul>
                                                </div>

                                                <div class="tab_new_mba-body">

                                                    <div id="photos_fiche" class="tab_new_mba-body-item is-opened" role="tabpanel" aria-labelledby="photos_fiche" aria-hidden="false">

                                                        <div class="demo-gallery ">
                                                            <ul id="lightgallery" class="list-unstyled containergalbook detail-photo-grid">
                                                                <li class="grid-item" data-responsive="../assets/img/media/artiste3-1.jpg" data-src="../assets/img/media/artiste3-1.jpg" data-sub-html="<h4>Gallery Image 1</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive wd-100p" src="../assets/img/media/artiste3-1.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/2.jpg" data-src="../assets/img/media/2.jpg" data-sub-html="<h4>Gallery Image 2</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/2.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/3.jpg" data-src="../assets/img/media/3.jpg" data-sub-html="<h4>Gallery Image 3</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/3.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/4.jpg" data-src="../assets/img/media/4.jpg" data-sub-html="<h4>Gallery Image 4</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/4.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/5.jpg" data-src="../assets/img/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/5.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/6.jpg" data-src="../assets/img/media/6.jpg" data-sub-html="<h4>Gallery Image 6</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/6.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/7.jpg" data-src="../assets/img/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/7.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/8.jpg" data-src="../assets/img/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/8.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/9.jpg" data-src="../assets/img/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/9.jpg" alt="Thumb-1">
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                            <!-- /Gallery -->
                                                        </div>

                                                    </div>

                                                    <div id="audios_fiche" class="tab_new_mba-body-item" role="tabpanel" aria-labelledby="audios_fiche" aria-hidden="true">
                                                        <p>Musiques et audios</p>

                                                    </div>

                                                    <div id="videos_fiche" class="tab_new_mba-body-item" role="tabpanel" aria-labelledby="videos_fiche" aria-hidden="true">
                                                        <div class="row">
                                                            <div class="col-lg-6">
                                                                <div class="container">
                                                                    <div
                                                                        class="miabartvideo_mba">
                                                                        <!-- video -->
                                                                        <div class="miabartvideo_mba__row">
                                                                            <div class="videoWrapper_mba">
                                                                                <div class="video-preview-image_mba" style="background-image: url(../assets/img/artiste/blissful-young.jpg)"></div>
                                                                                <iframe width="853" height="480" src="https://www.youtube.com/embed/TH5tU3S2ScE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-6">
                                                                <div class="container">
                                                                    <div
                                                                        class="miabartvideo_mba">
                                                                        <!-- video -->
                                                                        <div class="miabartvideo_mba__row">
                                                                            <div class="videoWrapper_mba">
                                                                                <div class="video-preview-image_mba" style="background-image: url(../assets/img/artiste/blissful-young.jpg)"></div>
                                                                                <iframe width="853" height="480" src="https://www.youtube.com/embed/TH5tU3S2ScE?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- PHOTOS BOOK CARD END -->


                                        <!-- CONTACT BOOK CARD START -->
                                        <section id="contact_agenda">
                                            <p>Formulaire de contact</p>
                                        </section>
                                        <!-- CONTACT BOOK CARD END -->

                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs_miabartafrik -->
                            </section>

                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection