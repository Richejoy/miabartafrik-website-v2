@extends('layouts.bookcast', ['title' => "Accueil"])

@section('stylesheet')

<!-- CSS Plugins -->
<link rel="stylesheet" href="{{ asset('public/assets/css/sliderhome.min.css') }}">

@endsection

@section('body')

<!-- HOME SLIDER -->
<section id="welcome-section" class="grid"> 
                        
                      <div>
                        <h2 data-en class="member_info">Acteurs,<br>chanteurs, <br>producteurs, <br>danseurs, <span class="h2color">&</span>...</h2> 
                      </div>
                      
                          <div class="vertical-line"></div>
                      
                      <div class="welc_h1">
                        <h1 data-en class="vivez_art">Vivez,<br>de votre<br>Art<span class="h1color">.</span></h1> 
                      </div>
                      
                    </section>
<!-- HOME SLIDER -->

<!-- CONTAINER OPENED -->
<div class="container" style="margin-top: 1rem;">
    <!-- ROW-1 OPEN -->
    <div class="row row-cards">
        <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9 main-content">
            <div class="row">
                <!-- ACTUALITES -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">
                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            Actualités <span class="big">Evènement à la une</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="actuArtbookcast-content">
                                <!-- item -->
                                <div class="actuArtbookcast-item">
                                    <div class="actuArtbookcast-img">
                                        <img src="{{ asset('public/assets/images/blog/art-design-1.jpg') }}" alt="">
                                    </div>
                                    <div class="task__stats">
                                        <span class="mrlk">
                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                data-original-title="artiste du Ghana"></i>
                                        </span>

                                        <span class="mrlk">
                                            <button><i class="fa fa-heart"></i></button>1259
                                        </span>

                                        <span class="mrlk">
                                            <button><i class="fa fa-eye"></i></button> 7254
                                        </span>

                                    </div>

                                    <div class="blog-text">
                                        <div class="">
                                            <h3 class="actuart_ala_une_label">Cinéma/ Fiction</h3>
                                            <h3 class="actuart_ala_une_byline">Gabrielle Kellner</h3>
                                            <h4 class="actuart_ala_une_dateline">July 23, 2020</h4>
                                        </div>
                                        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>

                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire la suite</a>
                                            </button>
                                            <button class="detail-button">
                                                <a href="bookartisteview.html">Voir l'Interview </a>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- end of item -->

                                <!-- item -->
                                <div class="actuArtbookcast-item">
                                    <div class="actuArtbookcast-img">
                                        <img src="{{ asset('public/assets/images/blog/art-design-2.jpg') }}" alt="">
                                        <span><i class="fa fa-tags" data-toggle="tooltip" title=""
                                                data-original-title=""></i> </span>
                                    </div>
                                    <div class="task__stats">
                                        <span class="mrlk">
                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                data-original-title="artiste du Ghana"></i>
                                        </span>

                                        <span class="mrlk">
                                            <button><i class="fa fa-heart"></i></button>1259
                                        </span>

                                        <span class="mrlk">
                                            <button><i class="fa fa-eye"></i></button> 7254
                                        </span>

                                    </div>
                                    <div class="blog-text">
                                        <div class="">
                                            <h3 class="actuart_ala_une_label">Music/ Danse</h3>
                                            <h3 class="actuart_ala_une_byline">Gabrielle Kellner</h3>
                                            <h4 class="actuart_ala_une_dateline">July 23, 2020</h4>
                                        </div>
                                        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire la suite</a>
                                            </button>
                                            <button class="detail-button">
                                                <a href="bookartisteview.html">Voir l'Interview </a>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                                <!-- end of item -->
                                <!-- item -->
                                <div class="actuArtbookcast-item">
                                    <div class="actuArtbookcast-img">
                                        <img src="{{ asset('public/assets/images/blog/art-design-3.jpg') }}" alt="">
                                    </div>
                                    <div class="task__stats">
                                        <span class="mrlk">
                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                data-original-title="artiste du Ghana"></i>
                                        </span>

                                        <span class="mrlk">
                                            <button><i class="fa fa-heart"></i></button>1259
                                        </span>
                                        <span class="mrlk">
                                            <button><i class="fa fa-eye"></i></button> 7254
                                        </span>

                                    </div>
                                    <div class="blog-text">
                                        <div class="">
                                            <h3 class="actuart_ala_une_label">Musique/Danse</h3>
                                            <h3 class="actuart_ala_une_byline">Gabrielle Kellner</h3>
                                            <h4 class="actuart_ala_une_dateline">July 23, 2020</h4>
                                        </div>
                                        <h2>Lorem ipsum, dolor sit amet consectetur adipisicing</h2>
                                        <div class="detail-buttons">
                                            <button class="detail-button">
                                                <a href="actuartview.html">Lire la suite</a>
                                            </button>
                                            <button class="detail-button">
                                                <a href="bookartisteview.html">Voir l'Interview </a>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end of item -->
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="center-text">
                                        <!-- afficherAll -->
                                        <div id="afficherAll">
                                            <button class="allViews learn-more">
                                                <span class="circle" aria-hidden="true">
                                                    <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Toutes l'actualités</span>
                                            </button>
                                        </div>
                                        <!-- end afficherAll -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- ACTUALITES END -->

                <!-- AGENDA -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            À noter dans <span class="big">votre agenda</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!-- EVENEMENT -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                    <div class="agendaplus_bookcast">
                                        <div class="event_affiche_agendaplus">
                                            <img src="{{ asset('public/assets/images/agendaplus/affiche.jpg') }}"
                                                class="image_agendaplus_bookcast">

                                            <div class="info_container_agendaplus">
                                                <div class="titre">Blueberry Tasting - The best of 2016
                                                    or whatever</div>
                                                <div class="details">
                                                    <span class="chamber-half--bottom">
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg">
                                                        <div class="date">Monday 19th. September, 2016
                                                        </div>
                                                    </span>
                                                    <span>
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg">
                                                        <div class="location">Blueberry Bar, Paul
                                                            Street, London, United Kingdom</div>
                                                    </span>
                                                </div>

                                                <div class="detail-buttons">
                                                    <button class="detail-button">
                                                        <a href="agendaview.html"> Evènement</a>
                                                    </button>
                                                    <button class="detail-button">
                                                        <a href="#">Spot</a>
                                                    </button>

                                                </div>
                                                <div class="task__stats">
                                                    <span class="mrlk">
                                                        <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-heart"></i></button>1259
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-eye"></i></button> 7254
                                                    </span>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="dateWrapper_agendaplus_bookcast">
                                            <span class="jour_agendaplus">10</span>
                                            <span class="mois_agendaplus">Jun</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- END EVENEMENT -->

                                <!-- EVENEMENT -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                    <div class="agendaplus_bookcast">
                                        <div class="event_affiche_agendaplus">
                                            <img src="{{ asset('public/assets/images/agendaplus/fetevin.jpg') }}"
                                                class="image_agendaplus_bookcast">

                                            <div class="info_container_agendaplus">
                                                <div class="titre">Blueberry Tasting - The best of 2016
                                                    or whatever</div>
                                                <div class="details">
                                                    <span class="chamber-half--bottom">
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg">
                                                        <div class="date">Monday 19th. September, 2016
                                                        </div>
                                                    </span>
                                                    <span>
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg">
                                                        <div class="location">Blueberry Bar, Paul
                                                            Street, London, United Kingdom</div>
                                                    </span>
                                                </div>

                                                <div class="detail-buttons">
                                                    <button class="detail-button">
                                                        <a href="agendaview.html"> Evènement</a>
                                                    </button>
                                                    <button class="detail-button">
                                                        <a href="#">Spot</a>
                                                    </button>

                                                </div>
                                                <div class="task__stats">
                                                    <span class="mrlk">
                                                        <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-heart"></i></button>1259
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-eye"></i></button> 7254
                                                    </span>

                                                </div>
                                            </div>

                                        </div>

                                        <div class="dateWrapper_agendaplus_bookcast">
                                            <span class="jour_agendaplus">15</span>
                                            <span class="mois_agendaplus">Jun</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- END EVENEMENT -->

                                <!-- EVENEMENT -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                    <div class="agendaplus_bookcast">
                                        <div class="event_affiche_agendaplus">
                                            <img src="{{ asset('public/assets/images/agendaplus/boucle_bel_air_2.jpg') }}"
                                                class="image_agendaplus_bookcast">

                                            <div class="info_container_agendaplus">

                                                <div class="titre">Blueberry Tasting - The best of 2016
                                                    or whatever</div>
                                                <div class="details">
                                                    <span class="chamber-half--bottom">
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg">
                                                        <div class="date">Monday 19th. September, 2016
                                                        </div>
                                                    </span>
                                                    <span>
                                                        <img
                                                            src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg">
                                                        <div class="location">Blueberry Bar, Paul
                                                            Street, London, United Kingdom</div>
                                                    </span>
                                                </div>

                                                <div class="detail-buttons">
                                                    <button class="detail-button">
                                                        <a href="agendaview.html"> Evènement</a>
                                                    </button>
                                                    <button class="detail-button">
                                                        <a href="#">Spot</a>
                                                    </button>

                                                </div>
                                                <div class="task__stats">
                                                    <span class="mrlk">
                                                        <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-heart"></i></button>1259
                                                    </span>

                                                    <span class="mrlk">
                                                        <button><i class="fa fa-eye"></i></button> 7254
                                                    </span>

                                                </div>

                                            </div>

                                        </div>

                                        <div class="dateWrapper_agendaplus_bookcast">
                                            <span class="jour_agendaplus">17</span>
                                            <span class="mois_agendaplus">Jun</span>
                                        </div>

                                    </div>
                                </div>
                                <!-- END EVENEMENT -->

                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="center-text">
                                        <!-- afficherAll -->
                                        <div id="afficherAll">
                                            <button class="allViews learn-more">
                                                <span class="circle" aria-hidden="true">
                                                    <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Afficher l'agenda</span>
                                            </button>
                                        </div>
                                        <!-- end afficherAll -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- AGENDA END -->

                <!-- LISTE DES COMEDIENS -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            (re)Découvrez <span class="big">derniers profils mis à
                                                jour</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <!-- LISTE DES ARTISTES -->

                                <!-- Book artiste -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 ">
                                    <div class="booksId">

                                        <div class="profileImage">
                                            <img src="{{ asset('public/assets/images/artiste/exempleBook.jpg') }}"
                                                alt="team">
                                        </div>

                                        <div class="inner_booksId">

                                            <div class="info_booksId">

                                                <header class="headerprofilbook">
                                                    <a href="/artisteName" class="ambassadeurSign"><img
                                                            src="{{ asset('public/assets/images/icons/iconambassadeur.png') }}"
                                                            alt="ambassadeur BookCast" class="ambassadeurSRound"></a>

                                                    <div class="titleAndAuthor">
                                                        <h2 class="titlebook" title="Nom de l'artiste">

                                                            <span class="book-status online">
                                                                <i class="ion-record" data-toggle="tooltip" title=""
                                                                    data-original-title="En ligne"></i>
                                                            </span>
                                                            <a href="">Agbodjan - Tonou</a>
                                                        </h2>
                                                        <address class="book_author">
                                                            <a href="/artisteName"
                                                                class="domaine_artistiqueBookcast">Actrice,
                                                                Modèle photo, Danseuse</a>
                                                        </address>
                                                    </div>

                                                </header>
                                                <div class="detail-area-header">

                                                    <div class="detail-buttons">
                                                        <button class="detail-button">
                                                            <i class="fa fa-user-plus"></i>
                                                        </button>
                                                        <button class="detail-button">
                                                            <a href="bookartisteview.html">Voir ce Book
                                                            </a>
                                                        </button>
                                                    </div>

                                                    <div class="task__stats">
                                                        <span class="mrlk">
                                                            <i class="flag flag-tg" data-toggle="tooltip" title=""
                                                                data-original-title="Nationalité de l'artiste"></i>
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-heart"></i></button>1259
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-eye"></i></button>
                                                            7254
                                                        </span>


                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Book artiste -->

                                <!-- Book artiste -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 ">
                                    <div class="booksId">

                                        <div class="profileImage">
                                            <img src="{{ asset('public/assets/images/artiste/team-2.jpg') }}"
                                                alt="team">
                                        </div>

                                        <div class="inner_booksId">

                                            <div class="info_booksId">

                                                <header class="headerprofilbook">
                                                    <a href="/artisteName" class="ambassadeurSign" style="display: ;">
                                                        <img src="{{ asset('public/assets/images/icons/iconambassadeur.png') }}"
                                                            alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                    </a>

                                                    <div class="titleAndAuthor">
                                                        <h2 class="titlebook" title="Nom de l'artiste">
                                                            <span class="book-status online">
                                                                <i class="ion-record" data-toggle="tooltip" title=""
                                                                    data-original-title="En ligne"></i>
                                                            </span>
                                                            <a href="">Gohou Michel</a>
                                                        </h2>
                                                        <address class="book_author">
                                                            <a href="/artisteName"
                                                                class="domaine_artistiqueBookcast">Comédien,
                                                                Acteur, Producteur</a>
                                                        </address>
                                                    </div>

                                                </header>
                                                <div class="detail-area-header">

                                                    <div class="detail-buttons">
                                                        <button class="detail-button">
                                                            <i class="fa fa-user-plus"></i>
                                                        </button>
                                                        <button class="detail-button">
                                                            <a href="bookartisteview.html">Voir ce Book
                                                            </a>
                                                        </button>

                                                    </div>

                                                    <div class="task__stats">
                                                        <span class="mrlk">
                                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                                data-original-title="Nationalité de l'artiste"></i>
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-heart"></i></button>1259
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-eye"></i></button>
                                                            7254
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Book artiste -->

                                <!-- Book artiste -->
                                <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 ">
                                    <div class="booksId">

                                        <div class="profileImage">
                                            <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}"
                                                alt="team">
                                        </div>

                                        <div class="inner_booksId">

                                            <div class="info_booksId">

                                                <header class="headerprofilbook">
                                                    <a href="/artisteName" class="ambassadeurSign"
                                                        style="display: none;">
                                                        <img src="{{ asset('public/assets/images/icons/iconambassadeur.png') }}"
                                                            alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                    </a>

                                                    <div class="titleAndAuthor">
                                                        <h2 class="titlebook" title="Nom de l'artiste">
                                                            <span class="book-status online">
                                                                <i class="ion-record" data-toggle="tooltip" title=""
                                                                    data-original-title="En ligne"></i>
                                                            </span>
                                                            <a href="">ArtisteName</a>
                                                        </h2>
                                                        <address class="book_author">
                                                            <a href="/artisteName"
                                                                class="domaine_artistiqueBookcast">Domaine1,
                                                                Domaine2, Domaine3</a>
                                                        </address>
                                                    </div>

                                                </header>
                                                <div class="detail-area-header">

                                                    <div class="detail-buttons">
                                                        <button class="detail-button">
                                                            <i class="fa fa-user-plus"></i>
                                                        </button>
                                                        <button class="detail-button">
                                                            <a href="bookartisteview.html">Voir ce Book
                                                            </a>
                                                        </button>

                                                    </div>

                                                    <div class="task__stats">
                                                        <span class="mrlk">
                                                            <i class="flag flag-ci" data-toggle="tooltip" title=""
                                                                data-original-title="Nationalité de l'artiste"></i>
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-heart"></i></button>1259
                                                        </span>

                                                        <span class="mrlk">
                                                            <button><i class="fa fa-eye"></i></button>
                                                            7254
                                                        </span>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <!-- end Book artiste -->

                                <!-- LISTE DES ARTISTES END -->

                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="center-text">
                                        <!-- afficherAll -->
                                        <div id="afficherAll">
                                            <button class="allViews learn-more">
                                                <span class="circle" aria-hidden="true">
                                                    <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Annuaire comédiens</span>
                                            </button>
                                        </div>
                                        <!-- end afficherAll -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- LISTE DES COMEDIENS END -->

                <!-- Castings -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            Castings <span class="big">Derniers Castings Publiés</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <!-- Castings 01 -->
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-12 mb_1_5">

                                    <div role="listitem" class="casting_item w-dyn-item">
                                        <a href="castingartview.html" class="job-link-block w-inline-block">
                                            <img loading="lazy"
                                                src="{{ asset('public/assets/images/partner/radiolome.jpg') }}"
                                                alt="Société de casting" class="company-logo">
                                            <div class="casting_item-main-content">
                                                <div class="casting_item-name-block">
                                                    <h3>Acteur H/F pour un film</h3>
                                                    <div class="casting_item-location"><i class="flag flag-ci"
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </div>
                                                </div>
                                                <div class="paragraphcast">domaine artistique</div>

                                            </div>
                                            <div class="casting_item-right-block">
                                                <div class="job-type">Date</div>
                                                <div class="job-type_date">12.03.2021 - 15.03.2021</div>

                                            </div>
                                        </a>
                                        <div class="jetboost-toggle-favorite-9o2r">
                                            <a href="#" class="star-button w-button"
                                                style=" background-image: url({{ asset('public/assets/images/icons/video.svg') }});"></a>
                                            <a href="#" class="star-button w-button jetboost-list-item-hide"
                                                style="display: block;"></a>
                                        </div>

                                        <div class="w-embed">
                                            <input type="hidden" class="jetboost-list-item"
                                                value="senior-account-manager">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Castings -->

                                <!-- Castings 01 -->
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-12 mb_1_5">

                                    <div role="listitem" class="casting_item w-dyn-item">
                                        <a href="castingartview.html" class="job-link-block w-inline-block">
                                            <img loading="lazy"
                                                src="{{ asset('public/assets/images/partner/zephyr.jpg') }}"
                                                alt="Société de casting" class="company-logo">
                                            <div class="casting_item-main-content">
                                                <div class="casting_item-name-block">
                                                    <h3>Acteur H/F pour un film</h3>
                                                    <div class="casting_item-location"><i class="flag flag-ng"
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </div>
                                                </div>
                                                <div class="paragraphcast">domaine artistique</div>

                                            </div>
                                            <div class="casting_item-right-block">
                                                <div class="job-type">Date</div>
                                                <div class="job-type_date">12.03.2021 - 15.03.2021</div>

                                            </div>
                                        </a>
                                        <div class="jetboost-toggle-favorite-9o2r">
                                            <a href="#" class="star-button w-button"
                                                style=" background-image: url({{ asset('public/assets/images/icons/camera01.svg') }});"></a>
                                            <a href="#" class="star-button w-button jetboost-list-item-hide"
                                                style="display: block;"></a>
                                        </div>

                                        <div class="w-embed">
                                            <input type="hidden" class="jetboost-list-item"
                                                value="senior-account-manager">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Castings -->

                                <!-- Castings 01 -->
                                <div class="col-sm-12 col-md-6 col-lg-4 col-xl-12 mb_1_5">

                                    <div role="listitem" class="casting_item w-dyn-item">
                                        <a href="castingartview.html" class="job-link-block w-inline-block">
                                            <img loading="lazy"
                                                src="{{ asset('public/assets/images/partner/logocast.png') }}"
                                                alt="Société de casting" class="company-logo">
                                            <div class="casting_item-main-content">
                                                <div class="casting_item-name-block">
                                                    <h3>Acteur H/F pour un film</h3>
                                                    <div class="casting_item-location"><i class="flag flag-ci"
                                                            data-toggle="tooltip" title=""
                                                            data-original-title="artiste du Ghana"></i>
                                                    </div>
                                                </div>
                                                <div class="paragraphcast">Musique / Danse</div>

                                            </div>
                                            <div class="casting_item-right-block">
                                                <div class="job-type">Date</div>
                                                <div class="job-type_date">12.03.2021 - 15.03.2021</div>


                                            </div>
                                        </a>
                                        <div class="jetboost-toggle-favorite-9o2r">
                                            <a href="#" class="star-button w-button"
                                                style=" background-image: url({{ asset('public/assets/images/icons/cinema.svg') }});"></a>
                                            <a href="#" class="star-button w-button jetboost-list-item-hide"
                                                style="display: block;"></a>
                                        </div>

                                        <div class="w-embed">
                                            <input type="hidden" class="jetboost-list-item"
                                                value="senior-account-manager">
                                        </div>
                                    </div>
                                </div>
                                <!-- end Castings -->

                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="center-text">
                                        <!-- afficherAll -->
                                        <div id="afficherAll">
                                            <button class="allViews learn-more">
                                                <span class="circle" aria-hidden="true">
                                                    <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Tout les castings</span>
                                            </button>
                                        </div>
                                        <!-- end afficherAll -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Castings END -->

                <!-- vidéos -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            Visionner les <span class="big">vidéos récentes</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col s12">
                                    <div class="center-text">
                                        <!-- afficherAll -->
                                        <div id="afficherAll">
                                            <button class="allViews learn-more">
                                                <span class="circle" aria-hidden="true">
                                                    <span class="icon arrow"></span>
                                                </span>
                                                <span class="button-text">Toutes les vidéos</span>
                                            </button>
                                        </div>
                                        <!-- end afficherAll -->
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- vidéos END -->

                <!-- Témoignages -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            Témoignages <span class="big">Ce qu'ils disent...</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div class="container">
                                    <div class="reviews-slider">
                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-2.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-4.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>

                                        <div class="reviews-slider__item">
                                            <a class="reviews-slider__photo-wrapper" href="#">
                                                <img src="{{ asset('public/assets/images/artiste/team-3.jpg') }}" alt=""
                                                    class="reviews-slider__photo" />
                                            </a>
                                            <div class="reviews-slider__text">
                                                <div class="reviews-slider__message">
                                                    <p>Fait de témoigner; déclaration qui confirme la
                                                        véracité de ce que l'on a vu, entendu, perçu,
                                                        vécu. Témoignage écrit, oral; témoignage
                                                        suspect, irréfutable; autorité d'un témoignage;
                                                        écouter, invoquer, porter, recevoir, rendre un
                                                        témoignage; d'après, selon, sur les témoignages.
                                                    </p>
                                                </div>
                                                <div class="reviews-slider__author-name">Nom de
                                                    l'artiste</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Témoignages END -->

                <!-- services -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title">
                                            Découvrez <span class="big">nos services</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="bookcastservice-wrp">
                                    <div class="bookcastservice-wrp-inner">

                                        <div class="bookcastservice-bookcast_card">
                                            <h4>
                                                Profiter des services du réseau artistique africain.
                                            </h4>
                                            <div class="row" style="margin-top: 2rem;">
                                                <div class="col s12">
                                                    <div class="center-text">
                                                        <a href="#" class="btn bookcastbtn">Créer votre
                                                            compte</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                        <div class="bookcastservice-bookcast_card bg-dark">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/images/icons/portfolio.png') }}">
                                                </div>
                                                <div class="heading">
                                                    <h5>Actualiser votre profil</h5>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p>Votre CV en ligne</p>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                        <div class="bookcastservice-bookcast_card bg-dark">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/images/icons/resume.png') }}">
                                                </div>
                                                <div class="heading">
                                                    <h5>Insérer & consulter un casting</h5>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p>Casting réservé exclusivement aux membres</p>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                        <div class="bookcastservice-bookcast_card bg-dark">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/images/icons/show.png') }}">
                                                </div>
                                                <div class="heading">
                                                    <h5>Insérer & consulter un spectacle</h5>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p>Tous les événements culturels africains.</p>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                        <div class="bookcastservice-bookcast_card bg-dark">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/images/icons/cast_in.png') }}">
                                                </div>
                                                <div class="heading">
                                                    <h5>Créer un cast-in</h5>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p>Un outil de sélection visible uniquement par
                                                    vous-même.</p>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                        <div class="bookcastservice-bookcast_card bg-dark">
                                            <div class="d-flex">
                                                <div class="icon">
                                                    <img src="{{ asset('public/assets/images/icons/annonce.png') }}">
                                                </div>
                                                <div class="heading">
                                                    <h5>Insérer & consulter une annonce</h5>
                                                </div>
                                            </div>
                                            <div class="info">
                                                <p>Les petites annonces pour comédiens et
                                                    professionnels.</p>
                                            </div>
                                        </div>
                                        <!--bookcastservice-bookcast_card-->

                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- services END -->


                <!-- services -->
                <div class="col-md-12">
                    <div class="card overflow-hidden">
                        <div class="card-body overflow-hidden" style="background: white;">

                            <div class="row">
                                <div class="col l10 m12 s12 offset-l1">
                                    <div class="section-title">
                                        <h3 class="title" style="color: #29a5dd;">
                                            Partenaires <span class="big">Ils nous soutiennent</span>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                            <div class="row">

                                <div id="logoGridBookcast">
                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/bayer.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/columbia.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/lilly.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/emdserono.png') }}" /></a>
                                    </div>
                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/janssen.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/mellon.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/moore.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo"><a href="#" target="_blank">
                                            <img src="{{ asset('public/assets/images/partner/nih.png') }}" /></a>
                                    </div>

                                    <div class="partnerBookcast-logo">
                                        <img src="{{ asset('public/assets/images/partner/peakedhill.png') }}" />
                                    </div>

                                </div>

                            </div>

                        </div>
                    </div>
                </div>
                <!-- Partenaires END -->

            </div>
        </div>

        <!-- ASIDE BAR -->
        @include('layouts.partials.bookcast._before_footer')
        <!-- ASIDE BAR END -->
    </div>
</div>
<!-- CONTAINER CLOSED -->

@endsection