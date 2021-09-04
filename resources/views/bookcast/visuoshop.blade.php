@extends('layouts.bookcast', ['title' => 'Liste des photographes'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.visuoshop') }}">VisuoShop</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des photographes</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.visuoshop.search')

                    <div class="content_body">
                        @livewire('bookcast.visuoshop.item')
                    </div>
                </div>

                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection