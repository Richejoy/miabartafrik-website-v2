<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="description" content="BookCast -  Miabart Afrik">
    <meta name="author" content="Miabart Afrik">
    <meta name="keywords" content="book artiste, castings artistique, agenda plus, concert en ligne">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon -->
	<link rel="icon" href="{{ asset('public/assets/img/brand/favicon.ico') }}" type="image/x-icon"/>

	<!-- Title -->
	<title>{{ pageTitle($title) }} | Utilisateur | {{ config('app.name') }}</title>

	<link href="{{ asset('public/assets/css/preloader_miabartAfrik.css') }}" rel="stylesheet">

	<!-- Bootstrap css-->
	<link href="{{ asset('public/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"/>

	<!-- Icons css-->
	<link href="{{ asset('public/assets/plugins/web-fonts/icons.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/plugins/web-fonts/font-awesome/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/plugins/web-fonts/plugin.css') }}" rel="stylesheet" />
	<link href="{{ asset('public/assets/css/icon-list.css') }}" rel="stylesheet" />

	<!-- Style css-->		 
	<link href="{{ asset('public/assets/css/bookcast.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/skins.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/dark-style.css') }}" rel="stylesheet">
	<link href="{{ asset('public/assets/css/colors/default.css') }}" rel="stylesheet">

	<!-- Color css-->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{ asset('public/assets/css/colors/color.css') }}">

	<!-- Select2 css-->
	<link href="{{ asset('public/assets/plugins/select2/css/select2.min.css') }}" rel="stylesheet">

	<!-- Mutipleselect css-->
	<link rel="stylesheet" href="{{ asset('public/assets/plugins/multipleselect/multiple-select.css') }}">

	<!-- Internal TelephoneInput css-->
	<link rel="stylesheet" href="{{ asset('public/assets/plugins/telephoneinput/telephoneinput.css') }}">

	<!-- Sidemenu css-->
	<link href="{{ asset('public/assets/css/sidemenu/sidemenu.css') }}" rel="stylesheet">

    @stack('styles')

    @livewireStyles
</head>

	<body class="main-body leftmenu">

		<x-loader imgLink="{{ auth()->user()->library->remote }}" />

		<!-- Page -->
		<div class="page">

			<!-- Sidemenu -->
			<div class="main-sidebar main-sidebar-sticky side-menu">
				<div class="sidemenu-logo">
					<a class="main-logo" href="index.html">
						<img src="{{ asset('public/assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo" alt="logo">
						<img src="{{ asset('public/assets/img/brand/icon-light.png') }}" class="header-brand-img icon-logo" alt="logo">
						<img src="{{ asset('public/assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
						<img src="{{ asset('public/assets/img/brand/icon.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
					</a>
				</div>
				<div class="main-sidebar-body">
					<ul class="nav">
						<li class="nav-item">
							<a class="nav-link" href="{{ route('bookcast.index') }}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Accueil</span></a>
						</li>

						<li class="nav-header"><span class="nav-label">Tableau de bord</span></li>
						<li class="nav-item">
							<a class="nav-link" href="{{ route('user.index') }}"><span class="shape1"></span><span class="shape2"></span><i class="ti-home sidemenu-icon"></i><span class="sidemenu-label">Tableau de bord</span></a>
						</li>

						<li class="nav-header"><span class="nav-label">Notifications</span></li>
						 
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-bell sidemenu-icon"></i><span class="sidemenu-label">Notifications</span><span class="badge badge-danger side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('notification.index') }}">Reçus</a>
								</li>
							</ul>
						</li>

						<li class="nav-header"><span class="nav-label">Messages</span></li>
						 
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-email sidemenu-icon"></i><span class="sidemenu-label">Messages</span><span class="badge badge-success side-badge">2</span></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('message.index') }}">Reçus</a>
								</li> 
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('message.index') }}">Envoyés</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('message.index') }}">Corbeilles</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('message.index') }}">Brouillons</a>
								</li>
							</ul>
						</li>

						<li class="nav-header"><span class="nav-label">Profil</span></li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-panel sidemenu-icon"></i><span class="sidemenu-label">Profil</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('user.show', ['user' => auth()->id()]) }}">Mon profil</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="{{ route('user.edit', ['user' => auth()->id()]) }}">Editer le profil</a>
								</li>
							</ul>
						</li>

						<li class="nav-header"><span class="nav-label">BookCast</span></li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-people sidemenu-icon"></i><span class="sidemenu-label">Book</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mon-book.html">Mon book</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="contact.html">Mes Contacts</a>
								</li>  
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-video-clapper sidemenu-icon"></i><span class="sidemenu-label">Castings</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cast-encours.html">Mes castings en cours</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="cast-participate.html">Castings participés</a>
								</li> 
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-graduation sidemenu-icon"></i><span class="sidemenu-label">Réseaux artistique</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mes-reseaux.html">Mes réseaux</a>
								</li> 
							</ul>
						</li>

						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-announcement sidemenu-icon"></i><span class="sidemenu-label">Agenda+</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mes-events.html">Mes évènements</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="publier-event.html">Publier un évènement</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="tickets-event.html">Mes tickets</a>
								</li> 
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="ti-cup sidemenu-icon"></i><span class="sidemenu-label">Votes</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mesvotes.html">Mes votes</a>
								</li> 
							</ul>
						</li>
						<li class="nav-item">
							<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-screen-desktop sidemenu-icon"></i><span class="sidemenu-label">NetConcert</span><i class="angle fe fe-chevron-right"></i></a>
							<ul class="nav-sub">
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="fairedirect.html">Faire un direct</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mesnetconcerts.html">Mes netconcerts</a>
								</li>
								<li class="nav-sub-item">
									<a class="nav-sub-link" href="mesgainnetconcert.html">Mes gains</a>
								</li> 
							</ul>
						</li> 						
					</ul>
				</div>
			</div>
			<!-- End Sidemenu -->

			<!-- Main Header-->
	        @include("layouts.partials.bookcast._header", ['dashboard' => true])
	        <!-- End Main Header-->

	        <!-- Mobile-header -->
	        @include("layouts.partials.bookcast._mobile_header")
	        <!-- Mobile-header closed -->

	        <!-- Main Content-->
	        <main>
	            @yield('body')
	        </main>
	        <!-- End Main Content-->

			@include("layouts.partials.bookcast._footer")

	        <!-- Sidebar -->
	        @include("layouts.partials.bookcast._right_sidebar")
	        <!-- End Sidebar -->

		</div>
		<!-- End Page -->

		<!-- Back-to-top -->
		<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

		<!-- Bootstrap js-->
		<script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!-- Internal Chart.Bundle js-->
		<script src="{{ asset('public/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

		<!-- Peity js-->
		<script src="{{ asset('public/assets/plugins/peity/jquery.peity.min.js') }}"></script>

		<!-- Select2 js-->
		<script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

		<!-- Perfect-scrollbar js -->
		<script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

		<!-- Sidemenu js -->
		<script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js') }}"></script>

		<!-- Sidebar js -->
		<script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

		<!-- Internal Morris js -->
		<script src="{{ asset('public/assets/plugins/raphael/raphael.min.js') }}"></script>
		<script src="{{ asset('public/assets/plugins/morris.js/morris.min.js') }}"></script>

		<!-- Circle Progress js-->
		<script src="{{ asset('public/assets/js/circle-progress.min.js') }}"></script>
		<script src="{{ asset('public/assets/js/chart-circle.js') }}"></script>

		<!-- Internal Dashboard js-->
		<script src="{{ asset('public/assets/js/index.js') }}"></script>

		<!-- Sticky js -->
		<script src="{{ asset('public/assets/js/sticky.js') }}"></script>

		<!-- Custom js -->
		<script src="{{ asset('public/assets/js/custom.js') }}"></script>

	</body>
</html>