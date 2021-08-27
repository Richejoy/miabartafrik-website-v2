<div class="blog-card">
    <img src="{{ $item->library->remote }}" alt="" class="blog-thumbnail">

    <div class="blog-container">
        <span class="domaineart_actu badge-info">{{ $item->area->areaRay->name }}</span>

        <a href="actualite_view.html">
            <h4 class="article_titre"><b>{{ $item->title }}</b></h4>
        </a>

        <small class="d-block text-muted">15 mintues ago</small>

        <div class="detail-buttons">
            <button class="detail-button">
                <a href="{{ route('news.show', ['item' => $item]) }}">Lire l'article</a>
            </button>
            <button class="mr_publier">
                <div class="main-img-user online">
                    <img alt="avatar" class="radius"
                        src="{{ $item->user->library->remote }}">
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
                    data-original-title="5254 (J'aimes)"><i class="fe fe-heart"></i> </a>

                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                    data-original-title="Enrgistrer pour plus tard"><i class="fe fe-save"></i></a>

                <a href="#" class="contact-icon border tx-inverse" data-toggle="tooltip" title=""
                    data-original-title="Publier"><i class="far fa-share-square"></i></a>
            </nav>
        </div>

    </div>
</div>