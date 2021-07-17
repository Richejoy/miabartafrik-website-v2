@extends('layouts.bookcast', ['title' => "Accueil"])

@section('body')

<div class="miabartafrik">
            <div class="page-main">
                <div class="app-content">

                    <!-- HEADER -->
                    @include('layouts.partials.bookcast._header')
                    <!-- HEADER -->

                    <!--NOTIFICATIONS-->
                    @include('layouts.partials.bookcast._notifications')
                    <!--NOTIFICATIONS-->

                    <!-- HORIZONTAL-MENU -->
                    @include('layouts.partials.bookcast._nav')
                    <!-- HORIZONTAL-MENU -->
  
                    <!-- BANNER -->
                    <section id="welcome-section" class="grid">
                      <div>
                        <h2 data-en class="member_info">Acteurs,<br>chanteurs, <br>producteurs, <br>danseurs, <span class="h2color">&</span>...</h2> 
                      </div>
                      
                          <div class="vertical-line"></div>
                      
                      <div class="welc_h1">
                        <h1 data-en class="vivez_art">Vivez,<br>de votre<br>Art<span class="h1color">.</span></h1> 
                      </div> 
                    </section>
                    <!-- BANNER -->

                    <!-- PARTNERS -->
                    @include('layouts.partials.bookcast._partners')
                    <!-- PARTNERS -->

                    <!-- CONTAINER -->
                    <div class="container" style="margin-top: 1rem;"> 

                        <!-- ROW-1 OPEN -->
                        <div class="row row-cards">
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9 main-content">
                                <div class="row"> 

                                    <!-- LISTE DES COMEDIENS --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Book Artistique</h1>
                                                              <p>des artistes africains</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                         <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                                   
                                                                     <div class="profileImage">
                                                                        <img src="./assets/images/artiste/team-2.jpg" alt="team">
                                                                     </div>

                                                                     <div class="inner_booksId">
                                                                            
                                                                          <div class="info_booksId">
                                                                             
                                                                            
                                                                          <header class="headerprofilbook"> 
                                                                            <a href="/artisteName" class="ambassadeurSign" style="display: ;">
                                                                                <img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                                            </a>

                                                                            <div class="titleAndAuthor">
                                                                              <h2 class="titlebook" title="Nom de l'artiste"> 
                                                                                <span class="book-status online">  
                                                                                     <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                 </span>
                                                                                  <a href="">Gohou Michel</a>
                                                                              </h2>
                                                                                <address class="book_author">
                                                                                  <a href="/artisteName" class="domaine_artistiqueBookcast">Comédien, Acteur, Producteur</a> 
                                                                                </address>
                                                                            </div>

                                                                            
                                                                             
                                                                          </header> 
                                                                           <div class="detail-area-header"> 

                                                                              <div class="detail-buttons">
                                                                                   <button class="detail-button">
                                                                                    <i class="fa fa-user-plus"></i>
                                                                                   </button>
                                                                                   <button class="detail-button">  
                                                                                    <a href="bookartisteview.html">Voir ce Book </a>
                                                                                   </button>

                                                                                  </div>

                                                                               <div class='task__stats'> 
                                                                                  <span class="mrlk">
                                                                                    <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                    </div>
                                                                      
                                                                      
                                                                       
                                                                    </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                                   
                                                                        <div class="profileImage">
                                                                            <img src="./assets/images/artiste/team-3.jpg" alt="team">
                                                                        </div>
                                                                      
                                                                        <div class="inner_booksId">
                                                                            
                                                                          <div class="info_booksId">
                                                                             
                                                                            
                                                                          <header class="headerprofilbook"> 
                                                                            <a href="/artisteName" class="ambassadeurSign" style="display: none;">
                                                                                <img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                                            </a>

                                                                            <div class="titleAndAuthor">
                                                                              <h2 class="titlebook" title="Nom de l'artiste"> 
                                                                                <span class="book-status online">  
                                                                                     <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                 </span>
                                                                                  <a href="">ArtisteName</a>
                                                                              </h2>
                                                                                <address class="book_author">
                                                                                  <a href="/artisteName" class="domaine_artistiqueBookcast">Domaine1, Domaine2, Domaine3</a> 
                                                                                </address>
                                                                            </div>

                                                                            
                                                                             
                                                                          </header> 
                                                                           <div class="detail-area-header"> 

                                                                              <div class="detail-buttons">
                                                                                   <button class="detail-button">
                                                                                    <i class="fa fa-user-plus"></i>
                                                                                   </button>
                                                                                   <button class="detail-button">  
                                                                                    <a href="bookartisteview.html">Voir ce Book </a>
                                                                                   </button>

                                                                                  </div>

                                                                               <div class='task__stats'> 
                                                                                  <span class="mrlk">
                                                                                    <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                    </div>
                                                                       
                                                                    </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 
             
                                                             

                                                                <!-- LISTE DES ARTISTES END -->  

                                                            </div>

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Tout les artistes</span>
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

                                    <!-- CASTINGS ARTISTIQUES --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Castings Artistique</h1>
                                                              <p>pour Débutants - Professionnels</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                         <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="castingart_newByOsez">

                                                                          <div class="castingart_newByOsez__side castingart_newByOsez__side--front">
                                                                            <div class="castingart_newByOsez__img" style="background-image: url(./assets/images/casting/studio-dance-photo.jpg);">
                                                                              
                                                                            </div>

                                                                            <h4 class="castingart_newByOsez__text">
                                                                              <span class="castingart_newByOsez__text-span">Danse &amp; Musique</span>
                                                                            </h4>

                                                                            <div class="castingart_newByOsez_body">
                                                                                <ul> 
                                                                                    <li class="castings--title">Pour le clip de Aamron, des danseurs H/F sont conviés pour un cating</li>
                                                                                </ul>
                                                                                <div class="infos_plus_bookcast">
                                                                                <ul> 
                                                                                  <li>
                                                                                    <div class="bullet orange"></div> 
                                                                                    <div class="desc">
                                                                                      <h4>Rémunération</h4>
                                                                                      <h3>Prévue</h3>
                                                                                    </div>
                                                                                  </li>   
                                                                                    <li> 
                                                                                  </li> 
                                                                                </ul>
                                                                              </div>
                 
                                                                                <div class="detail-buttons" style="padding: 0.3rem;">
                                                                                   <button class="detail-button">
                                                                                    <i class="fa fa-heart"></i>
                                                                                   </button>
                                                                                   <button class="detail-button">  
                                                                                    <a href="castingartview.html">VOIR L'ANNONCE </a>
                                                                                   </button>

                                                                                  </div>

                                                                                <div class="task__stats" style="padding: 0.5rem;"> 
                                                                                  <span class="mrlk">
                                                                                    <i class="flag flag-tg" data-toggle="tooltip" title="" data-original-title="Togo"></i>
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

                                                                        </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="castingart_newByOsez">

                                                                      <div class="castingart_newByOsez__side castingart_newByOsez__side--front">
                                                                        <div class="castingart_newByOsez__img" style="background-image: url(./assets/images/casting/photography.jpg);">
                                                                          
                                                                        </div>

                                                                        <h4 class="castingart_newByOsez__text">
                                                                          <span class="castingart_newByOsez__text-span">Mode &amp; Beauté</span>
                                                                        </h4>

                                                                        <div class="castingart_newByOsez_body">
                                                                            <ul> 
                                                                                <li class="castings--title">Séance de shoot photo à l'endroit des modèles photo &amp; mannequin ...</li>
                                                                            </ul>
                                                                            <div class="infos_plus_bookcast">
                                                                            <ul> 
                                                                              <li>
                                                                                <div class="bullet orange"></div> 
                                                                                <div class="desc">
                                                                                  <h4>Rémunération</h4>
                                                                                  <h3>Prévue</h3>
                                                                                </div>
                                                                              </li>   
                                                                                <li> 
                                                                              </li> 
                                                                            </ul>
                                                                          </div>
             
                                                                            <div class="detail-buttons" style="padding: 0.3rem;">
                                                                               <button class="detail-button">
                                                                                <i class="fa fa-heart"></i>
                                                                               </button>
                                                                               <button class="detail-button">  
                                                                                <a href="">VOIR L'ANNONCE </a>
                                                                               </button>

                                                                              </div>

                                                                            <div class="task__stats" style="padding: 0.5rem;"> 
                                                                              <span class="mrlk">
                                                                                <i class="flag flag-tg" data-toggle="tooltip" title="" data-original-title="Togo"></i>
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

                                                                    </div>
                                                                </div>  
                                                                <!-- end Book artiste --> 
             
                                                             

                                                                <!-- LISTE DES ARTISTES END -->  

                                                            </div>

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
                                    <!-- CASTINGS END --> 

                                    <!-- RESAUX ARTISTIQUE --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Réseaux Artistique</h1>
                                                              <p>Sociétés artistiques</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                         <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="partnerArtistik">
                              
                                                                      <div class="topBar_partnerArt"></div> 
                                                                     
                                                                      <div class="details_partnerArt">
                                                                          <img alt="" src="./assets/images/partner/photographe.jpg">

                                                                      </div>
                                                                      <h3 class="partnername">
                                                                        <a href="" title="Voir la fiche">Structure name</a>
                                                                      </h3>
                                                                      <div class="infopartner">
                                                                         <div class="label-partner">Partenaire 
                                                                            <span class="col-auto align-self-center">
                                                                                <span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Domaines d'activité : <br>
                                                                                    Cinéma, Publicité, Evènementiel
                                                                                 .</p> 
                                                                                " data-original-title="" title="">¡</span>
                                                                            </span>
                                                                        </div>
                                                                         <div class="label-type">Producteur</div> 
                                                                       </div>

                                                                       <div class="detail-buttons">
                                                                           <button class="detail-button">
                                                                            <a href="partner_fiche.html">Voir la fiche</a>
                                                                           </button>
                                                                           <button class="detail-button">  
                                                                            <a href="bookartisteview.html">RDV </a>
                                                                           </button>
                                                                        </div>
                                                                        <div class="task__stats"> 
                                                                          <span class="mrlk">
                                                                            <i class="flag flag-tg" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="partnerArtistik">
                              
                                                                      <div class="topBar_partnerArt"></div> 
                                                                     
                                                                      <div class="details_partnerArt">
                                                                          <img alt="" src="./assets/images/partner/partener.jpg">
                                                                            
                                                                      </div>
                                                                      <h3 class="partnername">
                                                                        <a href="" title="Voir la fiche">Structure name</a>
                                                                      </h3>
                                                                      <div class="infopartner">
                                                                         <div class="label-partner">Partenaire 
                                                                            <span class="col-auto align-self-center">
                                                                                <span class="form-help" data-toggle="popover" data-placement="top" data-content="<p>Domaines d'activité : <br>
                                                                                    Cinéma, Publicité, Evènementiel
                                                                                 .</p> 
                                                                                " data-original-title="" title="">¡</span>
                                                                            </span>
                                                                        </div>
                                                                         <div class="label-type">Directeur de postproduction</div>  
                                                                       </div>
         
                                                                        <div class="detail-buttons">
                                                                           <button class="detail-button">
                                                                            <a href="partner_fiche.html">Voir la fiche</a>
                                                                           </button>
                                                                           <button class="detail-button">  
                                                                            <a href="bookartisteview.html">RDV </a>
                                                                           </button>
                                                                        </div>

                                                                        <div class="task__stats"> 
                                                                          <span class="mrlk">
                                                                            <i class="flag flag-tg" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                <!-- end Book artiste --> 
             
                                                             

                                                                <!-- LISTE DES ARTISTES END -->  

                                                            </div>

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Tout les artistes</span>
                                                                  </button>
                                                                </div>
                                                                <!-- end afficherAll --> 
                                                            </div>
                                                          
                                                   </div> 

                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- RESAUX ARTISTIQUE END --> 

                                    <!-- ACTUALITE ARTISTIQUE --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Actu. Artistique</h1>
                                                              <p>Tous sur la culture</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                         <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                                   
                                                                     <div class="profileImage">
                                                                        <img src="./assets/images/artiste/team-2.jpg" alt="team">
                                                                     </div>

                                                                     <div class="inner_booksId">
                                                                            
                                                                          <div class="info_booksId">
                                                                             
                                                                            
                                                                          <header class="headerprofilbook"> 
                                                                            <a href="/artisteName" class="ambassadeurSign" style="display: ;">
                                                                                <img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                                            </a>

                                                                            <div class="titleAndAuthor">
                                                                              <h2 class="titlebook" title="Nom de l'artiste"> 
                                                                                <span class="book-status online">  
                                                                                     <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                 </span>
                                                                                  <a href="">Gohou Michel</a>
                                                                              </h2>
                                                                                <address class="book_author">
                                                                                  <a href="/artisteName" class="domaine_artistiqueBookcast">Comédien, Acteur, Producteur</a> 
                                                                                </address>
                                                                            </div>

                                                                            
                                                                             
                                                                          </header> 
                                                                           <div class="detail-area-header"> 

                                                                              <div class="detail-buttons">
                                                                                   <button class="detail-button">
                                                                                    <i class="fa fa-user-plus"></i>
                                                                                   </button>
                                                                                   <button class="detail-button">  
                                                                                    <a href="bookartisteview.html">Voir ce Book </a>
                                                                                   </button>

                                                                                  </div>

                                                                               <div class='task__stats'> 
                                                                                  <span class="mrlk">
                                                                                    <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                    </div>
                                                                      
                                                                      
                                                                       
                                                                    </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                                   
                                                                        <div class="profileImage">
                                                                            <img src="./assets/images/artiste/team-3.jpg" alt="team">
                                                                        </div>
                                                                      
                                                                        <div class="inner_booksId">
                                                                            
                                                                          <div class="info_booksId">
                                                                             
                                                                            
                                                                          <header class="headerprofilbook"> 
                                                                            <a href="/artisteName" class="ambassadeurSign" style="display: none;">
                                                                                <img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                                            </a>

                                                                            <div class="titleAndAuthor">
                                                                              <h2 class="titlebook" title="Nom de l'artiste"> 
                                                                                <span class="book-status online">  
                                                                                     <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                 </span>
                                                                                  <a href="">ArtisteName</a>
                                                                              </h2>
                                                                                <address class="book_author">
                                                                                  <a href="/artisteName" class="domaine_artistiqueBookcast">Domaine1, Domaine2, Domaine3</a> 
                                                                                </address>
                                                                            </div>

                                                                            
                                                                             
                                                                          </header> 
                                                                           <div class="detail-area-header"> 

                                                                              <div class="detail-buttons">
                                                                                   <button class="detail-button">
                                                                                    <i class="fa fa-user-plus"></i>
                                                                                   </button>
                                                                                   <button class="detail-button">  
                                                                                    <a href="bookartisteview.html">Voir ce Book </a>
                                                                                   </button>

                                                                                  </div>

                                                                               <div class='task__stats'> 
                                                                                  <span class="mrlk">
                                                                                    <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
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
                                                                    </div>
                                                                       
                                                                    </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 
             
                                                             

                                                                <!-- LISTE DES ARTISTES END -->  

                                                            </div>

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Tout les artistes</span>
                                                                  </button>
                                                                </div>
                                                                <!-- end afficherAll --> 
                                                            </div>
                                                          
                                                   </div> 

                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- ACTUALITEARTISTIQUE END --> 

                                    <!-- VOTE ARTISTIQUE --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Vote Artistique</h1>
                                                              <p>Artistes du moment</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                        <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                       
                                                                        <div class="profileImage">
                                                                            <img src="./assets/images/artiste/3766737.jpg" alt="team">
                                                                        </div>
                                                                      
                                                                             <div class="inner_booksId">
                                                                        
                                                                              <div class="info_booksId">
                                                                                 
                                                                                
                                                                              <header class="headerprofilbook"> 
                                                                                <a href="/artisteName" class="ambassadeurSign"><img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound"></a>

                                                                                <div class="titleAndAuthor">
                                                                                  <h2 class="titlebook" title="Nom de l'artiste">
                                                                                    
                                                                                    <span class="book-status online">  
                                                                                         <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                     </span>
                                                                                     <a href="">Agbodjan - Tonou</a>
                                                                                  </h2>
                                                                                    <address class="book_author">
                                                                                      <a href="/artisteName" class="domaine_artistiqueBookcast">Actrice, Modèle photo, Danseuse</a> 
                                                                                    </address>
                                                                                </div>

                                                                               
                                                                            </header> 
                                                                             <!-- Vote Artiste -->
                                                                                <div class="notation">
                                                                                  <i class="btnvotbookartiste notation-up fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                                                  <i class="btnvotbookartiste notation-down fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                                                  <span class="nombreDvote">2587</span>
                                                                                </div>
                                                                                 <!-- end Votes Artiste --> 
                                                                                <div class="detail-area-header"> 

                                                                                    <div class="detail-buttons">
                                                                                       <button class="detail-button">
                                                                                        <i class="fa fa-user-plus"></i>
                                                                                       </button>
                                                                                       <button class="detail-button">  
                                                                                        <a href="bookartisteview.html">Voir ce Book </a>
                                                                                       </button>
                                                                                    </div>

                                                                                   <div class="task__stats"> 
                                                                                      <span class="mrlk">
                                                                                        <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
                                                                                      </span>

                                                                                      <span class="mrlk">
                                                                                        <button><i class="fa fa-heart"></i></button>1259
                                                                                      </span> 

                                                                                      <span class="mrlk"> 
                                                                                        <button><i class="fa fa-share-square-o"></i></button>457
                                                                                      </span> 

                                                                                      <span class="mrlk">
                                                                                        <button><i class="fa fa-eye"></i></button> 7254
                                                                                      </span>
                                                                                      
                                                                                    </div>
                                                                                 </div> 

                                                                               
                                                                            </div>
                                                                        </div>
                                                                      
                                                                    </div> 
                                                                </div>  
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="booksId">
                                                       
                                                                        <div class="profileImage">
                                                                            <img src="./assets/images/artiste/team-2.jpg" alt="team">
                                                                        </div>
                                                                          
                                                                            <div class="inner_booksId">
                                                                                <div class="info_booksId">   
                                                                                  <header class="headerprofilbook"> 
                                                                                    <a href="/artisteName" class="ambassadeurSign" style="display: none;">
                                                                                        <img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
                                                                                    </a>

                                                                                    <div class="titleAndAuthor">
                                                                                      <h2 class="titlebook" title="Nom de l'artiste"> 
                                                                                        <span class="book-status online">  
                                                                                             <i class="ion-record" data-toggle="tooltip" title="" data-original-title="En ligne"></i> 
                                                                                         </span>
                                                                                          <a href="">ArtisteName</a>
                                                                                      </h2>
                                                                                        <address class="book_author">
                                                                                          <a href="/artisteName" class="domaine_artistiqueBookcast">Domaine1, Domaine2, Domaine3</a> 
                                                                                        </address>
                                                                                    </div> 
                                                                                  </header> 
                                                                                  <!-- Vote Artiste -->
                                                                                    <div class="notation">
                                                                                      <i class="btnvotbookartiste notation-up fa fa-thumbs-o-up" aria-hidden="true"></i>
                                                                                      <i class="btnvotbookartiste notation-down fa fa-thumbs-o-down" aria-hidden="true"></i>
                                                                                      <span class="nombreDvote">1256</span>
                                                                                    </div>
                                                                                     <!-- end Votes Artiste --> 
                                                                                   <div class="detail-area-header"> 

                                                                                      <div class="detail-buttons">
                                                                                           <button class="detail-button">
                                                                                            <i class="fa fa-user-plus"></i>
                                                                                           </button>
                                                                                           <button class="detail-button">  
                                                                                            <a href="bookartisteview.html">Voir ce Book </a>
                                                                                           </button>

                                                                                          </div>

                                                                                       <div class="task__stats"> 
                                                                                          <span class="mrlk">
                                                                                            <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="Nationalité de l'artiste"></i>
                                                                                          </span>

                                                                                          <span class="mrlk">
                                                                                            <button><i class="fa fa-heart"></i></button>1259
                                                                                          </span> 

                                                                                          <span class="mrlk"> 
                                                                                            <button><i class="fa fa-share-square-o"></i></button>457
                                                                                          </span> 

                                                                                          <span class="mrlk">
                                                                                            <button><i class="fa fa-eye"></i></button> 7254
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

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Tout les votes</span>
                                                                  </button>
                                                                </div>
                                                                <!-- end afficherAll --> 
                                                            </div>
                                                          
                                                   </div> 

                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- VOTE ARTISTIQUE END --> 

                                    <!-- AGENDA PLUS --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Agenda plus</h1>
                                                              <p>Evènements artistique</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   
     
                                                        <div class="row">
                                                                <!-- LISTE DES ARTISTES --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="agendaplus_bookcast">
                                                                        <div class="event_affiche_agendaplus">
                                                                            <img src="./assets/images/agendaplus/affiche.jpg" class="image_agendaplus_bookcast">

                                                                            <div class="info_container_agendaplus">
                                                                            <div class="titre">Blueberry Tasting - The best of 2016 or whatever</div>
                                                                            <div class="details">
                                                                                <span class="chamber-half--bottom">
                                                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg">
                                                                                <div class="date">Monday 19th. September, 2016</div>
                                                                                </span>
                                                                                <span>
                                                                                 <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg">
                                                                                 <div class="location">Blueberry Bar, Paul Street, London, United Kingdom</div> 
                                                                                </span>
                                                                            </div> 

                                                                            <div class="detail-buttons">
                                                                               <button class="detail-button">
                                                                                <a href="agendaview.html">  Evènement</a>
                                                                               </button>
                                                                               <button class="detail-button">  
                                                                                <a href="#">Spot</a>
                                                                               </button>

                                                                            </div>
                                                                            <div class="task__stats"> 
                                                                                <span class="mrlk">
                                                                                  <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="artiste du Ghana"></i>
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
                                                                <!-- end Book artiste --> 

                                                                <!-- Book artiste --> 
                                                                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 ">
                                                                    <div class="agendaplus_bookcast">
                                                                        <div class="event_affiche_agendaplus">
                                                                            <img src="./assets/images/agendaplus/fetevin.jpg" class="image_agendaplus_bookcast">

                                                                            <div class="info_container_agendaplus">
                                                                            <div class="titre">Blueberry Tasting - The best of 2016 or whatever</div>
                                                                            <div class="details">
                                                                                <span class="chamber-half--bottom">
                                                                                <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg">
                                                                                <div class="date">Monday 19th. September, 2016</div>
                                                                                </span>
                                                                                <span>
                                                                                 <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg">
                                                                                 <div class="location">Blueberry Bar, Paul Street, London, United Kingdom</div> 
                                                                                </span>
                                                                            </div>

                                                                            <div class="detail-buttons">
                                                                               <button class="detail-button">
                                                                                <a href="agendaview.html">  Evènement</a>
                                                                               </button>
                                                                               <button class="detail-button">  
                                                                                <a href="#">Spot</a>
                                                                               </button>

                                                                            </div>
                                                                            <div class="task__stats"> 
                                                                                <span class="mrlk">
                                                                                  <i class="flag flag-ci" data-toggle="tooltip" title="" data-original-title="artiste du Ghana"></i>
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
                                                                <!-- end Book artiste --> 
             
                                                             

                                                                <!-- LISTE DES ARTISTES END -->  

                                                            </div>

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Evènements à la une</span>
                                                                  </button>
                                                                </div>
                                                                <!-- end afficherAll --> 
                                                            </div>
                                                          
                                                   </div> 

                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- AGENDA PLUS END -->

                                    <!-- NET CONCERT --> 
                                    <div class="col-md-12">
                                        <div class="Card_bonadress overflow-hidden">
                                            <div class="card-body overflow-hidden">                                              
                                                <div class="row"> 
                                                    <div class="col-lg-4">
                                                        <div class="d-flex flex-column align-items-center justify-content-center bg-presentWho h-100 py-5 px-3">
                                                            <i class="flaticon-brickwall display-1 font-weight-normal text-secondary mb-3"></i>
                                                            <article class="textIntroBonAdress">
                                                              <h1>Net Concert</h1>
                                                              <p>Concerts en direct</p>
                                                            </article>
                                                        </div>
                                                    </div>
                                                   <div class="col-lg-8">

                                                        <!-- LES BONNES ADRESSES MIABARTAFRIK -->   

                                                        <p>Pas de vidéo pou le moment</p>
     
                                                        

                                                          <div class="center-text">
                                                                <!-- afficherAll -->
                                                                <div id="afficherAll">
                                                                  <button class="allViews learn-more">
                                                                    <span class="circle" aria-hidden="true">
                                                                      <span class="icon arrow"></span>
                                                                    </span>
                                                                    <span class="button-text">Tout les concerts</span>
                                                                  </button>
                                                                </div>
                                                                <!-- end afficherAll --> 
                                                            </div>
                                                          
                                                   </div> 

                                                </div>                                              
                                            </div>
                                        </div>
                                    </div> 
                                    <!-- NET CONCERT END -->
 
  



                                </div>
                            </div>

                            <!-- ASIDE BAR -->
                            @include('layouts.partials.bookcast._aside_right')
                            <!-- ASIDE BAR -->
                        </div>
                    </div>
                    <!-- CONTAINER -->
                </div>
            </div>

            <!-- MES CONATCTS -->
            @include('layouts.partials.bookcast._sidebar_right')
            <!-- MES CONATCTS -->

            <!-- FOOTER -->
            @include('layouts.partials.bookcast._footer')
            <!-- FOOTER -->

            <!-- MODAL -->
            @include('layouts.partials.bookcast._modal')
            <!-- MODAL -->
</div>

@endsection