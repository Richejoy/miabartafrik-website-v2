<div class="booksId">

    <div class="profileImage">
        <img src="{{ $artist->user->image->link }}" alt="team">
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
                            <a href="{{ route('artists.show', ['artist' => $artist]) }}">{{ $artist->user->full_name }}</a>
                        </h6>
                        <small class="mr-3">
                            @forelse($artist->artistArtisticAreas as $artistArtisticArea)
                            <strong>{{ mb_substr($artistArtisticArea->artisticArea->name, 0, 1) }}</strong>{{ mb_substr($artistArtisticArea->artisticArea->name, 1) }}
                            @empty
                            Aucun
                            @endforelse
                        </small>
                    </div>
                </div>

                <div class="main_profilbook_header">
                    <nav class="contact-info">
                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->country->nicename }}"><i class="{{ $artist->user->getFlag() }}"></i></a>

                        <a href="{{ route('artists.show', ['artist' => $artist]) }}" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->userViews->count() }} (Vues)"><i class="fe fe-eye"></i>
                        </a>
                        <a wire:click.prevent="like({{ $artist->id }})" href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->userLikes->count() }} (J'aimes)"><i class="fe fe-heart"></i> </a>
                        <a wire:click.prevent="friend({{ $artist->id }})" href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                            data-original-title="{{ $artist->user->userFriends->count() }} (Amis)"><i class="fe fe-user-plus"></i></a>
                        <a data-show="share{{ $artist->id }}" href="#" class="contact-icon border tx-inverse share-book" data-toggle="tooltip" title=""
                            data-original-title="Publier"><i class="far fa-share-square"></i></a>
                    </nav>
                </div>

                <div id="share{{ $artist->id }}" style="display: none;">
                    <a href="http://www.facebook.com/sharer/sharer.php?u={{ route('artists.show', ['artist' => $artist]) }}" target="_blank">
                        <i class="fe fe-facebook"></i>
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ route('artists.show', ['artist' => $artist]) }}" target="_blank">
                        <i class="fe fe-twitter"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>