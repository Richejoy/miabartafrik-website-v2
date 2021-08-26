<div>
    @if($isGold && !is_null($advert))
    <div class="card custom-card">
        <div class="sidebar_titre">
            <h4>Publicité Gold</h4>
            <span class="badge badge-success">{{ $advert->expire_date }}</span>
        </div>
        <div class="right_sidebar">
        @if($advert->library->library_type_id == 3)
        <a class="" href="{{ $advert->website }}" target="_blank">
            <iframe class="w-100" src="{{ $advert->library->remote }}" title="{{ $advert->library->description }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        @else
        <a class="" href="{{ $advert->website }}" target="_blank">
            <img src="{{ $advert->library->remote }}" alt="{{ $advert->library->description }}" class="w-100">
        </a>
        @endif
        </div>
    </div>
    @elseif(!is_null($adverts))
    <div class="card custom-card">
        <div class="sidebar_titre">
            <h4>Toutes les publicités</h4>
            <span class="badge badge-success">{{ $adverts->count() }}</span>
        </div>
        <div class="right_sidebar">
        @forelse($adverts as $advert)
        @if($advert->library->library_type_id == 3)
        <a class="" href="{{ $advert->website }}" target="_blank">
            <iframe class="w-100" src="{{ $advert->library->remote }}" title="{{ $advert->library->description }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </a>
        @else
        <a class="" href="{{ $advert->website }}" target="_blank">
            <img src="{{ $advert->library->remote }}" alt="{{ $advert->library->description }}" class="w-100">
        </a>
        @endif
        @empty
            <span>Vide</span>
        @endforelse
        </div>
    </div>
    @endif
</div>