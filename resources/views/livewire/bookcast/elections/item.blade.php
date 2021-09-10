@if($fetch == 'all')
<section>
    @forelse ($electionsUsers as $electionUser)
    <div class="row vote_concours_mba" id="graybg">
        <div class="col-md-6 col-lg-6 col-xl-1 col-sm-6">
            <div class="Number_levels">
                <span>{{ $electionUser->id }}</span>
            </div>
        </div>

        <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
            <x-bookcast.elections.item :eu="$electionUser" />
        </div>

        <!-- Fiche de Présentation -->
        <div class="col-md-6 col-lg-6 col-xl-7 col-sm-6">
            <div class="overlay__inner">
                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="#">{{ $electionUser->user->full_name }}</a>
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
                    {{ $electionUser->user->biography }}
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
@if(!is_null($electionUser))
<x-bookcast.elections.item :eu="$electionUser" />
@else
<p>Aucune donnée trouvée</p>
@endif
@endif