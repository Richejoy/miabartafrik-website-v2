<section>
    @if($isGold && !is_null($advert))
    <div class="card custom-card">
        <div class="sidebar_titre">
            <h4>Publicité Gold</h4>
            <span class="badge badge-success">{{ $advert->expire_date }}</span>
        </div>
        <div class="right_sidebar">
        @if($advert->library->library_type_id == 3)
        <a class="d-block py-2" href="{{ $advert->website }}" target="_blank">
            <div class="container">
                <div class="miabartvideo_mba"> 
                    <!-- video -->
                    <div class="miabartvideo_mba__row">
                      <div class="videoWrapper_mba">
                        <div class="video-preview-image_mba" style="background-image: url({{ asset('public/assets/img/artiste/slim-girl.jpg') }})"></div>
                        <iframe width="853" height="480" src="{{ $advert->library->remote }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                </div>
            </div>
        </a>
        @else
        <a class="d-block py-2" href="{{ $advert->website }}" target="_blank">
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
        <a class="d-block py-2" href="{{ $advert->website }}" target="_blank">
            <div class="container">
                <div class="miabartvideo_mba"> 
                    <!-- video -->
                    <div class="miabartvideo_mba__row">
                      <div class="videoWrapper_mba">
                        <div class="video-preview-image_mba" style="background-image: url({{ asset('public/assets/img/artiste/slim-girl.jpg') }})"></div>
                        <iframe width="853" height="480" src="{{ $advert->library->remote }}?rel=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                      </div>
                    </div>
                </div>
            </div>
        </a>
        @else
        <a class="d-block py-2" href="{{ $advert->website }}" target="_blank">
            <img src="{{ $advert->library->remote }}" alt="{{ $advert->library->description }}" class="w-100">
        </a>
        @endif
        @empty
            
        <!-- PAGE NOT FOUND -->
        <div class="page_miabartAfrik_not_found">  
            <div class="content_miabartAfrik_not_found"> 
                <h2>Aucune donnée trouver</h2>
                <p>Revenez plus tard</p>
            </div> 
        </div>
        <!-- END PAGE NOT FOUND -->

        @endforelse
        </div>
    </div>
    @endif
</section>