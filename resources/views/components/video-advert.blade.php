<div>
    @if($isGold && !is_null($advert))
    <div class="card custom-card">
                <div class="sidebar_titre">
                    <h4>Vidéo Gold</h4>
                    <span class="badge badge-success">{{ $advert->expire_date }}</span>
                </div>
                <div class="right_sidebar">
                    <a href="{{ $advert->website }}" target="_blank">
                        <iframe class="w-100" src="{{ $advert->video->link }}" title="{{ $advert->video->description }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                </div>
    </div>
    @elseif(!is_null($adverts))
    <div class="card custom-card">
                <div class="sidebar_titre">
                    <h4>Toutes les vidéos</h4>
                    <span class="badge badge-danger">{{ $adverts->count() }}</span>
                </div>
                <div class="right_sidebar">
                    @forelse($adverts as $advert)
                    <a href="{{ $advert->website }}" target="_blank">
                        <iframe class="w-100" src="{{ $advert->video->link }}" title="{{ $advert->video->description }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </a>
                    @empty
                    <span>Vide</span>
                    @endforelse
                </div>
    </div>
    @endif
</div>