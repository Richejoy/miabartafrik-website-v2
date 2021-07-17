<div class="mb-1 navbar navbar-expand-lg  responsive-navbar navbar-dark d-sm-none">
                        <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                            <div class="d-flex order-lg-2 ml-auto">

                                <div class="dropdown d-flex">
                                    <a class="nav-link icon full-screen-link nav-link-bg">
                                        <i class="ti-arrows-corner" id="fullscreen-button"></i>
                                    </a>
                                </div><!-- FULL-SCREEN -->
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon" data-toggle="dropdown">
                                        <i class="ti-bell"></i>
                                        <span class="nav-unread bg-warning-1 pulse"></span>
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
                                                <div class="small">5  heures plus tard</div>
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
                                        <a href="#" class="dropdown-item text-center">Afficher toutes les notifications </a>
                                    </div>
                                </div><!-- NOTIFICATIONS -->
                                <div class="dropdown d-flex">
                                    <a class="nav-link icon text-center" data-toggle="dropdown">
                                        <i class="ti-email floating"></i>
                                        <span class=" nav-unread badge badge-successBookcast badge-pill">6</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="dropdown-item p-4 bg-image-3 text-center">
                                            <h4 class="user-semi-title mb-0 font-weight-bold">4 Nouveaux <span class="font-weight-normal">Messages</span></h4>

                                        </div>
                                        <a href="#" class="dropdown-item d-flex mt-2 pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="./assets/images/faces/male/41.jpg">
                                                <span class="avatar-status bg-green"></span>
                                            </div>
                                            <div>
                                                <strong>ArtisteX</strong>
                                                <p class="mb-0 fs-13">Bjr! Je suis nouveau ici. J'aim...</p>
                                                <div class="small">3 heures plus tard</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="./assets/images/faces/female/1.jpg">
                                                <span class="avatar-status bg-red"></span>
                                            </div>
                                            <div>
                                                <strong>BookCast</strong>
                                                <p class="mb-0 fs-13 ">Vous êtes ajouter à un Cast-In</p>
                                                <div class="small">5  heures plus tard</div>
                                            </div>
                                        </a>
                                        <a href="#" class="dropdown-item d-flex pb-3">
                                            <div class="avatar avatar-md brround mr-3 d-block cover-image" data-image-src="./assets/images/faces/female/18.jpg">
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
                                <div class="dropdown text-center selector profile-1 mt-4">
                                    <a href="#" data-toggle="dropdown" class="nav-link leading-none d-flex">
                                        <span><img src="{{ Auth::user()->image->link }}" alt="{{ Auth::user()->username }}" class="avatar brround cover-image mb-1 ml-0"></span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                        <div class="text-center bg-image p-4">
                                            <a href="#" class="dropdown-item text-center font-weight-sembold user pt-0" data-toggle="dropdown">Nom Artiste</a>
                                            <span class="text-center user-semi-title ">Domaine Artistique</span>
                                        </div>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-account-outline"></i> Profile
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon  mdi mdi-settings"></i> Paramètres
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <span class="float-right"><span class="badge badge-danger">6</span></span>
                                            <i class="dropdown-icon mdi  mdi-message-outline"></i>boîte de réception 
                                        </a>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-comment-check-outline"></i> Message
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">
                                            <i class="dropdown-icon mdi mdi-compass-outline"></i> Aides-faqs?
                                        </a>
                                        <a class="dropdown-item" href="connexion.html">
                                            <i class="dropdown-icon mdi  mdi-logout-variant"></i> Inscription/Connexion
                                        </a>
                                    </div>
                                </div><!-- PROFILE -->
                            </div>
                        </div>
                    </div>