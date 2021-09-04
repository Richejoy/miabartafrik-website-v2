@extends('layouts.bookcast', ['title' => 'Liste des concours'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">
    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.elections') }}">Concours</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des concours</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    @livewire('bookcast.elections.search')

                    @forelse ($elections as $election)

                    <div id="concour_id" class="content_body">
                        <div class="row" id="graybg">
                            <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
                                <div class="concoursId">

                                    <div class="profileImage">
                                        <img src="{{ $election->library->remote }}"
                                            alt="{{ $election->library->description }}">
                                    </div>

                                    <div class="inner_concoursId">
                                        <div class="info_concoursId">
                                            <div class="main_profilbook_header">
                                                <nav class="contact-info">
                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title="" data-original-title="Togo"><i
                                                            class="flag flag-tg"></i></a>

                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Publier sur Linkedin"><i
                                                            class="fe fe-linkedin"></i></a>

                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Publier sur facebook"><i
                                                            class="fe fe-facebook"></i></a>

                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Publier sur instagram"><i
                                                            class="fe fe-instagram"></i></a>

                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Publier sur twitter"><i
                                                            class="si si-social-twitter"></i></a>

                                                    <a href="#" class="contact-icon border tx-inverse"
                                                        data-toggle="tooltip" title=""
                                                        data-original-title="Copier le lien"><i
                                                            class="fe fe-link"></i></a>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Fiche de Présentation -->
                            <div class="col-md-6 col-lg-6 col-xl-8 col-sm-6">
                                <div class="overlay__inner">
                                    <div class="titre_concours">
                                        <a
                                            href="{{ route('election.show', ['election' => $election]) }}">{{ $election->title }}</a>
                                    </div>
                                    <div class="dates_concours">
                                        <div class="start">
                                            <strong>DEBUT</strong>
                                            {{ $election->start_date }}
                                            <span></span>
                                        </div>
                                        <div class="ends">
                                            <strong>FIN</strong>
                                            {{ $election->end_date }}
                                        </div>
                                    </div>
                                    <div class="stats_concours">
                                        <div>
                                            <strong>Candidats(e)</strong>
                                            3098
                                        </div>

                                        <div>
                                            <strong>Votants(e)</strong>
                                            562
                                        </div>
                                    </div>
                                    <h1 class="overlay__title">
                                        A Propos
                                    </h1>
                                    <!-- Description -->
                                    <p class="overlay__description">
                                        {!! Str::words($election->content, 250) !!}
                                    </p>
                                </div>
                            </div>
                            <!-- end Fiche de Présentation -->
                        </div>
                    </div>

                    @empty

                    <!-- PAGE NOT FOUND -->
                    <div class="page_miabartAfrik_not_found">  
                        <div class="content_miabartAfrik_not_found"> 
                            <h2>Aucune donnée trouver</h2>
                            <p>Revenez plus tard</p>
                        </div> 
                    </div>
                    <!-- END PAGE NOT FOUND -->

                    @endforelse
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