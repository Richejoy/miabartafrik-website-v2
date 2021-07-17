@extends('layouts.bookcast', ['title' => "Réseau artistique"])

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
                                                          <input id="search" type="text" placeholder="Nom de l'Organisme" />
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
                                                                  <i class="fa fa-institution iconBookconnex" data-toggle="tooltip" title="">
                                                                    
                                                                  </i>
                                                                  <span class="hidden">Réseau art </span></label>
                                                                <select class="select_on_bookcast">
                                                                <option>Réseau art</option>
                                                                <option>Agence de com</option>
                                                                <option>Producteur</option>
                                                                <option>Télévisions</option>
                                                                <option>Radios</option> 
                                                               </select>
                                                              </div>  
                                                            </div>

                                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                                               <div class="form__field">
                                                                <label for="login__username">
                                                                  <i class="fa fa-institution iconBookconnex" data-toggle="tooltip" title="">
                                                                    
                                                                  </i>
                                                                  <span class="hidden">Types </span></label>
                                                                <select class="select_on_bookcast">
                                                                <option>Types ?</option>
                                                                <option>types 01</option>
                                                                <option>types 02</option> 
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
                                     
                                            </div>
                                        </div>
                                    </div> <!-- COL END -->

                                    <div class="col-md-12">
                                        <div class="card overflow-hidden">
                                            <div class="card-body overflow-hidden">
                                                 
                                                <div class="row">
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/textelogo.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/profilimage.jpg">
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/radiolome.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/tv7.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/tvt.png">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/zephyr.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/neworld.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique -->
 

                                                        <!-- Réseau artistique 01 -->
                                                        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mb_1_5">
                                                            <div class="partnerArtistik">
                              
                                                              <div class="topBar_partnerArt"></div> 
                                                             
                                                              <div class="details_partnerArt">
                                                                  <img alt="" src="./assets/images/partner/tv2.jpg">
                                                                    
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
                                                        <!-- end Réseau artistique --> 
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