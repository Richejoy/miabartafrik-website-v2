@extends('layouts.bookcast', ['title' => $artist->name])

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
                        <h1 class="writing-mode">
                            Book-Cv de<br>
                            <span class="nom_art_viewPage">{{ $artist->name }}</span>
                        </h1>
                    </div>
                </div>

            </div>

            <div id="content-3" class="profile_miabartafrik_card_content custom_scrollbar_page">

                <div class="container-fluido no-padding">

                    <div class="cover" style="background-image: url({{ $artist->library->remote }});">
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
                            @if($artist->is_ambassador)
                            <div class="ambassadeurProfilePage">
                                <img src="{{ asset('public/assets/img/icons/iconambassadeur.png') }}" alt="ambassadeur BookCast" class="ambassadeurSRound">
                            </div>
                            @endif

                            <div class="row top-det">

                                <div class="col-lg-6">
                                    <div class="main-contact-info-header pt-3">
                                        <div class="media">
                                            <div class="main-img-user">
                                                <img alt="{{ $artist->user->library->description }}" src="{{ $artist->user->library->remote }}">
                                            </div>
                                            <div class="media-body">
                                                <div class="main_book_name">
                                                    <h6>
                                                        <a href="book_view.html">{{ $artist->name }}</a>
                                                        
                                                        <x-verified-account />
                                                    </h6>
                                                    <div class="all_services_mba"> 
                                                        @forelse($artist->areas as $area)
                                                        <small class="all_services_mba_small">{{ $area->name }}</small>
                                                        @empty
                                                        <small class="all_services_mba_small">Aucun</small>
                                                        @endforelse
                                                    </div>
                                                </div>

                                                <nav class="contact-info">
                                                    <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $artist->user->country->nicename }}"><i class="{{ $artist->user->country->getFlag() }}"></i></span>

                                                    <a href="{{ route('artist.show', ['artist' => $artist]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $artist->user->receiverViews->count() }} (Vues)"><i class="fe fe-eye"></i></a>

                                                    <span wire:click.prevent="like({{ $artist->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $artist->user->receiverLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i></span>

                                                    <span wire:click.prevent="friend({{ $artist->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $artist->user->friends->count() }} (Amis)"><i class="fe fe-user-plus"></i></span>

                                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Appeler">
                                                        <i class="fe fe-phone"></i>
                                                    </a>

                                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier">
                                                        <i class="far fa-share-square"></i>
                                                    </a>

                                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Télécharger la version Pdf">
                                                        <i class="fe fe-download"></i>
                                                    </a>
                                                </nav>
                                            </div>
                                        </div>
                                        <div class="main-contact-action btn-list pt-3 pr-3">
                                            @if($artist->isOwner())
                                            <a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="" data-original-title="Editer Profil">
                                                <i class="fe fe-edit"></i>
                                            </a>

                                            <a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="" data-original-title="Supprimer Profil">
                                                <i class="fe fe-trash-2"></i>
                                            </a>

                                            <a href="#" class="btn ripple btn-warning text-white btn-icon" data-placement="top" data-toggle="tooltip" title="" data-original-title="Bloquer Profil">
                                                <i class="fe fe-slash"></i>
                                            </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 eml-mob">
                                    <div class="infos_plus_bookcast">
                                        <ul>
                                            <li>
                                                <div class="desc">
                                                    <h4>Age</h4>
                                                    <h3>{{ $artist->user->getAge() }}</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Sexe</h4>
                                                    <h3>{{ $artist->user->civility->gender->name }}</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Inscrit(e)</h4>
                                                    <h3>{{ $artist->created }}</h3>
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
                                                    <h3>{{ $artist->user->last_login->diffForHumans() }}</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Langues parlées</h4>
                                                    <div class="all_services_mba"> 
                                                       @forelse($artist->user->languages as $language)
                                                        <small class="all_services_mba_small">{{ $language->name }}</small>
                                                        @empty
                                                        <small class="all_services_mba_small">Aucune</small>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="desc">
                                                    <h4>Compétences</h4>
                                                    <div class="all_services_mba"> 
                                                        @forelse($artist->user->skills as $skill)
                                                        <small class="all_services_mba_small">{{ $skill->name }}</small>
                                                        @empty
                                                        <small class="all_services_mba_small">Aucune</small>
                                                        @endforelse
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>


                        </div>
                    </div>

                    <div
                        class="cover-layer">

                        <!-- BODY BOOK CARD START -->

                        <div class="container_tabs">

                            <section>
                                <div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
                                    <nav>
                                        <ul>
                                            <li><a href="#actualite_book" class="icon si si-speech"><span>Actualités</span></a></li>

                                            <li><a href="#biograph_book" class="icon si si-emotsmile"><span>Biographie</span></a></li>

                                            <li><a href="#infos_book" class="icon si si-info"><span>Infos book</span></a></li>

                                            <li><a href="#media_book" class="icon si si-control-play"><span>Médias</span></a></li>

                                            <li><a href="#prix_book" class="icon si si-trophy"><span>Prix</span></a></li>

                                            <li><a href="#contact_book" class="icon si si-envelope-letter"><span>Contact</span></a></li>
                                        </ul>
                                    </nav>
                                    <div
                                        class="content-wrap">

                                        <!-- ACTIVITY BOOK CARD START -->

                                        <section id="actualite_book">
                                            <div
                                                class="row">
                                                <!-- BODY ACTU -->
                                                <div class="col-xl-8 col-lg-12">
                                                    <div class="post_news">
                                                        <div class="main-content-body main-content-body-profile">
                                                            <div class="main-profile-body p-0">
                                                                <div class="row row-sm">
                                                                    <div
                                                                        class="col-12">

                                                                        <!-- Write post container -->
                                                                        <div class="write_post_container">

                                                                            <div class="media">
                                                                                <div class="media-user mr-2">
                                                                                    <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                </div>
                                                                                <div class="media-body">
                                                                                    <h6 class="mb-0 mg-t-2 ml-2">AGBODJAN TONOU</h6>
                                                                                    <span class="post__date">
                                                                                        <a href="#">02 Septembre 2021</a>
                                                                                    </span>
                                                                                    <span class="post__date-privacy-separator">&nbsp;·</span>
                                                                                    <i class="post__privacy si si-globe" data-toggle="tooltip" title="" data-original-title="Public"></i>

                                                                                    <span class="dropdown">
                                                                                        <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                                                                                            <i class="fe fe-chevron-down"></i>
                                                                                        </a>

                                                                                        <div class="dropdown-menu dropdown-menu-right shadow" style="">
                                                                                            <a class="dropdown-item" href="#">Modifier la publication
                                                                                            </a>
                                                                                            <a class="dropdown-item" href="#">Supprimer le message</a>
                                                                                            <a class="dropdown-item" href="#">Paramètres personnels</a>
                                                                                        </div>
                                                                                    </span>
                                                                                </div>
                                                                            </div>

                                                                            <div class="post_input_container">
                                                                                <textarea rows="3" placeholder="A quoi penses-tu, AGBODJAN-TONOU ?"></textarea>

                                                                                <div class="page-header py-0">
                                                                                    <div>
                                                                                        <ul class="icons-list">
                                                                                            <li class="icons-list-item icons_recharge">
                                                                                                <i class="si si-paper-clip" data-toggle="tooltip" title="" data-original-title="Ajouter emotsmile"></i>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                    <div class="d-flex">
                                                                                        <div class="justify-content-center">
                                                                                            <button type="submit" class="btn btn-secondary btn-icon-text">
                                                                                                <i class="fe fe-send mr-2"></i>
                                                                                                Publier
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end Write post container -->

                                                                        <!-- Post Video Html -->
                                                                        <div class="card mg-b-20 border">
                                                                            <div class="card-header">
                                                                                <div class="media">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">Avorgno Yawo Guy</h6>
                                                                                        <span class="text-primary ml-2">juste maintenant
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown">
                                                                                            <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style="">
                                                                                                <a class="dropdown-item" href="#">Modifier la publication
                                                                                                </a>
                                                                                                <a class="dropdown-item" href="#">Supprimer le message</a>
                                                                                                <a class="dropdown-item" href="#">Paramètres personnels</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <p class="post_text mg-t-0">
                                                                                    Ceci est un exemple de video
                                                                                    <span>HTML</span>
                                                                                    uloader depuis le bureau ou un mobile.
                                                                                </p>

                                                                                <div class="row row-sm">
                                                                                    <div class="col-md-12">
                                                                                        <div class="videoo">
                                                                                            <div class="miabartvideo_mba__row">
                                                                                                <div class="videoWrapper_mba">
                                                                                                    <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                                                    <div class="mbr-figure" style="width: 100%;">
                                                                                                        <iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="row row-sm">
                                                                                    <div class="col-md-4">
                                                                                        <div class="videoo">
                                                                                            <div class="miabartvideo_mba__row">
                                                                                                <div class="videoWrapper_mba">
                                                                                                    <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                                                    <div class="mbr-figure" style="width: 100%;">
                                                                                                        <iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4">
                                                                                        <div class="videoo">
                                                                                            <div class="miabartvideo_mba__row">
                                                                                                <div class="videoWrapper_mba">
                                                                                                    <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                                                    <div class="mbr-figure" style="width: 100%;">
                                                                                                        <iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="col-md-4">
                                                                                        <div class="videoo">
                                                                                            <div class="miabartvideo_mba__row">
                                                                                                <div class="videoWrapper_mba">
                                                                                                    <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                                                    <div class="mbr-figure" style="width: 100%;">
                                                                                                        <iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>


                                                                                <div class="media mg-t-15 profile-footer">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="demo-avatar-group">
                                                                                            <div class="demo-avatar-group main-avatar-list-stacked">
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/3.jpg"></div>
                                                                                                <div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/users/5.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                                <div class="main-avatar">
                                                                                                    +2280
                                                                                                </div>
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
                                                                                        <div class="dropdown show">
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-heart mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-comment mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-share-square"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end Post vidéo Html -->

                                                                        <!-- Post photos -->
                                                                        <div class="card mg-b-20 border">
                                                                            <div class="card-header">
                                                                                <div class="media">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">AGBODJAN TONOU</h6>
                                                                                        <span class="text-primary ml-2">juste maintenant
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown">
                                                                                            <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style="">
                                                                                                <a class="dropdown-item" href="#">Modifier la publication
                                                                                                </a>
                                                                                                <a class="dropdown-item" href="#">Supprimer le message</a>
                                                                                                <a class="dropdown-item" href="#">Paramètres personnels</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <p class="post_text mg-t-0">
                                                                                    Je suis le studio pour un
                                                                                    <span>shoot photo</span>
                                                                                    avec le photo Kévin.
                                                                                    <a href="">#shoot photo</a>
                                                                                    <a href="">#book photo</a>
                                                                                    <a href="">#mes photos par ici</a>
                                                                                </p>

                                                                                <div class="row row-sm">

                                                                                    <div class="col">
                                                                                        <div class="grid-item detail-photo-grid">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/cheerful-girl.jpg">
                                                                                                <img src="../assets/img/artiste/cheerful-girl.jpg"></a>
                                                                                        </div>
                                                                                    </div>

                                                                                    <div class="containergalbook detail-photo-grid">
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="./assets/img/artiste/cheerful-girl.jpg">
                                                                                                <img src="../assets/img/artiste/cheerful-girl.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="./assets/img/artiste/black-business.jpg">
                                                                                                <img src="../assets/img/artiste/black-business.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="./assets/img/artiste/blissful-young.jpg">
                                                                                                <img src="../assets/img/artiste/blissful-young.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/black-woman.jpg">
                                                                                                <img src="../assets/img/artiste/black-woman.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/home01.jpg">
                                                                                                <img src="../assets/img/artiste/home01.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/slim-girl.jpg">
                                                                                                <img src="../assets/img/artiste/slim-girl.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/posing-grey-wall.jpg">
                                                                                                <img src="../assets/img/artiste/posing-grey-wall.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/artiste3-1.jpg">
                                                                                                <img src="../assets/img/artiste/artiste3-1.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/Gc1cmo7fy4IkVLgZBrsEc5.jpg">
                                                                                                <img src="../assets/img/artiste/Gc1cmo7fy4IkVLgZBrsEc5.jpg"></a>
                                                                                        </div>
                                                                                        <div class="grid-item">
                                                                                            <a data-fancybox="gallery" href="../assets/img/artiste/Copie de mobola-odukoya.jpg">
                                                                                                <img src="../assets/img/artiste/Copie de mobola-odukoya.jpg"></a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>

                                                                                <div class="media mg-t-15 profile-footer">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="demo-avatar-group">
                                                                                            <div class="demo-avatar-group main-avatar-list-stacked">
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/3.jpg"></div>
                                                                                                <div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/users/5.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                                <div class="main-avatar">
                                                                                                    +2280
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10 h6m">16 personnes aiment vos photos
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show">
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-heart mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-comment mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-share-square"></i>
                                                                                            </a>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- end Post photo -->


                                                                        <!-- Post container -->
                                                                        <div class="card mg-b-20 border">
                                                                            <div class="card-header">
                                                                                <div class="media">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">MIABART AFRIK</h6>
                                                                                        <span class="text-primary ml-2">26 Mai 2021, 10:14
                                                                                        </span>
                                                                                    </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown">
                                                                                            <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false">
                                                                                                <i class="fas fa-ellipsis-v"></i>
                                                                                            </a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style="">
                                                                                                <a class="dropdown-item" href="#">Modifier la publication
                                                                                                </a>
                                                                                                <a class="dropdown-item" href="#">Supprimer le message</a>
                                                                                                <a class="dropdown-item" href="#">Paramètres personnels</a>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <p class="post_text mg-t-0">
                                                                                    Parcequ'un artiste ne meurt jamais,
                                                                                    <span>l'équipe Miabart Afrik</span>
                                                                                    vous fais redécouvrir le son de réveil de l'artiste disparu mais vivant par la voix d'ange
                                                                                    <span>
                                                                                        AWOO MAWUGNE</span>
                                                                                    <a href="">#Omar B</a>
                                                                                    <a href="">#Artite togolais</a>
                                                                                </p>
                                                                                <div class="row row-sm">

                                                                                    <div class="post_audio">
                                                                                        <audio class="audio_player" controls="" loop="" autoplay="">
                                                                                            <source src="../assets/audio/OMAR B - AWOO MAWUGNE (Audio Officiel).m4a" type="audio/ogg">
                                                                                            Your browser dose not Support the audio Tag
                                                                                        </audio>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="media mg-t-15 profile-footer">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="demo-avatar-group">
                                                                                            <div class="demo-avatar-group main-avatar-list-stacked">
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/3.jpg"></div>
                                                                                                <div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/users/5.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                                <div class="main-avatar">
                                                                                                    +8540
                                                                                                </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10 h6m">2 652 125 personnes aiment cette musique.
                                                                                        </h6>
                                                                                    </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show">
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-heart mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-comment mr-3"></i>
                                                                                            </a>
                                                                                            <a class="new" href="JavaScript:void(0);">
                                                                                                <i class="far fa-share-square"></i>
                                                                                            </a>
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
                                                <!-- END BODY ACTU -->

                                                <!-- SIDE BAR -->
                                                <div class="col-xl-4 col-lg-12 d-none d-xl-block custom-leftnav">
                                                    <div class="main-content-left-components">


                                                        <div class="right_sidebar">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernière video publier</h4>
                                                            </div>
                                                            <div class="sidebar_body">
                                                                <div class="container">
                                                                    <div class="miabartvideo_mba__row">
                                                                        <div class="videoWrapper_mba">
                                                                            <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                            <div class="mbr-figure" style="width: 100%;">
                                                                                <iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>

                                                            </div>

                                                        </div>

                                                        <!-- Dernier audio publier -->
                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernier audio publier</h4>
                                                            </div>
                                                            <div class="sidebar_body"></div>
                                                        </div>
                                                        <!-- end Dernier audio publier -->

                                                        <!-- info -->
                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernière photo publiée</h4>
                                                            </div>
                                                            <div class="sidebar_body"></div>
                                                        </div>
                                                        <!-- end info -->

                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernier audio publié</h4>
                                                            </div>
                                                            <div class="sidebar_body"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END SIDE BAR -->

                                            </div>
                                        </section>
                                        <!-- ACTIVITY BOOK CARD END -->

                                        <!-- BIOGRAPHIE BOOK CARD START -->
                                        <section id="biograph_book">
                                            <div class="row">
                                                <div class="col-md-7">

                                                    <p>
                                                        <em class="em_color">Un rêve en le poursuivant devient toujours réalité.</em>
                                                        Je suis AGBODJAN TONOU, togolaise d'origine, esthéticienne et actrice professionnelle. Ma passion pour le cinéma s'est concréiser en complément avec mon métier d'esthétique. J'ai a mon actif des expériences cinématographie riche .</p>

                                                </div>

                                                <div class="col-md-5">
                                                    <div class="container">
                                                        <div
                                                            class="miabartvideo_mba">
                                                            <!-- video -->
                                                            <div class="miabartvideo_mba__row">
                                                                <div class="videoWrapper_mba">
                                                                    <div class="video-preview-image_mba" style="background-image: url(../assets/img/artiste/blissful-young.jpg)"></div>
                                                                    <iframe src="https://www.youtube.com/embed/TH5tU3S2ScE?rel=0&amp;showinfo=0" allowfullscreen="" width="853" height="480" frameborder="0"></iframe>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- BIOGRAPHIE BOOK CARD END -->

                                        <!-- INFOS BOOK START -->
                                        <section id="infos_book">

                                            <div class="accordeon_infos_book">
                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn" value="one" checked="checked"/>
                                                    <label for="btn" class="entypo_infos_book">Expériences artistiques</label>

                                                    <article class="article_infos_book" id="content-1">
                                                        <div
                                                            class="container">

                                                            <!-- EXPERIENCE CINEMA & FICTION -->
                                                            <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                    <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel_mba_collapse-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#cinemaFiction" aria-expanded="true" aria-controls="cinemaFiction">
                                                                                CINEMA & FICTION
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="cinemaFiction" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                        <div
                                                                            class="panel_mba_collapse-body">

                                                                            <!-- experience start -->
                                                                            <div class="row experienceMba">
                                                                                <div
                                                                                    class="col-md-7">

                                                                                    <!-- experience -->
                                                                                    <div
                                                                                        class="riser">
                                                                                        <!-- bold -->

                                                                                        <small class="all_services_mba_small">Court-métrage</small>
                                                                                        <h3 class="titre_expe">Titre de l'expérience</h3>
                                                                                        <h4 class="start_date">
                                                                                            <span id="start_date">11.05.2020</span>
                                                                                            <span class="end_date" id="end_date">A présent</span>
                                                                                        </h4>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <span class="select_titre">Auteur:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Mise en scène:</span>
                                                                                                Nom du scénarist
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Lieu de création:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Autres lieux:</span>
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
                                                                                        <ul class="card_affiches_infos_book-list">
                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- experience end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end EXPERIENCE CINEMA & FICTION -->


                                                            <!-- EXPERIENCE MODE & BEAUTE -->
                                                            <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                    <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel_mba_collapse-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#modeBeaute" aria-expanded="true" aria-controls="modeBeaute">
                                                                                MODE & BEAUTE
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="modeBeaute" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                        <div
                                                                            class="panel_mba_collapse-body">
                                                                            <!-- experience start -->
                                                                            <div class="row experienceMba">
                                                                                <div
                                                                                    class="col-md-7">

                                                                                    <!-- experience -->
                                                                                    <div
                                                                                        class="riser">
                                                                                        <!-- bold -->

                                                                                        <small class="all_services_mba_small">Shoot photo</small>
                                                                                        <h3 class="titre_expe">Titre de l'expérience</h3>
                                                                                        <h4 class="start_date">
                                                                                            <span id="start_date">11.05.2020</span>
                                                                                            <span class="end_date" id="end_date">A présent</span>
                                                                                        </h4>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <span class="select_titre">Auteur:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Mise en scène:</span>
                                                                                                Nom du scénarist
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Lieu de création:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Autres lieux:</span>
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
                                                                                        <ul class="card_affiches_infos_book-list">
                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- experience end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end EXPERIENCE MODE & BEAUTE -->

                                                            <!-- EXPERIENCE MUSIQUE & DANSE -->
                                                            <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                    <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel_mba_collapse-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#musikDanse" aria-expanded="true" aria-controls="musikDanse">
                                                                                MUSIQUE & DANSE
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="musikDanse" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                        <div
                                                                            class="panel_mba_collapse-body">

                                                                            <!-- experience start -->
                                                                            <div class="row experienceMba">
                                                                                <div
                                                                                    class="col-md-7">

                                                                                    <!-- experience -->
                                                                                    <div
                                                                                        class="riser">
                                                                                        <!-- bold -->

                                                                                        <small class="all_services_mba_small">Court-métrage</small>
                                                                                        <h3 class="titre_expe">Titre de l'expérience</h3>
                                                                                        <h4 class="start_date">
                                                                                            <span id="start_date">11.05.2020</span>
                                                                                            <span class="end_date" id="end_date">A présent</span>
                                                                                        </h4>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <span class="select_titre">Auteur:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Mise en scène:</span>
                                                                                                Nom du scénarist
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Lieu de création:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Autres lieux:</span>
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
                                                                                        <ul class="card_affiches_infos_book-list">
                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- experience end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end EXPERIENCE MUSIQUE & DANSE -->

                                                            <!-- EXPERIENCE RADIO & TV -->
                                                            <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                    <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel_mba_collapse-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#radioTv" aria-expanded="true" aria-controls="radioTv">
                                                                                RADIO & TV
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="radioTv" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                        <div
                                                                            class="panel_mba_collapse-body">
                                                                            <!-- experience start -->
                                                                            <div class="row experienceMba">
                                                                                <div
                                                                                    class="col-md-7">

                                                                                    <!-- experience -->
                                                                                    <div
                                                                                        class="riser">
                                                                                        <!-- bold -->

                                                                                        <small class="all_services_mba_small">Shoot photo</small>
                                                                                        <h3 class="titre_expe">Titre de l'expérience</h3>
                                                                                        <h4 class="start_date">
                                                                                            <span id="start_date">11.05.2020</span>
                                                                                            <span class="end_date" id="end_date">A présent</span>
                                                                                        </h4>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <span class="select_titre">Auteur:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Mise en scène:</span>
                                                                                                Nom du scénarist
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Lieu de création:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Autres lieux:</span>
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
                                                                                        <ul class="card_affiches_infos_book-list">
                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- experience end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end EXPERIENCE RADIO & TV -->

                                                            <!-- EXPERIENCE THEATRE & HUMOUR -->
                                                            <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                                <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                    <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                        <h4 class="panel_mba_collapse-title">
                                                                            <a role="button" data-toggle="collapse" data-parent="#accordion" href="#theatreHumour" aria-expanded="true" aria-controls="theatreHumour">
                                                                                THEATRE & HUMOUR
                                                                            </a>
                                                                        </h4>
                                                                    </div>
                                                                    <div id="theatreHumour" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                        <div
                                                                            class="panel_mba_collapse-body">
                                                                            <!-- experience start -->
                                                                            <div class="row experienceMba">
                                                                                <div
                                                                                    class="col-md-7">

                                                                                    <!-- experience -->
                                                                                    <div
                                                                                        class="riser">
                                                                                        <!-- bold -->

                                                                                        <small class="all_services_mba_small">Shoot photo</small>
                                                                                        <h3 class="titre_expe">Titre de l'expérience</h3>
                                                                                        <h4 class="start_date">
                                                                                            <span id="start_date">11.05.2020</span>
                                                                                            <span class="end_date" id="end_date">A présent</span>
                                                                                        </h4>
                                                                                        <ul>
                                                                                            <li>
                                                                                                <span class="select_titre">Auteur:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Mise en scène:</span>
                                                                                                Nom du scénarist
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Lieu de création:</span>
                                                                                                Nom du scénariste
                                                                                            </li>
                                                                                            <li>
                                                                                                <span class="select_titre">Autres lieux:</span>
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
                                                                                        <ul class="card_affiches_infos_book-list">
                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>

                                                                                            <li>
                                                                                                <a href="">
                                                                                                    <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                                </a>
                                                                                            </li>
                                                                                        </ul>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                            <!-- experience end -->
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- end EXPERIENCE THEATRE & HUMOUR -->

                                                        </div>
                                                    </article>
                                                </div>


                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn" value="three"/>
                                                    <label for="btn" class="entypo_infos_book">Formations & Ecoles</label>
                                                    <article
                                                        class="article_infos_book" id="content-3">

                                                        <!-- FORMATIONS -->
                                                        <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                    <h4 class="panel_mba_collapse-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#Formations" aria-expanded="true" aria-controls="Formations">
                                                                            FORMATIONS
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="Formations" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                    <div class="panel_mba_collapse-body">

                                                                        <!-- FORMATION start -->

                                                                        <!-- formation -->
                                                                            <div class="row experienceMba"> <div class="col-md-7">


                                                                                <div
                                                                                    class="riser">
                                                                                    <!-- bold -->

                                                                                    <small class="all_services_mba_small">Court-métrage</small>
                                                                                    <h3 class="titre_expe">Titre de la fomation courte</h3>
                                                                                    <h4 class="start_date">
                                                                                        <span id="start_date">Année début</span>
                                                                                        <span class="end_date" id="end_date">A Année fin</span>
                                                                                    </h4>
                                                                                    <p>
                                                                                        Description de la formation de courte durée. Bref on veut tout apprendre ta formation. Soyez plus explicite.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">

                                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                                    <ul class="card_affiches_infos_book-list">
                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- formation end -->

                                                                        <!-- formation -->
                                                                        <div class="row experienceMba">
                                                                            <div class="col-md-7">


                                                                                <div
                                                                                    class="riser">
                                                                                    <!-- bold -->

                                                                                    <small class="all_services_mba_small">Court-métrage</small>
                                                                                    <h3 class="titre_expe">Titre de la fomation très longgggggggggggggggggggggggggggggggggggg</h3>
                                                                                    <h4 class="start_date">
                                                                                        <span id="start_date">Année début</span>
                                                                                        <span class="end_date" id="end_date">A Année fin</span>
                                                                                    </h4>
                                                                                    <p>
                                                                                        Description de la formation de longue durée. Bref on veut tout apprendre ta formation. Soyez plus explicite.
                                                                                    </p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">

                                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                                    <ul class="card_affiches_infos_book-list">
                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- formation end -->


                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end FORMATIONS -->


                                                        <!-- ECOLES -->
                                                        <div class="panel_mba_collapse-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                            <div class="panel_mba_collapse panel_mba_collapse-default">
                                                                <div class="panel_mba_collapse-heading" role="tab" id="headingOne">
                                                                    <h4 class="panel_mba_collapse-title">
                                                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#Ecoles" aria-expanded="true" aria-controls="Ecoles">
                                                                            ECOLES
                                                                        </a>
                                                                    </h4>
                                                                </div>
                                                                <div id="Ecoles" class="panel_mba_collapse-collapse collapse1 in" role="tabpanel" aria-labelledby="headingOne">
                                                                    <div
                                                                        class="panel_mba_collapse-body">

                                                                        <!-- école start -->
                                                                        <div class="row experienceMba">
                                                                            <div
                                                                                class="col-md-7">

                                                                                <!-- experience -->
                                                                                <div
                                                                                    class="riser">
                                                                                    <!-- bold -->

                                                                                    <small class="all_services_mba_small">Ecole</small>
                                                                                    <h3 class="titre_expe">BAC 2</h3>
                                                                                    <h4 class="start_date">
                                                                                        <span id="start_date">Année deb.</span>
                                                                                        <span class="end_date" id="end_date">A Année fin</span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">

                                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                                    <ul class="card_affiches_infos_book-list">
                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="" alt=""/>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="" alt=""/>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- école end -->

                                                                        <!-- école start -->
                                                                        <div class="row experienceMba">
                                                                            <div
                                                                                class="col-md-7">

                                                                                <!-- experience -->
                                                                                <div
                                                                                    class="riser">
                                                                                    <!-- bold -->

                                                                                    <small class="all_services_mba_small">Ecole d'art</small>
                                                                                    <h3 class="titre_expe">ART CONTEMPORAIN</h3>
                                                                                    <h4 class="start_date">
                                                                                        <span id="start_date">Année deb.</span>
                                                                                        <span class="end_date" id="end_date">A Année fin</span>
                                                                                    </h4>
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-5">

                                                                                <div class="card_affiches_infos_book u-clearfix">
                                                                                    <ul class="card_affiches_infos_book-list">
                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>

                                                                                        <li>
                                                                                            <a href="">
                                                                                                <img src="./assets/images/films/Waka_Affiche.jpg" alt=""/>
                                                                                            </a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                        <!-- école end -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- end ECOLES -->


                                                    </article>
                                                </div>

                                                <div class="item_infos_book">
                                                    <input class="input_accordeon" type="radio" name="btn" value="four"/>
                                                    <label for="btn" class="entypo_infos_book">
                                                        Caractéristiques & Compétence
                                                    </label>
                                                    <article class="article_infos_book" id="content-4">
                                                        <div class="col-md-12 mba-artist-details">

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="profile-info--section">Profil</h3>
                                                                    <ul class="mx-auto mx-md-0">

                                                                        <li>
                                                                            <span class="title01">Catégorie professionnelle</span>
                                                                            <span class="value">Professionnel(lle)
                                                                            </span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Nom & Prenom</span>
                                                                            <span class="value">AVORGNO YAWO</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Nom d'artiste</span>
                                                                            <span class="value">GUYZOO</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Métiers</span>
                                                                            <span class="value">Artiste</span>
                                                                            <span class="value">Journaliste</span>
                                                                            <span class="value">Danseur</span>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-12">
                                                                    <h3 class="profile-info--section">Apparence</h3>
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
                                                                            <span class="title01">Tour de poitrine</span>
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
                                                                            <span class="title01">Couleur des cheveux</span>
                                                                            <span class="value">Châtain clair</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Type de cheveux</span>
                                                                            <span class="value">Raides</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Longueur des cheveux</span>
                                                                            <span class="value">Très long</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">Couleur des yeux</span>
                                                                            <span class="value">Noisette</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>

                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <h3 class="profile-info--section">Musique & danse</h3>
                                                                    <ul class="mx-auto mx-md-0">
                                                                        <li>
                                                                            <span class="title01">
                                                                                Instruments maitrisés
                                                                            </span>
                                                                            <span class="value">Tessiture</span>
                                                                        </li>
                                                                        <li>
                                                                            <span class="title01">
                                                                                Guitare
                                                                            </span>
                                                                            <span class="value">Baryton
                                                                            </span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <h3 class="profile-info--section">Langues</h3>
                                                                    <ul class="mx-auto mx-md-0">
                                                                        <li>
                                                                            <span class="title01">Français</span>
                                                                            <span class="value">Courant</span>
                                                                            <span class="value">Bien parlé</span>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </article>
                                                </div>
                                            </div>
                                        </section>
                                        <!-- INFOS BOOK END -->

                                        <!-- PHOTOS BOOK CARD START -->
                                        <section id="media_book">
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

                                        <!-- PRIX BOOK CARD START -->
                                        <section id="prix_book">
                                            <p>Prix & Nominations</p>
                                        </section>
                                        <!-- PRIX BOOK CARD END -->

                                        <!-- CONTACT BOOK CARD START -->
                                        <section id="contact_book">
                                            <p>Message form</p>
                                        </section>
                                        <!-- CONTACT BOOK CARD END -->

                                    </div>
                                    <!-- /content -->
                                </div>
                                <!-- /tabs_miabartafrik -->
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

@section('loader')
<x-loader imgLink="{{ $artist->user->library->remote }}" />
@endsection