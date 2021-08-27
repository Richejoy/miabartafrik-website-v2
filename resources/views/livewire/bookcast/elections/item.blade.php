@if($fetch == 'all')
<section>
    @forelse ($usersElections as $userElection)
    <div class="row vote_concours_mba" id="graybg">
        <div class="col-md-6 col-lg-6 col-xl-1 col-sm-6">
            <div class="Number_levels">
                <span>{{ $userElection->id }}</span>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
            <div class="booksId">
                <div class="profileImage">
                    <img src="{{ $userElection->library->remote }}" alt="team">
                </div>

                <div class="inner_booksId">
                    <div class="info_booksId">
                        <div class="detail-area-header">
                            <div class="main_profilbook_header">
                                <div>
                                    <span>25452 </span>
                                    <div class="el-divider el-divider--vertical"></div>
                                    <a href=""><span class="voterArtiste">Voter</span> </a>

                                    <div class="el-divider el-divider--vertical"></div>
                                    <a href=""><span class="neplusvoterArtiste">Ne plus voter</span>
                                    </a>
                                </div>
                            </div>

                            <div class="main_profilbook_header">
                                <div class="main-img-user online">
                                    <a href="book_view.html">
                                        <img alt="avatar" class="radius"
                                            src="{{ $userElection->user->library->remote }}">
                                    </a>
                                </div>
                                <nav class="contact-info">
                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                                        data-original-title="Togo"><i class="flag flag-tg"></i></a>

                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                                        data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                                    </a>

                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                                        data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a>

                                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                                        data-original-title="Publier"><i class="far fa-share-square"></i></a>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Fiche de Présentation -->
        <div class="col-md-6 col-lg-6 col-xl-7 col-sm-6">
            <div class="overlay__inner">
                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="#">{{ $userElection->user->full_name }}</a>
                        </h6>
                        <div class="all_services_mba">
                            <small class="all_services_mba_small">Actrice</small>
                            <small class="all_services_mba_small">Modèle photo</small>
                            <small class="all_services_mba_small">Danseuse</small>
                        </div>
                    </div>
                </div>
                <!-- Title -->
                <h1 class="overlay__title">
                    Présentation Biographique
                </h1>
                <!-- Description -->
                <p class="overlay__description">
                    {{ $userElection->user->biography }}
                </p>

                <!-- Autres infos -->

            </div>

        </div>
        <!-- end Fiche de Présentation -->
    </div>
    @empty
    <div class="row vote_concours_mba" id="graybg">
        <div class="col-md-12">
            <p>Aucune donnée trouvée</p>
        </div>
    </div>
    @endforelse
</section>

@else
@if(!is_null($userElection))
<x-bookcast.elections.item :userelection="$userElection" />
@else
<p>Aucune donnée trouvée</p>
@endif
@endif