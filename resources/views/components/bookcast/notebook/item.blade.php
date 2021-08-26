<div class="agendaplus_bookcast">
    <div class="event_affiche_agendaplus">
        <img src="{{ asset('public/assets/img/agendaplus/affiche.jpg') }}" class="image_agendaplus_bookcast">

        <div class="info_container_agendaplus">
            <div class="titre">{{ $event->title }}</div>

            <div class="detail-buttons">
                <button class="detail-button">
                    <a href="agenda_view.html">Afficher l'évènement</a>
                </button>
                <button class="mr_publier">
                    <div class="main-img-user online">
                        <img alt="avatar" class="radius"
                            src="{{ asset('public/assets/img/artiste/pexels-ivan-siarbolin-3841891.jpg') }}">
                    </div>
                </button>
            </div>

            <div class="main_profilbook_header">
                <nav class="contact-info">
                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="Togo"><i class="flag flag-tg"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                        data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                    </a>

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
        <span class="jour_agendaplus">10</span>
        <span class="mois_agendaplus">Jun</span>
    </div>
</div>