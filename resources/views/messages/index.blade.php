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
								<div class="card custom-card mail-container task-container overflow-hidden">
									<div class="inbox-body p-4">
										<div class="mail-option">
											<div class="chk-all border-0">
												<div class="btn-group">
													<a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
														Tout 
														<i class="fe fe-chevron-down"></i>
													</a>
													<ul class="dropdown-menu">
														<li><a href="#"> Rien</a></li>
														<li><a href="#"> Lis</a></li>
														<li><a href="#"> Non lu</a></li>
													</ul>
												</div>
											</div>
											<div class="btn-group">
												<a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
													<i class="fe fe-refresh-cw"></i>
												</a>
											</div>
											<div class="btn-group hidden-phone">
												<a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
													Plus
													<i class="fe fe-chevron-down"></i>
												</a>
												<ul class="dropdown-menu">
													<li><a href="#"><i class="fe fe-edit mr-2"></i> Marquer comme lu</a></li>
													<li><a href="#"><i class="fe fe fe-slash mr-2"></i> Spam</a></li>
													<li class="divider"></li>
													<li><a href="#"><i class="fe fe-trash mr-2"></i> Supprimer</a></li>
												</ul>
											</div>
											<ul class="unstyled inbox-pagination">
												<li><span>3 sur 3</span></li>

												<li>
													<a class="btn np-btn" href="#"><i class="fe fe-chevron-right pagination-right"></i></a>
												</li>
											</ul>
										</div>
										<div class="table-responsive">
											<table class="table table-inbox text-md-nowrap table-hover text-nowrap">
												<tbody>
													
														<tr class="">
															<td class="inbox-small-cells">
																<label class="custom-control custom-checkbox mb-0">
																	<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																	<span class="custom-control-label"></span>
																</label>
															</td>
															<td class="inbox-small-cells"><i class="fa fa-star text-warning"></i></td>
															<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
															<td class="view-message dont-show font-weight-semibold"><a href="mail-inbox-view.html">Avorgno Yawo</a></td>
															<td class="view-message"><a href="mail-inbox-view.html" style="color: black;">Bonjour, je suis Guy Avorgno, j'aimerais donc...</a></td>
															<td class="view-message text-right font-weight-semibold">9h27</td>
														</tr>
													
													<tr class="">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star inbox-started"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark"></i></td>
														<td class="view-message dont-show font-weight-semibold"><a href="mail-inbox-view.html">Richard AGBOVI</a> </td>
														<td class="view-message"><a href="mail-inbox-view.html" style="color: black;">Je suis l'un des participants du casting "AYELE"</a> </td>
														<td class="view-message text-right font-weight-semibold">26 Août</td>
													</tr>
													<tr class="unread">
														<td class="inbox-small-cells">
															<label class="custom-control custom-checkbox mb-0">
																<input type="checkbox" class="custom-control-input" name="example-checkbox2" value="option2">
																<span class="custom-control-label"></span>
															</label>
														</td>
														<td class="inbox-small-cells"><i class="fa fa-star"></i></td>
														<td class="inbox-small-cells"><i class="fa fa-bookmark text-danger"></i></td>
														<td class="view-message  dont-show"><a href="mail-inbox-view.html">Alice</a></td>
														<td class="view-message "><a href="mail-inbox-view.html" style="color: black;">Nous vous félicitons d'avoir remporter le prix de...</a> </td>
														<td class="view-message  text-right">25 Août</td>
													</tr>

													
												</tbody>
											</table>
										</div>
									</div>
									<!-- mail-content -->
								</div>
							</div>
						</div>
			<!-- Row end -->


			<!-- mail-compose modal -->
			<div class="main-mail-compose">
				<div>
					<div class="container">
						<div class="main-mail-compose-box">
							<div class="main-mail-compose-header">
								<span>Nouveau message</span>
								<nav class="nav">
									<a class="nav-link" href=""><i class="fas fa-minus"></i></a> <a class="nav-link" href=""><i class="fas fa-compress"></i></a> <a class="nav-link" href=""><i class="fas fa-times"></i></a>
								</nav>
							</div>
							<div class="main-mail-compose-body">
								<div class="form-group mb-0">
									<label class="form-label">À</label>
									<div>
										<input class="form-control" placeholder="" type="text">
									</div>
								</div>
								<div class="form-group mb-0">
									<label class="form-label">Sujet</label>
									<div>
										<input class="form-control" type="text">
									</div>
								</div>
								<div class="form-group">
									<textarea class="form-control" placeholder="" rows="12"></textarea>
								</div>
								<div class="form-group mg-b-0">
									<nav class="nav">
										<a class="nav-link" data-toggle="tooltip" href="" title="Mise en page "><i class="fas fa-font"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Ajouter une pièce jointe"><i class="fas fa-paperclip"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Ajouter une photo"><i class="far fa-image"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Ajouter un lien"><i class="fas fa-link"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Émoticônes"><i class="far fa-smile"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Insérer des fichiers dans Drive "><i class="fab fa-google-drive"></i></a>
										<a class="nav-link" data-toggle="tooltip" href="" title="Effacer"><i class="far fa-trash-alt"></i></a>
									</nav>
									<button class="btn ripple btn-primary">Envoyer</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Main Content-->

@endsection