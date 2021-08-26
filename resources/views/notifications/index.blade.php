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
						<li class="breadcrumb-item active" aria-current="page">Notifications</li>
					</ol>
				</div>
				
				<x-payment-alert />
			</div>
			<!-- End Page Header -->

			<!--Row-->
			<div class="row row-sm">
				<div class="col-lg-12">
					<p>notifications</p>
				</div>
			</div>
			<!-- Row end -->
		</div>
	</div>
</div>
<!-- End Main Content-->

@endsection