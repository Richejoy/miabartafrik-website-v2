@extends('layouts.user', ['title' => auth()->user()->username])

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
						<li class="breadcrumb-item active" aria-current="page">Messages</li>
					</ol>
				</div>
				
				<x-payment-alert />
			</div>
			<!-- End Page Header -->

			<!--Row-->
			<div class="row row-sm">
							<div class="col-xl-3 col-lg-4">
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="">
										<div class="p-4 border-bottom">
											<a class="btn btn-main-primary btn-block btn-compose" href="" id="btnCompose">Nouveau message</a>
										</div>
										<div class="card-body tab-list-items">
											<div class="main-content-left main-content-left-mail">
												<div class="main-mail-menu">
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link active" href="">
															<i class="fe fe-mail"></i> Boîte de réception <span>20</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-star"></i> Favorites  <span>3</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-bookmark"></i> Important <span>10</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-send"></i> Mail envoyé <span>8</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-edit"></i> Brouillons <span>15</span></a>
														<a class="nav-link" href="">
															<i class="fe fe-disc"></i> Spam <span>128</span>
														</a>
														<a class="nav-link" href="">
															<i class="fe fe-trash"></i> Poubelle  <span>6</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Étiqueter </label>
													<nav class="nav main-nav-column mg-b-20">
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Sociale <span>10</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Emploi <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Personnel <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder"></i> Promotions <span>22</span>
														</a>
														<a class="nav-link" href="#">
															<i class="fe fe-folder-plus"></i> Mises à jour <span>17</span>
														</a>
													</nav>
													<label class="main-content-label main-content-label-sm">Mots clés</label>
													<nav class="nav main-nav-column">
														<a class="nav-link" href="#">
															<i class="fe fe-twitter"></i> Twitter <span>2</span></a>
														<a class="nav-link" href="#">
															<i class="fe fe-twitter"></i> Whatsapp <span>25</span></a>
														 
													</nav>
												</div><!-- main-mail-menu -->
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="col-xl-9 col-lg-8  main-content-body-mail1">
								<div class="card custom-card">
									<div class="card-body h-100">
										<div class="email-media">
											<div class="mb-4 d-lg-flex">
												<h3>Congratulations on your goal you achieved ! </h3>
												<div class="ml-auto d-none d-md-flex fs-18">
													<a href="#" class="mr-3 tx-inverse"><i class="fe fe-printer" data-toggle="tooltip" title="" data-original-title="Print"></i></a>
													<a href="#" class="tx-inverse"><i class="fe fe-tag" data-toggle="tooltip" title="" data-original-title="Undo"></i></a>
												</div>
											</div>
											<div class="media mt-0">
												<div class="main-img-user avatar-md mr-3 online">
													<img alt="avatar" class="rounded-circle" src="../assets/img/users/1.jpg">
												</div>
												<div class="media-body tx-inverse">
													<div class="float-right d-none d-md-flex fs-15">
														<small class="mr-2">Nov 2, 2020 12:45 pm</small>
														<small class="mr-2"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
														<small class="mr-2"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
														<div class="mr-2">
															<a href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
															<i class="fe fe-more-horizontal text-dark" data-toggle="tooltip" title="" data-original-title="View more"></i></a>
															<div class="dropdown-menu dropdown-menu-right shadow">
																<a class="dropdown-item" href="#">Reply</a>
																<a class="dropdown-item" href="#">Report Spam</a>
																<a class="dropdown-item" href="#">Delete</a>
																<a class="dropdown-item" href="#">Show Original</a>
																<a class="dropdown-item" href="#">Print</a>
																<a class="dropdown-item" href="#">Filter</a>
															</div>
														</div>
													</div>
													<div class="media-title font-weight-semiblod"><span class="tx-18 font-weight-bold">Sonia Taylor</span>
														<p class="mb-0 text-muted">sonai@gmail.com </p>
														<small class="mr-2 d-md-none">Nov 2, 2020 12:45 pm</small>
														<small class="mr-2 d-md-none"><i class="fe fe-star" data-toggle="tooltip" title="" data-original-title="Rated"></i></small>
														<small class="mr-2 d-md-none"><i class="fa fa-reply" data-toggle="tooltip" title="" data-original-title="Reply"></i></small>
													</div>
												</div>
											</div>
										</div>
										<div class="eamil-body">
											<h6 class="mb-3">Hi Sir/Madam</h6>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>
											<p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</p>
											<p> Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it?</p>
											<p class="mb-0">Thanking you Sir/Madam</p>
											<hr>
											<div class="email-attch">
												<div class="float-right">
													<a href="#"><i class="fa fa-download text-dark" data-toggle="tooltip" title="" data-original-title="Download"></i></a>
												</div>
												<p>3 Attachments<a href="#"> View All Images</a></p>
												<div class="emai-img">
													<div class="row row-sm">
														<div class="col-sm-3">
															<a href="#"><img class="w-100" src="../assets/img/media/18.jpg" alt="Generic placeholder image"></a>
															<h6 class="mb-3 mt-3 mb-lg-0">img_01.jpg <small class="text-muted">12kb</small></h6>
														</div>
														<div class="col-sm-3">
															<a href="#"><img class="w-100" src="../assets/img/media/19.jpg" alt="Generic placeholder image"></a>
															<h6 class="mb-3 mt-3 mb-lg-0">img_02.jpg <small class="text-muted">18kb</small></h6>
														</div>
														<div class="col-sm-3">
															<a href="#"><img class="w-100" src="../assets/img/media/20.jpg" alt="Generic placeholder image"></a>
															<h6 class=" mt-3 mb-lg-0">img_03.jpg <small class="text-muted">21kb</small></h6>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="card-footer">
										<a class="btn ripple btn-primary mt-1 mb-1" href="#"><i class="fa fa-reply"></i> Reply</a>
										<a class="btn ripple btn-secondary mt-1 mb-1" href="#"><i class="fa fa-share"></i> Forward</a>
									</div>
								</div>
							</div>
						</div>
			<!-- Row end -->
		</div>
	</div>
</div>
<!-- End Main Content-->

@endsection