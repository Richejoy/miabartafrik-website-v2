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
        <x-library-advert type="gold" />
        <!-- end info -->

        <!-- info -->
        <x-library-advert type="all" />
        <!-- end info -->

    </div>
</aside>