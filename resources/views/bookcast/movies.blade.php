@extends('layouts.bookcast', ['title' => 'NetConcert'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Row -->
            <div class="row row-sm" style="margin-top: 0.5rem;">
                <div class="col-xl-9 col-lg-12">

                    <div class="content_body">

                        <div class="videoWrapper_miabart_afrik js-videoWrapper_miabart_afrik">

                            <iframe class="videoIframe_miabart_afrik js-videoIframe_miabart_afrik" src=""
                                frameborder="0" allowTransparency="true" allowfullscreen
                                data-src="https://www.youtube.com/embed/Pb0voxno3ZA"
                                allow="autoplay; fullscreen"></iframe>

                            <button class="videoPoster_miabart_afrik js-videoPoster_miabart_afrik"
                                style="background-image:url(../assets/img/artiste/home03.jpg);">
                                <svg class="play-vid" viewBox="0 0 100 100">
                                    <path class="stroke-solid" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
								         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                    <path class="stroke-dotted_miabart_afrik" fill="none" stroke="white" d="M49.9,2.5C23.6,2.8,2.1,24.4,2.5,50.4C2.9,76.5,24.7,98,50.3,97.5c26.4-0.6,47.4-21.8,47.2-47.7
								         C97.3,23.7,75.7,2.3,49.9,2.5" />
                                    <path class="vid-icon" fill="white"
                                        d="M38,69c-1,0.5-1.8,0-1.8-1.1V32.1c0-1.1,0.8-1.6,1.8-1.1l34,18c1,0.5,1,1.4,0,1.9L38,69z" />
                                </svg>
                            </button>
                        </div>

                        <div class="titreVideo_miabart_afrik">luke james - colours [Official Audio]</div>
                    </div>

                    <div class="content_body">
                        <div class="row">

                            @forelse($movies as $movie)
                            
                            <!-- START VIDEO -->
                            <div class="col-sm-6 col-md-4 col-lg-4 col-xl-4">
                            @livewire('bookcast.movies.item', ['movie' => $movie])
                            </div>
                            <!-- END VIDEO -->

                            @empty

                            <div class="col-md-12">
                                <p>Vide</p>
                            </div>

                            @endforelse

                        </div>
                    </div>

                    <p><button type="button" class="btn btn-dark btn-sm">Charger plus </button></p>
                </div>

                <!-- RIGHT ASIDE -->
                @include("layouts.partials.bookcast._right_aside")
                <!-- END RIGHT ASIDE -->

            </div>
            <!-- End Row -->
        </div>
    </div>
</div>
<!-- End Main Content-->

@endsection