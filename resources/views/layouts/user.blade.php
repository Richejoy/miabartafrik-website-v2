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

    <link href="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.css') }}" rel="stylesheet">

    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="{{ asset('public/js/pusher.js') }}"></script>
</head>

<body class="main-body leftmenu dashboard_body">

	<x-loader imgLink="{{ auth()->user()->library->remote }}" />

	<!-- Page -->
	<div class="page">

		<!-- Sidemenu -->
		<div class="main-sidebar main-sidebar-sticky side-menu">
			<div class="sidemenu-logo">
				<a class="main-logo" href="{{ route('user.index') }}">
					<img src="{{ asset('public/assets/img/brand/logo-light.png') }}" class="header-brand-img desktop-logo" alt="logo">
					<img src="{{ asset('public/assets/img/brand/icon-light.png') }}" class="header-brand-img icon-logo" alt="logo">
					<img src="{{ asset('public/assets/img/brand/logo.png') }}" class="header-brand-img desktop-logo theme-logo" alt="logo">
					<img src="{{ asset('public/assets/img/brand/icon.png') }}" class="header-brand-img icon-logo theme-logo" alt="logo">
				</a>
			</div>
			<div class="main-sidebar-body">
				<ul class="nav">

					<li class="nav-item">
						<a class="nav-link with-sub" href="#"><span class="shape1"></span><span class="shape2"></span><i class="si si-grid sidemenu-icon"></i><span class="sidemenu-label">Produits</span></a>
						<ul class="nav-sub">
							<li class="nav-sub-item">
								<a target="_blank" class="nav-sub-link" href="{{ route('bookcast.index') }}">BookCast</a>
							</li> 
							<li class="nav-sub-item">
								<a target="_blank" class="nav-sub-link" href="{{ route('boutikart.index') }}">BoutikArt</a>
							</li>
							<li class="nav-sub-item">
								<a target="_blank" class="nav-sub-link" href="{{ route('bonaddress.index') }}">Bon-Address</a>
							</li>
						</ul>
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
								<a class="nav-sub-link" href="">Mon book</a>
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
        @livewire('bookcast.friends')
        <!-- End Sidebar -->

	</div>
	<!-- End Page -->

	<!-- Back-to-top -->
	<a href="#top" id="back-to-top"><i class="fe fe-arrow-up"></i></a>

	<!-- Jquery js-->
	<script src="{{ asset('public/assets/plugins/jquery/jquery.min.js') }}"></script>

	<!-- Bootstrap js-->
	<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

	<!-- form-validation js -->
	<script src="{{ asset('public/assets/js/form-validation.js') }}"></script>

	<!-- cbpFWTabs js -->
	<script src="{{ asset('public/assets/js/cbpFWTabs.js') }}"></script>

	<!-- Internal Chart.Bundle js-->
	<script src="{{ asset('public/assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>

	<!-- Peity js-->
	<script src="{{ asset('public/assets/plugins/peity/jquery.peity.min.js') }}"></script>

	<!-- Internal Morris js -->
	<script src="{{ asset('public/assets/plugins/raphael/raphael.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/morris.js/morris.min.js') }}"></script>

	<!-- Circle Progress js-->
	<script src="{{ asset('public/assets/js/circle-progress.min.js') }}"></script>
	<script src="{{ asset('public/assets/js/chart-circle.js') }}"></script>

	<!-- Internal Dashboard js-->
	<script src="{{ asset('public/assets/js/index.js') }}"></script>

	<!-- Internal Check-all-mail js-->
	<script src="{{ asset('public/assets/js/check-all-mail.js') }}"></script>

	<!-- Jquery-Ui js-->
	<script src="{{ asset('public/assets/plugins/jquery-ui/ui/widgets/datepicker.js') }}"></script>

	<!-- Internal Daternagepicker js-->
	<script src="{{ asset('public/assets/plugins/bootstrap-daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>

	<!-- Internal Fileuploads js-->
	<script src="{{ asset('public/assets/plugins/fileuploads/js/fileupload.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fileuploads/js/file-upload.js') }}"></script>

    <!-- InternalFancy uploader js-->
	<script src="{{ asset('public/assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

	<!-- Internal Form-elements js-->
	<script src="{{ asset('public/assets/js/advanced-form-elements.js') }}"></script>
	<script src="{{ asset('public/assets/js/select2.js') }}"></script>

	<!-- Internal TelephoneInput js-->
	<script src="{{ asset('public/assets/plugins/telephoneinput/telephoneinput.js') }}"></script>
	<script src="{{ asset('public/assets/plugins/telephoneinput/inttelephoneinput.js') }}"></script>

	<!-- Perfect-scrollbar js -->
	<script src="{{ asset('public/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js') }}"></script>

	<!-- Sidemenu js -->
	<script src="{{ asset('public/assets/plugins/sidemenu/sidemenu.js') }}"></script>

	<!-- Sidebar js -->
	<script src="{{ asset('public/assets/plugins/sidebar/sidebar.js') }}"></script>

	<!-- Select2 js-->
	<script src="{{ asset('public/assets/plugins/select2/js/select2.min.js') }}"></script>

	<!-- Sticky js -->
	<script src="{{ asset('public/assets/js/sticky.js') }}"></script>

	<!-- Custom js -->
	<script src="{{ asset('public/assets/js/custom.js') }}"></script>

	@stack('scripts')

    <script src="{{ asset('public/plugins/emojionearea/dist/emojionearea.min.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    @livewireScripts

	<script>
        (function() {
            [].slice.call(document.querySelectorAll('.tabs_miabartafrik')).forEach(function(el) {
                new CBPFWTabs(el);
            });

        })();
    </script>

    @include('flashy::message')
</body>
</html>