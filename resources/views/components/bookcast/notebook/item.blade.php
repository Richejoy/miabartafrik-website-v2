<div class="agendaplus_bookcast">
    <div class="event_affiche_agendaplus">
        <img src="{{ $event->library->remote }}" alt="{{ $event->library->description }}" class="image_agendaplus_bookcast">

        <div class="info_container_agendaplus">
            <div class="titre">{{ $event->title }}
            </div> 

            <div class="row m-0 p-0">
                <div class="col-md-6 p-0">
                    <small class="all_services_mba_small float-left">{{ $event->area->areaRay->name }}</small>
                </div>
                <div class="col-md-6 p-0">
                    <div class="float-right">
                        <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $event->place }}"><i class="fe fe-map-pin"></i></span>

                        <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $event->country->nicename }}"><i class="{{ $event->country->getFlag() }}"></i></span>
                    </div>
                </div> 
            </div> 

            <div class="main_profilbook_header"> 
                <nav class="contact-info"> 
                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                    </a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a> 

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Contacter l'annonceur"><i class="fe fe-phone"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Enrgistrer pour plus tard"><i class="fe fe-save"></i></a>

                    <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="Publier"><i class="far fa-share-square"></i></a>
                </nav>                                                      
            </div>

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
                 
        </div> 

    </div> 

    <div class="dateWrapper_agendaplus_bookcast">
      <span class="jour_agendaplus">{{ $event->getStartDate()->day }}</span>
        <span class="mois_agendaplus">{{ $event->getStartDate()->shortMonthName }}</span>
    </div> 
    
</div>