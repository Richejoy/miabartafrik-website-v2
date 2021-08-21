<div>
    @if($isGold && !is_null($advert))
    <div class="card custom-card">
                <div class="sidebar_titre">
                    <h4>Publicité Gold</h4>
                    <span class="badge badge-success">{{ $advert->expire_date }}</span>
                </div>
                <div class="right_sidebar">
                    <a href="{{ $advert->website }}" target="_blank">
                        <img alt="{{ $advert->image->description }}" src="{{ $advert->image->link }}" class="imageaffichepub">
                    </a>
                </div>
    </div>
    @elseif(!is_null($adverts))
    <div class="card custom-card">
                <div class="sidebar_titre">
                    <h4>Toutes les publicités</h4>
                    <span class="badge badge-danger">{{ $adverts->count() }}</span>
                </div>
                <div class="right_sidebar">
                    @forelse($adverts as $advert)
                    <a href="{{ $advert->website }}" target="_blank">
                        <img alt="{{ $advert->image->description }}" src="{{ $advert->image->link }}" class="imageaffichepub">
                    </a>
                    @empty
                    <span>Vide</span>
                    @endforelse
                </div>
    </div>
    @endif
</div>