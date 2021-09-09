<div class="booksId">

    <div class="profileImage">
        <img src="{{ asset('public/assets/img/publicite/duchesse.jpg') }}" alt="team">
    </div>

    <div class="inner_booksId">

        <div class="info_booksId">

            <div class="detail-area-header">
                <span class="ambassadeurSign">
                    <img src="{{ $photographer->user->library->remote }}" alt="{{ $photographer->user->library->description }}" class="ambassadeurSRound">
                </span>

                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="{{ route('photographer.show', ['photographer' => $photographer]) }}">{{ $photographer->user->full_name }}</a>

                            <x-verified-account />
                        </h6>
                        <div class="all_services_mba"> 
                            @forelse($photographer->areas as $area)
                            <small class="all_services_mba_small">{{ $area->name }}</small>
                            @empty
                            <small class="all_services_mba_small">Aucun</small>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="main_profilbook_header">
                    <nav class="contact-info">
                        <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $photographer->user->country->nicename }}"><i class="{{ $photographer->user->country->getFlag() }}"></i></span>

                        <a href="{{ route('photographer.show', ['photographer' => $photographer]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $photographer->user->receiverViews->count() }} (Vues)"><i class="fe fe-eye"></i></a>

                        <span wire:click.prevent="like({{ $photographer->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $photographer->user->receiverLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i></span>

                        <span wire:click.prevent="friend({{ $photographer->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $photographer->user->friends->count() }} (Amis)"><i class="fe fe-user-plus"></i></span>

                        <span data-show="share-photographer{{ $photographer->id }}" class="contact-icon border tx-inverse share-photographer" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></span>
                    </nav>
                </div>

                <div class="py-1" id="share-photographer{{ $photographer->id }}" style="display: none;">
                    <a class="contact-icon border tx-inverse" href="http://www.facebook.com/sharer/sharer.php?u={{ route('photographer.show', ['photographer' => $photographer]) }}" target="_blank">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a class="contact-icon border tx-inverse" href="https://twitter.com/intent/tweet?url={{ route('photographer.show', ['photographer' => $photographer]) }}" target="_blank">
                        <i class="fe fe-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>