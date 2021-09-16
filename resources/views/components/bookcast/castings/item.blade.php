<div class="castingart_newByOsez">

      <div class="castingart_newByOsez__side castingart_newByOsez__side--front">
        <div class="castingart_newByOsez__img" style="background-image: url({{ $casting->library->remote }});"> 
        </div> 

        <div class="info_container_agendaplus">

            <div class="date_event">
                <span class="ml-md-auto"><i class="fe fe-calendar text-muted mr-1"></i>{{ $casting->getPeriod() }}</span> 
            </div>
            <div class="titre">{{ $casting->title }}</div>  

            <div class="row m-0 p-0">
                <div class="col-md-6 p-0">
                    <small class="all_services_mba_small float-left">{{ $casting->area->areaRay->name }}</small> 
                </div>
                <div class="col-md-6 p-0">
                    <div class="float-right">

                        <i class="{{ $casting->country->getFlag() }}" data-toggle="tooltip" title="" data-original-title="{{ $casting->country->nicename }}"></i>

                    </div>  
                </div> 
                <div class="col-md-12 p-0">
                    <div class="float-left">
                        <i class="fe fe-map-pin" data-toggle="tooltip" title="" data-original-title="Lieu du casting"></i>
                        <small>{{ $casting->place }}</small> 
                    </div>
                </div>
            </div>
                 
            <div class="detail-buttons"> 
                <button class="plus_details_all" data-toggle="dropdown">  
                <i class="fe fe-grid" data-toggle="tooltip" title="" data-original-title="Plus de détails"></i>
               </button>
               <div class="dropdown-menu"> 
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
                    
                </div>

               <button class="detail-button">  
                <a href="{{ route('casting.show', ['casting' => $casting]) }}">CONSULTER LE CASTING</a>
               </button>

               <button class="mr_publier">  
                <div class="main-img-user online">
                    <img alt="{{ $casting->user->library->description }}" class="radius" src="{{ $casting->user->library->remote }}">
                </div>
               </button>
            </div>

        </div>
     </div>
</div> 