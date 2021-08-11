<aside class="col-xl-3 col-lg-12 d-none d-xl-block custom-leftnav">
    <div class="main-content-left-components">

        @if(Route::currentRouteName() == 'bookcast.movies')

        @livewire('bookcast.movies.search')

        @else

        <!-- NewsLetter -->
        @livewire('newsletter')
        <!-- NewsLetter -->

        @endif

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Publicité</h4>
                <a href="">Aller</a>
            </div>
            <div class="right_sidebar">
                <a href=""> <img src="{{ asset('public/assets/img/publicite/duchesse.jpg') }}" class="imageaffichepub"></a>
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Publicité</h4>
                <a href="">Aller</a>
            </div>
            <div class="right_sidebar">
                <a href=""> <img src="{{ asset('public/assets/img/publicite/affiche.jpg') }}" class="imageaffichepub"></a>
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Publicité</h4>
                <a href="">Aller</a>
            </div>
            <div class="right_sidebar">
                <a href=""> <img src="{{ asset('public/assets/img/publicite/EbA7eBQXsAAmQKi.jpg') }}" class="imageaffichepub"></a>
            </div>
        </div>
        <!-- end info -->

        <!-- info -->
        <div class="card custom-card">
            <div class="sidebar_titre">
                <h4>Publicité</h4>
                <a href="">Aller</a>
            </div>
            <div class="right_sidebar">
                <a href=""> <img src="{{ asset('public/assets/img/publicite/operateurs.jpg') }}" class="imageaffichepub"></a>
            </div>
        </div>
        <!-- end info -->

    </div>
</aside>