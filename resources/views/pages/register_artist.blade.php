<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Inscription Artistes - Plateforme artistique</title>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">  
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.2.3/animate.min.css'>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
 
  <!-- STYLE NEWS --> 
       
      <!-- bookcast CSS -->
      <link href="./assets/css/bookcast.css" rel="stylesheet"/> 

      <!-- FANCYBOX CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> 

        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>

       <!-- end STYLE NEWS -->

    <!-- miabartafrik CSS -->
    <link href="./assets/css/miabartafrik.css" rel="stylesheet"/>
    

    <!-- COLOR-THEMES CSS -->
    <link href="./assets/css/color-themes.css" rel="stylesheet"/>

    <!-- Perfect scroll bar css-->
    <link href="./assets/plugins/pscrollbar/perfect-scrollbar.css" rel="stylesheet" />

    <!--C3.JS CHARTS PLUGIN -->
    <link href="./assets/plugins/charts-c3/c3-chart.css" rel="stylesheet"/>

    <!-- TABS CSS -->
    <link href="./assets/plugins/tabs/tabs-style2.css" rel="stylesheet" type="text/css">

    <!-- CUSTOM SCROLL BAR CSS-->
    <link href="./assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.css" rel="stylesheet"/>

    <!--- FONT-ICONS CSS -->
    <link href="./assets/css/icons.css" rel="stylesheet"/>

    <!-- RIGHT-MENU CSS -->
    <link href="./assets/plugins/sidebar/sidebar.css" rel="stylesheet">

    <!-- LEFT-SIDEMENU CSS -->
    <link href="./assets/plugins/jquery-jside-menu-master/css/jside-menu.css" rel="stylesheet"/>
    <link href="./assets/plugins/jquery-jside-menu-master/css/jside-skins.css" rel="stylesheet"/>

    <!-- HORIZONTAL-MENU CSS -->
    <link href="./assets/plugins/horizontal-menu/dropdown-effects/fade-down.css" rel="stylesheet">
    <link href="./assets/plugins/horizontal-menu/horizontal-menu.css" rel="stylesheet">

    <!-- NEWS01 CSS -->
   
    
    <!-- SELECT2 CSS -->
    <link href="./assets/plugins/select2/select2.min.css" rel="stylesheet"/>

    <!-- TIME PICKER CSS -->
    <link href="./assets/plugins/time-picker/jquery.timepicker.css" rel="stylesheet"/>

    <!-- DATE PICKER CSS -->
    <link href="./assets/plugins/spectrum-date-picker/spectrum.css" rel="stylesheet"/>

    <!-- MULTI SELECT CSS -->
    <link rel="stylesheet" href="./assets/plugins/multipleselect/multiple-select.css">

    <!-- FILE UPLODES -->
        <link href="./assets/plugins/fileuploads/css/dropify.min.css" rel="stylesheet" type="text/css"/>

        <!--Sweat Alert Css-->
    <link href="./assets/plugins/sweet-alert/sweetalert.css" rel="stylesheet" />

    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    

</head>
<body>
<!-- partial:index.partial.html -->

<div id="inscription_Inscrit_bookArt-wrap">
   <!-- GLOBAL-LOADER -->
    <div id="global-loader">
      <img src="./assets/images/loader.svg" class="loader-img" alt="Loader">
    </div>


  <!-- AvatarView -->
  <div class="inscription_Inscrit_bookArt-image" style="background: url(./assets/images/home/completregister.jpg) no-repeat center / cover;">
    <div class="brand">
      <a class="back btn-floating btn-large waves-effect waves-light" href="connexion.html"> 
      <i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Page de connexion"></i></a>
    </div>
   
      
 
  <!-- end home_slide_texte CALL -->
     
  </div>

  <!-- Formulaire infos -->
  <div class="inscription_Inscrit_bookArt-card"> 

     <!-- FORMULAIRE A REMPLIR -->  

  <div class="final_connexion_inscript_steps">
        <div class="final_connexion_inscript_steps-inner">
            <div class="connecting-line"></div>
            <ul class="nav nav-tabs" role="tablist">

                <li role="presentation" class="active">
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Infos perso">
                        <span class="round-tab">
1
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Packages">
                        <span class="round-tab">
2
                        </span>
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Paiement">
                        <span class="round-tab">
3
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Bienvenue">
                        <span class="round-tab">
4
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="step1">
            <p class="text-mutedinscrit">COMPLETER VOS INFORMATIONS </p>

            <div class="row">
              

          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7 animated bounceInDown"> 

            <div class="grid_connexionBookcast">

              <form action="" method="POST" class="form_connexionBookcast login_connexionBookcast">

                 <div class="form__field">
                  <label for="login__username">
                    <i class="icon icon-paper-clip" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Photo de profile </span></label>
                  <input autocomplete="username" id="login__username" type="file" name="username" class="form__input" placeholder="Votre photo de profile" required="">
                </div> 
 

                <div class="form__field">
                  <label for="login__username">

                    <i class="fe fe-users iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Nom d'utilisateur </span></label>
                  <select class="select_on_bookcast">
                  <option>Votre profil</option>
                  <option>Artiste</option>
                  <option>Photographes/Vidéaste</option>
                  <option>Réseau artistique(Partenariat)</option>
                 </select>
                </div>

                <div class="form__field">
                  <label for="login__username">

                    <i class="icon icon-graduation iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Domaine artistique </span></label>
                  <select class="select_on_bookcast">
                  <option>Domaine principal selon le profil</option> 
                 </select>
                </div>

                <div class="form__field">
                  <label for="login__username">

                    <i class="icon icon-graduation iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Deuxième domaine</span></label>
                  <select class="select_on_bookcast">
                  <option>Deuxième domaine</option> 
                 </select>
                </div>

                <div class="form__field">
                  <label for="login__username">

                    <i class="icon icon-graduation iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Troisième domaine</span></label>
                  <select class="select_on_bookcast">
                  <option>Troisième domaine</option> 
                 </select>
                </div>

                <div class="form__field">
                  <label for="login__username">

                    <i class="icon icon-symbol-female iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Sexe </span></label>
                  <select class="select_on_bookcast">
                  <option>Sexe</option> 
                  <option>Mr(Masculin)</option> 
                  <option>Mlle(Féminin)</option> 
                  <option>Mme(Féminin)</option> 
                 </select>
                </div>

                <div class="form__field">
                  <label for="login__username">

                    <i class="fe fe-map-pin iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Pays </span></label>
                  <select class="select_on_bookcast">
                  <option>Pays (pays d'origine activé)</option> 
                  <option>Togo</option> 
                  <option>Bénin</option> 
                  <option>Côte d'Ivoire</option> 
                 </select>
                </div> 
 

                 <div class="form__field">
                  <label for="login__username">
                    <i class="mdi mdi-account-edit" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Nom complet (Famille et Prenom) </span></label>
                  <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Nom complet (Famille et Prenom)" required="">
                </div> 
 

                <div class="form__field">
                  <label for="login__username">
                    <i class="icon icon-calendar" data-toggle="tooltip" title="" data-original-title=""></i>
                    <span class="hidden">Date de naissance </span></label>
                  <input autocomplete="username" id="login__username" type="date" name="username" class="form__input" placeholder="Date de naissance" required="">
                </div> 

                

 
              <p></p>

              </form>

            </div> 
          </div>

          <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5 animated bounceInDown"> 
                <div class="booksId">
                             
                    <div class="profileImage">
                      <img src="./assets/images/artiste/exempleBook.jpg" alt="team">
                    </div>
                                
                    <div class="inner_booksId">
                      
                      <div class="info_booksId">
                         
                        
                      <header class="headerprofilbook"> 
                        <a href="/artisteName" class="ambassadeurSign" style="display: none;"><img src="./assets/images/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound"></a>

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
                </div>
                     
            </div>
       
            </div>

            </div>
                <ul class="list-inline pull-right">
                    <li><button type="button" class="next-step actions_steps_option">Cliquer pour continuer</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2">
                <p class="text-mutedinscrit">VOTRE PACKAGE </p>

                <div class="pricingTable animated bounceInDown"> 
  
                    <ul class="pricingTable-firstTable">
                      <li class="pricingTable-firstTable_table">
                        <h1 class="pricingTable-firstTable_table__header">Bronze Book</h1>
                        <p class="pricingTable-firstTable_table__pricing"><span>€</span><span>77,52</span><span>Annuel</span></p>
                        <ul class="pricingTable-firstTable_table__options">
                          <li>Book en ligne 24/7</li>
                          <li>Participer aux castings</li>
                          <li>Vidéos limitée(3)</li>                                
                          <li>Audios limité(3)</li>
                          <li>Accès au CAST-IN</li> 
                        </ul>
                        <div class="pricingTable-firstTable_table__getstart">
                          <input class="inputbookcast2021" id="r1" type="radio" name="radio" value="1">
                          <label for="r1">Faire ce choix</label> 
                        </div>
                      </li><li class="pricingTable-firstTable_table">
                        <h1 class="pricingTable-firstTable_table__header">Gold Book</h1>
                        <p class="pricingTable-firstTable_table__pricing"><span>€</span><span>108,45</span><span>Annuel</span></p>
                        <ul class="pricingTable-firstTable_table__options">
                          <li>Book en ligne 24/7</li>
                          <li>Participer aux castings</li>
                          <li>Vidéos limitée(3)</li>                                
                          <li>Audios limité(3)</li>
                          <li>Accès au CAST-IN</li> 
                        </ul>
                        <div class="pricingTable-firstTable_table__getstart">
                           <input class="inputbookcast2021" id="r2" type="radio" name="radio" value="2">
                          <label for="r2">Faire ce choix</label>
                         </div>
                      </li><li class="pricingTable-firstTable_table">
                        <h1 class="pricingTable-firstTable_table__header">Platinum Book</h1>
                        <p class="pricingTable-firstTable_table__pricing"><span>€</span><span>184,39</span><span>Annuel</span></p>
                        <ul class="pricingTable-firstTable_table__options">
                          <li>Book en ligne 24/7</li>
                          <li>Participer aux castings</li>
                          <li>Vidéos limitée(3)</li>                                
                          <li>Audios limité(3)</li>
                          <li>Accès au CAST-IN</li> 
                        </ul>
                        <div class="pricingTable-firstTable_table__getstart"> 
                          <input class="inputbookcast2021" id="r3" type="radio" name="radio" value="3">
                          <label for="r3">Faire ce choix</label></div>
                      </li>
                    </ul>
                  </div>
            
            
                <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Retourner</button></li>
                    <li><button type="button" class="next-step actions_steps_option">Cliquer pour continuer</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step3">
              <p class="text-mutedinscrit">PAIEMENT </p>

               <div class="CartPage-ticket-advantageCode">
                  <input type="text" placeholder="Avez-vous un code de parainage ?" class="CartPage-ticket-advantageCode-input">
                  <button class="CartPage-ticket-advantageCode-button" data="trigger">VALIDER</button>
                  <span class="CartPage-ticket-tooltip">i</span>
                </div>


                <ul class="list-inline pull-right">
                    <li><button type="button" class="btn btn-default prev-step">Retourner</button></li>
                    <li><button type="button" class="btn btn-default next-step">Skip</button></li>
                    <li><button type="button" class="btn-info-full next-step  actions_steps_option">Cliquer pour continuer</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="complete">
                <h3>Merci d'avoir rejoins la communauté</h3>
                <p>Une équipe analyse votre inscription pour validation définitive. Sous 24h-72h, votre compte sera activé. Merci</p>
            </div>
            <div class="clearfix"></div>
        </div>
        
    </div>

   
  </div>
</div>

  <!-- PROFIL SCRIPTS -->
    <script src="./assets/js/bookcast.js"></script> 
      
       <!-- jquery-2.1.3.min js -->
       <script type="text/javascript" src='./assets/js/jquery-3.2.1.min.js'></script>
    <!-- Vendors -->
      <script type="text/javascript" src='./assets/js/sliderhome.min.js'></script>
      <!-- Vendors -->
      <script type="text/javascript" src='./assets/js/mainsliderhome.js'></script>
    


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.11/typed.min.js"></script>
      <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.3/vue.min.js'></script>  

      <!-- TYPINGS SCRIPTS -->
    <script src="./assets/js/typings.js"></script> 

    <!-- JQUERY SCRIPTS -->
    <script src="./assets/js/vendors/jquery-3.2.1.min.js"></script>

    <!-- BOOTSTRAP SCRIPTS -->
    <script src="./assets/js/vendors/bootstrap.bundle.min.js"></script>

    <!-- SPARKLINE -->
    <script src="./assets/js/vendors/jquery.sparkline.min.js"></script>

    <!-- CHART-CIRCLE -->
    <script src="./assets/js/vendors/circle-progress.min.js"></script>

    <!-- RATING STAR -->
    <script src="./assets/plugins/rating/jquery.rating-stars.js"></script>

    <!-- CHARTJS CHART -->
    <script src="./assets/plugins/chart/Chart.bundle.js"></script>
    <script src="./assets/plugins/chart/utils.js"></script>

    <!-- C3.JS CHART PLUGIN -->
    <script src="./assets/plugins/charts-c3/d3.v5.min.js"></script>
    <script src="./assets/plugins/charts-c3/c3-chart.js"></script>

    <!-- INPUT MASK PLUGIN-->
    <script src="./assets/plugins/input-mask/jquery.mask.min.js"></script>

    <!-- CHARTJS CHART -->
    <script src="./assets/plugins/chart/Chart.bundle.js"></script>
    <script src="./assets/plugins/chart/utils.js"></script>

        <!-- CUSTOM SCROLLBAR -->
    <script src="./assets/plugins/mcustomscrollbar/jquery.mCustomScrollbar.concat.min.js"></script>

    <!--Side-menu js-->
    <script src="./assets/plugins/side-menu/sidemenu.js"></script>

    <!-- STICKY JS-->
    <script src="./assets/js/sticky.js"></script>
    <script src="./assets/js/horizontal-sticky.js"></script>

    <!-- Perfect scroll bar js-->
    <script src="./assets/plugins/pscrollbar/perfect-scrollbar.js"></script>

    <!-- PIETY CHART -->
    <script src="./assets/plugins/peitychart/jquery.peity.min.js"></script>
    <script src="./assets/plugins/peitychart/peitychart.init.js"></script>

    <!-- RIGHT-MENU JS -->
    <script src="./assets/plugins/sidebar/sidebar.js"></script>

    <!-- LEFTSIDEMENU PLUGIN -->
    <script src="./assets/plugins/jquery-jside-menu-master/js/jquery.jside.menu.js"></script>

    <!-- HORIZONTAL-MENU JS -->
    <script src="./assets/plugins/horizontal-menu/horizontal-menu.js"></script>
    <script src="./assets/plugins/jquery-jside-menu-master/docs/demo-only.js"></script>

    <!-- INDEX-SCRIPTS -->
        <script src="./assets/js/index3.js"></script>

    <!--CUSTOM JS -->
    <script src="./assets/js/custom.js"></script>
   

    <!-- SELECT2 PLUGIN -->
    <script src="./assets/plugins/select2/select2.full.min.js"></script>

     

    <!-- TIMEPICKER JS -->
    <script src="./assets/plugins/time-picker/jquery.timepicker.js"></script>
    <script src="./assets/plugins/time-picker/toggles.min.js"></script>

    <!-- DATEPICKER JS -->
    <script src="./assets/plugins/spectrum-date-picker/spectrum.js"></script>
    <script src="./assets/plugins/spectrum-date-picker/jquery-ui.js"></script>
    <script src="./assets/plugins/input-mask/jquery.maskedinput.js"></script>

    <!-- DATA TABLE -->
    <script src="./assets/plugins/datatable/jquery.dataTables.min.js"></script>
    <script src="./assets/plugins/datatable/dataTables.bootstrap4.min.js"></script>

    <!-- SELECT2 JS -->
    <script src="./assets/js/select2.js"></script>

    <!-- FILE UPLOADES JS -->
        <script src="./assets/plugins/fileuploads/js/dropify.min.js"></script>
        <script src="./assets/plugins/fileuploads/js/file-upload.js"></script> 
 

    <!-- MULTI SELECT JS-->
    <script src="./assets/plugins/multipleselect/multiple-select.js"></script>
    <script src="./assets/plugins/multipleselect/multi-select.js"></script>

    <!-- SWEET-ALERT PLUGIN -->
    <script src="./assets/plugins/sweet-alert/sweetalert.min.js"></script>
    

    <script type="text/javascript">
        $(".sexytabs").tabs({ 
  show: { effect: "slide", direction: "left", duration: 200, easing: "easeOutBack" } ,
  hide: { effect: "slide", direction: "right", duration: 200, easing: "easeInQuad" } 
});
      </script>  


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
 
 
</body>
</html>
