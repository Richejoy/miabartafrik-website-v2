<aside class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
    <div class="main-content-left-components">
        
        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Vidéo à la une</h4>
                <a href="{{ route('bookcast.movies') }}">Voir tout</a>
            </div>
            <div class="right_sidebar">
                
                @livewire('bookcast.movies.item', ['movie' => $movie])

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
                
                @livewire('bookcast.books.item', ['artist' => $artist])

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
                
                @livewire('bookcast.castings.item', ['casting' => $casting])

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
                
                @livewire('bookcast.elections.item', ['artist' => $election])

            </div>
        </div>
        <!-- end info -->

    </div>
</aside>