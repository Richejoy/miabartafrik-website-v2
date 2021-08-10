<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="utf-8">
		<meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
		<meta name="description" content="BookCast -  Miabart Afrik">
		<meta name="author" content="Miabart Afrik">
		<meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne, ">

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon"/>

		<!-- Title -->
		<title>Accueil | MiabartAfrik.com</title>

		<!-- Bootstrap css-->
		<link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

		<!-- Icons css-->
		<link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
		<link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
		<link href="{{ asset('public/assets/css/icon-list.css') }}" rel="stylesheet" />

		<!-- Style css-->
		<link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/preloader_miabartAfrik.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
		<link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">

		<!-- Color css-->
		<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('public/assets/css/colors/color.css') }}">

		<!-- Select2 css -->
		<link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">


		<!-- Internal Owl Carousel css-->
		<link href="{{ asset('public/assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

		<!-- Sidemenu css-->
		<link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">
	</head>

	<body class="horizontalmenu">

		<!-- Loader -->
		<div id="global-loader" class="miabartafrik_preloader_page">
			<img class="miabartafrik_preloader_logo" src="../assets/img/preloader.jpg">
		    <div class="miabartafrik_preloader_previewArea">
		        <div class="miabartafrik_preloader_ballPulse">
		            <div></div>
		            <div></div>
		            <div></div>
		        </div>
		    </div>
		</div> 
		<!-- End Loader -->

		<!-- Page -->
		<div class="page">

			<!-- Main Header-->
			<div class="main-header side-header">
				<div class="container">
					<div class="main-header-left">
						<a class="main-header-menu-icon d-lg-none" href="" id="mainNavShow"><span></span></a>
						<a class="main-logo" href="index.html">
							<img src="../assets/img/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
							<img src="../assets/img/brand/logo-light.png" class="header-brand-img desktop-logo theme-logo" alt="logo">
						</a>
					</div>
					<div class="main-header-center">
						<div class="responsive-logo">
							<a href="index.html"><img src="../assets/img/brand/logo.png" class="mobile-logo" alt="logo"></a>
							<a href="index.html"><img src="../assets/img/brand/logo-light.png" class="mobile-logo-dark" alt="logo"></a>
						</div>
						<div class="input-group">
							<div class="input-group-btn search-panel">
								<select class="form-control select2-no-search">
									<option label="Toutes catégories">
									</option>
									<option value="Books">
										Books
									</option>
									<option value="Castings">
										Castings
									</option>
									<option value="Réseaux artistique">
										Réseaux artistique
									</option>
									<option value="Agenda+">
										Agenda +
									</option>
									<option value="NetConcert">
										NetConcert
									</option>
								</select>
							</div>
							<input type="search" class="form-control rounded-0" placeholder="Chercher n'importe quoi...">
							<button class="btn search-btn"><i class="fe fe-search"></i></button>
						</div>
					</div>
					<div class="main-header-right">
						<div class="dropdown header-search">
							<a class="nav-link icon header-search">
								<i class="fe fe-search"></i>
							</a>
							<div class="dropdown-menu">
								<div class="main-form-search p-2">
									<div class="input-group">
										<div class="input-group-btn search-panel">
											<select class="form-control select2-no-search">
												<option label="Toutes catégories">
												</option>
												<option value="Books">
													Books
												</option>
												<option value="Castings">
													Castings
												</option>
												<option value="Réseaux artistique">
													Réseaux artistique
												</option>
												<option value="Agenda+">
													Agenda +
												</option>
												<option value="NetConcert">
													NetConcert
												</option>
											</select>
										</div>
										<input type="search" class="form-control" placeholder="Chercher n'importe quoi...">
										<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
									</div>
								</div>
							</div>
						</div>
						<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" height="480" width="640" viewBox="0 0 640 480"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h640v480H0z"/><path fill="#00267f" d="M0 0h213.337v480H0z"/><path fill="#f31830" d="M426.662 0H640v480H426.662z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/french_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Anglais</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/germany_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Allemand</span>
									</div>
								</a>
							 
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/spain_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Espagnol</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex">
							<a class="nav-link icon full-screen-link" href="">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">Vous avez 1 notification non lue <span class="badge badge-pill badge-primary ml-3">Voir tout </span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Féliciter  <strong>Folly ADOKPO</strong> pour le démarrage d'un nouveau film </p><span>15 octobre 12h32 </span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="../assets/img/users/2.jpg"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> Nouveau message reçu </p><span>13 octobre 02:56 </span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/3.jpg"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> ajouter une nouvelle photo à sa galerie</p><span>12 octobre 22h40 </span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">Afficher toutes les notifications </a>
								</div>
							</div>
						</div>
						<div class="main-header-notification">
							<a class="nav-link icon" href="chat.html">
								<i class="fe fe-message-square header-icons"></i>
								<span class="badge badge-success nav-link-badge">6</span>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="">
								<span class="main-img-user" ><img alt="avatar" src="../assets/img/artiste/artiste3-1.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Agbodjan Tonou</h6>
									<p class="main-notification-text">Actrice</p>
								</div>
								<a class="dropdown-item border-top" href="profile.html">
									<i class="fe fe-user"></i> Mon profil 
								</a>
								<a class="dropdown-item" href="abonnement.html">
									<i class="fe fe-phone-call"></i> Mon abonnement 
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-phone-call"></i> Editer le profil 
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-settings"></i> Paramètres du compte 
								</a> 
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-compass"></i> Activité 
								</a>
								<a class="dropdown-item" href="signin.html">
									<i class="fe fe-power"></i> Se déconnecter 
								</a>
							</div>
						</div>
						<div class="dropdown d-md-flex header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<i class="fe fe-users color_miabart header-icons"></i>
							</a>
						</div>
						<button class="navbar-toggler navresponsive-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
							aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
							<i class="fe fe-eye header-icons navbar-toggler-icon"></i>
						</button><!-- Navresponsive closed -->
					</div>
				</div>
			</div>
			<!-- End Main Header-->

			<!-- Mobile-header -->
			<div class="mobile-main-header">
				<div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
					<div class="collapse navbar-collapse" id="navbarSupportedContent-4">
						<div class="d-flex order-lg-2 ml-auto">
							<div class="dropdown header-search">
								<a class="nav-link icon header-search">
									<i class="fe fe-search"></i>
								</a>
								<div class="dropdown-menu">
									<div class="main-form-search p-2">
										<div class="input-group">
											<div class="input-group-btn search-panel">
												<select class="form-control select2-no-search">
													<option label="Toutes categories">
													</option>
													<option value="Books">
													Books
													</option>
													<option value="Castings">
														Castings
													</option>
													<option value="Réseaux artistique">
														Réseaux artistique
													</option>
													<option value="Agenda+">
														Agenda +
													</option>
													<option value="NetConcert">
														NetConcert
													</option>
												</select>
											</div>
											<input type="search" class="form-control" placeholder="Search for anything...">
											<button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg></button>
										</div>
									</div>
								</div>
							</div>
							<div class="dropdown main-header-notification flag-dropdown">
							<a class="nav-link icon country-Flag">
								<svg xmlns="http://www.w3.org/2000/svg" height="480" width="640" viewBox="0 0 640 480"><g fill-rule="evenodd" stroke-width="1pt"><path fill="#fff" d="M0 0h640v480H0z"/><path fill="#00267f" d="M0 0h213.337v480H0z"/><path fill="#f31830" d="M426.662 0H640v480H426.662z"/></g></svg>
							</a>
							<div class="dropdown-menu">
								<a href="#" class="dropdown-item d-flex ">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/french_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Anglais</span>
									</div>
								</a>
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/germany_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Allemand</span>
									</div>
								</a>
							 
								<a href="#" class="dropdown-item d-flex">
									<span class="avatar  mr-3 align-self-center bg-transparent"><img src="../assets/img/flags/spain_flag.jpg" alt="img"></span>
									<div class="d-flex">
										<span class="mt-2">Espagnol</span>
									</div>
								</a>
							</div>
						</div>
						<div class="dropdown ">
							<a class="nav-link icon full-screen-link">
								<i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
								<i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
							</a>
						</div>
						<div class="dropdown main-header-notification">
							<a class="nav-link icon" href="">
								<i class="fe fe-bell header-icons"></i>
								<span class="badge badge-danger nav-link-badge">4</span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<p class="main-notification-text">Vous avez 1 notification non lue <span class="badge badge-pill badge-primary ml-3">Voir tout </span></p>
								</div>
								<div class="main-notification-list">
									<div class="media new">
										<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/5.jpg"></div>
										<div class="media-body">
											<p>Félicitez <strong>Olivia James</strong> pour le nouveau modèle qui commence</p><span>le 15 octobre à 12h32</span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user"><img alt="avatar" src="../assets/img/users/2.jpg"></div>
										<div class="media-body">
											<p><strong>Joshua Gray</strong> Nouveau message reçu </p><span>13 octobre 02:56 </span>
										</div>
									</div>
									<div class="media">
										<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/3.jpg"></div>
										<div class="media-body">
											<p><strong>Elizabeth Lewis</strong> ajout d'une nouvelle version du calendrier </p><span>12 octobre 22h40 </span>
										</div>
									</div>
								</div>
								<div class="dropdown-footer">
									<a href="#">Afficher toutes les notifications</a>
								</div>
							</div>
						</div>
						<div class="main-header-notification mt-2">
							<a class="nav-link icon" href="chat.html">
								<i class="fe fe-message-square header-icons"></i>
								<span class="badge badge-success nav-link-badge">6</span>
							</a>
						</div>
						<div class="dropdown main-profile-menu">
							<a class="d-flex" href="#">
								<span class="main-img-user" ><img alt="avatar" src="../assets/img/users/agbodjanTonou.jpg"></span>
							</a>
							<div class="dropdown-menu">
								<div class="header-navheading">
									<h6 class="main-notification-title">Agbodjan Tonou</h6>
									<p class="main-notification-text">Actrice</p>
								</div>
									<a class="dropdown-item border-top" href="profile.html">
									<i class="fe fe-user"></i> Mon profil 
								</a>
								<a class="dropdown-item" href="abonnement.html">
									<i class="fe fe-phone-call"></i> Mon abonnement 
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-phone-call"></i> Editer le profil 
								</a>
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-settings"></i> Paramètres du compte 
								</a> 
								<a class="dropdown-item" href="profile.html">
									<i class="fe fe-compass"></i> Activité 
								</a>
								<a class="dropdown-item" href="signin.html">
									<i class="fe fe-power"></i> Se déconnecter 
								</a>
							</div>
						</div>
						<div class="dropdown  header-settings">
							<a href="#" class="nav-link icon" data-toggle="sidebar-right" data-target=".sidebar-right">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-align-right header-icons"><line x1="21" y1="10" x2="7" y2="10"></line><line x1="21" y1="6" x2="3" y2="6"></line><line x1="21" y1="14" x2="3" y2="14"></line><line x1="21" y1="18" x2="7" y2="18"></line></svg>
							</a>
						</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Mobile-header closed -->

			<!-- Horizonatal menu-->
			<div class="main-navbar hor-menu sticky">
				<div class="container">
					<ul class="nav">
						<li class="nav-item active">
							<a class="nav-link" href="index.html"><i class="ti-home"></i>Accueil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="books.html"><i class="si si-people"></i>Books</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="castings.html"><i class="ti-video-clapper"></i>Castings</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="reseaux.html"><i class="si si-graduation"></i>Réseaux</a>							
						</li>
						<li class="nav-item">
							<a class="nav-link" href="agendaplus.html"><i class="ti-announcement"></i>Agenda+</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="votes.html"><i class="ti-cup"></i>Votes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="netconcert.html"><i class="fe fe-tv"></i>NetConcert</a> 
						</li>
						<li class="nav-item">
							<a class="nav-link" href="actualite.html"><i class="ti-face-smile"></i>Actualités</a>							
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href=""><i class="si si-grid"></i>Nos Produits</a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="">BookCast</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="boutikart.html">BoutkArt</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="bonadress.html">Bon-Adress</a>
								</li>
								
							</ul>
						</li>
					</ul>
				</div>
			</div>
			<!--End  Horizonatal menu-->

			

			<!-- Main Content-->
			<div class="main-content pt-0">
				<!-- WELCOME SECTION -->  
			<section id="welcome-section" class="grid"> 
			    
			  <div>
			    <h2 data-en class="member_info">Acteurs,<br>chanteurs, <br>producteurs, <br>danseurs, <span class="h2color">&</span>...</h2> 
			  </div>
			  
			      <div class="vertical-line"></div>
			  
			  <div class="welc_h1">
			    <h1 data-en class="vivez_art">Vivez,<br>de votre<br>Art<span class="h1color">.</span></h1> 
			  </div>
			  
			</section>
			<!-- END WELCOME SECTION -->

				<div class="container">


					<div class="inner-body">

						<!-- Page Header --> 

							<section style="margin-bottom: 0.8rem;">
						    <div class="rt-container">
						          <div class="col-rt-12">
						              
						              <article class="textIntroBonAdress">
										  <h1>Partenaires</h1>
										  <p>Sponsors</p>
										</article>
						               <section class="customer-logos slider">
						                  <div class="slide">
						                  	<img src="../assets/img/partner/neworld.jpg">
						                  </div>
						                  <div class="slide">
						                  	<img src="../assets/img/partner/zephyr.jpg">
						                  </div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/blue-tech-logo_1103-822.jpg"></div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/colors-curl-logo-template_23-2147536125.jpg"></div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/abstract-cross-logo_23-2147536124.jpg"></div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/football-logo-background_1195-244.jpg"></div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/background-of-spots-halftone_1035-3847.jpg"></div>
						                  <div class="slide"><img src="https://image.freepik.com/free-vector/retro-label-on-rustic-background_82147503374.jpg"></div>
						               </section>
						              
								</div>
						    </div>
						</section>
							 
							  
						<!-- End Page Header -->

						


						<!-- Row -->
						<div class="row row-sm">

							<!-- LEFT ASIDE -->
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">
									<div class="card custom-card">
										<div class="right_sidebar component-item">
											<div class="sidebar_titre">
												<h4>NetConcert</h4>
												<a href="">Voir tout</a>
											</div>
											<div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik"> 

										        <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src="" frameborder="0" allowTransparency="true" allowfullscreen data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&autoplay=1&modestbranding=1&rel=0&playlist=VXe_2zFCyGw&loop=1&mute=1" allow="autoplay; fullscreen"></iframe>
										     
										        <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik" style="background-image:url(../assets/img/artiste/slim-girl.jpg);">
										          <svg class="play-vid" viewBox="0 0 100 100">
										            <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
										         C97.3,23.7,75.7,2.3,49.9,2.5" />
										            <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
										         C97.3,23.7,75.7,2.3,49.9,2.5" />
										            <path class="vid-icon" fill="white" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
										          </svg>
										        </button>
										      </div>
										</div>
									</div>

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Derniers inscrits</h4>
											<a href="">Listes des artistes</a>
										</div>
										<div class="right_sidebar">
											<div class="booksId">
									                   
											 <div class="profileImage">
											 	<img src="../assets/img/artiste/team-2.jpg" alt="team">
											 </div>

											 <div class="inner_booksId">

												 	<div class="info_booksId">	

							                            <div class="detail-area-header">
							                            	<a href="/artisteName" class="ambassadeurSign" style="display: ;">
							                          		<img src="../assets/img/icons/iconambassadeur.png" alt="ambassadeur BookCast" class="ambassadeurSRound">
							                          	</a>
							                            	<div class="main_profilbook_header"> 	 
																<div class="main_book_name">
																  	<h6><a href="book_view.html">Nom de l'artiste</a> </h6>
																	<small class="mr-3">Actrice, Modèle photo, Danseuse</small>
																</div>															
															</div>


															<div class="main_profilbook_header"> 
																<nav class="contact-info">
																	<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Ghana"><i class="flag flag-gh"></i></a>
																	<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
																	</a>
																	<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a>
																	<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Inviter"><i class="fe fe-user-plus"></i></a>
																	<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></a>
																</nav>																
															</div>
							                            </div>
						                        	</div>						                      		 
							                    </div>   
									        </div> 
										</div>
									</div>
									<!-- end info -->

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Castings à la Une</h4>
											<a href="">Plus de castings</a>
										</div>
										<div class="right_sidebar">
											<div class="castingart_newByOsez">

											  <div class="castingart_newByOsez__side castingart_newByOsez__side--front">
											    <div class="castingart_newByOsez__img" style="background-image: url(../assets/img/casting/studio-dance-photo.jpg);">
											      
											    </div>

											    <h4 class="castingart_newByOsez__text">
											      <span class="castingart_newByOsez__text-span">Danse &amp; Musique</span>
											    </h4>

											    <div class="info_container_agendaplus">
													<div class="titre">Casting de break dance pour groupe ou solo.</div> 
														 
													<div class="detail-buttons"> 
	                                                   <button class="detail-button">  
	                                                    <a href="castingartview.html">Afficher le casting</a>
	                                                   </button>
	                                                   <button class="mr_publier">  
	                                                    <div class="main-img-user online">
															<img alt="avatar" class="radius" src="../assets/img/artiste/agbodjanTonou.jpg">
														</div>
	                                                   </button>
	                                                </div>

													<div class="main_profilbook_header"> 
														<nav class="contact-info">
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
															</a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a> 
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Inviter"><i class="fe fe-user-plus"></i></a>
															<a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></a>
														</nav>																
													</div>
												</div>
											 </div>

											</div>
										</div>
									</div>
									<!-- end info -->

									<!-- info -->
									<div class="card custom-card"> 
										<div class="sidebar_titre">
											<h4>Votes en avant</h4>
											<a href="">Plus de vote</a>
										</div> 
										<div class="right_sidebar">
											<div class="booksId">
									                   
												<div class="profileImage"><img src="../assets/img/artiste/team-6.jpg" alt="team"></div>
						                      
						                      	<div class="inner_booksId">

												 	<div class="info_booksId">						                               
							                            <div class="detail-area-header">
							                            	<div class="main_profilbook_header"> 	 
																<div>
																	<span>25452 </span>
																	<div class="el-divider el-divider--vertical"></div>
																	<span class="voterArtiste">Voter</span>
																	<div class="el-divider el-divider--vertical"></div>
																	<span class="neplusvoterArtiste">Ne plus voter</span>
																</div>																
															</div>

															<div class="main_profilbook_header">
																<div class="main-imgvotebook-user online">
																	<img alt="avatar" class="radius" src="../assets/img/artiste/agbodjanTonou.jpg">
																</div> 
						 
																<nav class="nav"> 		
																	<a class="nav-link" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal"></i>
																		</a>
																	 									 
																	<a class="nav-link" data-toggle="tooltip" href="" title="" data-original-title="Appeler"><i class="fe fe-phone-call"></i></a>
																	<a class="nav-link" data-toggle="tooltip" href="" title="" data-original-title="Envoyer un message"><i class="fe fe-mail"></i></a>
																	<a class="nav-link" data-toggle="tooltip" href="" title="" data-original-title="Ajouter Contact"><i class="fe fe-user-plus"></i></a>
																	<a class="nav-link" data-toggle="tooltip" href="" title="" data-original-title="Voir ce book"><i class="fe fe-eye"></i></a>											 
																</nav>
																
															</div>
							                            </div>
						                        	</div>
							                      		
							                          
							                    </div> 
						                       
						                    </div>
										</div>
									</div>
									<!-- end info -->


								</div>
							</div>
							<!-- END LEFT ASIDE -->


							<!-- BODY -->
							<div class="col-xl-6 col-lg-12"> 

								 <div class="main-content-body tab-pane border-top-0 active" id="timeline">
									<div class="post_news">
										<div class="main-content-body main-content-body-profile">
											<div class="main-profile-body p-0">
												<div class="row row-sm">
													<div class="col-12">

														<!-- Post container -->
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
															    	Découvrez l'avant goût de mon prochain film <span>Waka</span>  du réalisateur Steven Af. <a href="">#film africain</a> <a href="">#long métrage</a> <a href="">#réalisation</a>
															    </p>
																<div class="row row-sm">
																	<div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik"> 

															        <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src="" allowtransparency="true" allowfullscreen="" data-src="https://www.youtube.com/embed/VXe_2zFCyGw?enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;rel=0&amp;playlist=VXe_2zFCyGw&amp;loop=1&amp;mute=1" allow="autoplay; fullscreen" frameborder="0"></iframe>
															     
															        <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik" style="background-image:url(../assets/img/artiste/slim-girl.jpg);">
															          <svg class="play-vid" viewBox="0 0 100 100">
															            <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
															         C97.3,23.7,75.7,2.3,49.9,2.5"></path>
															            <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
															         C97.3,23.7,75.7,2.3,49.9,2.5"></path>
															            <path class="vid-icon" fill="white" d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z"></path>
															          </svg>
															        </button>
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
														<!-- end Post container -->

														<!-- Post container -->
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
																	<div class="row row-sm">
																	<div class="col">
																	 <img alt="img" class="post_img" src="../assets/img/artiste/reflex-et-vous.jpg"> 

																	 <img alt="img" class="wd-100 post_img" src="../assets/img/media/2.jpg">

																	 <img alt="img" class="wd-100 post_img" src="../assets/img/media/2.jpg"> 
																	 <img alt="img" class="wd-100 post_img" src="../assets/img/media/2.jpg">

																	 <img alt="img" class="wd-100 post_img" src="../assets/img/media/2.jpg"> 
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
																		<h6 class="mb-0 mg-t-10 h6m">16 personnes aiment votre vidéo  </h6> </div>
																	<div class="ml-auto">
																		<div class="dropdown show"> <a class="new" href="JavaScript:void(0);"><i class="far fa-heart mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-comment mr-3"></i></a> <a class="new" href="JavaScript:void(0);"><i class="far fa-share-square"></i></a> </div>
																	</div>
																</div>
															</div>
														</div>							
														<!-- end Post container -->

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



								<button type="button" class="load_more_post">Charger plus </button>
								<!-- end Post container --> 								 
							</div>
							<!-- END BODY -->

							<!-- RIGHT ASIDE -->
							<div class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
								<div class="main-content-left-components">

									<!-- NewsLetter -->
									<div class="custom-card">
										<div class="component-item">
											<div class="right_sidebar">
											<div class="newsletter_form">
											  <header> 
											  	<h1>NewsLetter</h1>
											    <p>Renseignez toute les informations pour recevoir nos news. <a href="">Paramètre</a></p>
											  </header>

											  <div class="form-group text-left"> 
													<label for="profile_phone" class="required-text mg-b-10 label_mba">
														Email
													</label>
													<input class="form-control" placeholder="Entrer votre Email " type="text">
												</div>
											  
											</div>
										</div>
										</div>
									</div>
									<!-- NewsLetter -->
 

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Publicité</h4>
											<a href="">Aller</a>
										</div>
										<div class="right_sidebar">
											<a href=""> <img src="../assets/img/publicite/duchesse.jpg" class="imageaffichepub"></a>
										</div>
									</div>
									<!-- end info -->

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Publicité</h4>
											<a href="">Aller</a>
										</div>
										<div class="right_sidebar">
											<a href=""> <img src="../assets/img/publicite/affiche.jpg" class="imageaffichepub"></a>
										</div>
									</div>
									<!-- end info -->

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Publicité</h4>
											<a href="">Aller</a>
										</div>
										<div class="right_sidebar">
											<a href=""> <img src="../assets/img/publicite/EbA7eBQXsAAmQKi.jpg" class="imageaffichepub"></a>
										</div>
									</div>
									<!-- end info -->

									<!-- info -->
									<div class="card custom-card">
										<div class="sidebar_titre">
											<h4>Publicité</h4>
											<a href="">Aller</a>
										</div>
										<div class="right_sidebar">
											<a href=""> <img src="../assets/img/publicite/operateurs.jpg" class="imageaffichepub"></a>
										</div>
									</div>
									<!-- end info -->


								</div>
							</div>
							<!-- END RIGHT ASIDE -->

						</div>
						<!-- End Row -->
					</div>
				</div>
			</div>
			<!-- End Main Content-->

			<!-- Main Footer--> 
			<div class="main-footer text-center"> 
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span><a href="faqs.html">Faqs</a> | <a href="termes.html">Conditions Générale</a> | <a href="termes.html">Termes</a> </span>
						</div>
					</div>
				</div>
			</div>
			<!--End Footer-->
			
			<!-- copyright_mba--> 
			<div class="copyright_mba text-center"> 
				<div class="container">
					<div class="row row-sm">
						<div class="col-md-12">
							<span>Copyright © 2021 <a href="#">BookCast</a>. Conçu par <a href="https://www.osezconsult.com/">Osez Consult</a> Tous les droits sont réservés .</span>
						</div>
					</div>
				</div>
			</div>
			<!--End copyright_mba-->

			<!-- Sidebar -->
			<div class="sidebar sidebar-right sidebar-animate">
				<div class="sidebar-icon">
					<a href="#" class="text-right float-right text-dark fs-20" data-toggle="sidebar-right" data-target=".sidebar-right"><i class="fe fe-x"></i></a>
				</div>
				<div class="sidebar-body">
					<h5>MES CONTACTS</h5>

					<div class="card main-content-left main-content-left-contacts">
						<div class="tab-menu-heading">
							<div class="tabs-menu1 ">
								<!-- Tabs -->
								<ul class="nav panel-tabs main-nav-line main-nav-line-chat d-flex pl-3 ">
									<li><a href="#all-contact" class="nav-link active mr-3" data-toggle="tab">Tout</a></li>
									<li><a href="#fav-contact" class="nav-link" data-toggle="tab">Favorits</a></li>
								</ul>
							</div>
						</div>
						<div class="panel-body tabs-menu-body p-0">
							<div class="tab-content">
								<div class="tab-pane active" id="all-contact">
									<div class="main-contacts-list" id="mainContactList">
										<div class="main-contact-label">
											A
										</div>
										<div class="main-contact-item selected">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/2.jpg"></div>
											<div class="main-contact-body">
												<h6>Abla Dotse</h6><span class="phone">+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/3.jpg"></div>
											<div class="main-contact-body">
												<h6>Arabia AMEGANVI</h6><span>archie@cantones.com</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-avatar online">
												A
											</div>
											<div class="main-contact-body">
												<h6>Allan Rey Palban</h6><span>allanr@palban.com</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-avatar bg-secondary">
												A
											</div>
											<div class="main-contact-body">
												<h6>Aileen Mante</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											B
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/4.jpg"></div>
											<div class="main-contact-body">
												<h6>Brandon Dilao</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/5.jpg"></div>
											<div class="main-contact-body">
												<h6>Britney Labares</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-avatar bg-danger">
												B
											</div>
											<div class="main-contact-body">
												<h6>Brateyley Cruz</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											C
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/6.jpg"></div>
											<div class="main-contact-body">
												<h6>Camille Audrey</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/7.jpg"></div>
											<div class="main-contact-body">
												<h6>Christian Lerio</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/8.jpg"></div>
											<div class="main-contact-body">
												<h6>Christopher Segovia</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											D
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/9.jpg"></div>
											<div class="main-contact-body">
												<h6>Darius Clayton</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/10.jpg"></div>
											<div class="main-contact-body">
												<h6>Dyanne Aceron</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/11.jpg"></div>
											<div class="main-contact-body">
												<h6>Divina Gracia</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
									</div>
								</div>
								<div class="tab-pane" id="fav-contact">
									<div class="main-contacts-list" id="mainContactList1">
										<div class="main-contact-label">
											A
										</div>
										<div class="main-contact-item selected">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/7.jpg"></div>
											<div class="main-contact-body">
												<h6>Anna Sthesia</h6><span class="phone">+228-534-567-456</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/8.jpg"></div>
											<div class="main-contact-body">
												<h6>Anna Mull</h6><span>annamul@gmail.com</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/4.jpg"></div>
											<div class="main-contact-body">
												<h6>AlFredo</h6><span>alfredo@gmail.com</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/11.jpg"></div>
											<div class="main-contact-body">
												<h6>Aileen Mante</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											B
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/5.jpg"></div>
											<div class="main-contact-body">
												<h6>Bernadette</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/9.jpg"></div>
											<div class="main-contact-body">
												<h6>Barry Mundy</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-avatar bg-danger">
												B
											</div>
											<div class="main-contact-body">
												<h6>Barb Akew</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											C
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/12.jpg"></div>
											<div class="main-contact-body">
												<h6>Charles</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/8.jpg"></div>
											<div class="main-contact-body">
												<h6>Christopher</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/3.jpg"></div>
											<div class="main-contact-body">
												<h6>Connor</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-label">
											D
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/1.jpg"></div>
											<div class="main-contact-body">
												<h6>Deirdre</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user"><img alt="avatar" src="../assets/img/users/8.jpg"></div>
											<div class="main-contact-body">
												<h6>Dorothy</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
										<div class="main-contact-item">
											<div class="main-img-user online"><img alt="avatar" src="../assets/img/users/7.jpg"></div>
											<div class="main-contact-body">
												<h6>AVORGNO YAWO</h6><span>+228 90 34 05 34</span>
											</div>
											<a class="main-contact-star" href="">
												<i class="fe fe-star mr-1 text-warning"></i>
												<i class="fe fe-phone-call mr-1"></i>
												<i class="fe fe-eye"></i>
											</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>					
			</div>
			<!-- End Sidebar -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>


		<!-- Jquery js-->
		<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script> 

		<!-- BookCast js-->
		<script src="{{ asset('public/assets/js/bookcast.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Perfect-scrollbar js -->
		<script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

		<!-- Sidebar js -->
		<script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

		<!-- Select2 js-->
		<script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

		<!-- Sticky js -->
		<script src="{{ asset('public/assets/js/sticky.js') }}"></script>

		<!-- Custom js -->
		<script src="{{ asset('public/assets/js/custom.js') }}"></script>


		<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js'></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

	</body>
</html>