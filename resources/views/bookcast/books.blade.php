@extends('layouts.bookcast', ['title' => 'Books'])

@section('body')

<!-- Main Content-->
<div class="main-content pt-0">

    <div class="container">
        <div class="inner-body">

            <!-- Page Header -->
            <div class="page-header">
                <div>
                    <h2 class="main-content-title tx-24 mg-b-5">Books</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Books</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Liste des artistes</li>
                    </ol>
                </div>
            </div>
            <!-- End Page Header -->

            <!-- Row -->
            <div class="row row-sm">
                <div class="col-xl-9 col-lg-12">

                    @livewire('bookcast.books.search')

                    <div class="content_body">
                        <div class="row" id="graybg">

                            @forelse ($artists as $artist)

                            <!-- Book artiste -->
                            <div class="col-md-6 col-lg-6 col-xl-4 col-sm-6">
                            @livewire('bookcast.books.item', ['artist' => $artist])
                            </div>
                            <!-- end Book artiste -->

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