@extends('layouts.bookcast', ['title' => $photographer->getName()])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container_profile_card"> 

            <!-- ROW-1 OPEN -->  

        <div id="profile_miabartafrik_wrap">
   
            <div class="profile_miabartafrik_image">   

                <div id="landing-text">
                    <div id="landing-text-inner"> 
                      <a href="" class="btntelecharger" id="view-work" data-target="#affiche_modal" data-toggle="modal">
                        Adresse map ici
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
                               <div class="col-lg-6">

                                    <div class="main-contact-info-header">
                                        <div class="media">
                                            <div class="main-img-user">
                                                <img alt="avatar" src="../assets/img/artiste/young-handsome-african.jpg"> 
                                                <a href="" style="display: none;"><i class="fe fe-camera"></i></a>
                                            </div>

                                            <div class="media-body">
                                            <div class="main_book_name">
                                                <h6> <a href="book_view.html">VisuoShops name</a> 
                                                    <i class="fe fe-check-circle text-success mr-1 text_verified" data-toggle="tooltip" title="" data-original-title="Verified"></i>
                                                </h6>
                                                <div class="all_services_mba"> 
                                                    <small class="all_services_mba_small">P.Portrait</small>
                                                    <small class="all_services_mba_small">P.Paysage</small>
                                                    <small class="all_services_mba_small">P.Mode</small>
                                                </div>  
                                            </div>
                                             
                                            <nav class="contact-info">
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i> </a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Appeler"><i class="fe fe-phone"></i></a>  
                                                
                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a> 

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Inviter"><i class="fe fe-user-plus"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></a>

                                                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Bloquer"><i class="fe fe-slash"></i></a>
                                            </nav>
                                        </div>
                                             
                                        </div>
                                        <div class="main-contact-action btn-list pt-3 pr-3">
                                            <a href="#" class="btn ripple btn-primary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="" data-original-title="Editer Profile"><i class="fe fe-edit"></i></a>
                                            <a href="#" class="btn ripple btn-secondary text-white btn-icon" data-placement="top" data-toggle="tooltip" title="" data-original-title="Supprimer Profile"><i class="fe fe-trash-2"></i></a>
                                        </div>
                                    </div>                              

                               </div>

                               <div class="col-lg-3 eml-mob">
                                <div class="infos_plus_bookcast">
                                    <ul>
                                      
                                      <li> 
                                        <div class="desc1">
                                          <h4>Inscrit(e) depuis</h4>
                                          <h3>17/01/2021</h3>
                                        </div>
                                      </li>
                                      <li> 
                                        <div class="desc1">
                                          <h4>Dernière connexion</h4>
                                          <h3>il y a 3 heures</h3>
                                        </div>
                                      </li> 
                                    </ul>
 
                                  </div>   
                               </div>

                               <div class="col-lg-3 eml-mob">
                                <div class="infos_plus_bookcast">
                                    <ul> 
                                      <li> 
                                        <div class="desc1">
                                          <h4>Contact</h4>
                                          <h3> <span>+228</span> <span>90 34 05 34</span></h3>
                                        </div>
                                      </li>
                                      <li> 
                                        <div class="desc1">
                                          <h4>N°.Enrégistrement:</h4>
                                          <h3>TG-LFW-01-2021-B13-00553</h3>
                                        </div>
                                      </li>  
                                      <li> 
                                        <div class="desc1">
                                          <h4>Date de création de société</h4>
                                          <h3>21/01/2021</h3>
                                        </div>
                                      </li>
                                    </ul>
 
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
                                            <li><a href="#actualite_fiche_reseau" class="icon pe-7s-news-paper"><span>Actualités</span></a></li>
                                            <li><a href="#presentation_fiche_reseau" class="icon pe-7s-id"><span>Présentation</span></a></li>
                                            <li><a href="#media_fiche_reseau" class="icon si si-control-play"><span>Médias</span></a></li>
                                            <li><a href="#artistes_fiche_reseau" class="icon si si-people"><span>Artistes</span></a></li>
                                            <li><a href="#grilletarifaire_fiche_reseau" class="icon pe-7s-cash"><span>Grille tarifaire</span></a></li>
                                            <li><a href="#contact_fiche_reseau" class="icon si si-envelope-letter"><span>Contact</span></a></li>
                                        </ul>
                                    </nav>
                                    <div class="content-wrap">

                                        <!-- ACTIVITY BOOK CARD START -->

                                        <section id="actualite_fiche_reseau">
                                            <div class="row"> 
                                                <!-- BODY ACTU -->
                                                <div class="col-xl-8 col-lg-12"> 
                                                    <div class="post_news">
                                                        <div class="main-content-body main-content-body-profile">
                                                            <div class="main-profile-body p-0">
                                                                <div class="row row-sm">
                                                                    <div class="col-12">

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
                                                                                    <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fe fe-chevron-down"></i></a>

                                                                                    <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                                                                                    </span> 
                                                                                </div> 
                                                                            </div>

                                                                            <div class="post_input_container">
                                                                                <textarea rows="3" placeholder="A quoi penses-tu, AGBODJAN-TONOU ?"></textarea>

                                                                                <div class="page-header">
                                                                                    <div> 
                                                                                        <ul class="icons-list">
                                                                                            <li class="icons-list-item icons_recharge"><i class="si si-emotsmile" data-toggle="tooltip" title="" data-original-title="Ajouter emotsmile"></i></li>

                                                                                            <li class="icons-list-item icons_recharge"><i class="si si-camera" data-toggle="tooltip" title="" data-original-title="Ajouter une photo"></i></li>

                                                                                            <li class="icons-list-item icons_recharge"><i class="si si-social-youtube" data-toggle="tooltip" title="" data-original-title="Ajouter une vidéo"></i></li>

                                                                                            <li class="icons-list-item icons_recharge"><i class="si si-music-tone-alt" data-toggle="tooltip" title="" data-original-title="Ajouter un audio"></i></li>


                                                                                        </ul>   
                                                                                    </div> 

                                                                                    <div class="d-flex">
                                                                                        <div class="justify-content-center"> 
                                                                                            <button type="submit" class="btn btn-secondary btn-icon-text">
                                                                                              <i class="fe fe-send mr-2"></i> Publier
                                                                                            </button>
                                                                                        </div>
                                                                                    </div>
                                                                                </div> 
                                                                            </div> 
                                                                        </div> 
                                                                        <!-- end Write post container -->

                                                                        <!-- Post Video Youtube -->
                                                                        <div class="card mg-b-20 border">
                                                                            <div class="card-header">
                                                                                <div class="media">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">Avorgno Yawo Guy</h6><span class="text-primary ml-2">juste maintenant </span> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body"> 
                                                                                <p class="post_text mg-t-0">
                                                                                    Un exemple de l'affichage de video <span>Youtube</span> mise en ligne via un <a href="">#URL</a>.
                                                                                </p>
                                                                                <div class="row row-sm">
                                                                                    <div class="container">
                                                                                        <div class="miabartvideo_mba"> 
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
                                                                                <div class="media mg-t-15 profile-footer">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="demo-avatar-group">
                                                                                            <div class="demo-avatar-group main-avatar-list-stacked">
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/12.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/3.jpg"></div>
                                                                                                <div class="main-img-user online"><img alt="" class="rounded-circle" src="../assets/img/users/5.jpg"></div>
                                                                                                <div class="main-img-user"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                                <div class="main-avatar"> +2280 </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10">16 personnes aiment votre vidéo  </h6> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>                          
                                                                        <!-- end Post vidéo Youtube -->

                                                                        <!-- Post Video Html -->
                                                                        <div class="card mg-b-20 border">
                                                                            <div class="card-header">
                                                                                <div class="media">
                                                                                    <div class="media-user mr-2">
                                                                                        <div class="main-img-user avatar-md"><img alt="" class="rounded-circle" src="../assets/img/users/6.jpg"></div>
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">Avorgno Yawo Guy</h6><span class="text-primary ml-2">juste maintenant </span> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body"> 
                                                                                <p class="post_text mg-t-0">
                                                                                    Ceci est un exemple de video <span>HTML</span> uloader depuis le bureau ou un mobile.
                                                                                </p>
                 
                                                                                    <div class="container">
                                                                                        <div class="miabartvideo_mba__row">
                                                                                            <div class="videoWrapper_mba">
                                                                                                <div class="video-preview-image_mba" style="background-image:url(../assets/img/artiste/young-handsome-african.jpg)"></div>
                                                                                                <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe></div>
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
                                                                                                <div class="main-avatar"> +2280 </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10">16 personnes aiment votre vidéo  </h6> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
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
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">AGBODJAN TONOU</h6><span class="text-primary ml-2">juste maintenant </span> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body"> 
                                                                                <p class="post_text mg-t-0">
                                                                                    Je suis le studio pour un <span>shoot photo</span> avec le photo Kévin. <a href="">#shoot photo</a> <a href="">#book photo</a> <a href="">#mes photos par ici</a>
                                                                                </p>
                                                                                <div class="row row-sm">
                                                                                
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
                                                                                                <div class="main-avatar"> +2280 </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10 h6m">16 personnes aiment vos photos  </h6> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
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
                                                                                        <h6 class="mb-0 mg-t-2 ml-2">MIABART AFRIK</h6><span class="text-primary ml-2">26 Mai 2021, 10:14  </span> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown"> <a class="new option-dots2" data-toggle="dropdown" href="JavaScript:void(0);" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                                                                                            <div class="dropdown-menu dropdown-menu-right shadow" style=""> <a class="dropdown-item" href="#">Modifier la publication </a> <a class="dropdown-item" href="#">Supprimer le message</a> <a class="dropdown-item" href="#">Paramètres personnels</a> </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="card-body"> 
                                                                                <p class="post_text mg-t-0">
                                                                                    Parcequ'un artiste ne meurt jamais, <span>l'équipe Miabart Afrik</span> vous fais redécouvrir le son de réveil de l'artiste disparu mais vivant par la voix d'ange  <span> AWOO MAWUGNE</span> <a href="">#Omar B</a> <a href="">#Artite togolais</a>
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
                                                                                                <div class="main-avatar"> +8540 </div>
                                                                                            </div>
                                                                                            <!-- demo-avatar-group -->
                                                                                        </div>
                                                                                        <!-- demo-avatar-group -->
                                                                                    </div>
                                                                                    <div class="media-body">
                                                                                        <h6 class="mb-0 mg-t-10 h6m">2 652 125 personnes aiment cette musique.  </h6> </div>
                                                                                    <div class="ml-auto">
                                                                                        <div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
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
                                                                            <div class="mbr-figure" style="width: 100%;"><iframe class="mbr-embedded-video" src="../assets/video/AVANCE.mp4?loop=0&amp;autoplay=1" allowfullscreen="" width="1280" height="720" frameborder="0"></iframe></div>
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
                                                            <div class="sidebar_body">
                                                                
                                                            </div>
                                                        </div>
                                                        <!-- end Dernier audio publier -->

                                                        <!-- info -->
                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernière photo publiée</h4> 
                                                            </div>
                                                            <div class="sidebar_body">


                                                         
                                                            </div>
                                                        </div>
                                                        <!-- end info -->

                                                        <div class="card custom-card">
                                                            <div class="sidebar_titre">
                                                                <h4>Dernier audio publié</h4> 
                                                            </div>
                                                            <div class="sidebar_body">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- END SIDE BAR -->

                                            </div> 
                                        </section>

                                        <!-- ACTIVITY BOOK CARD END -->

                                        <!-- INFOS BOOK CARD START -->

                                        <section id="presentation_fiche_reseau"> 
                                            <div class="row">
                                        <div class="col-md-7"> 
                                              
                                              <p><em class="em_color">Un rêve en le poursuivant devient toujours réalité.</em> Je suis AGBODJAN TONOU, togolaise d'origine, esthéticienne et actrice professionnelle. Ma passion pour le cinéma s'est concréiser en complément avec mon métier d'esthétique. J'ai a mon actif des expériences cinématographie riche .</p>
                                          
                                        </div>

                                        <div class="col-md-5"> 
                                            <div class="container">
                                                <div class="miabartvideo_mba"> 
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

                                        <!-- INFOS BOOK CARD END -->

                                        <!-- PHOTOS BOOK CARD START -->
                                        <section id="media_fiche_reseau"> 
                                            <div class="tab_new_mba" id="tab1">
                                                <div class="tab_new_mba-header">
                                                    <ul role="tablist">
                                                      <li id="#photos_fiche"  aria-selected="true" class="tab_new_mba-header-item is-opened" role="tab" tabindex="0" aria-controls="photos_fiche" >Photos</li>

                                                      <li id="#audios_fiche"  aria-selected="false" class="tab_new_mba-header-item" role="tab" tabindex="0" aria-controls="audios_fiche">Audios</li>

                                                      <li id="#videos_fiche"  aria-selected="false" class="tab_new_mba-header-item" role="tab" tabindex="0" aria-controls="videos_fiche">Vidéos</li>
                                                    </ul>
                                                </div>

                                                <div class="tab_new_mba-body">

                                                    <div id="photos_fiche" class="tab_new_mba-body-item is-opened" role="tabpanel" aria-labelledby="photos_fiche" aria-hidden="false">
                                                      
                                                      <div class="demo-gallery ">
                                                            <ul id="lightgallery" class="list-unstyled containergalbook detail-photo-grid">
                                                                <li class="grid-item" data-responsive="../assets/img/media/artiste3-1.jpg" data-src="../assets/img/media/artiste3-1.jpg" data-sub-html="<h4>Gallery Image 1</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive wd-100p" src="../assets/img/media/artiste3-1.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/2.jpg" data-src="../assets/img/media/2.jpg" data-sub-html="<h4>Gallery Image 2</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/2.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/3.jpg" data-src="../assets/img/media/3.jpg" data-sub-html="<h4>Gallery Image 3</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/3.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/4.jpg" data-src="../assets/img/media/4.jpg" data-sub-html="<h4>Gallery Image 4</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/4.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/5.jpg" data-src="../assets/img/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/5.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/6.jpg" data-src="../assets/img/media/6.jpg" data-sub-html="<h4>Gallery Image 6</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/6.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/7.jpg" data-src="../assets/img/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/7.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/8.jpg" data-src="../assets/img/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/8.jpg" alt="Thumb-1"> </a>
                                                                </li>
                                                                <li class="grid-item" data-responsive="../assets/img/media/9.jpg" data-src="../assets/img/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4>">
                                                                    <a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/9.jpg" alt="Thumb-1"> </a>
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
                                                                    <div class="miabartvideo_mba"> 
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
                                                                    <div class="miabartvideo_mba"> 
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

@endsection

@section('loader')
<x-loader imgLink="{{ $photographer->user->library->remote }}" />
@endsection