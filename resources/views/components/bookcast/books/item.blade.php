<div class="booksId">

    <div class="profileImage">
        <img src="{{ $artist->user->library->remote }}" alt="team">
    </div>

    <div class="inner_booksId">

        <div class="info_booksId">

            <div class="detail-area-header">
                @if($artist->is_ambassador)
                <span class="ambassadeurSign">
                    <img src="{{ asset('public/assets/img/icons/iconambassadeur.png') }}" alt="ambassadeur BookCast"
                        class="ambassadeurSRound">
                </span>
                @endif

                <div class="main_profilbook_header">
                    <div class="main_book_name">
                        <h6>
                            <a href="{{ route('artist.show', ['artist' => $artist]) }}">{{ $artist->user->full_name }}</a>
                        </h6>
                        <div class="all_services_mba"> 
                            @forelse($artist->artistAreas->take(3) as $artistArea)
                            <small class="all_services_mba_small">{{ $artistArea->area->name }}</small>
                            @empty
                            <small class="all_services_mba_small">Aucun</small>
                            @endforelse
                        </div>
                    </div>
                </div>

                <div class="main_profilbook_header">
                    <nav class="contact-info">
                        <span class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->country->nicename }}"><i class="{{ $artist->user->getFlag() }}"></i></span>

                        <a href="{{ route('artist.show', ['artist' => $artist]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->receiverViews->count() }} (Vues)"><i class="fe fe-eye"></i>
                        </a>

                        <span wire:click.prevent="like({{ $artist->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->receiverLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i> </span>

                        <span wire:click.prevent="friend({{ $artist->id }})" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->friends->count() }} (Amis)"><i class="fe fe-user-plus"></i></span>

                        <span data-show="share-artist{{ $artist->id }}" class="contact-icon border tx-inverse share-artist" data-toggle="tooltip" title=""
                            data-original-title="Publier"><i class="far fa-share-square"></i></span>
                    </nav>
                </div>

                <div class="py-1" id="share-artist{{ $artist->id }}" style="display: none;">
                    <a class="contact-icon border tx-inverse" href="http://www.facebook.com/sharer/sharer.php?u={{ route('artist.show', ['artist' => $artist]) }}" target="_blank">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a class="contact-icon border tx-inverse" href="https://twitter.com/intent/tweet?url={{ route('artist.show', ['artist' => $artist]) }}" target="_blank">
                        <i class="fe fe-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>