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
        <x-image-advert type="gold" />
        <!-- end info -->

        <!-- info -->
        <x-image-advert type="all" />
        <!-- end info -->

        <!-- info -->
        <x-video-advert type="gold" />
        <!-- end info -->

        <!-- info -->
        <x-video-advert type="all" />
        <!-- end info -->

    </div>
</aside>