@extends('layouts.bookcast', ['title' => "NetConcert"])

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
                                                          <input id="search" type="text" placeholder="Rechercher un casting" />
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
                                                                  <span class="hidden">Type de vidéo </span></label>
                                                                    <select class="select_on_bookcast">
                                                                        <option>Type de vidéo</option>
                                                                        <option>Interview</option>
                                                                        <option>Reportage</option>
                                                                        <option>Rencontre</option>
                                                                        <option>Dossier</option> 
                                                                   </select>
                                                                  </div>  
                                                            </div> 


                                                        </div>

                                                        <!-- BUTTON RECHERCHE START -->
                                                                <a href="" class="guymake_button_mba_all">
                                                                   <div class="search_mba_all">Recherche casting</div> 
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
                                                     Aucune vidéo pour le moment...
                                                </div>
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