@extends('layouts.bookcast', ['title' => "Agenda+"])

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
                                                          <input id="search" type="text" placeholder="Nom de l'évènement" />
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
                                                                <option>Cinéma & Fiction</option>
                                                                <option>Mode & Beauté</option>
                                                                <option>Musique / Danse</option>
                                                                <option>Radio / Télévision</option>
                                                                <option>Théâtre & Humour</option> 
                                                               </select>
                                                              </div>  
                                                            </div>

                                                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4 form_connexionBookcast login_connexionBookcast pandm">
                                                               <div class="form__field">
                                                                <label for="login__username">
                                                                  <i class="fa fa-calendar-check-o iconBookconnex" data-toggle="tooltip" title="">
                                                                    
                                                                  </i>
                                                                  <span class="hidden">Période </span></label>
                                                                <select class="select_on_bookcast">
                                                                <option>Quand ?</option>
                                                                <option>Artiste</option>
                                                                <option>Photographes/Vidéaste</option>
                                                                <option>Réseau artistique(Partenariat)</option>
                                                               </select>
                                                              </div>  
                                                            </div> 


                                                        </div>

                                                        <!-- BUTTON RECHERCHE START -->
                                                                <a href="" class="guymake_button_mba_all">
                                                                   <div class="search_mba_all">Retrouver l'évènement</div> 
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

                                                    <!-- EVENEMENT -->
                                                   <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="agendaplus_bookcast">
                                                            <div class="event_affiche_agendaplus">
                                                                <img src="./assets/images/agendaplus/affiche.jpg" class="image_agendaplus_bookcast">

                                                                <div class='info_container_agendaplus'>
                                                                <div class='titre'>Blueberry Tasting - The best of 2016 or whatever</div>
                                                                <div class='details'>
                                                                    <span class='chamber-half--bottom'>
                                                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg'>
                                                                    <div class='date'>Monday 19th. September, 2016</div>
                                                                    </span>
                                                                    <span>
                                                                     <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg'>
                                                                     <div class='location'>Blueberry Bar, Paul Street, London, United Kingdom</div> 
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
                                                   <!-- END EVENEMENT -->

                                                   <!-- EVENEMENT -->
                                                   <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="agendaplus_bookcast">
                                                            <div class="event_affiche_agendaplus">
                                                                <img src="./assets/images/agendaplus/fetevin.jpg" class="image_agendaplus_bookcast">

                                                                <div class='info_container_agendaplus'>
                                                                <div class='titre'>Blueberry Tasting - The best of 2016 or whatever</div>
                                                                <div class='details'>
                                                                    <span class='chamber-half--bottom'>
                                                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg'>
                                                                    <div class='date'>Monday 19th. September, 2016</div>
                                                                    </span>
                                                                    <span>
                                                                     <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg'>
                                                                     <div class='location'>Blueberry Bar, Paul Street, London, United Kingdom</div> 
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
                                                   <!-- END EVENEMENT -->

                                                   <!-- EVENEMENT -->
                                                   <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="agendaplus_bookcast">
                                                            <div class="event_affiche_agendaplus">
                                                                <img src="./assets/images/agendaplus/boucle_bel_air_2.jpg" class="image_agendaplus_bookcast">

                                                                <div class='info_container_agendaplus'>

                                                                <div class='titre'>Blueberry Tasting - The best of 2016 or whatever</div>
                                                                <div class='details'>
                                                                    <span class='chamber-half--bottom'>
                                                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg'>
                                                                    <div class='date'>Monday 19th. September, 2016</div>
                                                                    </span>
                                                                    <span>
                                                                     <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg'>
                                                                     <div class='location'>Blueberry Bar, Paul Street, London, United Kingdom</div> 
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
                                                              <span class="jour_agendaplus">17</span>
                                                              <span class="mois_agendaplus">Jun</span>
                                                            </div>
     
                                                        </div>
                                                   </div>   
                                                   <!-- END EVENEMENT -->

                                                   <!-- EVENEMENT -->
                                                   <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                                                        <div class="agendaplus_bookcast">
                                                            <div class="event_affiche_agendaplus">
                                                                <img src="./assets/images/agendaplus/gala-event-flyer.jpg" class="image_agendaplus_bookcast">

                                                                <div class='info_container_agendaplus'>
                                                                <div class='titre'>Blueberry Tasting - The best of 2016 or whatever</div>
                                                                <div class='details'>
                                                                    <span class='chamber-half--bottom'>
                                                                    <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Time.svg'>
                                                                    <div class='date'>Monday 19th. September, 2016</div>
                                                                    </span>
                                                                    <span>
                                                                     <img src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/46557/Pin.svg'>
                                                                     <div class='location'>Blueberry Bar, Paul Street, London, United Kingdom</div> 
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
                                                              <span class="jour_agendaplus">21</span>
                                                              <span class="mois_agendaplus">Jun</span>
                                                            </div>
     
                                                        </div>
                                                   </div>   
                                                   <!-- END EVENEMENT -->
                                             
                                                     

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