<aside class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
    <div class="main-content-left-components">

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Artiste à la une</h4>
                <a href="{{ route('bookcast.books') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.books.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Photographe à la une</h4>
                <a href="{{ route('bookcast.visuoshop') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.visuoshop.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Partenaire à la une</h4>
                <a href="{{ route('bookcast.networks') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.networks.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Casting à la une</h4>
                <a href="{{ route('bookcast.castings') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.castings.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Evènement à la une</h4>
                <a href="{{ route('bookcast.notebook') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.notebook.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->
        
        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Vidéo à la une</h4>
                <a href="{{ route('bookcast.movies') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.movies.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Actualité à la une</h4>
                <a href="{{ route('bookcast.news') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.news.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Vote d'artiste à la une</h4>
                <a href="{{ route('bookcast.elections') }}">Tout afficher</a>
            </div>
            <div class="right_sidebar">
                @livewire('bookcast.elections.item', ['fetch' => 'one'])
            </div>
        </div>
        <!-- end info -->

    </div>
</aside>