<div class="item">
    <div class="netconcert_card">

        <div class="container">
            <div class="miabartvideo_mba"> 
                <!-- video -->
                <div class="miabartvideo_mba__row">
                  <div class="videoWrapper_mba">
                    <div class="video-preview-image_mba" style="background-image: url({{ $movie->image->remote }})"></div>
                    <iframe width="853" height="480" src="{{ $movie->video->remote }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                  </div>
                </div>
            </div>
        </div>

        <div class="titreVideo_miabart_afrik ">
            {{ $movie->title }}
        </div>
        <div class="all_services_mba">
            <small class="all_services_mba_small">{{ $movie->movieArea->areaRay->name }}</small>
            <small class="all_services_mba_small">{{ $movie->movieArea->name }}</small>
        </div>

        <div class="main_profilbook_header">
            <div class="main-img-user online">
                <img alt="{{ $movie->user->library->description }}" class="radius" src="{{ $movie->user->library->remote }}">
            </div>
            <nav class="contact-info">
                <span class="contact-icon border tx-inverse" data-toggle="tooltip" title="" data-original-title="{{ $movie->user->country->nicename }}"><i class="{{ $movie->user->country->getFlag() }}"></i></span>
            </nav>
        </div>
    </div>
</div>