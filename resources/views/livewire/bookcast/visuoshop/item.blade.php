<div class="booksId">

    <div class="profileImage">
        <img src="{{ asset('public/assets/img/publicite/duchesse.jpg') }}" alt="team">
    </div>

    <div class="inner_booksId">

        <div class="info_booksId">

            <div class="detail-area-header">
                <span class="ambassadeurSign">
                    <img src="{{ $photographer->user->image->link }}" alt="ambassadeur BookCast"
                        class="ambassadeurSRound">
                </span>

                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="{{ route('photographers.show', ['photographer' => $photographer]) }}">{{ $photographer->user->full_name }}</a>
                        </h6>
                        <div class="all_services_mba"> 
                            @forelse($photographer->photographerAreas->take(3) as $photographerArea)
                            <small class="all_services_mba_small">{{ $photographerArea->area->name }}</small>
                            @empty
                            <small class="all_services_mba_small">Aucun</small>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="main_profilbook_header">
                    <nav class="contact-info">
                        <span class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $photographer->user->country->nicename }}"><i class="{{ $photographer->user->getFlag() }}"></i></span>

                        <a href="{{ route('photographers.show', ['photographer' => $photographer]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $photographer->user->userViews->count() }} (Vues)"><i class="fe fe-eye"></i>
                        </a>

                        <span wire:click.prevent="like({{ $photographer->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $photographer->user->userLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i> </span>

                        <span wire:click.prevent="friend({{ $photographer->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $photographer->user->userFriends->count() }} (Amis)"><i class="fe fe-user-plus"></i></span>

                        <span data-show="share{{ $photographer->id }}" class="contact-icon border tx-inverse share" data-toggle="tooltip" title=""
                            data-original-title="Publier"><i class="far fa-share-square"></i></span>
                    </nav>
                </div>

                <div id="share{{ $photographer->id }}" style="display: none;">
                    <a href="http://www.facebook.com/sharer/sharer.php?u={{ route('photographers.show', ['photographer' => $photographer]) }}" target="_blank">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ route('photographers.show', ['photographer' => $photographer]) }}" target="_blank">
                        <i class="fe fe-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>