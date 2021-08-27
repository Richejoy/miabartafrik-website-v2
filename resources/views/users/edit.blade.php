@extends('layouts.user', ['title' => auth()->user()->full_name])

@section('body')

<!-- Main Content-->
<div class="main-content side-content pt-0">

	<div class="container-fluid">
		<div class="inner-body">
			<!-- Page Header -->
			<div class="page-header">
				<div>
					<h2 class="main-content-title tx-24 mg-b-5">Bienvenue au tableau de bord </h2>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="{{ route('user.index') }}">Tableau de bord</a></li>
						<li class="breadcrumb-item active" aria-current="page">Edition Profil</li>
					</ol>
				</div>
				
				<x-payment-alert />
			</div>
			<!-- End Page Header -->

			<!--Row-->
			<div class="row row-sm">
							<div class="col-sm-12 col-lg-12 col-xl-12"> 

								<div class="accordeon_infos_book">
								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="one" checked="checked">
								    <label for="btn" class="entypo_infos_book">Infos générale</label>
								    <article class="article_infos_book" id="content-1">
								    	 
												      
								    </article>
								  </div>
								  
								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="two">
								    <label for="btn" class="entypo_infos_book">Coordonnées</label>

								    <!-- infos book start -->
								    <article class="article_infos_book" id="content-2">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>
								    </article>
								    <!-- infos book start --> 


								  </div>
								  
								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="three">
								    <label for="btn" class="entypo_infos_book">Formations</label>
								    <article class="article_infos_book" id="content-3">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>

								    </article>
								  </div>

								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Expériences</label>
								    <article class="article_infos_book" id="content-4">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>
								    </article>
								  </div>

								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Prix &amp; Distinction</label>
								    <article class="article_infos_book" id="content-5">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>
								    </article>
								  </div>

								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Aptitudes</label>
								    <article class="article_infos_book" id="content-5">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>
								    </article>
								  </div>
								  
								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Caractéristiques physiques</label>
								    <article class="article_infos_book" id="content-4">
								    	<div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>
								    </article>
								  </div>
  

								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Médias</label>
								    <article class="article_infos_book" id="content-5">
								    	<div class="tabs_miabartafrik tabs_miabartafrik-style-bar">
											<nav>
												<ul> 
													<li><a href="#photos_book" class="icon pe-7s-camera"><span>Photos</span></a></li>
													<li><a href="#audios_book" class="icon pe-7s-musiclist"><span>Audios</span></a></li>
													<li><a href="#videos_book" class="icon pe-7s-video"><span>Videos</span></a></li>
													 
												</ul>
											</nav>
											<div class="content-wrap"> 

												<!-- PHOTOS BOOK CARD START -->
												<section id="photos_book"> 
													<div class="demo-gallery ">
													<ul id="lightgallery" class="list-unstyled containergalbook detail-photo-grid">
														<li class="grid-item" data-responsive="../assets/img/media/artiste3-1.jpg" data-src="../assets/img/media/artiste3-1.jpg" data-sub-html="<h4>Gallery Image 1</h4>">
															<a href="" class="wd-100p"><img class="img-responsive wd-100p" src="../assets/img/media/artiste3-1.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/2.jpg" data-src="../assets/img/media/2.jpg" data-sub-html="<h4>Gallery Image 2</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/2.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/3.jpg" data-src="../assets/img/media/3.jpg" data-sub-html="<h4>Gallery Image 3</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/3.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/4.jpg" data-src="../assets/img/media/4.jpg" data-sub-html="<h4>Gallery Image 4</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/4.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/5.jpg" data-src="../assets/img/media/5.jpg" data-sub-html="<h4>Gallery Image 5</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/5.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/6.jpg" data-src="../assets/img/media/6.jpg" data-sub-html="<h4>Gallery Image 6</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/6.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/7.jpg" data-src="../assets/img/media/7.jpg" data-sub-html="<h4>Gallery Image 7</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/7.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/8.jpg" data-src="../assets/img/media/8.jpg" data-sub-html="<h4>Gallery Image 8</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/8.jpg" alt="Thumb-1"> </a>
														</li>
														<li class="grid-item" data-responsive="../assets/img/media/9.jpg" data-src="../assets/img/media/9.jpg" data-sub-html="<h4>Gallery Image 9</h4>">
															<a href="" class="wd-100p"><img class="img-responsive" src="../assets/img/media/9.jpg" alt="Thumb-1"> </a>
														</li>
													</ul>
													<!-- /Gallery -->
												</div>
												</section>
												<!-- PHOTOS BOOK CARD END -->

												<!-- MUSIQUE BOOK CARD START -->
												<section id="audios_book">
													<p>Musiques et audios</p>
												</section>
												<!-- MUSIQUE BOOK CARD END -->


												<!-- VIDEOS BOOK CARD START -->
												<section id="videos_book">
													<p>Vidéos</p>
												</section>
												<!-- VIDEOS BOOK CARD END --> 

											</div><!-- /content -->
										</div><!-- /tabs_miabartafrik -->
								    </article>
								  </div>

								  <div class="item_infos_book">
								    <input class="input_accordeon" type="radio" name="btn" value="four">
								    <label for="btn" class="entypo_infos_book">Agence (Agent)</label>
								    <article class="article_infos_book" id="content-6">
								      <div class="page_header_dash">
											<div>
												<h2 class="main-content-title tx-24 mg-b-5">Autres formations &amp; écoles</h2> 
											</div>
											<div class="d-flex">
												<div class="justify-content-center">
													
													<button type="button" class="btn btn-primary my-2 btn-icon-text" data-target="#autreformation" data-toggle="modal">
													  <i class="fe fe-plus-square mr-2"></i> Ajouter une formation
													</button>
												</div>
											</div>
										</div>

								    </article>
								  </div>

								</div>
										 
						    </div><!-- Row end -->
					    </div>
			<!-- Row end -->
		</div>
	</div>
</div>
<!-- End Main Content-->

@endsection