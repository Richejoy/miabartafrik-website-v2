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

                        <!-- PREVANDNEXT START -->
                        <div class="prvnextbtn_mba_all">
                            <svg width="18px" height="17px" viewBox="0 0 18 17" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="prev"
                                    transform="translate(8.500000, 8.500000) scale(-1, 1) translate(-8.500000, -8.500000)">
                                    <polygon class="arrow"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <polygon class="arrow-fixed"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <path
                                        d="M-1.48029737e-15,0.56157424 L-1.48029737e-15,16.1929159 L9.708,8.33860465 L-2.66453526e-15,0.56157424 L-1.48029737e-15,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                                    </path>
                                </g>
                            </svg>

                            <svg width="18px" height="17px" viewBox="-1 0 18 17" version="1.1"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g>
                                    <polygon class="arrow"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <polygon class="arrow-fixed"
                                        points="16.3746667 8.33860465 7.76133333 15.3067621 6.904 14.3175671 14.2906667 8.34246869 6.908 2.42790698 7.76 1.43613596">
                                    </polygon>
                                    <path
                                        d="M-4.58892184e-16,0.56157424 L-4.58892184e-16,16.1929159 L9.708,8.33860465 L-1.64313008e-15,0.56157424 L-4.58892184e-16,0.56157424 Z M1.33333333,3.30246869 L7.62533333,8.34246869 L1.33333333,13.4327013 L1.33333333,3.30246869 L1.33333333,3.30246869 Z">
                                    </path>
                                </g>
                            </svg>
                        </div>
                        <!-- PREVANDNEXT END -->

                    </div>
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