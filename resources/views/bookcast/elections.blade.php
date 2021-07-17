@extends('layouts.bookcast', ['title' => "Votes Artistes"])

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

                    <!-- CONTAINER -->
                    <div class="side-app container"> 

                        <!-- ROW-1 OPEN -->
                        <div class="row row-cards">
                            <div class="col-sm-9 col-md-9 col-lg-9 col-xl-9 col-xxl-9">
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                                        <div class="card">
                                            <div class="card-body border-0">  
                                                <div class="rechercheupdatbookcast">
                                                  <form>
                                                    <div class="inner-form">
                                                      <div class="basic-search">
                                                        <div class="input-field">
                                                          <input id="search" type="text" placeholder="Rechercher par nom d'artiste" />
                                                          <div class="icon-wrap">
                                                            <svg class="svg-inline--fa fa-search fa-w-16" fill="#ccc" aria-hidden="true" data-prefix="fas" data-icon="search" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                              <path d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z"></path>
                                                            </svg>
                                                          </div>
                                                        </div>
                                                      </div>
                                                      <div class="advance-search"> 
                                                        <div class="row">
                                                          
                                                          <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                                               <div class="form__field">
                                                                <label for="login__username">
                                                                  <i class="fa fa-map-marker iconBookconnex" data-toggle="tooltip" title="">
                                                                    
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

                                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                                               <div class="form__field">
                                                                <label for="login__username">
                                                                  <i class="fe fe-briefcase iconBookconnex" data-toggle="tooltip" title="">
                                                                    
                                                                  </i>
                                                                  <span class="hidden">Domaine artistique </span></label>
                                                                <select class="select_on_bookcast">
                                                                <option>Domaines artistique</option>
                                                                <option>Acteurs</option>
                                                                <option>Mannequin</option> 
                                                               </select>
                                                              </div>  
                                                            </div>

                                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                                               <div class="form__field">
                                                                <label for="login__username">
                                                                  <i class="fa fa-mars-double iconBookconnex" data-toggle="tooltip" title="">
                                                                    
                                                                  </i>
                                                                  <span class="hidden">Sexe </span></label>
                                                                <select class="select_on_bookcast">
                                                                <option>Sexe ?</option>
                                                                <option>Masculin</option>
                                                                <option>Féminin</option> 
                                                               </select>
                                                              </div>  
                                                            </div> 

                                                            <!-- BUTTON RECHERCHE START -->
                                                                <a href="" class="guymake_button_mba_all">
                                                                   <div class="search_mba_all">Lancer recherche</div> 
                                                                </a>
                                                            <!-- BUTTON RECHERCHE END -->


                                                        </div>
                                                        
                                                      
                                                      </div>
                                                    </div>
                                                  </form>
                                                </div> 
                                                 
                                     
                                            </div>
                                        </div>
                                    </div> <!-- COL END -->

                                    <div class="col-md-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-body overflow-hidden">
                                                 
                                                <div class="row">
                                                    <!-- LISTE DES ARTISTES --> 

                                                    <!-- Book artiste --> 
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/3766737.jpg" alt="team"></div>
                                                          
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

                                                               <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
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

                                                                       <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/team-3.jpg" alt="team"></div>
                                                          
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
                                                                      <span class="nombreDvote">978</span>
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

                                                                       <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/team-4.jpg" alt="team"></div>
                                                          
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
                                                                      <span class="nombreDvote">758</span>
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

                                                                       <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/team-5.jpg" alt="team"></div>
                                                          
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
                                                                      <span class="nombreDvote">654</span>
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

                                                                       <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/team-6.jpg" alt="team"></div>
                                                          
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
                                                                      <span class="nombreDvote">125</span>
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

                                                                       <div class='task__stats'> 
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
                                                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="booksId">
                                                       
                                                            <div class="profileImage"><img src="./assets/images/artiste/3766737.jpg" alt="team"></div>
                                                          
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
                                                                      <span class="nombreDvote">78</span>
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

                                                                       <div class='task__stats'> 
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

                                                <!-- PREVANDNEXT START -->
                                                <div class="prvnextbtn_mba_all">
                                                  <svg width="18px" height="17px" viewBox="0 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                      <g id="prev" transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)">
                                                          <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                                                          <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                                                          <path d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
                                                      </g>
                                                  </svg>

                                                  <svg width="18px" height="17px" viewBox="-1 0 18 17" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                      <g>
                                                          <polygon class="arrow" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                                                          <polygon class="arrow-fixed" points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596"></polygon>
                                                          <path d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z"></path>
                                                      </g>
                                                  </svg>
                                                </div>
                                                <!-- PREVANDNEXT END -->
                                            </div>
                                        </div>
                                    </div>  
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
        </div>

@endsection