@extends('layouts.bookcast', ['title' => 'Votez vos artistes, photographes et partneaires préférés'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('bookcast.elections') }}">Votes</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Votez vos artistes, photographes et
                            partneaires préférés</li>
                    </ol>
                </div>

                <x-payment-alert />
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">
                    <!-- Div1 du recheche global -->
                    <div class="search_mba_forms">

                        <!-- Div2 Input de recher (ici en saisissant, les données correspondante seront autommatiquement visible) -->
                        <div class="recherche_miabartafrik_forAll">
                            <div class="row m-0">

                                <!-- FORM -->
                                <form class="col-md-11">

                                    <div class="inner-form">

                                        <div class="main-form" id="main-form">

                                            <div class="row secondsearch">
                                                <div class="input-wrap">
                                                    <div class="icon-wrap">
                                                        <i class="fe fe-search"></i>
                                                    </div>
                                                    <div class="input-field">
                                                        <input type="search" class="form-control rounded-0"
                                                            placeholder="Que recherchez-vous ?">
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <!-- Close FORM -->
                            </div>
                        </div>
                        <!-- Close Div2 Input de recher (ici en saisissant, les données correspondante seront autommatiquement visible) -->


                        <!-- Div3 recherche par sélecte & son bouton Go () -->

                        <div class="recherche_miabartafrik_forAll">

                            <!-- FORM-->
                            <form class="row m-0">

                                <div class="col-md-11 inner-form">

                                    <div class="main-form" id="main-form">

                                        <div class="row second">
                                            <div class="input-wrap">
                                                <div class="icon-wrap">
                                                    <i class="si si-location-pin" data-toggle="tooltip" title=""
                                                        data-original-title="Choix de pays" width="24" height="24"></i>
                                                </div>
                                                <div class="input-field">

                                                    <div class="parsley-select">
                                                        <select class="form-control select2">

                                                            <option>
                                                                Pays
                                                            </option>
                                                            <option value="Togo">
                                                                Togo
                                                            </option>
                                                            <option value="Ghana">
                                                                Ghana
                                                            </option>
                                                            <option value="Bénin">
                                                                Bénin
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-wrap">
                                                <div class="icon-wrap">
                                                    <i class="si si-graduation" data-toggle="tooltip" title=""
                                                        data-original-title="Choix du domaine artistique" width="24"
                                                        height="24"></i>
                                                </div>
                                                <div class="input-field">
                                                    <div class="parsley-select">
                                                        <select class="form-control select2">
                                                            <label>Castings Domaines</label>
                                                            <option>
                                                                Domaines artistique
                                                            </option>

                                                            <option value="Cinéma &amp; Fiction">
                                                                Cinéma &amp; Fiction
                                                            </option>
                                                            <option value="Mode &amp; Beauté">
                                                                Mode &amp; Beauté
                                                            </option>
                                                            <option value="Musique / Danse">
                                                                Musique / Danse
                                                            </option>
                                                            <option value="Radio / Télévision">
                                                                Radio / Télévision
                                                            </option>
                                                            <option value="Théâtre &amp; Humour">
                                                                Théâtre &amp; Humour
                                                            </option>


                                                        </select>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input-wrap">
                                                <div class="icon-wrap">
                                                    <i class="si si-briefcase" data-toggle="tooltip" title=""
                                                        data-original-title="Catégories de vote"></i>
                                                </div>
                                                <div class="input-field">
                                                    <div class="parsley-select">
                                                        <select class="form-control select2">

                                                            <option>
                                                                Catégories
                                                            </option>

                                                            <option value="Danseurs(ses)">
                                                                Danseurs(ses)
                                                            </option>
                                                            <option value="Modèles photo">
                                                                Modèles photo
                                                            </option>
                                                            <option value="Arteurs(trices)">
                                                                Arteurs(trices)
                                                            </option>
                                                            <option value="Artistes chanteur">
                                                                Artistes chanteur
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                    </div>
                                </div>

                                <div class="col-md-1 pr-1">
                                    <button class="btn-search" type="button">Go</button>
                                </div>
                            </form>
                            <!-- Close FORM-->

                        </div>
                        <!--  Close Div3 recherche par sélecte & son bouton Go () -->
                    </div>
                    <!-- Close Div1 du recheche global -->

                    <div class="content_body">
                        <div class="row" id="graybg">
                            <!-- Fiche de Présentation -->
                            <div class="col-md-6 col-lg-12 col-xl-12 col-sm-6">
                                <div class="overlay__inner">

                                    <div class="titre_concours">
                                        Concours de Shoot Photo pour Modèle photo & Photographes
                                    </div>

                                    <div class="dates_concours">
                                        <div class="start">
                                            <strong>DEBUT</strong>
                                            25 OCT. 2021 à 12:30
                                            <span></span>
                                        </div>
                                        <div class="ends">
                                            <strong>FIN</strong>
                                            26 OCT. 2021 à 12:30
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
                                </div>

                            </div>
                            <!-- end Fiche de Présentation -->
                        </div>

                        <div class="row m-0 p-0 search_advanced_mba">

                            <a href="#" class="btn btn-link collapsed" data-toggle="collapse"
                                data-target="#advancedsearch">A Propos du Concours <i class="fe fe-chevron-down"
                                    data-toggle="tooltip" title=""
                                    data-original-title="Afficher plus d'infos sur ce Concour"></i></a>

                            <div id="advancedsearch" class="collapse recherche_avancee_mba_2021">
                                <div class="collapse-in">

                                    <!-- Concours Miabart Afrik -->
                                    <div class="row" id="graybg">

                                        <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">

                                            <div class="concoursId">

                                                <div class="profileImage">
                                                    <img src="../assets/img/concours/soiree-essonne.jpg"
                                                        alt="Affiche de concours">
                                                </div>

                                                <div class="inner_concoursId">

                                                    <div class="info_concoursId">
                                                        <div class="main_profilbook_header">
                                                            <nav class="contact-info">
                                                                <a href="#" class="contact-icon border tx-inverse"
                                                                    data-toggle="tooltip" title=""
                                                                    data-original-title="Togo"><i
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
                                                <h1 class="overlay__title">
                                                    A Propos
                                                </h1>
                                                <!-- Description -->
                                                <p class="overlay__description">
                                                    Le lorem ipsum est, en imprimerie, une suite de mots sans
                                                    signification utilisée à titre provisoire pour calibrer une mise
                                                    en page, le texte définitif venant Le lorem ipsum est, en
                                                    imprimerie, une suite de mots sans signification utilisée à
                                                    titre provisoire pour calibrer une mise en page, le texte
                                                    définitif venantLe lorem ipsum est, en imprimerie, une suite de
                                                    mots sans signification utilisée à titre provisoire pour
                                                    calibrer une mise en page, le texte définitif venant.
                                                </p>
                                            </div>


                                        </div>
                                        <!-- end Fiche de Présentation -->

                                    </div>

                                    <!-- end Concours Miabart Afrik -->


                                </div>
                            </div>
                            <!-- Close FORM -->
                        </div>
                    </div>

                    <div class="content_body">
                        @livewire('bookcast.elections.item', ['fetch' => 'all', 'election' => $election])
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