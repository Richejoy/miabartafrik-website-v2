<div class="partnerArtistik">

    <div class="topBar_partnerArt"></div>

    <div class="details_partnerArt">
        <img src="{{ $partner->user->library->remote }}" alt="team">
    </div>
    <h3 class="partnername">
        <a href="{{ route('partner.show', ['partner' => $partner]) }}" title="Voir la fiche">
            @if($partner->person_type_id == 1)
                {{ $partner->individual->name }}
            @else
                {{ $partner->society->name }}
            @endif
        </a>
    </h3>
    <div class="infopartner">
            <div class="">
                @if($partner->person_type_id == 1)
                {{ $partner->individual->work->name }}     
                @endif
            </div>
            <div class="all_services_mba"> 
                @forelse($partner->partnerAreas->take(3) as $partnerArea)
                    <small class="all_services_mba_small">{{ $partnerArea->area->name }}</small>
                @empty
                    <small class="all_services_mba_small">Aucun</small>
                @endforelse
            </div>
    </div>

    <div class="main_profilbook_header">
            <nav class="contact-info">
                <span class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                    data-original-title="{{ $partner->user->country->nicename }}"><i class="{{ $partner->user->getFlag() }}"></i></span>

                <a href="{{ route('partner.show', ['partner' => $partner]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $partner->user->receiverViews->count() }} (Vues)"><i class="fe fe-eye"></i>
                        </a>

                        <span wire:click.prevent="like({{ $partner->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $partner->user->receiverLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i> </span>

                        <span wire:click.prevent="friend({{ $partner->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $partner->user->friends->count() }} (Amis)"><i class="fe fe-user-plus"></i></span>

                @if(Route::currentRouteName() == 'bookcast.networks')
                <a href="{{ $partner->user->call() }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                    data-original-title="Appeler"><i class="fe fe-phone"></i></a>
                @endif

                <span data-show="share-partner{{ $partner->id }}" class="contact-icon border tx-inverse share-partner" data-toggle="tooltip" title=""
                            data-original-title="Publier"><i class="far fa-share-square"></i></span>
            </nav>
    </div>

    <div class="py-1" id="share-partner{{ $partner->id }}" style="display: none;">
                    <a class="contact-icon border tx-inverse" href="http://www.facebook.com/sharer/sharer.php?u={{ route('partner.show', ['partner' => $partner]) }}" target="_blank">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a class="contact-icon border tx-inverse" href="https://twitter.com/intent/tweet?url={{ route('partner.show', ['partner' => $partner]) }}" target="_blank">
                        <i class="fe fe-twitter"></i>
                    </a>
    </div>
</div>