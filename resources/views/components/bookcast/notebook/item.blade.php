<div class="agendaplus_bookcast">
    <div class="event_affiche_agendaplus">
        <img src="{{ $event->library->remote }}" alt="{{ $event->library->description }}" class="image_agendaplus_bookcast">

        <div class="info_container_agendaplus">
            <div class="titre">{{ $event->title }}</div>

            <div class="detail-buttons">
                <button class="detail-button">
                    <a href="{{ route('event.show', ['event' => $event]) }}">Afficher l'évènement</a>
                </button>
                <button class="mr_publier">
                    <div class="main-img-user online">
                        <img alt="{{ $event->user->library->description }}" class="radius" src="{{ $event->user->library->remote }}">
                    </div>
                </button>
            </div>

            <div class="main_profilbook_header">
                <nav class="contact-info">
                    <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $event->user->country->nicename }}"><i class="{{ $event->user->getFlag() }}"></i></span>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i>
                    </a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="Contacter l'annonceur"><i class="fe fe-phone"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="Enrgistrer pour plus tard"><i class="fe fe-save"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="Publier"><i class="far fa-share-square"></i></a>
                </nav>
            </div>

        </div>

    </div>

    <div class="dateWrapper_agendaplus_bookcast">
        <span class="jour_agendaplus">{{ $event->created->day }}</span>
        <span class="mois_agendaplus">{{ $event->created->monthName }}</span>
    </div>
</div>