<aside class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
    <div class="main-content-left-components">
        
        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Vidéo à la une</h4>
                <a href="{{ route('bookcast.movies') }}">Voir tout</a>
            </div>
            <div class="right_sidebar">
                
                @if(!is_null($movie))
                    @livewire('bookcast.movies.item', ['movie' => $movie])
                @else
                <p>Aucune donnée trouvée</p>
                @endif

            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Artiste à la une</h4>
                <a href="{{ route('bookcast.books') }}">Listes des artistes</a>
            </div>
            <div class="right_sidebar">
                
                @if(!is_null($artist))
                    @livewire('bookcast.books.item', ['artist' => $artist])
                @else
                <p>Aucune donnée trouvée</p>
                @endif

            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Casting à la une</h4>
                <a href="{{ route('bookcast.castings') }}">Plus de castings</a>
            </div>
            <div class="right_sidebar">
                
                @if(!is_null($casting))
                    @livewire('bookcast.castings.item', ['casting' => $casting])
                @else
                <p>Aucune donnée trouvée</p>
                @endif

            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Vote d'artiste à la une</h4>
                <a href="{{ route('bookcast.elections') }}">Plus de vote</a>
            </div>
            <div class="right_sidebar">
                
                @if(!is_null($election))
                    @livewire('bookcast.elections.item', ['artist' => $election])
                @else
                <p>Aucune donnée trouvée</p>
                @endif

            </div>
        </div>
        <!-- end info -->

    </div>
</aside>