@extends('layouts.bookcast', ['title' => 'NetConcert'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.movies') }}">NetConcert</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Vidéos artistiques</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

                <div class="col-xl-9 col-lg-12">
                    <div class="content_body">
                        <div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                            <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src=""
                                frameborder="0" allowTransparency="true" allowfullscreen
                                data-src="https://www.youtube.com/embed/Pb0voxno3ZA"
                                allow="autoplay; fullscreen"></iframe>

                            <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
                                style="background-image:url({{ asset('public/assets/img/artiste/black-business.jpg') }});">
                                <svg class="play-vid" viewBox="0 0 100 100">
                                    <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                    <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                                         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                    <path class="vid-icon" fill="white"
                                        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                </svg>
                            </button>
                        </div>

                        <div class="titreVideo_miabart_afrik">luke james - colours [Official Audio]</div>
                        <div class="all_services_mba">
                            <small class="all_services_mba_small">Cinéma & fiction</small>
                            <small class="all_services_mba_small">Interview</small>
                        </div>

                        <div class="info_netconcert_header">
                            <div>
                                <div class="main_profilbook_header">
                                    <div class="main-img-user online">
                                        <img alt="avatar" class="radius"
                                            src="../assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg">
                                    </div>
                                    <nav class="contact-info">
                                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                            title="" data-original-title="Togo"><i class="flag flag-tg"></i></a>
                                    </nav>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="justify-content-center">
                                    <div class="main_profilbook_header">

                                        <nav class="contact-info">

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                                            </a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="5254 (J'aimes)"><i
                                                    class="fe fe-heart"></i> </a>


                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="Enrgistrer pour plus tard"><i
                                                    class="fe fe-save"></i></a>

                                            <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                                                title="" data-original-title="Publier"><i
                                                    class="far fa-share-square"></i></a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Row -->
                    <div class="row row-sm">

                        <div class="col-lg-12 col-md-12">

                            @livewire('bookcast.movies.item')

                        </div>
                    </div>
                    <!-- End Row -->
                </div>
            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection