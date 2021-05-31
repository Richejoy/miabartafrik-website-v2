<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Finaliser l'inscription - Plateforme artistique</title>
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
  <div class="inscription_Inscrit_bookArt-image" style="background: url(./assets/images/home/completregisterphoto.jpg) no-repeat center / cover;">
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
                    <a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" title="Step 1">
                        <span class="round-tab">
1
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" title="Step 2">
                        <span class="round-tab">
2
                        </span>
                    </a>
                </li>
                <li role="presentation" class="disabled">
                    <a href="#step3" data-toggle="tab" aria-controls="step3" role="tab" title="Step 3">
                        <span class="round-tab">
3
                        </span>
                    </a>
                </li>

                <li role="presentation" class="disabled">
                    <a href="#complete" data-toggle="tab" aria-controls="complete" role="tab" title="Complete">
                        <span class="round-tab">
4
                        </span>
                    </a>
                </li>
            </ul>
        </div>

        
        <div class="tab-content">
            <div class="tab-pane active" role="tabpanel" id="step1">
            <p class="text-mutedinscrit">COMPLETER VOTRE PROFILE </p>

            <div class="row">
              
              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-7 animated bounceInDown"> 

                <div class="grid_connexionBookcast">

                  <form action="" method="POST" class="form_connexionBookcast login_connexionBookcast">

                     <div class="form__field">
                      <label for="login__username">
                        <i class="icon icon-paper-clip" data-toggle="tooltip" title="" data-original-title=""></i>
                        <span class="hidden">Photo de profile </span></label>
                      <input autocomplete="username" id="login__username" type="file" name="username" class="form__input" placeholder="Logo de profile" required="">
                    </div> 

                    <div class="form__field">
                      <label for="login__username">
                        <i class="mdi mdi-account-edit" data-toggle="tooltip" title="" data-original-title=""></i>
                        <span class="hidden">Société ou école référente </span></label>
                      <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="Société ou école référente" required="">
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
                        <span class="hidden">N° RCCM </span></label>
                      <input autocomplete="username" id="login__username" type="text" name="username" class="form__input" placeholder="N° RCCM" required="">
                    </div> 

                    <div class="form__field">
                      <label for="login__username">

                        <i class="icon icon-symbol-female iconBookconnex" data-toggle="tooltip" title="" data-original-title=""></i>
                        <span class="hidden">Votre type d'activité </span></label>
                      <select class="select_on_bookcast">  
                            <option>Votre type d'activité</option>
                            <option>Administrateur</option>
                            <option>Agent artistique</option>
                            <option>Assistant de casting</option>
                            <option>Assistant de production</option>
                            <option>Assistant de postproduction</option>
                            <option>Assistant de réalisation</option>
                            <option>Chargé de communication-RP</option>
                            <option>Chargé de production</option>
                            <option>Chef de file</option>
                            <option>Chargé de postproduction</option>
                            <option>Costumière-Habilleuse</option>
                            <option>Directeur de casting</option> 
                            <option>Directeur musical</option> 
                            <option>Directeur de production</option> 
                            <option>Directeur de postproduction</option> 
                            <option>Enseignant art lyrique</option> 
                            <option>Enseignant cinéma</option> 
                            <option>Enseignant comédie musicale</option> 
                            <option>Enseignant théâtre</option> 
                            <option>Etudiant en mise en scène</option> 
                            <option>Etudiant en réalisation</option> 
                            <option>Producteur</option> 
                            <option>Réalisateur</option> 
                            <option>Scénariste</option> 
                            <option>Scripte</option> 
                            <option>Secrétaire de production</option> 
                            <option>Autre</option> 

                        
                       </select>
                    </div>

                    <div class="form_steps_option-row animated bounceInDown">
                                  <label for="">
                                    Domaines d'activité :
                                  </label>

                                  <div class="row">

                                    <div class="col-lg-6">

                                      <ul>
                                     <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Cinéma</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox">
                                    <div for="c1" class="labeloption">Publicité</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Théâtre</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Evènementiel</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Presse</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Réalisateur de Showreel</div>
                                    </li> 


                                    
        
                                  </ul>

                                    </div>

                                    <div class="col-lg-6">

                                      <ul>

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Télévision</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Radio</div>
                                    </li> 
                                      
      

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Comédie musicale</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Opéra</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Web</div>
                                    </li> 

                                    <li>
                                    <input class="inputbookcast2021" id="c1" type="checkbox"> 
                                    <div for="c1" class="labeloption">Autre</div>
                                    </li> 
        
                                  </ul>

                                    </div>

                                  </div>
                                  

                                  
                                    
                              </div>
     

                    
                  <p></p>

                  </form>

                </div> 
              </div>

              <div class="col-sm-12 col-md-12 col-lg-6 col-xl-5 animated bounceInDown">

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

            </div>
                <ul class="list-inline pull-right">
                    <li><button type="button" class="next-step actions_steps_option">Cliquer pour continuer</button></li>
                </ul>
            </div>
            <div class="tab-pane" role="tabpanel" id="step2">
            <p class="text-mutedinscrit">DONATION </p>

            <p class="info big strong normal">Visiteurs professionnels, Miabartafrik.com a besoin de vos contributions pour perdurer et vous offrir les meilleurs services.</p>
             <p class="info big normal">Derrière ce site, il y a une équipe qui travaille. Vous avez besoin de nous, et nous avons besoin de vous.</p>
             <p class="info big normal">L'inscription est gratuite mais vous pouvez nous aider en versant une contribution annuelle du montant que vous déterminerez.</p>

            <div class="separatorTitle animated bounceInDown">Montant de votre contribution annuelle</div>

            <div class="row">
                  
                <div class="col">

                        <!-- Type Contribution 01 -->
                         <div class="contributionannuelle animated bounceInDown">
                          <div class="pricingTable-firstTable_table__getstart">
                             <input class="inputbookcast2021"  id="r1" type="radio" name="radio" value="1">
                            <label for="r1"> Montant libre</label>
                          </div>

                          <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xl-12"> 

                              <div class="form_steps_option-row animated bounceInDown">
                                  <label for="">
                                    Devise
                                  </label>
                                   <select class="select_on_bookcast">
                                    <option>Votre devise</option>
                                    <option>EURO</option>
                                    <option>CFA(XOF)</option>
                                    <option>DOLLARD</option>
                                   </select>
                                </div>

                                <div class="form_steps_option-holder animated bounceInDown">
                                  <label for="">
                                  Montant libre *
                                  </label>
                                  <input type="text" class="form_steps_option-control">
                                </div>  

                            </div>  
                         </div>

                         </div>

                         <!-- Type Contribution 02 -->

                </div>

                <div class="col">
                  <div class="contributionannuelle animated bounceInDown">
                          <div class="pricingTable-firstTable_table__getstart">
                             <input class="inputbookcast2021"  id="r2" type="radio" name="radio" value="2">
                            <label for="r2">CHF 290</label>
                          </div>

                          <div class="row">
                             
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-12">
                              <P>(Votre page de présentation dans notre page "Réseau artistique" et affichage de votre logo sur le site)
                               </P> 
                            </div> 
                         </div>

                         </div>
                  
                </div>

                <div class="col">
                   <div class="contributionannuelle animated bounceInDown">
                          <div class="pricingTable-firstTable_table__getstart">
                             <input class="inputbookcast2021"  id="r3" type="radio" name="radio" value="3">
                            <label for="r3">Sans contribution</label>
                          </div>

                          <div class="row">
                             
                            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                              <P>(concerne également les collaborateurs des sociétés partenaires)
                               </P> 
                            </div> 
                         </div>

                         </div>
                  
                </div>


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
                    <li><button type="button" class="btn-info-full next-step actions_steps_option">Cliquer pour continuer</button></li>
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
