<div class="header header-fixed">
    <div class="container">
        <div class="d-flex">
            <a id="horizontal-navtoggle" class="animated-arrow hor-toggle"><span></span></a>
            <a class="header-brand" href="{{ route('bookcast.index') }}">
                <img src="{{ asset('public/assets/images/brand/logo.png') }}" class="header-brand-img desktop-logo" alt="BookCast logo">
                <img src="{{ asset('public/assets/images/brand/favicon2.png') }}" class="header-brand-img mobile-view-logo" alt="BookCast logo">
            </a>
            <!-- LOGO -->

            <div class="d-flex order-lg-2 ml-auto header-right-icons header-search-icon">
                <a href="#" data-toggle="search" class="nav-link nav-link-lg d-md-none navsearch"><i class="ion ion-search"></i></a>
                <div class="">
                    <form class="form-inline">
                        <div class="search-element">
                            <input type="search" class="form-control header-search" placeholder="Recherche sur BookCast…" aria-label="Search" tabindex="1">
                            <button class="btn btn-primary-color search" type="submit"><i class="ti-search"></i></button>
                        </div>
                    </form>
                </div><!-- SEARCH -->

                <div class="dropdown d-sm-flex d-none">
                    <a class="nav-link icon full-screen-link nav-link-bg">
                        <i class="ti-arrows-corner" id="fullscreen-button"></i>
                    </a>
                </div><!-- FULL-SCREEN -->

                <div class="dropdown d-sm-flex d-none notifications">
                    <a class="nav-link icon" data-toggle="dropdown">
                        <i class="ti-bell"></i>
                        <span class=" nav-unread badge badge-warning badge-pill pulse">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right  dropdown-menu-arrow">
                        <div class="dropdown-item p-4 bg-image-2 text-center">
                            <h4 class="user-semi-title mb-0 font-weight-bold">3 Nouveaux <span class="font-weight-normal">Notifications</span></h4>
                        </div>
                        <a href="#" class="dropdown-item mt-2 d-flex pb-3">
                            <div class="notifyimg bg-success">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div>
                                <strong>Quelqu'un aime votre book.</strong>
                                <div class="small">3 heures plus tard</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-warning">
                                <i class="fa fa-commenting-o"></i>
                            </div>
                            <div>
                                <strong> 3 Nouveaux messages</strong>
                                <div class="small">5 heures plus tard</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="notifyimg bg-danger">
                                <i class="fa fa-cogs"></i>
                            </div>
                            <div>
                                <strong> Complètez votre profil.</strong>
                                <div class="small">45 minutes plus tard</div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">Afficher toutes les notifications</a>
                    </div>
                </div><!-- NOTIFICATIONS -->
                <div class="dropdown d-sm-flex d-none message">
                    <a class="nav-link icon text-center" data-toggle="dropdown">
                        <i class="ti-email floating"></i>
                        <span class=" nav-unread badge badge-danger badge-pill pulse">6</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="dropdown-item p-4 bg-image-3 text-center">
                            <h4 class="user-semi-title mb-0 font-weight-bold">4 Nouveaux <span class="font-weight-normal">Messages</span></h4>
                        </div>
                        <a href="#" class="dropdown-item d-flex mt-2 pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{ asset('public/assets/images/faces/female/1.jpg') }}">
                                <span class="avatar-status bg-green"></span>
                            </div>
                            <div>
                                <strong>ArtisteX</strong>
                                <p class="mb-0 fs-13">Bjr! Je suis nouveau ici. J'aim...</p>
                                <div class="small">3 heures plus tard</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{ asset('public/assets/images/faces/female/1.jpg') }}">
                                <span class="avatar-status bg-red"></span>
                            </div>
                            <div>
                                <strong>BookCast</strong>
                                <p class="mb-0 fs-13 ">Vous êtes ajouter à un Cast-In</p>
                                <div class="small">5 heures plus tard</div>
                            </div>
                        </a>
                        <a href="#" class="dropdown-item d-flex pb-3">
                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="{{ asset('public/assets/images/faces/female/1.jpg') }}">
                                <span class="avatar-status bg-yellow"></span>
                            </div>
                            <div>
                                <strong>BookCast</strong>
                                <p class="mb-0 fs-13 ">Un nouveau casting dans votre domaine</p>
                                <div class="small">45 minutes plus tard</div>
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item text-center">Voir tous les messages </a>
                    </div>
                </div><!-- MESSAGE-BOX -->
                <div class="dropdown text-center selector profile-1 d-sm-flex d-none">
                    <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                        <span><img src="{{ asset('public/assets/images/faces/female/1.jpg') }}" alt="profile-user" class="avatar brround cover-image mb-1 ml-0"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                        <div class="text-center bg-image p-4">
                            <a href="#" class="dropdown-item text-center font-weight-sembold user pt-0"
                                data-toggle="dropdown">Nom Artiste</a>
                            <span class="text-center user-semi-title ">Domaine Artistique</span>
                        </div>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                        </a>
                        <a class="dropdown-item" href="#">
                            <i class="dropdown-icon  mdi mdi-settings"></i> Paramètres
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="float-right"><span class="badge badge-warning">6</span></span>
                            <i class="dropdown-icon mdi mdi-message-outline"></i>Notifications
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="float-right"><span class="badge badge-danger">6</span></span>
                            <i class="dropdown-icon mdi mdi-message-outline"></i>Messages
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('page.faq') }}">
                            <i class="dropdown-icon mdi mdi-compass-outline"></i> Aides-faqs ?
                        </a>
                        <a class="dropdown-item" href="{{ route('page.logout') }}">
                            <i class="dropdown-icon mdi mdi-logout-variant"></i> Déconnexion
                        </a>
                    </div>
                </div><!-- PROFILE -->

                <button class="navbar-toggler navresponsive-toggler d-sm-none" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent-4" aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon fe fe-more-vertical text-white"></span>
                </button>
                <div class="dropdown d-md-flex header-settings">
                    <a href="#" class="nav-link icon " data-toggle="sidebar-right" data-target=".sidebar-right">
                        <i class="fa fa-address-book-o" data-toggle="tooltip" title="" data-original-title="Mes contacts"></i>
                    </a>
                </div><!-- SIDE-MENU -->
            </div>
            <a href="#" class="header-toggler d-lg-none ml-lg-0" data-toggle="collapse"
                data-target="#headerMenuCollapse">
                <span class="header-toggler-icon"></span>
            </a>
        </div>
    </div>
</div>