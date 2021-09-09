@if(!is_null($movie))
<div class="content_body">
    <div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

        <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src="{{ $movie->video->remote }}"
            frameborder="0" allowTransparency="true" allowfullscreen
            data-src="{{ $movie->video->remote }}"
            allow="autoplay; fullscreen"></iframe>

        <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
            style="background-image:url({{ $movie->image->remote }});">
            <svg class="play-vid" viewBox="0 0 100 100">
                <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                     C97.3,23.7,75.7,2.3,49.9,2.5" />
                <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
                     C97.3,23.7,75.7,2.3,49.9,2.5" />
                <path class="vid-icon" fill="white"
                    d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
            </svg>
        </button>
    </div>

    <div class="titreVideo_miabart_afrik">{{ $movie->title }}</div>
    <div class="all_services_mba">
        <small class="all_services_mba_small">{{ $movie->movieArea->areaRay->name }}</small>
        <small class="all_services_mba_small">{{ $movie->movieArea->name }}</small>
    </div>

    <div class="info_netconcert_header">
        <div>
            <div class="main_profilbook_header">
                <div class="main-img-user online">
                    <img alt="avatar" class="radius"
                        src="{{ $movie->user->library->remote }}">
                </div>
                <nav class="contact-info">
                    <span class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                    data-original-title="{{ $movie->user->country->nicename }}"><i class="{{ $movie->user->country->getFlag() }}"></i>
                    </span>
                </nav>
            </div>
        </div>

        <div class="d-flex">
            <div class="justify-content-center">
                <div class="main_profilbook_header">

                    <nav class="contact-info">

                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                            title="" data-original-title="356 392 (Vues)"><i class="fe fe-eye"></i>
                        </a>

                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                            title="" data-original-title="5254 (J'aimes)"><i
                                class="fe fe-heart"></i> </a>


                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                            title="" data-original-title="Enrgistrer pour plus tard"><i
                                class="fe fe-save"></i></a>

                        <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip"
                            title="" data-original-title="Publier"><i
                                class="far fa-share-square"></i></a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
@else
<div>
    
</div>
@endif