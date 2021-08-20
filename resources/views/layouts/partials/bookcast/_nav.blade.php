<nav class="main-navbar hor-menu sticky">
    <div class="container">
        <ul class="nav">

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.index') }}"><i class="ti-home"></i>Accueil</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.books') }}"><i class="si si-people"></i>Books</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.visuoshop') }}"><i class="si si-graduation"></i>VisuoShop</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.networks') }}"><i class="si si-graduation"></i>Réseaux</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.castings') }}"><i class="ti-video-clapper"></i>Castings</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.notebook') }}"><i class="ti-announcement"></i>Agenda+</a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.movies') }}"><i class="fe fe-tv"></i>NetConcert</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.news') }}"><i class="ti-face-smile"></i>ActuArt</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{ route('bookcast.elections') }}"><i class="ti-cup"></i>Votes</a>
            </li>

            <li class="nav-item">
                <a class="nav-link with-sub" href="#"><i class="si si-grid"></i>Nos Produits</a>
                <ul class="nav-sub">
                    <li class="nav-sub-item">
                        <a target="_blank" class="nav-sub-link" href="{{ route('bookcast.index') }}">BookCast</a>
                    </li>
                    <li class="nav-sub-item">
                        <a target="_blank" class="nav-sub-link" href="{{ route('boutikart.index') }}">BoutkArt</a>
                    </li>
                    <li class="nav-sub-item">
                        <a target="_blank" class="nav-sub-link" href="{{ route('bonaddress.index') }}">Bon-Address</a>
                    </li>

                </ul>
            </li>

        </ul>
    </div>
</nav>