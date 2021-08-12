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
                        <a href="" class="btntelecharger" id="view-work" data-target="#affiche_modal"
                            data-toggle="modal">
                            Affiche de l'évènement
                        </a>
                    </div>
                </div>
            </div>

            <div class="profile_miabartafrik_card_content">

                <div class="container-fluido no-padding">

                    <div class="cover" style="background-image: url(../assets/img/event/affiche.jpg);">
                        <div class="miabartafrik-top clearfix">
                            <a class="miabartafrik-icon miabartafrik-icon-prev" href="castingart.html"><span>LISTE DES
                                    Réseaux art.</span></a>

                            <span class="right"><a class="" href=""><span>Nouveaux inscrits</span></a></span>
                        </div>

                    </div>

                    <div class="cover-layer">
                        <div class="container web-portion">
                            <div class="row top-det">
                                <div class="col-lg-5">

                                    <div class="main-contact-info-header">
                                        <h3 class="bold_titre_eventfirst">
                                            Blueberry Tasting - The best of 2016 or whatever Blueberry Tasting - The
                                            best of 2016 or whatever
                                        </h3>
                                    </div>
                                    <a href="" class="btntelecharger" id="view-work" data-target="#affiche_modal"
                                        data-toggle="modal">
                                        Affiche de l'évènement
                                    </a>

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
                                                        <span id="datestart">17.08.2021</span> au
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
                                            <li>
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
                                            <button class="detail-button" data-target="#ticket_event"
                                                data-toggle="modal">
                                                Payer un ticket
                                            </button>
                                            <button class="mr_publier">
                                                <div class="main-img-user online">
                                                    <img alt="avatar" class="radius"
                                                        src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                                </div>
                                            </button>
                                        </div>
                                    </div>

                                    <div class="media-body">
                                        <nav class="contact-info">
                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>
                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="5254 (J'aimes)"><i
                                                    class="fe fe-heart"></i> </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="Contacter l'annonceur"><i
                                                    class="fe fe-phone"></i></a>

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
                    </div>

                    <div class="cover-layer">
                        <div class="container_tabs">

                            <section>
                                <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
                                    <nav>
                                        <ul>
                                            <li><a href="#actualite_fiche_reseau" class="icon pe-7s-news-paper">
                                                    <span>A propos de l'évènement</span></a>
                                            </li>
                                            <li><a href="#photos_fiche_reseau" class="icon pe-7s-ticket">
                                                    <span>Ticket/Réservation</span></a>
                                            </li>
                                            <li><a href="#artistes_fiche_reseau" class="icon pe-7s-camera">
                                                    <span>Photos évènement</span></a>
                                            </li>
                                            <li><a href="#contact_fiche_reseau" class="icon pe-7s-mail">
                                                    <span>Contact</span></a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">

                                        <!-- ACTIVITY BOOK CARD START -->

                                        <section id="actualite_fiche_reseau">
                                            <div class="main-contact-info-body">
                                                <div>
                                                    <h6>Présentation</h6>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                                        voluptas sit aspernatur aut odit aut fugit, sed quia
                                                        consequuntur magni dolores eos qui ratione voluptatem sequi
                                                        nesciunt.</p>
                                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                                                        accusantium doloremque laudantium, totam rem aperiam, eaque ipsa
                                                        quae ab illo inventore veritatis et quasi architecto beatae
                                                        vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia
                                                        voluptas sit aspernatur aut odit aut fugit, sed quia
                                                        consequuntur magni dolores eos qui ratione voluptatem sequi
                                                        nesciunt.</p>
                                                </div>
                                                <div class="media-list">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div>
                                                                <label>Work</label> <span class="tx-medium">+1 (234) 567
                                                                    8901</span>
                                                            </div>
                                                            <div>
                                                                <label>Personal</label> <span class="tx-medium">+1 (498)
                                                                    021 0090</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div>
                                                                <label>Gmail Account</label> <span
                                                                    class="tx-medium">sonia.taylor@gmail.com</span>
                                                            </div>
                                                            <div>
                                                                <label>Other Account</label> <span
                                                                    class="tx-medium">me@bootstrapdash.me</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <div>
                                                                <label>Current Address</label> <span
                                                                    class="tx-medium">012 Dashboard Apartments, San
                                                                    Francisco, California 13245</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media mb-0">
                                                        <div class="media-body">
                                                            <div>
                                                                <label>Call History</label> <span
                                                                    class="tx-medium">Duration of last call: 2m
                                                                    32sec</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </section>

                                        <!-- ACTIVITY BOOK CARD END -->

                                        <!-- INFOS BOOK CARD START -->

                                        <section id="presentation_fiche_reseau">

                                        </section>

                                        <!-- INFOS BOOK CARD END -->

                                        <!-- PHOTOS BOOK CARD START -->
                                        <section id="photos_fiche_reseau">
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
                                        <section id="artistes_fiche_reseau">
                                            <p>Nos Artistes</p>
                                        </section>
                                        <!-- MUSIQUE BOOK CARD END -->


                                        <!-- VIDEOS BOOK CARD START -->
                                        <section id="grilletarifaire_fiche_reseau">
                                            <p>Grille tarifaire</p>
                                        </section>
                                        <!-- VIDEOS BOOK CARD END -->

                                        <!-- CONTACT BOOK CARD START -->
                                        <section id="contact_fiche_reseau">
                                            <p>Formulaire de contact</p>
                                        </section>
                                        <!-- CONTACT BOOK CARD END -->

                                    </div><!-- /content -->
                                </div><!-- /tabs_miabartafrik -->
                            </section>

                        </div>
                    </div>



                </div>




            </div>
        </div>
    </div>
</div>
<!-- End Main Content-->


<!-- TICKETS EVENT -->
<div class="modal" id="ticket_event">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Tickets évènement</h6><button aria-label="Close" class="close"
                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <div class="row row-sm">
                    <div class="col-md-6">
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                            laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo.</p>
                    </div>
                    <div class="col-md-6">
                        <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain
                            was born and I will give you a complete account of the who loves toil and pain can procureor
                            sit aspernatur system.</p>
                    </div>
                </div>
                <div class="row row-sm">
                    <div class="col-md-6">
                        <p>expound the actual teachings of the great explorer of the truth, the master-builder of human
                            happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure
                            desires to obtain pain.</p>
                    </div>
                    <div class="col-md-6">
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit,
                            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat
                            aut odit voluptatem.</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn ripple btn-secondary" data-dismiss="modal" type="button">Fermer</button>
            </div>
        </div>
    </div>
</div>
<!--End TICKETS EVENT -->

<!-- MODAL AFFICHE -->
<div class="modal" id="affiche_modal">
    <div class="modal-dialog" role="document">
        <div class="modal-content modal-content-demo">
            <div class="modal-header">
                <h6 class="modal-title">Affiche évènement</h6><button aria-label="Close" class="close"
                    data-dismiss="modal" type="button"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body1">
                <img src="../assets/img/event/affiche.jpg" class="imageaffichepub">
            </div>
        </div>
    </div>
</div>
<!--End MODAL AFFICHE -->

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

<!-- Modal js-->
<script src="../../assets/js/modal.js"></script>

<!-- Custom js -->
<script src="../assets/js/custom.js"></script>

@endpush