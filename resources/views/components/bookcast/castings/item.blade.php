<div class="castingart_newByOsez">

    <div class="castingart_newByOsez__side castingart_newByOsez__side--front">
        <div class="castingart_newByOsez__img"
            style="background-image: url({{ $casting->library->remote }});">
        </div>

        <h4 class="castingart_newByOsez__text">
            <span class="castingart_newByOsez__text-span">{{ $casting->area->areaRay->name }}</span>
        </h4>

        <div class="info_container_agendaplus">
            <div class="titre">{{ $casting->title }}</div>

            <div class="detail-buttons">
                <button class="detail-button">
                    <a href="{{ route('casting.show', ['casting' => $casting]) }}">Afficher le casting</a>
                </button>
                <button class="mr_publier">
                    <div class="main-img-user online">
                        <img alt="{{ $casting->user->library->description }}" class="radius" src="{{ $casting->user->library->remote }}">
                    </div>
                </button>
            </div>

            <div class="main_profilbook_header">
                <nav class="contact-info">
                    <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $casting->user->country->nicename }}"><i class="{{ $casting->user->getFlag() }}"></i></span>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Contacter l'annonceur"><i class="fe fe-phone"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Enrgistrer pour plus tard"><i class="fe fe-save"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></a>
                </nav>
            </div>
        </div>
    </div>
</div>